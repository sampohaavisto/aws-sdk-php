<?php
namespace Aws3\CodeCommit;

use Aws3\AwsClient;

/**
 * This client is used to interact with the **AWS CodeCommit** service.
 *
 * @method \Aws3\Result batchGetRepositories(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetRepositoriesAsync(array $args = [])
 * @method \Aws3\Result createBranch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBranchAsync(array $args = [])
 * @method \Aws3\Result createRepository(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRepositoryAsync(array $args = [])
 * @method \Aws3\Result deleteRepository(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRepositoryAsync(array $args = [])
 * @method \Aws3\Result getBlob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBlobAsync(array $args = [])
 * @method \Aws3\Result getBranch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBranchAsync(array $args = [])
 * @method \Aws3\Result getCommit(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCommitAsync(array $args = [])
 * @method \Aws3\Result getDifferences(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDifferencesAsync(array $args = [])
 * @method \Aws3\Result getRepository(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRepositoryAsync(array $args = [])
 * @method \Aws3\Result getRepositoryTriggers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRepositoryTriggersAsync(array $args = [])
 * @method \Aws3\Result listBranches(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBranchesAsync(array $args = [])
 * @method \Aws3\Result listRepositories(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRepositoriesAsync(array $args = [])
 * @method \Aws3\Result putRepositoryTriggers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putRepositoryTriggersAsync(array $args = [])
 * @method \Aws3\Result testRepositoryTriggers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise testRepositoryTriggersAsync(array $args = [])
 * @method \Aws3\Result updateDefaultBranch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDefaultBranchAsync(array $args = [])
 * @method \Aws3\Result updateRepositoryDescription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRepositoryDescriptionAsync(array $args = [])
 * @method \Aws3\Result updateRepositoryName(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRepositoryNameAsync(array $args = [])
 */
class CodeCommitClient extends AwsClient {}
