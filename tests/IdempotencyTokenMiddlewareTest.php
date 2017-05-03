<?php
namespace Aws3\Test;

use Aws3\IdempotencyTokenMiddleware;
use Aws3\Result;
use GuzzleHttp\Promise;
use Aws3\HandlerList;
use Aws3\Api\ApiProvider;
use Aws3\Api\Service;
use Aws3\Command;
use GuzzleHttp\Psr7\Request;

/**
 * @covers Aws3\IdempotencyTokenMiddleware
 */
class IdempotencyTokenMiddlewareTest extends \PHPUnit_Framework_TestCase
{
    public function testAutoFillsMemberWithIdempotencyTrait()
    {
        $list = new HandlerList();
        $list->setHandler(function ($command, $request) use (&$called) {
            $called = true;
            $this->assertNotNull($command['ClientToken']);
            $regex = '/([a-f0-9]{8}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{12})/';
            $this->assertRegExp($regex, $command['ClientToken']);
            return \GuzzleHttp\Promise\promise_for(new Result([]));
        });

        $provider = ApiProvider::defaultProvider();
        $data = $provider('api', 'ec2', 'latest');
        $service = new Service($data, $provider);
        $list->appendInit(IdempotencyTokenMiddleware::wrap($service));
        $handler = $list->resolve();

        $handler(new Command('RunScheduledInstances', [
            'LaunchSpecification' => [
                'ImageId' => 'test-image',
            ],
            'ScheduledInstanceId' => 'test-instance-id',
            'InstanceCount' => 1,
        ]), new Request('POST', 'http://foo.com'))->wait();
        $this->assertTrue($called);
    }

    public function testAllowsCustomRandomSourceToBeProvided()
    {
        $fakeRandomSource = function ($byteLength) {
            return str_repeat(chr(0x00), $byteLength);
        };
        $list = new HandlerList();
        $list->setHandler(function ($command, $request) use (&$called) {
            $called = true;
            $this->assertNotNull($command['ClientToken']);
            $this->assertSame(
                '00000000-0000-4000-8000-000000000000',
                $command['ClientToken']
            );
            return \GuzzleHttp\Promise\promise_for(new Result([]));
        });

        $provider = ApiProvider::defaultProvider();
        $data = $provider('api', 'ec2', 'latest');
        $service = new Service($data, $provider);
        $list->appendInit(
            IdempotencyTokenMiddleware::wrap($service, $fakeRandomSource)
        );
        $handler = $list->resolve();

        $handler(new Command('RunScheduledInstances', [
            'LaunchSpecification' => [
                'ImageId' => 'test-image',
            ],
            'ScheduledInstanceId' => 'test-instance-id',
            'InstanceCount' => 1,
        ]), new Request('POST', 'http://foo.com'))->wait();
        $this->assertTrue($called);
    }
}
