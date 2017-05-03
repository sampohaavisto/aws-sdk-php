<?php
namespace Aws3\Test\DynamoDb;

use Aws3\DynamoDb\Exception\DynamoDbException;
use Aws3\DynamoDb\LockingSessionConnection;
use Aws3\Result;
use Aws3\Test\UsesServiceTrait;

/**
 * @covers Aws3\DynamoDb\LockingSessionConnection
 */
class LockingSessionConnectionTest extends \PHPUnit_Framework_TestCase
{
    use UsesServiceTrait;

    public function testReadRetrievesItemData()
    {
        $client = $this->getTestSdk()->createDynamoDb();
        $this->addMockResults($client, [
            $this->createMockAwsException('ConditionalCheckFailedException', DynamoDbException::class),
            new Result(['Attributes' => [
                'sessionid' => ['S' => 'session1'],
                'otherkey'  => ['S' => 'foo'],
            ]]),
        ]);

        $connection = new LockingSessionConnection($client);
        $data = $connection->read('session1');

        $this->assertEquals(
            ['sessionid' => 'session1', 'otherkey' => 'foo'],
            $data
        );
    }

    public function testBailsOnUnexpectedException()
    {
        $client = $this->getTestSdk()->createDynamoDb();
        $this->addMockResults($client, [
            $this->createMockAwsException('Unexpected', DynamoDbException::class),
        ]);

        $connection = new LockingSessionConnection($client);
        $data = $connection->read('session1');

        $this->assertEquals(null, $data);
    }
}
