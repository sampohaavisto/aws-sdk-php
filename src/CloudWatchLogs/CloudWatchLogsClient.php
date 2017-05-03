<?php
namespace Aws3\CloudWatchLogs;

use Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon CloudWatch Logs** service.
 *
 * @method \Aws\Result cancelExportTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelExportTaskAsync(array $args = [])
 * @method \Aws\Result createExportTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createExportTaskAsync(array $args = [])
 * @method \Aws\Result createLogGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLogGroupAsync(array $args = [])
 * @method \Aws\Result createLogStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLogStreamAsync(array $args = [])
 * @method \Aws\Result deleteDestination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDestinationAsync(array $args = [])
 * @method \Aws\Result deleteLogGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLogGroupAsync(array $args = [])
 * @method \Aws\Result deleteLogStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLogStreamAsync(array $args = [])
 * @method \Aws\Result deleteMetricFilter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMetricFilterAsync(array $args = [])
 * @method \Aws\Result deleteRetentionPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRetentionPolicyAsync(array $args = [])
 * @method \Aws\Result deleteSubscriptionFilter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSubscriptionFilterAsync(array $args = [])
 * @method \Aws\Result describeDestinations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDestinationsAsync(array $args = [])
 * @method \Aws\Result describeExportTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeExportTasksAsync(array $args = [])
 * @method \Aws\Result describeLogGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLogGroupsAsync(array $args = [])
 * @method \Aws\Result describeLogStreams(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLogStreamsAsync(array $args = [])
 * @method \Aws\Result describeMetricFilters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMetricFiltersAsync(array $args = [])
 * @method \Aws\Result describeSubscriptionFilters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSubscriptionFiltersAsync(array $args = [])
 * @method \Aws\Result filterLogEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise filterLogEventsAsync(array $args = [])
 * @method \Aws\Result getLogEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLogEventsAsync(array $args = [])
 * @method \Aws\Result listTagsLogGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsLogGroupAsync(array $args = [])
 * @method \Aws\Result putDestination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putDestinationAsync(array $args = [])
 * @method \Aws\Result putDestinationPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putDestinationPolicyAsync(array $args = [])
 * @method \Aws\Result putLogEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putLogEventsAsync(array $args = [])
 * @method \Aws\Result putMetricFilter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putMetricFilterAsync(array $args = [])
 * @method \Aws\Result putRetentionPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putRetentionPolicyAsync(array $args = [])
 * @method \Aws\Result putSubscriptionFilter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putSubscriptionFilterAsync(array $args = [])
 * @method \Aws\Result tagLogGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagLogGroupAsync(array $args = [])
 * @method \Aws\Result testMetricFilter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise testMetricFilterAsync(array $args = [])
 * @method \Aws\Result untagLogGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagLogGroupAsync(array $args = [])
 */
class CloudWatchLogsClient extends AwsClient {}
