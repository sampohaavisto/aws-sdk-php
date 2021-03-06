<?php
namespace Aws3\Test\CloudTrail;

use Aws3\CloudTrail\LogFileReader;
use Aws3\Result;
use Aws3\Test\UsesServiceTrait;

/**
 * @covers Aws3\CloudTrail\LogFileReader
 */
class LogFileReaderTest extends \PHPUnit_Framework_TestCase
{
    use UsesServiceTrait;

    /**
     * @dataProvider dataForLogReadingTest
     */
    public function testCorrectlyReadsLogFiles($responseBody, $recordCount)
    {
        $s3Client = $this->getTestClient('s3', [
            'version' => 'latest',
            'region'  => 'us-east-1'
        ]);
        $this->addMockResults($s3Client, [
            new Result(['Body' => $responseBody])
        ]);
        $reader = new LogFileReader($s3Client);
        $records = $reader->read('test-bucket', 'test-key');
        $this->assertCount($recordCount, $records);
    }

    public function dataForLogReadingTest()
    {
        return [
            ['{"Records":[{"foo":"1"},{"bar":"2"},{"baz":"3"}]}', 3],
            ['{"Records":[]}', 0],
            ['', 0],
        ];
    }
}
