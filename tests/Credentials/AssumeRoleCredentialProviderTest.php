<?php
namespace Aws3\Test\Credentials;

use Aws3\Credentials\AssumeRoleCredentialProvider;
use Aws3\Credentials\CredentialProvider;
use Aws3\Credentials\Credentials;
use Aws3\Exception\AwsException;
use Aws3\Exception\CredentialsException;
use Aws3\Result;
use Aws3\Sts\StsClient;
use Aws3\Api\DateTimeResult;
use GuzzleHttp\Psr7;
use GuzzleHttp\Promise;
use GuzzleHttp\Promise\FulfilledPromise;
use GuzzleHttp\Promise\RejectedPromise;
use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\RequestInterface;
use Aws3\Test\UsesServiceTrait;

/**
 * @covers \Aws3\Credentials\AssumeRoleCredentialProvider
 */
class AssumeRoleCredentialProviderTest extends \PHPUnit_Framework_TestCase
{
    const SAMPLE_ROLE_ARN = 'arn:aws:iam::012345678910:role/role_name';

    use UsesServiceTrait;

    /**
     * @dataProvider insufficientArguments
     * 
     * @param array $config
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage  Missing required 'AssumeRoleCredentialProvider' configuration option: 
     */
    public function testEnsureSourceProfileProvidedForAssumeRole($config)
    {
        new AssumeRoleCredentialProvider($config);
    }

    /**
     * @dataProvider insufficientArguments
     */
    public function insufficientArguments()
    {
        $client = [
            'client' => new StsClient([
                'region' => 'us-west-2',
                'version' => 'latest',
                'credentials' => new Credentials('foo', 'bar')
            ])
        ];
        $params = [
            'assume_role_params' => [
                'RoleArn' => self::SAMPLE_ROLE_ARN,
                'RoleSessionName' => 'test_session',
            ]
        ];

        return [
            [ $client ],
            [ $params ],
        ];
    }

    public function testCanLoadAssumeRoleCredentials()
    {
        $result = [
            'Credentials' => [
                'AccessKeyId'     => 'foo',
                'SecretAccessKey' => 'bar',
                'SessionToken'    => null,
                'Expiration'      => DateTimeResult::fromEpoch(time() + 10)
            ],
            'AssumedRoleUser' => [
                'AssumedRoleId' => 'ARXXXXXXXXXXXXXXXXXXX:test_session',
                'Arn' => self::SAMPLE_ROLE_ARN . "/test_session"
            ]
        ];

        $sts = $this->getTestClient('Sts');
        $sts->getHandlerList()->setHandler(
            function ($c, $r) use ($result) {
                return Promise\promise_for(new Result($result));
            }
        );
        $args['client'] = $sts;
        $args['assume_role_params'] = [
            'RoleArn' => self::SAMPLE_ROLE_ARN,
            'RoleSessionName' => 'test_session',
        ];
        $provider = new AssumeRoleCredentialProvider($args);
        $creds = $provider()->wait();

        $this->assertEquals('foo', $creds->getAccessKeyId());
        $this->assertEquals('bar', $creds->getSecretKey());
        $this->assertEquals(null, $creds->getSecurityToken());
        $this->assertInternalType('int', $creds->getExpiration());
        $this->assertFalse($creds->isExpired());
    }

    /**
     * @expectedException \Aws3\Exception\CredentialsException
     * @expectedExceptionMessage Error in retrieving assume role credentials.
     */
    public function testThrowsExceptionWhenRetrievingAssumeRoleCredentialFails()
    {
        $sts = new StsClient([
            'region' => 'us-west-2',
            'version' => 'latest',
            'credentials' => new Credentials('foo', 'bar'),
            'http_handler' => function () {
                return new RejectedPromise([
                    'connection_error' => false,
                    'exception' => $this->getMockBuilder(AwsException::class)
                        ->disableOriginalConstructor()
                        ->getMock(),
                    'result' => null,
                ]);
            }
        ]);
        $args['client'] = $sts;
        $args['assume_role_params'] = [
            'RoleArn' => self::SAMPLE_ROLE_ARN,
            'RoleSessionName' => 'test_session',
        ];
        $provider = new AssumeRoleCredentialProvider($args);
        $provider()->wait();
    }
}
