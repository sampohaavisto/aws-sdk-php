<?php
namespace Aws3\Test\Route53;

use Aws3\Route53\Route53Client;

/**
 * @covers Aws3\Route53\Route53Client
 */
class Route53ClientTest extends \PHPUnit_Framework_TestCase
{
    public function testCleansIds()
    {
        $client = new Route53Client([
            'service' => 'route53',
            'region'  => 'us-west-2',
            'version' => 'latest'
        ]);

        $command = $client->getCommand('ChangeResourceRecordSets', [
            'HostedZoneId' => '/hostedzone/foo',
            'ChangeBatch'  => [
                'Changes' => [
                    'bar' => [
                        'Action' => 'foo',
                        'ResourceRecordSet' => [
                            'Name' => 'baz',
                            'Type' => 'abc'
                        ]
                    ]
                ]
            ]
        ]);

        $request = \Aws3\serialize($command);
        $requestUri = (string) $request->getUri();
        $this->assertContains('/hostedzone/foo/rrset/', $requestUri);
        $this->assertNotContains('/hostedzone/hostedzone', $requestUri);

        $command = $client->getCommand('GetReusableDelegationSet', [
            'Id' => '/delegationset/foo',
        ]);

        $request = \Aws3\serialize($command);
        $requestUri = (string) $request->getUri();
        $this->assertContains('/delegationset/foo', $requestUri);
        $this->assertNotContains('/delegationset/delegationset', $requestUri);

        $command = $client->getCommand('CreateHostedZone', [
            'Name' => 'foo',
            'CallerReference' => '123',
            'DelegationSetId' => '/delegationset/bar',
        ]);

        $request = \Aws3\serialize($command);
        $this->assertContains(
            '<DelegationSetId>bar</DelegationSetId>',
            $request->getBody()->getContents()
        );
    }
}
