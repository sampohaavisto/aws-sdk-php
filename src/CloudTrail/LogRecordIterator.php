<?php
namespace Aws3\CloudTrail;

use Aws3\S3\S3Client;

/**
 * The `Aws3\CloudTrail\LogRecordIterator` provides an easy way to iterate over
 * log records from log files generated by AWS CloudTrail.
 *
 * CloudTrail log files contain data about your AWS API calls and are stored in
 * Amazon S3 at a predictable path based on a bucket name, a key prefix, an
 * account ID, a region, and date information. The files are gzipped and
 * contain structured data in JSON format. This class allows you to specify
 * options via its factory methods, including a date range, and emits each log
 * record from any log files that match the provided options.
 *
 * A log record containing data about an AWS API call is yielded for each
 * iteration on this object.
 */
class LogRecordIterator implements \OuterIterator
{
    /** @var LogFileReader */
    private $logFileReader;

    /** @var \Iterator */
    private $logFileIterator;

    /** @var array */
    private $records;

    /** @var int */
    private $recordIndex;

    /**
     * @param S3Client         $s3Client
     * @param CloudTrailClient $cloudTrailClient
     * @param array            $options
     *
     * @return LogRecordIterator
     */
    public static function forTrail(
        S3Client $s3Client,
        CloudTrailClient $cloudTrailClient,
        array $options = []
    ) {
        $logFileIterator = LogFileIterator::forTrail(
            $s3Client,
            $cloudTrailClient,
            $options
        );

        return new self(new LogFileReader($s3Client), $logFileIterator);
    }

    /**
     * @param S3Client $s3Client
     * @param string   $s3BucketName
     * @param array    $options
     *
     * @return LogRecordIterator
     */
    public static function forBucket(
        S3Client $s3Client,
        $s3BucketName,
        array $options = []
    ) {
        $logFileReader = new LogFileReader($s3Client);
        $iter = new LogFileIterator($s3Client, $s3BucketName, $options);

        return new self($logFileReader, $iter);
    }

    /**
     * @param S3Client $s3Client
     * @param string   $s3BucketName
     * @param string   $s3ObjectKey
     *
     * @return LogRecordIterator
     */
    public static function forFile(
        S3Client $s3Client,
        $s3BucketName,
        $s3ObjectKey
    ) {
        $logFileReader = new LogFileReader($s3Client);
        $logFileIterator = new \ArrayIterator([[
            'Bucket' => $s3BucketName,
            'Key'    => $s3ObjectKey,
        ]]);

        return new self($logFileReader, $logFileIterator);
    }

    /**
     * @param LogFileReader $logFileReader
     * @param \Iterator     $logFileIterator
     */
    public function __construct(
        LogFileReader $logFileReader,
        \Iterator $logFileIterator
    ) {
        $this->logFileReader = $logFileReader;
        $this->logFileIterator = $logFileIterator;
        $this->records = array();
        $this->recordIndex = 0;
    }

    /**
     * Returns the current log record as an array.
     *
     * @return array|false
     */
    public function current()
    {
        return $this->valid() ? $this->records[$this->recordIndex] : false;
    }

    public function next()
    {
        $this->recordIndex++;

        // If all the records have been exhausted, get more records from the
        // next log file.
        while (!$this->valid()) {
            $this->logFileIterator->next();
            $success = $this->loadRecordsFromCurrentLogFile();
            if (!$success) {
                // The objects iterator is exhausted as well, so stop trying
                break;
           }
        }
    }

    public function key()
    {
        if ($logFile = $this->logFileIterator->current()) {
            return $logFile['Key'] . '.' . $this->recordIndex;
        }

        return null;
    }

    public function valid()
    {
        return isset($this->records[$this->recordIndex]);
    }

    public function rewind()
    {
        $this->logFileIterator->rewind();
        $this->loadRecordsFromCurrentLogFile();
    }

    public function getInnerIterator()
    {
        return $this->logFileIterator;
    }

    /**
     * Examines the current file in the `logFileIterator` and attempts to read
     * it and load log records from it using the `logFileReader`. This method
     * expects that items pulled from the iterator will take the form:
     *
     *     [
     *         'Bucket' => '...',
     *         'Key'    => '...',
     *     ]
     *
     * @return bool Returns `true` if records were loaded and `false` if no
     *     records were found
     */
    private function loadRecordsFromCurrentLogFile()
    {
        $this->recordIndex = 0;
        $this->records = array();

        $logFile = $this->logFileIterator->current();
        if ($logFile && isset($logFile['Bucket']) && isset($logFile['Key'])) {
            $this->records = $this->logFileReader->read(
                $logFile['Bucket'],
                $logFile['Key']
            );
        }

        return (bool) $logFile;
    }
}
