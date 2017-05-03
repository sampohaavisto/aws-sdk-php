<?php
namespace Aws3\Sts;

use Aws3\AwsClient;
use Aws3\Result;
use Aws3\Credentials\Credentials;

/**
 * This client is used to interact with the **AWS Security Token Service (AWS STS)**.
 *
 * @method \Aws3\Result assumeRole(array $args = [])
 * @method \GuzzleHttp\Promise\Promise assumeRoleAsync(array $args = [])
 * @method \Aws3\Result assumeRoleWithSAML(array $args = [])
 * @method \GuzzleHttp\Promise\Promise assumeRoleWithSAMLAsync(array $args = [])
 * @method \Aws3\Result assumeRoleWithWebIdentity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise assumeRoleWithWebIdentityAsync(array $args = [])
 * @method \Aws3\Result decodeAuthorizationMessage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise decodeAuthorizationMessageAsync(array $args = [])
 * @method \Aws3\Result getCallerIdentity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCallerIdentityAsync(array $args = [])
 * @method \Aws3\Result getFederationToken(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getFederationTokenAsync(array $args = [])
 * @method \Aws3\Result getSessionToken(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSessionTokenAsync(array $args = [])
 */
class StsClient extends AwsClient
{
    /**
     * Creates credentials from the result of an STS operations
     *
     * @param Result $result Result of an STS operation
     *
     * @return Credentials
     * @throws \InvalidArgumentException if the result contains no credentials
     */
    public function createCredentials(Result $result)
    {
        if (!$result->hasKey('Credentials')) {
            throw new \InvalidArgumentException('Result contains no credentials');
        }

        $c = $result['Credentials'];

        return new Credentials(
            $c['AccessKeyId'],
            $c['SecretAccessKey'],
            isset($c['SessionToken']) ? $c['SessionToken'] : null,
            isset($c['Expiration']) && $c['Expiration'] instanceof \DateTimeInterface
                ? (int) $c['Expiration']->format('U')
                : null
        );
    }
}
