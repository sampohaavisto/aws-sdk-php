<?php
namespace Aws3\SnowBall;

use Aws3\AwsClient;

/**
 * This client is used to interact with the **Amazon Import/Export Snowball** service.
 * @method \Aws3\Result cancelCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelClusterAsync(array $args = [])
 * @method \Aws3\Result cancelJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelJobAsync(array $args = [])
 * @method \Aws3\Result createAddress(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAddressAsync(array $args = [])
 * @method \Aws3\Result createCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createClusterAsync(array $args = [])
 * @method \Aws3\Result createJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createJobAsync(array $args = [])
 * @method \Aws3\Result describeAddress(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAddressAsync(array $args = [])
 * @method \Aws3\Result describeAddresses(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAddressesAsync(array $args = [])
 * @method \Aws3\Result describeCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeClusterAsync(array $args = [])
 * @method \Aws3\Result describeJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeJobAsync(array $args = [])
 * @method \Aws3\Result getJobManifest(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getJobManifestAsync(array $args = [])
 * @method \Aws3\Result getJobUnlockCode(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getJobUnlockCodeAsync(array $args = [])
 * @method \Aws3\Result getSnowballUsage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSnowballUsageAsync(array $args = [])
 * @method \Aws3\Result listClusterJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listClusterJobsAsync(array $args = [])
 * @method \Aws3\Result listClusters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listClustersAsync(array $args = [])
 * @method \Aws3\Result listJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listJobsAsync(array $args = [])
 * @method \Aws3\Result updateCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateClusterAsync(array $args = [])
 * @method \Aws3\Result updateJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateJobAsync(array $args = [])
 */
class SnowBallClient extends AwsClient {}
