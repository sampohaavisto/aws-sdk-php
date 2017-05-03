<?php
namespace Aws3\CloudWatch;

use Aws3\AwsClient;

/**
 * This client is used to interact with the **Amazon CloudWatch** service.
 *
 * @method \Aws3\Result deleteAlarms(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAlarmsAsync(array $args = [])
 * @method \Aws3\Result describeAlarmHistory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAlarmHistoryAsync(array $args = [])
 * @method \Aws3\Result describeAlarms(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAlarmsAsync(array $args = [])
 * @method \Aws3\Result describeAlarmsForMetric(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAlarmsForMetricAsync(array $args = [])
 * @method \Aws3\Result disableAlarmActions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableAlarmActionsAsync(array $args = [])
 * @method \Aws3\Result enableAlarmActions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableAlarmActionsAsync(array $args = [])
 * @method \Aws3\Result getMetricStatistics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMetricStatisticsAsync(array $args = [])
 * @method \Aws3\Result listMetrics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listMetricsAsync(array $args = [])
 * @method \Aws3\Result putMetricAlarm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putMetricAlarmAsync(array $args = [])
 * @method \Aws3\Result putMetricData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putMetricDataAsync(array $args = [])
 * @method \Aws3\Result setAlarmState(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setAlarmStateAsync(array $args = [])
 */
class CloudWatchClient extends AwsClient {}
