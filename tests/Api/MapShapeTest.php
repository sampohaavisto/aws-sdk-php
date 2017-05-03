<?php
namespace Aws3\Test\Api;

use Aws3\Api\ShapeMap;
use Aws3\Api\MapShape;

/**
 * @covers \Aws3\Api\MapShape
 */
class MapShapeTest extends \PHPUnit_Framework_TestCase
{
    public function testReturnsValue()
    {
        $s = new MapShape(['value' => ['type' => 'string']], new ShapeMap([]));
        $v = $s->getValue();
        $this->assertInstanceOf('Aws3\Api\Shape', $v);
        $this->assertEquals('string', $v->getType());
        $this->assertSame($v, $s->getValue());
    }

    /**
     * @expectedException \RuntimeException
     */
    public function testFailsWhenValueIsMissing()
    {
        (new MapShape([], new ShapeMap([])))->getValue();
    }

    public function testReturnsKey()
    {
        $s = new MapShape(['key' => ['type' => 'string']], new ShapeMap([]));
        $k = $s->getKey();
        $this->assertInstanceOf('Aws3\Api\Shape', $k);
        $this->assertEquals('string', $k->getType());
    }

    public function testReturnsEmptyKey()
    {
        $s = new MapShape([], new ShapeMap([]));
        $this->assertInstanceOf('Aws3\Api\Shape', $s->getKey());
    }
}
