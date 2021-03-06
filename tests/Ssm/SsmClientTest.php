<?php
namespace Aws3\Test\Ssm;

use Aws3\Ssm\SsmClient;
use Aws3\MockHandler;
use Aws3\Result;

/**
 * @covers Aws3\Ssm\SsmClient
 */
class SsmClientTest extends \PHPUnit_Framework_TestCase
{
    public function testCanDisableAutoFillPerClient()
    {
        $ec2 = new SsmClient([
            'region'  => 'us-east-1',
            'version' => 'latest',
            'idempotency_auto_fill' => false,
        ]);

        $mock = new MockHandler([
            function ($command, $request) {
                $this->assertNull($command['ClientToken']);
                return new Result();
            }
        ]);

        $ec2->getHandlerList()->setHandler($mock);

        $ec2->createMaintenanceWindow([
            'Name' => 'test',
            'Schedule' => 'foo',
            'Duration' => 2,
            'Cutoff' => 1,
            'AllowUnassociatedTargets' => false
        ]);
    }

    public function testCanOverwriteAutoFillToken()
    {
        $ec2 = new SsmClient([
            'region'  => 'us-east-1',
            'version' => 'latest',
            'idempotency_auto_fill' => true,
        ]);

        $mock = new MockHandler([
            function ($command, $request) {
                $this->assertEquals('foo', $command['ClientToken']);
                return new Result();
            }
        ]);

        $ec2->getHandlerList()->setHandler($mock);

        $ec2->createMaintenanceWindow([
            'Name' => 'test',
            'Schedule' => 'bar',
            'Duration' => 2,
            'Cutoff' => 1,
            'AllowUnassociatedTargets' => false,
            'ClientToken' => 'foo'
        ]);
    }
}
