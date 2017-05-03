<?php
namespace Aws3\Test\Exception;

use Aws3\Exception\CouldNotCreateChecksumException;

/**
 * @covers Aws3\Exception\CouldNotCreateChecksumException
 */
class CouldNotCreateChecksumExceptionTest extends \PHPUnit_Framework_TestCase
{
    public function testUsesCorrectWords()
    {
        $e = new CouldNotCreateChecksumException('md5');
        $this->assertStringStartsWith('An md5', $e->getMessage());

        $e = new CouldNotCreateChecksumException('sha256');
        $this->assertStringStartsWith('A sha256', $e->getMessage());
    }
}
