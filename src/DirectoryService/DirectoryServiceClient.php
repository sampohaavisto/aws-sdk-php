<?php
namespace Aws3\DirectoryService;

use Aws3\AwsClient;

/**
 * AWS Directory Service client
 *
 * @method \Aws3\Result addIpRoutes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addIpRoutesAsync(array $args = [])
 * @method \Aws3\Result addTagsToResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addTagsToResourceAsync(array $args = [])
 * @method \Aws3\Result cancelSchemaExtension(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelSchemaExtensionAsync(array $args = [])
 * @method \Aws3\Result connectDirectory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise connectDirectoryAsync(array $args = [])
 * @method \Aws3\Result createAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAliasAsync(array $args = [])
 * @method \Aws3\Result createComputer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createComputerAsync(array $args = [])
 * @method \Aws3\Result createConditionalForwarder(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createConditionalForwarderAsync(array $args = [])
 * @method \Aws3\Result createDirectory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDirectoryAsync(array $args = [])
 * @method \Aws3\Result createMicrosoftAD(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMicrosoftADAsync(array $args = [])
 * @method \Aws3\Result createSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSnapshotAsync(array $args = [])
 * @method \Aws3\Result createTrust(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTrustAsync(array $args = [])
 * @method \Aws3\Result deleteConditionalForwarder(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteConditionalForwarderAsync(array $args = [])
 * @method \Aws3\Result deleteDirectory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDirectoryAsync(array $args = [])
 * @method \Aws3\Result deleteSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSnapshotAsync(array $args = [])
 * @method \Aws3\Result deleteTrust(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTrustAsync(array $args = [])
 * @method \Aws3\Result deregisterEventTopic(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterEventTopicAsync(array $args = [])
 * @method \Aws3\Result describeConditionalForwarders(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeConditionalForwardersAsync(array $args = [])
 * @method \Aws3\Result describeDirectories(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDirectoriesAsync(array $args = [])
 * @method \Aws3\Result describeEventTopics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEventTopicsAsync(array $args = [])
 * @method \Aws3\Result describeSnapshots(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSnapshotsAsync(array $args = [])
 * @method \Aws3\Result describeTrusts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTrustsAsync(array $args = [])
 * @method \Aws3\Result disableRadius(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableRadiusAsync(array $args = [])
 * @method \Aws3\Result disableSso(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableSsoAsync(array $args = [])
 * @method \Aws3\Result enableRadius(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableRadiusAsync(array $args = [])
 * @method \Aws3\Result enableSso(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableSsoAsync(array $args = [])
 * @method \Aws3\Result getDirectoryLimits(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDirectoryLimitsAsync(array $args = [])
 * @method \Aws3\Result getSnapshotLimits(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSnapshotLimitsAsync(array $args = [])
 * @method \Aws3\Result listIpRoutes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listIpRoutesAsync(array $args = [])
 * @method \Aws3\Result listSchemaExtensions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSchemaExtensionsAsync(array $args = [])
 * @method \Aws3\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws3\Result registerEventTopic(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerEventTopicAsync(array $args = [])
 * @method \Aws3\Result removeIpRoutes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeIpRoutesAsync(array $args = [])
 * @method \Aws3\Result removeTagsFromResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeTagsFromResourceAsync(array $args = [])
 * @method \Aws3\Result restoreFromSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise restoreFromSnapshotAsync(array $args = [])
 * @method \Aws3\Result startSchemaExtension(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startSchemaExtensionAsync(array $args = [])
 * @method \Aws3\Result updateConditionalForwarder(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateConditionalForwarderAsync(array $args = [])
 * @method \Aws3\Result updateRadius(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRadiusAsync(array $args = [])
 * @method \Aws3\Result verifyTrust(array $args = [])
 * @method \GuzzleHttp\Promise\Promise verifyTrustAsync(array $args = [])
 */
class DirectoryServiceClient extends AwsClient {}
