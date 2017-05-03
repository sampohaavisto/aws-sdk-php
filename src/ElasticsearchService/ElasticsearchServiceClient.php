<?php
namespace Aws3\ElasticsearchService;

use Aws3\AwsClient;

/**
 * This client is used to interact with the **Amazon Elasticsearch Service** service.
 *
 * @method \Aws3\Result addTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addTagsAsync(array $args = [])
 * @method \Aws3\Result createElasticsearchDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createElasticsearchDomainAsync(array $args = [])
 * @method \Aws3\Result deleteElasticsearchDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteElasticsearchDomainAsync(array $args = [])
 * @method \Aws3\Result describeElasticsearchDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeElasticsearchDomainAsync(array $args = [])
 * @method \Aws3\Result describeElasticsearchDomainConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeElasticsearchDomainConfigAsync(array $args = [])
 * @method \Aws3\Result describeElasticsearchDomains(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeElasticsearchDomainsAsync(array $args = [])
 * @method \Aws3\Result describeElasticsearchInstanceTypeLimits(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeElasticsearchInstanceTypeLimitsAsync(array $args = [])
 * @method \Aws3\Result listDomainNames(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDomainNamesAsync(array $args = [])
 * @method \Aws3\Result listElasticsearchInstanceTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listElasticsearchInstanceTypesAsync(array $args = [])
 * @method \Aws3\Result listElasticsearchVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listElasticsearchVersionsAsync(array $args = [])
 * @method \Aws3\Result listTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsAsync(array $args = [])
 * @method \Aws3\Result removeTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeTagsAsync(array $args = [])
 * @method \Aws3\Result updateElasticsearchDomainConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateElasticsearchDomainConfigAsync(array $args = [])
 */
class ElasticsearchServiceClient extends AwsClient {}
