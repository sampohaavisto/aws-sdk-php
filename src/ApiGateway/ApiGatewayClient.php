<?php
namespace Aws3\ApiGateway;

use Aws3\AwsClient;
use Aws3\CommandInterface;
use Psr\Http\Message\RequestInterface;

/**
 * This client is used to interact with the **AWS API Gateway** service.
 *
 * @method \Aws3\Result createApiKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createApiKeyAsync(array $args = [])
 * @method \Aws3\Result createAuthorizer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAuthorizerAsync(array $args = [])
 * @method \Aws3\Result createBasePathMapping(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBasePathMappingAsync(array $args = [])
 * @method \Aws3\Result createDeployment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDeploymentAsync(array $args = [])
 * @method \Aws3\Result createDocumentationPart(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDocumentationPartAsync(array $args = [])
 * @method \Aws3\Result createDocumentationVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDocumentationVersionAsync(array $args = [])
 * @method \Aws3\Result createDomainName(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDomainNameAsync(array $args = [])
 * @method \Aws3\Result createModel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createModelAsync(array $args = [])
 * @method \Aws3\Result createRequestValidator(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRequestValidatorAsync(array $args = [])
 * @method \Aws3\Result createResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createResourceAsync(array $args = [])
 * @method \Aws3\Result createRestApi(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRestApiAsync(array $args = [])
 * @method \Aws3\Result createStage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createStageAsync(array $args = [])
 * @method \Aws3\Result createUsagePlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createUsagePlanAsync(array $args = [])
 * @method \Aws3\Result createUsagePlanKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createUsagePlanKeyAsync(array $args = [])
 * @method \Aws3\Result deleteApiKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteApiKeyAsync(array $args = [])
 * @method \Aws3\Result deleteAuthorizer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAuthorizerAsync(array $args = [])
 * @method \Aws3\Result deleteBasePathMapping(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBasePathMappingAsync(array $args = [])
 * @method \Aws3\Result deleteClientCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteClientCertificateAsync(array $args = [])
 * @method \Aws3\Result deleteDeployment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDeploymentAsync(array $args = [])
 * @method \Aws3\Result deleteDocumentationPart(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDocumentationPartAsync(array $args = [])
 * @method \Aws3\Result deleteDocumentationVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDocumentationVersionAsync(array $args = [])
 * @method \Aws3\Result deleteDomainName(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDomainNameAsync(array $args = [])
 * @method \Aws3\Result deleteIntegration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteIntegrationAsync(array $args = [])
 * @method \Aws3\Result deleteIntegrationResponse(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteIntegrationResponseAsync(array $args = [])
 * @method \Aws3\Result deleteMethod(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMethodAsync(array $args = [])
 * @method \Aws3\Result deleteMethodResponse(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMethodResponseAsync(array $args = [])
 * @method \Aws3\Result deleteModel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteModelAsync(array $args = [])
 * @method \Aws3\Result deleteRequestValidator(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRequestValidatorAsync(array $args = [])
 * @method \Aws3\Result deleteResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteResourceAsync(array $args = [])
 * @method \Aws3\Result deleteRestApi(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRestApiAsync(array $args = [])
 * @method \Aws3\Result deleteStage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteStageAsync(array $args = [])
 * @method \Aws3\Result deleteUsagePlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteUsagePlanAsync(array $args = [])
 * @method \Aws3\Result deleteUsagePlanKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteUsagePlanKeyAsync(array $args = [])
 * @method \Aws3\Result flushStageAuthorizersCache(array $args = [])
 * @method \GuzzleHttp\Promise\Promise flushStageAuthorizersCacheAsync(array $args = [])
 * @method \Aws3\Result flushStageCache(array $args = [])
 * @method \GuzzleHttp\Promise\Promise flushStageCacheAsync(array $args = [])
 * @method \Aws3\Result generateClientCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise generateClientCertificateAsync(array $args = [])
 * @method \Aws3\Result getAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAccountAsync(array $args = [])
 * @method \Aws3\Result getApiKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getApiKeyAsync(array $args = [])
 * @method \Aws3\Result getApiKeys(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getApiKeysAsync(array $args = [])
 * @method \Aws3\Result getAuthorizer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAuthorizerAsync(array $args = [])
 * @method \Aws3\Result getAuthorizers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAuthorizersAsync(array $args = [])
 * @method \Aws3\Result getBasePathMapping(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBasePathMappingAsync(array $args = [])
 * @method \Aws3\Result getBasePathMappings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBasePathMappingsAsync(array $args = [])
 * @method \Aws3\Result getClientCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getClientCertificateAsync(array $args = [])
 * @method \Aws3\Result getClientCertificates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getClientCertificatesAsync(array $args = [])
 * @method \Aws3\Result getDeployment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDeploymentAsync(array $args = [])
 * @method \Aws3\Result getDeployments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDeploymentsAsync(array $args = [])
 * @method \Aws3\Result getDocumentationPart(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDocumentationPartAsync(array $args = [])
 * @method \Aws3\Result getDocumentationParts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDocumentationPartsAsync(array $args = [])
 * @method \Aws3\Result getDocumentationVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDocumentationVersionAsync(array $args = [])
 * @method \Aws3\Result getDocumentationVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDocumentationVersionsAsync(array $args = [])
 * @method \Aws3\Result getDomainName(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDomainNameAsync(array $args = [])
 * @method \Aws3\Result getDomainNames(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDomainNamesAsync(array $args = [])
 * @method \Aws3\Result getExport(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getExportAsync(array $args = [])
 * @method \Aws3\Result getIntegration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getIntegrationAsync(array $args = [])
 * @method \Aws3\Result getIntegrationResponse(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getIntegrationResponseAsync(array $args = [])
 * @method \Aws3\Result getMethod(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMethodAsync(array $args = [])
 * @method \Aws3\Result getMethodResponse(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMethodResponseAsync(array $args = [])
 * @method \Aws3\Result getModel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getModelAsync(array $args = [])
 * @method \Aws3\Result getModelTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getModelTemplateAsync(array $args = [])
 * @method \Aws3\Result getModels(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getModelsAsync(array $args = [])
 * @method \Aws3\Result getRequestValidator(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRequestValidatorAsync(array $args = [])
 * @method \Aws3\Result getRequestValidators(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRequestValidatorsAsync(array $args = [])
 * @method \Aws3\Result getResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResourceAsync(array $args = [])
 * @method \Aws3\Result getResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResourcesAsync(array $args = [])
 * @method \Aws3\Result getRestApi(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRestApiAsync(array $args = [])
 * @method \Aws3\Result getRestApis(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRestApisAsync(array $args = [])
 * @method \Aws3\Result getSdk(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSdkAsync(array $args = [])
 * @method \Aws3\Result getSdkType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSdkTypeAsync(array $args = [])
 * @method \Aws3\Result getSdkTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSdkTypesAsync(array $args = [])
 * @method \Aws3\Result getStage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getStageAsync(array $args = [])
 * @method \Aws3\Result getStages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getStagesAsync(array $args = [])
 * @method \Aws3\Result getUsage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getUsageAsync(array $args = [])
 * @method \Aws3\Result getUsagePlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getUsagePlanAsync(array $args = [])
 * @method \Aws3\Result getUsagePlanKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getUsagePlanKeyAsync(array $args = [])
 * @method \Aws3\Result getUsagePlanKeys(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getUsagePlanKeysAsync(array $args = [])
 * @method \Aws3\Result getUsagePlans(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getUsagePlansAsync(array $args = [])
 * @method \Aws3\Result importApiKeys(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importApiKeysAsync(array $args = [])
 * @method \Aws3\Result importDocumentationParts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importDocumentationPartsAsync(array $args = [])
 * @method \Aws3\Result importRestApi(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importRestApiAsync(array $args = [])
 * @method \Aws3\Result putIntegration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putIntegrationAsync(array $args = [])
 * @method \Aws3\Result putIntegrationResponse(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putIntegrationResponseAsync(array $args = [])
 * @method \Aws3\Result putMethod(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putMethodAsync(array $args = [])
 * @method \Aws3\Result putMethodResponse(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putMethodResponseAsync(array $args = [])
 * @method \Aws3\Result putRestApi(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putRestApiAsync(array $args = [])
 * @method \Aws3\Result testInvokeAuthorizer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise testInvokeAuthorizerAsync(array $args = [])
 * @method \Aws3\Result testInvokeMethod(array $args = [])
 * @method \GuzzleHttp\Promise\Promise testInvokeMethodAsync(array $args = [])
 * @method \Aws3\Result updateAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAccountAsync(array $args = [])
 * @method \Aws3\Result updateApiKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateApiKeyAsync(array $args = [])
 * @method \Aws3\Result updateAuthorizer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAuthorizerAsync(array $args = [])
 * @method \Aws3\Result updateBasePathMapping(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateBasePathMappingAsync(array $args = [])
 * @method \Aws3\Result updateClientCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateClientCertificateAsync(array $args = [])
 * @method \Aws3\Result updateDeployment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDeploymentAsync(array $args = [])
 * @method \Aws3\Result updateDocumentationPart(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDocumentationPartAsync(array $args = [])
 * @method \Aws3\Result updateDocumentationVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDocumentationVersionAsync(array $args = [])
 * @method \Aws3\Result updateDomainName(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDomainNameAsync(array $args = [])
 * @method \Aws3\Result updateIntegration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateIntegrationAsync(array $args = [])
 * @method \Aws3\Result updateIntegrationResponse(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateIntegrationResponseAsync(array $args = [])
 * @method \Aws3\Result updateMethod(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateMethodAsync(array $args = [])
 * @method \Aws3\Result updateMethodResponse(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateMethodResponseAsync(array $args = [])
 * @method \Aws3\Result updateModel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateModelAsync(array $args = [])
 * @method \Aws3\Result updateRequestValidator(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRequestValidatorAsync(array $args = [])
 * @method \Aws3\Result updateResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateResourceAsync(array $args = [])
 * @method \Aws3\Result updateRestApi(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRestApiAsync(array $args = [])
 * @method \Aws3\Result updateStage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateStageAsync(array $args = [])
 * @method \Aws3\Result updateUsage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateUsageAsync(array $args = [])
 * @method \Aws3\Result updateUsagePlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateUsagePlanAsync(array $args = [])
 */
class ApiGatewayClient extends AwsClient
{
    public function __construct(array $args)
    {
        parent::__construct($args);
        $stack = $this->getHandlerList();
        $stack->appendBuild([__CLASS__, '_add_accept_header']);
    }

    public static function _add_accept_header(callable $handler)
    {
        return function (
            CommandInterface $command,
            RequestInterface $request
        ) use ($handler) {
            $request = $request->withHeader('Accept', 'application/json');

            return $handler($command, $request);
        };
    }
}
