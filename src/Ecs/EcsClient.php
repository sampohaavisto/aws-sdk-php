<?php
namespace Aws3\Ecs;

use Aws3\AwsClient;

/**
 * This client is used to interact with **Amazon ECS**.
 *
 * @method \Aws3\Result createCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createClusterAsync(array $args = [])
 * @method \Aws3\Result createService(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createServiceAsync(array $args = [])
 * @method \Aws3\Result deleteAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAttributesAsync(array $args = [])
 * @method \Aws3\Result deleteCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteClusterAsync(array $args = [])
 * @method \Aws3\Result deleteService(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteServiceAsync(array $args = [])
 * @method \Aws3\Result deregisterContainerInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterContainerInstanceAsync(array $args = [])
 * @method \Aws3\Result deregisterTaskDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterTaskDefinitionAsync(array $args = [])
 * @method \Aws3\Result describeClusters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeClustersAsync(array $args = [])
 * @method \Aws3\Result describeContainerInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeContainerInstancesAsync(array $args = [])
 * @method \Aws3\Result describeServices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeServicesAsync(array $args = [])
 * @method \Aws3\Result describeTaskDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTaskDefinitionAsync(array $args = [])
 * @method \Aws3\Result describeTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTasksAsync(array $args = [])
 * @method \Aws3\Result discoverPollEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise discoverPollEndpointAsync(array $args = [])
 * @method \Aws3\Result listAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAttributesAsync(array $args = [])
 * @method \Aws3\Result listClusters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listClustersAsync(array $args = [])
 * @method \Aws3\Result listContainerInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listContainerInstancesAsync(array $args = [])
 * @method \Aws3\Result listServices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listServicesAsync(array $args = [])
 * @method \Aws3\Result listTaskDefinitionFamilies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTaskDefinitionFamiliesAsync(array $args = [])
 * @method \Aws3\Result listTaskDefinitions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTaskDefinitionsAsync(array $args = [])
 * @method \Aws3\Result listTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTasksAsync(array $args = [])
 * @method \Aws3\Result putAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putAttributesAsync(array $args = [])
 * @method \Aws3\Result registerContainerInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerContainerInstanceAsync(array $args = [])
 * @method \Aws3\Result registerTaskDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerTaskDefinitionAsync(array $args = [])
 * @method \Aws3\Result runTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise runTaskAsync(array $args = [])
 * @method \Aws3\Result startTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startTaskAsync(array $args = [])
 * @method \Aws3\Result stopTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopTaskAsync(array $args = [])
 * @method \Aws3\Result submitContainerStateChange(array $args = [])
 * @method \GuzzleHttp\Promise\Promise submitContainerStateChangeAsync(array $args = [])
 * @method \Aws3\Result submitTaskStateChange(array $args = [])
 * @method \GuzzleHttp\Promise\Promise submitTaskStateChangeAsync(array $args = [])
 * @method \Aws3\Result updateContainerAgent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateContainerAgentAsync(array $args = [])
 * @method \Aws3\Result updateContainerInstancesState(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateContainerInstancesStateAsync(array $args = [])
 * @method \Aws3\Result updateService(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateServiceAsync(array $args = [])
 */
class EcsClient extends AwsClient {}
