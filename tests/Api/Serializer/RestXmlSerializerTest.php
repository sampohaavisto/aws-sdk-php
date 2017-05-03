<?php
namespace Aws3\Test\Api\Serializer;

use Aws3\Api\Serializer\RestXmlSerializer;
use Aws3\Test\UsesServiceTrait;

/**
 * @covers Aws3\Api\Serializer\RestXmlSerializer
 */
class RestXmlSerializerTest extends \PHPUnit_Framework_TestCase
{
    use UsesServiceTrait;

    private function getRequest($commandName, $input)
    {
        $client = $this->getTestClient('s3', ['region' => 'us-east-1']);
        $command = $client->getCommand($commandName, $input);
        $xml = new RestXmlSerializer($client->getApi(), $client->getEndpoint());
        return $xml($command);
    }

    public function testPreparesRequestsWithContentType()
    {
        $request = $this->getRequest('PutObject', [
            'Bucket'      => 'foo',
            'Key'         => 'bar',
            'Body'        => 'baz',
            'ContentType' => 'abc'
        ]);
        $this->assertEquals('abc', $request->getHeaderLine('Content-Type'));
    }

    public function testPreparesRequestsWithNoContentType()
    {
        $request = $this->getRequest('PutObject', [
            'Bucket'      => 'foo',
            'Key'         => 'bar',
            'Body'        => 'baz'
        ]);
        $this->assertEquals('', $request->getHeaderLine('Content-Type'));
    }

    public function testPreparesRequestsWithStructurePayloadXmlContentType()
    {
        $request = $this->getRequest('CompleteMultipartUpload', [
            'Bucket'      => 'foo',
            'Key'         => 'bar',
            'UploadId'    => '123',
            'MultipartUpload' => [
                'parts' => [
                    ['ETag' => 'a', 'PartNumber' => '123']
                ]
            ]
        ]);
        $this->assertEquals(
            'application/xml',
            $request->getHeaderLine('Content-Type')
        );
    }
}
