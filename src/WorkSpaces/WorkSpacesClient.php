<?php
namespace Aws3\WorkSpaces;

use Aws3\AwsClient;

/**
 * Amazon WorkSpaces client.
 *
 * @method \Aws3\Result createTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTagsAsync(array $args = [])
 * @method \Aws3\Result createWorkspaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createWorkspacesAsync(array $args = [])
 * @method \Aws3\Result deleteTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTagsAsync(array $args = [])
 * @method \Aws3\Result describeTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTagsAsync(array $args = [])
 * @method \Aws3\Result describeWorkspaceBundles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWorkspaceBundlesAsync(array $args = [])
 * @method \Aws3\Result describeWorkspaceDirectories(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWorkspaceDirectoriesAsync(array $args = [])
 * @method \Aws3\Result describeWorkspaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWorkspacesAsync(array $args = [])
 * @method \Aws3\Result describeWorkspacesConnectionStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWorkspacesConnectionStatusAsync(array $args = [])
 * @method \Aws3\Result modifyWorkspaceProperties(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyWorkspacePropertiesAsync(array $args = [])
 * @method \Aws3\Result rebootWorkspaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rebootWorkspacesAsync(array $args = [])
 * @method \Aws3\Result rebuildWorkspaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rebuildWorkspacesAsync(array $args = [])
 * @method \Aws3\Result startWorkspaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startWorkspacesAsync(array $args = [])
 * @method \Aws3\Result stopWorkspaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopWorkspacesAsync(array $args = [])
 * @method \Aws3\Result terminateWorkspaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise terminateWorkspacesAsync(array $args = [])
 */
class WorkSpacesClient extends AwsClient {}
