<?php
namespace Aws3\Ecr;

use Aws3\AwsClient;

/**
 * This client is used to interact with the **Amazon EC2 Container Registry** service.
 *
 * @method \Aws3\Result batchCheckLayerAvailability(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchCheckLayerAvailabilityAsync(array $args = [])
 * @method \Aws3\Result batchDeleteImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchDeleteImageAsync(array $args = [])
 * @method \Aws3\Result batchGetImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetImageAsync(array $args = [])
 * @method \Aws3\Result completeLayerUpload(array $args = [])
 * @method \GuzzleHttp\Promise\Promise completeLayerUploadAsync(array $args = [])
 * @method \Aws3\Result createRepository(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRepositoryAsync(array $args = [])
 * @method \Aws3\Result deleteRepository(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRepositoryAsync(array $args = [])
 * @method \Aws3\Result deleteRepositoryPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRepositoryPolicyAsync(array $args = [])
 * @method \Aws3\Result describeImages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeImagesAsync(array $args = [])
 * @method \Aws3\Result describeRepositories(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRepositoriesAsync(array $args = [])
 * @method \Aws3\Result getAuthorizationToken(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAuthorizationTokenAsync(array $args = [])
 * @method \Aws3\Result getDownloadUrlForLayer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDownloadUrlForLayerAsync(array $args = [])
 * @method \Aws3\Result getRepositoryPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRepositoryPolicyAsync(array $args = [])
 * @method \Aws3\Result initiateLayerUpload(array $args = [])
 * @method \GuzzleHttp\Promise\Promise initiateLayerUploadAsync(array $args = [])
 * @method \Aws3\Result listImages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listImagesAsync(array $args = [])
 * @method \Aws3\Result putImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putImageAsync(array $args = [])
 * @method \Aws3\Result setRepositoryPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setRepositoryPolicyAsync(array $args = [])
 * @method \Aws3\Result uploadLayerPart(array $args = [])
 * @method \GuzzleHttp\Promise\Promise uploadLayerPartAsync(array $args = [])
 */
class EcrClient extends AwsClient {}
