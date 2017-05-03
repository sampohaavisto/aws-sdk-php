<?php
namespace Aws3\Sfn;

use Aws3\AwsClient;

/**
 * This client is used to interact with the **AWS Step Functions** service.
 * @method \Aws3\Result createActivity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createActivityAsync(array $args = [])
 * @method \Aws3\Result createStateMachine(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createStateMachineAsync(array $args = [])
 * @method \Aws3\Result deleteActivity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteActivityAsync(array $args = [])
 * @method \Aws3\Result deleteStateMachine(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteStateMachineAsync(array $args = [])
 * @method \Aws3\Result describeActivity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeActivityAsync(array $args = [])
 * @method \Aws3\Result describeExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeExecutionAsync(array $args = [])
 * @method \Aws3\Result describeStateMachine(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStateMachineAsync(array $args = [])
 * @method \Aws3\Result getActivityTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getActivityTaskAsync(array $args = [])
 * @method \Aws3\Result getExecutionHistory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getExecutionHistoryAsync(array $args = [])
 * @method \Aws3\Result listActivities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listActivitiesAsync(array $args = [])
 * @method \Aws3\Result listExecutions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listExecutionsAsync(array $args = [])
 * @method \Aws3\Result listStateMachines(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listStateMachinesAsync(array $args = [])
 * @method \Aws3\Result sendTaskFailure(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendTaskFailureAsync(array $args = [])
 * @method \Aws3\Result sendTaskHeartbeat(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendTaskHeartbeatAsync(array $args = [])
 * @method \Aws3\Result sendTaskSuccess(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendTaskSuccessAsync(array $args = [])
 * @method \Aws3\Result startExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startExecutionAsync(array $args = [])
 * @method \Aws3\Result stopExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopExecutionAsync(array $args = [])
 */
class SfnClient extends AwsClient {}
