<?php
namespace Aws3\CloudTrail;

use Aws3\AwsClient;

/**
 * This client is used to interact with the **AWS CloudTrail** service.
 *
 * @method \Aws3\Result addTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addTagsAsync(array $args = [])
 * @method \Aws3\Result createTrail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTrailAsync(array $args = [])
 * @method \Aws3\Result deleteTrail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTrailAsync(array $args = [])
 * @method \Aws3\Result describeTrails(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTrailsAsync(array $args = [])
 * @method \Aws3\Result getEventSelectors(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getEventSelectorsAsync(array $args = [])
 * @method \Aws3\Result getTrailStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTrailStatusAsync(array $args = [])
 * @method \Aws3\Result listPublicKeys(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPublicKeysAsync(array $args = [])
 * @method \Aws3\Result listTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsAsync(array $args = [])
 * @method \Aws3\Result lookupEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise lookupEventsAsync(array $args = [])
 * @method \Aws3\Result putEventSelectors(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putEventSelectorsAsync(array $args = [])
 * @method \Aws3\Result removeTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeTagsAsync(array $args = [])
 * @method \Aws3\Result startLogging(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startLoggingAsync(array $args = [])
 * @method \Aws3\Result stopLogging(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopLoggingAsync(array $args = [])
 * @method \Aws3\Result updateTrail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateTrailAsync(array $args = [])
 */
class CloudTrailClient extends AwsClient {}
