<?php
namespace Aws3\Test;

use Aws3\Endpoint\EndpointProvider;
use Aws3\Endpoint\PartitionEndpointProvider;

/**
 * @covers Aws3\Endpoint\EndpointProvider
 */
class EndpointProviderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException \Aws3\Exception\UnresolvedEndpointException
     */
    public function testThrowsWhenUnresolved()
    {
        EndpointProvider::resolve(function() {}, []);
    }

    /**
     * @expectedException \Aws3\Exception\UnresolvedEndpointException
     */
    public function testThrowsWhenNotArray()
    {
        EndpointProvider::resolve(function() { return 'foo'; }, []);
    }

    public function testCreatesDefaultProvider()
    {
        $p = EndpointProvider::defaultProvider();
        $this->assertInstanceOf(PartitionEndpointProvider::class, $p);
    }

    public function testCreatesProviderFromPatterns()
    {
        $p = EndpointProvider::patterns([
            '*/*' => ['endpoint' => 'foo.com']
        ]);
        $this->assertInstanceOf('Aws3\Endpoint\PatternEndpointProvider', $p);
        $result = EndpointProvider::resolve($p, []);
        $this->assertEquals('https://foo.com', $result['endpoint']);
    }
}
