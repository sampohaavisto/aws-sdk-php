<?php
namespace Aws3\Appstream;

use Aws3\AwsClient;

/**
 * This client is used to interact with the **Amazon AppStream** service.
 * @method \Aws3\Result associateFleet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateFleetAsync(array $args = [])
 * @method \Aws3\Result createFleet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFleetAsync(array $args = [])
 * @method \Aws3\Result createStack(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createStackAsync(array $args = [])
 * @method \Aws3\Result createStreamingURL(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createStreamingURLAsync(array $args = [])
 * @method \Aws3\Result deleteFleet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFleetAsync(array $args = [])
 * @method \Aws3\Result deleteStack(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteStackAsync(array $args = [])
 * @method \Aws3\Result describeFleets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFleetsAsync(array $args = [])
 * @method \Aws3\Result describeImages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeImagesAsync(array $args = [])
 * @method \Aws3\Result describeSessions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSessionsAsync(array $args = [])
 * @method \Aws3\Result describeStacks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStacksAsync(array $args = [])
 * @method \Aws3\Result disassociateFleet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateFleetAsync(array $args = [])
 * @method \Aws3\Result expireSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise expireSessionAsync(array $args = [])
 * @method \Aws3\Result listAssociatedFleets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAssociatedFleetsAsync(array $args = [])
 * @method \Aws3\Result listAssociatedStacks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAssociatedStacksAsync(array $args = [])
 * @method \Aws3\Result startFleet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startFleetAsync(array $args = [])
 * @method \Aws3\Result stopFleet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopFleetAsync(array $args = [])
 * @method \Aws3\Result updateFleet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateFleetAsync(array $args = [])
 * @method \Aws3\Result updateStack(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateStackAsync(array $args = [])
 */
class AppstreamClient extends AwsClient {}
