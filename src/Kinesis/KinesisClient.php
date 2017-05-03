<?php
namespace Aws3\Kinesis;

use Aws3\AwsClient;

/**
 * This client is used to interact with the **Amazon Kinesis** service.
 *
 * @method \Aws3\Result addTagsToStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addTagsToStreamAsync(array $args = [])
 * @method \Aws3\Result createStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createStreamAsync(array $args = [])
 * @method \Aws3\Result decreaseStreamRetentionPeriod(array $args = [])
 * @method \GuzzleHttp\Promise\Promise decreaseStreamRetentionPeriodAsync(array $args = [])
 * @method \Aws3\Result deleteStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteStreamAsync(array $args = [])
 * @method \Aws3\Result describeLimits(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLimitsAsync(array $args = [])
 * @method \Aws3\Result describeStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStreamAsync(array $args = [])
 * @method \Aws3\Result disableEnhancedMonitoring(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableEnhancedMonitoringAsync(array $args = [])
 * @method \Aws3\Result enableEnhancedMonitoring(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableEnhancedMonitoringAsync(array $args = [])
 * @method \Aws3\Result getRecords(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRecordsAsync(array $args = [])
 * @method \Aws3\Result getShardIterator(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getShardIteratorAsync(array $args = [])
 * @method \Aws3\Result increaseStreamRetentionPeriod(array $args = [])
 * @method \GuzzleHttp\Promise\Promise increaseStreamRetentionPeriodAsync(array $args = [])
 * @method \Aws3\Result listStreams(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listStreamsAsync(array $args = [])
 * @method \Aws3\Result listTagsForStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForStreamAsync(array $args = [])
 * @method \Aws3\Result mergeShards(array $args = [])
 * @method \GuzzleHttp\Promise\Promise mergeShardsAsync(array $args = [])
 * @method \Aws3\Result putRecord(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putRecordAsync(array $args = [])
 * @method \Aws3\Result putRecords(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putRecordsAsync(array $args = [])
 * @method \Aws3\Result removeTagsFromStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeTagsFromStreamAsync(array $args = [])
 * @method \Aws3\Result splitShard(array $args = [])
 * @method \GuzzleHttp\Promise\Promise splitShardAsync(array $args = [])
 * @method \Aws3\Result updateShardCount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateShardCountAsync(array $args = [])
 */
class KinesisClient extends AwsClient {}
