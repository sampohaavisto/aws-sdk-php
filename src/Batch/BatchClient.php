<?php
namespace Aws3\Batch;

use Aws3\AwsClient;

/**
 * This client is used to interact with the **AWS Batch** service.
 * @method \Aws3\Result cancelJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelJobAsync(array $args = [])
 * @method \Aws3\Result createComputeEnvironment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createComputeEnvironmentAsync(array $args = [])
 * @method \Aws3\Result createJobQueue(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createJobQueueAsync(array $args = [])
 * @method \Aws3\Result deleteComputeEnvironment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteComputeEnvironmentAsync(array $args = [])
 * @method \Aws3\Result deleteJobQueue(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteJobQueueAsync(array $args = [])
 * @method \Aws3\Result deregisterJobDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterJobDefinitionAsync(array $args = [])
 * @method \Aws3\Result describeComputeEnvironments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeComputeEnvironmentsAsync(array $args = [])
 * @method \Aws3\Result describeJobDefinitions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeJobDefinitionsAsync(array $args = [])
 * @method \Aws3\Result describeJobQueues(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeJobQueuesAsync(array $args = [])
 * @method \Aws3\Result describeJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeJobsAsync(array $args = [])
 * @method \Aws3\Result listJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listJobsAsync(array $args = [])
 * @method \Aws3\Result registerJobDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerJobDefinitionAsync(array $args = [])
 * @method \Aws3\Result submitJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise submitJobAsync(array $args = [])
 * @method \Aws3\Result terminateJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise terminateJobAsync(array $args = [])
 * @method \Aws3\Result updateComputeEnvironment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateComputeEnvironmentAsync(array $args = [])
 * @method \Aws3\Result updateJobQueue(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateJobQueueAsync(array $args = [])
 */
class BatchClient extends AwsClient {}
