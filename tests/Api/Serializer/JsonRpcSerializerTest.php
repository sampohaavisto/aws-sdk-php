<?php
namespace Aws3\Test\Api\Serializer;

use Aws3\Command;
use Aws3\Api\Serializer\JsonRpcSerializer;
use Aws3\Api\Service;
use Aws3\Test\UsesServiceTrait;

/**
 * @covers Aws3\Api\Serializer\JsonRpcSerializer
 */
class JsonRpcSerializerTest extends \PHPUnit_Framework_TestCase
{
    use UsesServiceTrait;

    public function testPreparesRequests()
    {
        $service = new Service(
            [
                'metadata'=> [
                    'targetPrefix' => 'test',
                    'jsonVersion' => '1.1'
                ],
                'operations' => [
                    'foo' => [
                        'http' => ['httpMethod' => 'POST'],
                        'input' => [
                            'type' => 'structure',
                            'members' => [
                                'baz' => ['type' => 'string']
                            ]
                        ]
                    ]
                ]
            ],
            function () {}
        );

        $j = new JsonRpcSerializer($service, 'http://foo.com');
        $cmd = new Command('foo', ['baz' => 'bam']);
        $request = $j($cmd);
        $this->assertEquals('POST', $request->getMethod());
        $this->assertEquals('http://foo.com', (string) $request->getUri());
        $this->assertEquals(
            'application/x-amz-json-1.1',
            $request->getHeaderLine('Content-Type')
        );
        $this->assertEquals('test.foo', $request->getHeaderLine('X-Amz-Target'));
        $this->assertEquals('{"baz":"bam"}', (string) $request->getBody());
    }
}
