<?php
namespace Aws3\Test\S3\Exception;

use Aws3\Command;
use Aws3\Exception\AwsException;
use Aws3\S3\Exception\S3MultipartUploadException;
use Aws3\Multipart\UploadState;
use GuzzleHttp\Psr7;

/**
 * @covers Aws3\S3\Exception\S3MultipartUploadException
 */
class S3MultipartUploadExceptionTest extends \PHPUnit_Framework_TestCase
{
    public function testCanProviderFailedTransferFilePathInfo()
    {
        $state = new UploadState([]);
        $failed = [
            1 => new AwsException('Bad digest.', new Command('UploadPart', [
                'Bucket' => 'foo',
                'Key' => 'bar',
                'Body' => Psr7\stream_for('Part 1'),
            ])),
            5 => new AwsException('Missing header.', new Command('UploadPart', [
                'Bucket' => 'foo',
                'Key' => 'bar',
                'Body' => Psr7\stream_for('Part 2'),
            ])),
            8 => new AwsException('Needs more love.', new Command('UploadPart')),
        ];

        $path = '/path/to/the/large/file/test.zip';
        $exception = new S3MultipartUploadException($state, $failed, [
            'file_name' => $path
        ]);
        $this->assertEquals('foo', $exception->getBucket());
        $this->assertEquals('bar', $exception->getKey());
        $this->assertEquals('php://temp', $exception->getSourceFileName());
    }
}
