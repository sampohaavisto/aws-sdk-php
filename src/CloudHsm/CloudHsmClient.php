<?php
namespace Aws3\CloudHsm;

use Aws3\Api\ApiProvider;
use Aws3\Api\DocModel;
use Aws3\Api\Service;
use Aws3\AwsClient;

/**
 * This client is used to interact with **AWS CloudHSM**.
 *
 * @method \Aws3\Result addTagsToResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addTagsToResourceAsync(array $args = [])
 * @method \Aws3\Result createHapg(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createHapgAsync(array $args = [])
 * @method \Aws3\Result createHsm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createHsmAsync(array $args = [])
 * @method \Aws3\Result createLunaClient(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLunaClientAsync(array $args = [])
 * @method \Aws3\Result deleteHapg(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteHapgAsync(array $args = [])
 * @method \Aws3\Result deleteHsm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteHsmAsync(array $args = [])
 * @method \Aws3\Result deleteLunaClient(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLunaClientAsync(array $args = [])
 * @method \Aws3\Result describeHapg(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeHapgAsync(array $args = [])
 * @method \Aws3\Result describeHsm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeHsmAsync(array $args = [])
 * @method \Aws3\Result describeLunaClient(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLunaClientAsync(array $args = [])
 * @method \Aws3\Result getConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getConfigAsync(array $args = [])
 * @method \Aws3\Result listAvailableZones(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAvailableZonesAsync(array $args = [])
 * @method \Aws3\Result listHapgs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listHapgsAsync(array $args = [])
 * @method \Aws3\Result listHsms(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listHsmsAsync(array $args = [])
 * @method \Aws3\Result listLunaClients(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listLunaClientsAsync(array $args = [])
 * @method \Aws3\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws3\Result modifyHapg(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyHapgAsync(array $args = [])
 * @method \Aws3\Result modifyHsm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyHsmAsync(array $args = [])
 * @method \Aws3\Result modifyLunaClient(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyLunaClientAsync(array $args = [])
 * @method \Aws3\Result removeTagsFromResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeTagsFromResourceAsync(array $args = [])
 */
class CloudHsmClient extends AwsClient
{
    public function __call($name, array $args)
    {
        // Overcomes a naming collision with `AwsClient::getConfig`.
        if (lcfirst($name) === 'getConfigFiles') {
            $name = 'GetConfig';
        } elseif (lcfirst($name) === 'getConfigFilesAsync') {
            $name = 'GetConfigAsync';
        }

        return parent::__call($name, $args);
    }

    /**
     * @internal
     * @codeCoverageIgnore
     */
    public static function applyDocFilters(array $api, array $docs)
    {
        // Overcomes a naming collision with `AwsClient::getConfig`.
        $api['operations']['GetConfigFiles'] = $api['operations']['GetConfig'];
        $docs['operations']['GetConfigFiles'] = $docs['operations']['GetConfig'];
        unset($api['operations']['GetConfig'], $docs['operations']['GetConfig']);
        ksort($api['operations']);

        return [
            new Service($api, ApiProvider::defaultProvider()),
            new DocModel($docs)
        ];
    }
}
