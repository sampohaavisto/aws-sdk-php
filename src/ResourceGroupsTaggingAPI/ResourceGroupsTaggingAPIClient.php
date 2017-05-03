<?php
namespace Aws3\ResourceGroupsTaggingAPI;

use Aws3\AwsClient;

/**
 * This client is used to interact with the **AWS Resource Groups Tagging API** service.
 * @method \Aws3\Result getResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResourcesAsync(array $args = [])
 * @method \Aws3\Result getTagKeys(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTagKeysAsync(array $args = [])
 * @method \Aws3\Result getTagValues(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTagValuesAsync(array $args = [])
 * @method \Aws3\Result tagResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourcesAsync(array $args = [])
 * @method \Aws3\Result untagResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourcesAsync(array $args = [])
 */
class ResourceGroupsTaggingAPIClient extends AwsClient {}
