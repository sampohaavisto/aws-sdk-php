<?php
namespace Aws3\CognitoIdentity;

use Aws3\AwsClient;

/**
 * This client is used to interact with the **Amazon Cognito Identity** service.
 *
 * @method \Aws3\Result createIdentityPool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createIdentityPoolAsync(array $args = [])
 * @method \Aws3\Result deleteIdentities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteIdentitiesAsync(array $args = [])
 * @method \Aws3\Result deleteIdentityPool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteIdentityPoolAsync(array $args = [])
 * @method \Aws3\Result describeIdentity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeIdentityAsync(array $args = [])
 * @method \Aws3\Result describeIdentityPool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeIdentityPoolAsync(array $args = [])
 * @method \Aws3\Result getCredentialsForIdentity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCredentialsForIdentityAsync(array $args = [])
 * @method \Aws3\Result getId(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getIdAsync(array $args = [])
 * @method \Aws3\Result getIdentityPoolRoles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getIdentityPoolRolesAsync(array $args = [])
 * @method \Aws3\Result getOpenIdToken(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getOpenIdTokenAsync(array $args = [])
 * @method \Aws3\Result getOpenIdTokenForDeveloperIdentity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getOpenIdTokenForDeveloperIdentityAsync(array $args = [])
 * @method \Aws3\Result listIdentities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listIdentitiesAsync(array $args = [])
 * @method \Aws3\Result listIdentityPools(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listIdentityPoolsAsync(array $args = [])
 * @method \Aws3\Result lookupDeveloperIdentity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise lookupDeveloperIdentityAsync(array $args = [])
 * @method \Aws3\Result mergeDeveloperIdentities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise mergeDeveloperIdentitiesAsync(array $args = [])
 * @method \Aws3\Result setIdentityPoolRoles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setIdentityPoolRolesAsync(array $args = [])
 * @method \Aws3\Result unlinkDeveloperIdentity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise unlinkDeveloperIdentityAsync(array $args = [])
 * @method \Aws3\Result unlinkIdentity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise unlinkIdentityAsync(array $args = [])
 * @method \Aws3\Result updateIdentityPool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateIdentityPoolAsync(array $args = [])
 */
class CognitoIdentityClient extends AwsClient {}
