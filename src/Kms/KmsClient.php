<?php
namespace Aws3\Kms;

use Aws3\AwsClient;

/**
 * This client is used to interact with the **AWS Key Management Service**.
 *
 * @method \Aws3\Result cancelKeyDeletion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelKeyDeletionAsync(array $args = [])
 * @method \Aws3\Result createAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAliasAsync(array $args = [])
 * @method \Aws3\Result createGrant(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createGrantAsync(array $args = [])
 * @method \Aws3\Result createKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createKeyAsync(array $args = [])
 * @method \Aws3\Result decrypt(array $args = [])
 * @method \GuzzleHttp\Promise\Promise decryptAsync(array $args = [])
 * @method \Aws3\Result deleteAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAliasAsync(array $args = [])
 * @method \Aws3\Result deleteImportedKeyMaterial(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteImportedKeyMaterialAsync(array $args = [])
 * @method \Aws3\Result describeKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeKeyAsync(array $args = [])
 * @method \Aws3\Result disableKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableKeyAsync(array $args = [])
 * @method \Aws3\Result disableKeyRotation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableKeyRotationAsync(array $args = [])
 * @method \Aws3\Result enableKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableKeyAsync(array $args = [])
 * @method \Aws3\Result enableKeyRotation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableKeyRotationAsync(array $args = [])
 * @method \Aws3\Result encrypt(array $args = [])
 * @method \GuzzleHttp\Promise\Promise encryptAsync(array $args = [])
 * @method \Aws3\Result generateDataKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise generateDataKeyAsync(array $args = [])
 * @method \Aws3\Result generateDataKeyWithoutPlaintext(array $args = [])
 * @method \GuzzleHttp\Promise\Promise generateDataKeyWithoutPlaintextAsync(array $args = [])
 * @method \Aws3\Result generateRandom(array $args = [])
 * @method \GuzzleHttp\Promise\Promise generateRandomAsync(array $args = [])
 * @method \Aws3\Result getKeyPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getKeyPolicyAsync(array $args = [])
 * @method \Aws3\Result getKeyRotationStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getKeyRotationStatusAsync(array $args = [])
 * @method \Aws3\Result getParametersForImport(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getParametersForImportAsync(array $args = [])
 * @method \Aws3\Result importKeyMaterial(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importKeyMaterialAsync(array $args = [])
 * @method \Aws3\Result listAliases(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAliasesAsync(array $args = [])
 * @method \Aws3\Result listGrants(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listGrantsAsync(array $args = [])
 * @method \Aws3\Result listKeyPolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listKeyPoliciesAsync(array $args = [])
 * @method \Aws3\Result listKeys(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listKeysAsync(array $args = [])
 * @method \Aws3\Result listResourceTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResourceTagsAsync(array $args = [])
 * @method \Aws3\Result listRetirableGrants(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRetirableGrantsAsync(array $args = [])
 * @method \Aws3\Result putKeyPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putKeyPolicyAsync(array $args = [])
 * @method \Aws3\Result reEncrypt(array $args = [])
 * @method \GuzzleHttp\Promise\Promise reEncryptAsync(array $args = [])
 * @method \Aws3\Result retireGrant(array $args = [])
 * @method \GuzzleHttp\Promise\Promise retireGrantAsync(array $args = [])
 * @method \Aws3\Result revokeGrant(array $args = [])
 * @method \GuzzleHttp\Promise\Promise revokeGrantAsync(array $args = [])
 * @method \Aws3\Result scheduleKeyDeletion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise scheduleKeyDeletionAsync(array $args = [])
 * @method \Aws3\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws3\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws3\Result updateAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAliasAsync(array $args = [])
 * @method \Aws3\Result updateKeyDescription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateKeyDescriptionAsync(array $args = [])
 */
class KmsClient extends AwsClient {}
