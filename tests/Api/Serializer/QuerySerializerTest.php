<?php
namespace Aws3\Test\Api\Serializer;

use Aws3\Api\Serializer\QuerySerializer;
use Aws3\Api\Service;
use Aws3\Command;
use Aws3\Test\UsesServiceTrait;

/**
 * @covers Aws3\Api\Serializer\QuerySerializer
 */
class QuerySerializerTest extends \PHPUnit_Framework_TestCase
{
    use UsesServiceTrait;

    public function testSerializesEmptyLists()
    {
        $service = new Service(
            [
                'metadata'=> [
                    'protocol'   => 'query',
                    'apiVersion' => '1'
                ],
                'operations' => [
                    'foo' => [
                        'http' => ['httpMethod' => 'POST'],
                        'input' => [
                            'type' => 'structure',
                            'members' => [
                                'baz' => [
                                    'type' => 'list',
                                    'member' => ['type' => 'string']
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            function () {}
        );

        $q = new QuerySerializer($service, 'http://foo.com');
        $cmd = new Command('foo', ['baz' => []]);
        $request = $q($cmd);
        $this->assertEquals('POST', $request->getMethod());
        $this->assertEquals('http://foo.com', (string) $request->getUri());
        $this->assertEquals('Action=foo&Version=1&baz=', (string) $request->getBody());
    }
}
