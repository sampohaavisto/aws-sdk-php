<?php
namespace Aws3\Test\DynamoDb;

use Aws3\DynamoDb\SessionHandler;
use Aws3\Test\UsesServiceTrait;

/**
 * @covers Aws3\DynamoDb\SessionHandler
 */
class SessionHandlerTest extends \PHPUnit_Framework_TestCase
{
    use UsesServiceTrait;

    public function testCanCreateSessionHandler()
    {
        $client = $this->getTestSdk()->createDynamoDb();
        $sh1 = SessionHandler::fromClient($client);
        $sh2 = SessionHandler::fromClient($client, ['locking' => true]);

        $this->assertInstanceOf(
            'Aws3\DynamoDb\StandardSessionConnection',
            $this->readAttribute($sh1, 'connection')
        );
        $this->assertInstanceOf(
            'Aws3\DynamoDb\LockingSessionConnection',
            $this->readAttribute($sh2, 'connection')
        );
    }

    public function testHandlerFunctions()
    {
        $data = ['fizz' => 'buzz'];
        $connection = $this->getMockForAbstractClass(
            'Aws3\DynamoDb\SessionConnectionInterface'
        );
        $connection->expects($this->any())
            ->method('read')
            ->willReturn([
                'expires' => time() - 1000,
                'data' => ['fizz' => 'buzz'],
            ]);
        $connection->expects($this->any())
            ->method('write')
            ->willReturnOnConsecutiveCalls(false, true);
        $connection->expects($this->any())
            ->method('delete')
            ->willReturn(true);

        $sh = new SessionHandler($connection);
        session_id('test');
        $this->assertTrue($sh->open('foo', 'bar'));
        $this->assertEquals('', $sh->read('test'));
        $this->assertFalse($sh->write('test', serialize($data)));
        $this->assertTrue($sh->close());
    }

    public function testHandlerWhenNothingWritten()
    {
        $connection = $this->getMockForAbstractClass(
            'Aws3\DynamoDb\SessionConnectionInterface'
        );
        $connection->expects($this->once())
            ->method('write')
            ->with('name_test', '', false)
            ->willReturn(true);

        $sh = new SessionHandler($connection);
        session_id('test');
        $sh->open('', 'name');
        $this->assertTrue($sh->close());
    }

    public function testSessionDataCanBeWrittenToNewIdWithNoChanges()
    {
        $data = 'serializedData';
        $connection = $this->getMockForAbstractClass(
            'Aws3\DynamoDb\SessionConnectionInterface'
        );
        $connection->expects($this->once())
            ->method('read')
            ->with('name_test1')
            ->willReturn([
                'expires' => time() + 1000,
                'data' => $data,
            ]);
        $connection->expects($this->once())
            ->method('write')
            ->with('name_test2', $data, true)
            ->willReturn(true);

        $sh = new SessionHandler($connection);
        session_id('test1');
        $this->assertTrue($sh->open('', 'name'));
        $this->assertSame($data, $sh->read(session_id()));
        session_id('test2');
        $this->assertTrue($sh->write(session_id(), $data));
    }
}
