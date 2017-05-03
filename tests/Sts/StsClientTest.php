<?php
namespace Aws3\Test\Sts;

use Aws3\Api\DateTimeResult;
use Aws3\Result;
use Aws3\Sts\StsClient;

/**
 * @covers Aws3\Sts\StsClient
 */
class StsClientTest extends \PHPUnit_Framework_TestCase
{
    public function testCanCreateCredentialsObjectFromStsResult()
    {
        $result = new Result([
            'Credentials' => [
                'AccessKeyId' => 'foo',
                'SecretAccessKey' => 'bar',
                'SessionToken' => 'baz',
                'Expiration' => DateTimeResult::fromEpoch(time() + 10),
            ]
        ]);

        $client = new StsClient(['region' => 'us-east-1', 'version' => 'latest']);
        $credentials = $client->createCredentials($result);
        $this->assertInstanceOf(
            'Aws3\Credentials\CredentialsInterface',
            $credentials
        );
        $this->assertEquals('foo', $credentials->getAccessKeyId());
        $this->assertEquals('bar', $credentials->getSecretKey());
        $this->assertEquals('baz', $credentials->getSecurityToken());
        $this->assertInternalType('int', $credentials->getExpiration());
        $this->assertFalse($credentials->isExpired());
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Result contains no credentials
     */
    public function testThrowsExceptionWhenCreatingCredentialsFromInvalidInput()
    {
        $client = new StsClient(['region' => 'us-east-1', 'version' => 'latest']);
        $client->createCredentials(new Result());
    }
}
