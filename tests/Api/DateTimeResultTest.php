<?php
namespace Aws3\Test\Api;

use Aws3\Api\DateTimeResult;

/**
 * @covers \Aws3\Api\DateTimeResult
 */
class DateTimeResultTest extends \PHPUnit_Framework_TestCase
{
    public function testCreatesFromEpoch()
    {
        $t = time();
        $d = DateTimeResult::fromEpoch($t);
        $this->assertEquals($t, $d->format('U'));
    }

    public function testCastToIso8601String()
    {
        $t = time();
        $d = DateTimeResult::fromEpoch($t);
        $this->assertSame(gmdate('c', $t), (string) $d);
    }

    public function testJsonSerialzesAsIso8601()
    {
        $t = time();
        $d = DateTimeResult::fromEpoch($t);
        $this->assertSame('"' . gmdate('c', $t). '"', json_encode($d));
    }
}
