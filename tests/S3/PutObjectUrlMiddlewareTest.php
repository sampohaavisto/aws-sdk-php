<?php
namespace Aws3\Test\S3;

use Aws3\Test\UsesServiceTrait;

/**
 * @covers Aws3\S3\PutObjectUrlMiddleware
 */
class PutObjectUrlTest extends \PHPUnit_Framework_TestCase
{
    use UsesServiceTrait;

    public function testAddsObjectUrl()
    {
        $client = $this->getTestClient('s3');
        $this->addMockResults($client, [
            ['@metadata' => ['effectiveUri' => 'http://foo.com']]
        ]);
        $result = $client->putObject([
            'Bucket' => 'test',
            'Key'    => 'key',
            'Body'   => 'hi'
        ]);
        $this->assertEquals('http://foo.com', $result['ObjectURL']);
    }

    public function testAddsObjectUrlToCompleteMultipart()
    {
        $client = $this->getTestClient('s3');
        $this->addMockResults($client, [
            [
                'Location' => 'https://test.s3.amazonaws.com/key',
                '@metadata' => [
                    'effectiveUri' => 'http://foo.com',
                ]
            ]
        ]);
        $result = $client->completeMultipartUpload([
            'Bucket'   => 'test',
            'Key'      => 'key',
            'UploadId' => '123'
        ]);
        $this->assertEquals(
            'https://test.s3.amazonaws.com/key',
            $result['ObjectURL']
        );
    }
}
