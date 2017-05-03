<?php
namespace Aws3\Test\S3\Exception;

use Aws\S3\Exception\DeleteMultipleObjectsException;

/**
 * @covers Aws\S3\Exception\DeleteMultipleObjectsException
 */
class DeleteMultipleObjectsExceptionTest extends \PHPUnit_Framework_TestCase
{
    public function testReturnsData()
    {
        $del = [['Key' => 'foo']];
        $err = [['Key' => 'bar']];
        $e = new DeleteMultipleObjectsException($del, $err);
        $this->assertSame($del, $e->getDeleted());
        $this->assertSame($err, $e->getErrors());
        $this->assertContains(
            'Unable to delete certain keys when executing a',
            $e->getMessage()
        );
    }
}
