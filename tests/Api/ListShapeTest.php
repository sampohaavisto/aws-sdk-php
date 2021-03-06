<?php
namespace Aws3\Test\Api;

use Aws3\Api\ShapeMap;
use Aws3\Api\ListShape;

/**
 * @covers \Aws3\Api\ListShape
 */
class ListShapeTest extends \PHPUnit_Framework_TestCase
{
    public function testReturnsMember()
    {
        $s = new ListShape(
            ['member' => ['type' => 'string']],
            new ShapeMap([])
        );

        $m = $s->getMember();
        $this->assertInstanceOf('Aws3\Api\Shape', $m);
        $this->assertSame($m, $s->getMember());
        $this->assertEquals('string', $m->getType());
    }

    /**
     * @expectedException \RuntimeException
     */
    public function testFailsWhenMemberIsMissing()
    {
        (new ListShape([], new ShapeMap([])))->getMember();
    }
}
