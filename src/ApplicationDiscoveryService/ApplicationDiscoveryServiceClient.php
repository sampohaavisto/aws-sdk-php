<?php
namespace Aws3\ApplicationDiscoveryService;

use Aws3\AwsClient;

/**
 * This client is used to interact with the **AWS Application Discovery Service** service.
 * @method \Aws3\Result associateConfigurationItemsToApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateConfigurationItemsToApplicationAsync(array $args = [])
 * @method \Aws3\Result createApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createApplicationAsync(array $args = [])
 * @method \Aws3\Result createTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTagsAsync(array $args = [])
 * @method \Aws3\Result deleteApplications(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteApplicationsAsync(array $args = [])
 * @method \Aws3\Result deleteTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTagsAsync(array $args = [])
 * @method \Aws3\Result describeAgents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAgentsAsync(array $args = [])
 * @method \Aws3\Result describeConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeConfigurationsAsync(array $args = [])
 * @method \Aws3\Result describeExportConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeExportConfigurationsAsync(array $args = [])
 * @method \Aws3\Result describeExportTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeExportTasksAsync(array $args = [])
 * @method \Aws3\Result describeTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTagsAsync(array $args = [])
 * @method \Aws3\Result disassociateConfigurationItemsFromApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateConfigurationItemsFromApplicationAsync(array $args = [])
 * @method \Aws3\Result exportConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise exportConfigurationsAsync(array $args = [])
 * @method \Aws3\Result getDiscoverySummary(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDiscoverySummaryAsync(array $args = [])
 * @method \Aws3\Result listConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listConfigurationsAsync(array $args = [])
 * @method \Aws3\Result listServerNeighbors(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listServerNeighborsAsync(array $args = [])
 * @method \Aws3\Result startDataCollectionByAgentIds(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startDataCollectionByAgentIdsAsync(array $args = [])
 * @method \Aws3\Result startExportTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startExportTaskAsync(array $args = [])
 * @method \Aws3\Result stopDataCollectionByAgentIds(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopDataCollectionByAgentIdsAsync(array $args = [])
 * @method \Aws3\Result updateApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateApplicationAsync(array $args = [])
 */
class ApplicationDiscoveryServiceClient extends AwsClient {}
