<?php
namespace Aws3\ElastiCache;

use Aws3\AwsClient;

/**
 * This client is used to interact with the **Amazon ElastiCache** service.
 *
 * @method \Aws3\Result addTagsToResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addTagsToResourceAsync(array $args = [])
 * @method \Aws3\Result authorizeCacheSecurityGroupIngress(array $args = [])
 * @method \GuzzleHttp\Promise\Promise authorizeCacheSecurityGroupIngressAsync(array $args = [])
 * @method \Aws3\Result copySnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise copySnapshotAsync(array $args = [])
 * @method \Aws3\Result createCacheCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCacheClusterAsync(array $args = [])
 * @method \Aws3\Result createCacheParameterGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCacheParameterGroupAsync(array $args = [])
 * @method \Aws3\Result createCacheSecurityGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCacheSecurityGroupAsync(array $args = [])
 * @method \Aws3\Result createCacheSubnetGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCacheSubnetGroupAsync(array $args = [])
 * @method \Aws3\Result createReplicationGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createReplicationGroupAsync(array $args = [])
 * @method \Aws3\Result createSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSnapshotAsync(array $args = [])
 * @method \Aws3\Result deleteCacheCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCacheClusterAsync(array $args = [])
 * @method \Aws3\Result deleteCacheParameterGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCacheParameterGroupAsync(array $args = [])
 * @method \Aws3\Result deleteCacheSecurityGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCacheSecurityGroupAsync(array $args = [])
 * @method \Aws3\Result deleteCacheSubnetGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCacheSubnetGroupAsync(array $args = [])
 * @method \Aws3\Result deleteReplicationGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteReplicationGroupAsync(array $args = [])
 * @method \Aws3\Result deleteSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSnapshotAsync(array $args = [])
 * @method \Aws3\Result describeCacheClusters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCacheClustersAsync(array $args = [])
 * @method \Aws3\Result describeCacheEngineVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCacheEngineVersionsAsync(array $args = [])
 * @method \Aws3\Result describeCacheParameterGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCacheParameterGroupsAsync(array $args = [])
 * @method \Aws3\Result describeCacheParameters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCacheParametersAsync(array $args = [])
 * @method \Aws3\Result describeCacheSecurityGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCacheSecurityGroupsAsync(array $args = [])
 * @method \Aws3\Result describeCacheSubnetGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCacheSubnetGroupsAsync(array $args = [])
 * @method \Aws3\Result describeEngineDefaultParameters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEngineDefaultParametersAsync(array $args = [])
 * @method \Aws3\Result describeEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEventsAsync(array $args = [])
 * @method \Aws3\Result describeReplicationGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeReplicationGroupsAsync(array $args = [])
 * @method \Aws3\Result describeReservedCacheNodes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeReservedCacheNodesAsync(array $args = [])
 * @method \Aws3\Result describeReservedCacheNodesOfferings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeReservedCacheNodesOfferingsAsync(array $args = [])
 * @method \Aws3\Result describeSnapshots(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSnapshotsAsync(array $args = [])
 * @method \Aws3\Result listAllowedNodeTypeModifications(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAllowedNodeTypeModificationsAsync(array $args = [])
 * @method \Aws3\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws3\Result modifyCacheCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyCacheClusterAsync(array $args = [])
 * @method \Aws3\Result modifyCacheParameterGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyCacheParameterGroupAsync(array $args = [])
 * @method \Aws3\Result modifyCacheSubnetGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyCacheSubnetGroupAsync(array $args = [])
 * @method \Aws3\Result modifyReplicationGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyReplicationGroupAsync(array $args = [])
 * @method \Aws3\Result purchaseReservedCacheNodesOffering(array $args = [])
 * @method \GuzzleHttp\Promise\Promise purchaseReservedCacheNodesOfferingAsync(array $args = [])
 * @method \Aws3\Result rebootCacheCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rebootCacheClusterAsync(array $args = [])
 * @method \Aws3\Result removeTagsFromResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeTagsFromResourceAsync(array $args = [])
 * @method \Aws3\Result resetCacheParameterGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resetCacheParameterGroupAsync(array $args = [])
 * @method \Aws3\Result revokeCacheSecurityGroupIngress(array $args = [])
 * @method \GuzzleHttp\Promise\Promise revokeCacheSecurityGroupIngressAsync(array $args = [])
 * @method \Aws3\Result testFailover(array $args = [])
 * @method \GuzzleHttp\Promise\Promise testFailoverAsync(array $args = [])
 */
class ElastiCacheClient extends AwsClient {}
