<?php
namespace Aws3\Test\Rds;

use Aws3\Rds\RdsClient;
use Aws3\MockHandler;
use Aws3\Result;

/**
 * @covers Aws3\Rds\RdsClient
 */
class Ec2ClientTest extends \PHPUnit_Framework_TestCase
{
    public function testAddsCopySnapshotMiddleware()
    {
        $rds = new RdsClient([
            'region'  => 'us-east-1',
            'version' => 'latest'
        ]);

        $mock = new MockHandler([
            function ($command, $request) {
                $this->assertNotNull($command['PreSignedUrl']);
                $this->assertContains('us-west-2', $command['PreSignedUrl']);
                $this->assertEquals('us-east-1', $command['DestinationRegion']);
                return new Result();
            }
        ]);

        $rds->getHandlerList()->setHandler($mock);

        $rds->copyDBSnapshot([
            'KmsKeyId' => '238f8ec9-71da-4530-8ec9-009f4a90fef5',
            'SourceDBSnapshotIdentifier' => 'arn:aws:rds:us-west-2:123456789012:snapshot:rds:my-snapshot',
            'TargetDBSnapshotIdentifier' => 'my-snapshot-copy',
            'SourceRegion' => 'us-west-2',
        ]);
    }
}

