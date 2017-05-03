<?php
namespace Aws3\Efs;

use Aws3\AwsClient;

/**
 * This client is used to interact with **Amazon EFS**.
 *
 * @method \Aws3\Result createFileSystem(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFileSystemAsync(array $args = [])
 * @method \Aws3\Result createMountTarget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMountTargetAsync(array $args = [])
 * @method \Aws3\Result createTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTagsAsync(array $args = [])
 * @method \Aws3\Result deleteFileSystem(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFileSystemAsync(array $args = [])
 * @method \Aws3\Result deleteMountTarget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMountTargetAsync(array $args = [])
 * @method \Aws3\Result deleteTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTagsAsync(array $args = [])
 * @method \Aws3\Result describeFileSystems(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFileSystemsAsync(array $args = [])
 * @method \Aws3\Result describeMountTargetSecurityGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMountTargetSecurityGroupsAsync(array $args = [])
 * @method \Aws3\Result describeMountTargets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMountTargetsAsync(array $args = [])
 * @method \Aws3\Result describeTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTagsAsync(array $args = [])
 * @method \Aws3\Result modifyMountTargetSecurityGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyMountTargetSecurityGroupsAsync(array $args = [])
 */
class EfsClient extends AwsClient {}
