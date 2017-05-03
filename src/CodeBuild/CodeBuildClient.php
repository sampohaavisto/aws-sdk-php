<?php
namespace Aws3\CodeBuild;

use Aws3\AwsClient;

/**
 * This client is used to interact with the **AWS CodeBuild** service.
 * @method \Aws3\Result batchGetBuilds(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetBuildsAsync(array $args = [])
 * @method \Aws3\Result batchGetProjects(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetProjectsAsync(array $args = [])
 * @method \Aws3\Result createProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createProjectAsync(array $args = [])
 * @method \Aws3\Result deleteProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteProjectAsync(array $args = [])
 * @method \Aws3\Result listBuilds(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBuildsAsync(array $args = [])
 * @method \Aws3\Result listBuildsForProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBuildsForProjectAsync(array $args = [])
 * @method \Aws3\Result listCuratedEnvironmentImages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCuratedEnvironmentImagesAsync(array $args = [])
 * @method \Aws3\Result listProjects(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProjectsAsync(array $args = [])
 * @method \Aws3\Result startBuild(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startBuildAsync(array $args = [])
 * @method \Aws3\Result stopBuild(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopBuildAsync(array $args = [])
 * @method \Aws3\Result updateProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateProjectAsync(array $args = [])
 */
class CodeBuildClient extends AwsClient {}
