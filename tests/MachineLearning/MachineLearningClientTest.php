<?php
namespace Aws3\Test\MachineLearning;

use Aws3\Middleware;
use Aws3\MachineLearning\MachineLearningClient;
use Aws3\Test\UsesServiceTrait;
use GuzzleHttp\Psr7;
use GuzzleHttp\Psr7\Uri;

/**
 * @covers Aws3\MachineLearning\MachineLearningClient
 */
class MachineLearningClientTest extends \PHPUnit_Framework_TestCase
{
    use UsesServiceTrait;

    public function testUpdatesPredictEndpoint()
    {
        // Setup state of command/request
        $predictEndpoint = new Uri('https://realtime.machinelearning.us-east-1.amazonaws.com/foo');
        $client = new MachineLearningClient([
            'region'  => 'us-east-1',
            'version' => 'latest'
        ]);
        $this->addMockResults($client, [[]]);
        $client->getHandlerList()->appendSign(Middleware::tap(function ($c, $r) use (&$command, &$request) {
            $command = $c; $request = $r;
        }));
        $client->predict([
            'MLModelId' => 'foo',
            'Record' => ['foo' => 'bar'],
            'PredictEndpoint' => (string) $predictEndpoint
        ]);

        $this->assertEquals($predictEndpoint->getHost(), $request->getUri()->getHost());
    }
}
