<?php
namespace Aws3;

/**
 * Builds AWS clients based on configuration settings.
 *
 * @method \Aws3\Acm\AcmClient createAcm(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionAcm(array $args = [])
 * @method \Aws3\ApiGateway\ApiGatewayClient createApiGateway(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionApiGateway(array $args = [])
 * @method \Aws3\ApplicationAutoScaling\ApplicationAutoScalingClient createApplicationAutoScaling(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionApplicationAutoScaling(array $args = [])
 * @method \Aws3\ApplicationDiscoveryService\ApplicationDiscoveryServiceClient createApplicationDiscoveryService(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionApplicationDiscoveryService(array $args = [])
 * @method \Aws3\Appstream\AppstreamClient createAppstream(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionAppstream(array $args = [])
 * @method \Aws3\AutoScaling\AutoScalingClient createAutoScaling(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionAutoScaling(array $args = [])
 * @method \Aws3\Batch\BatchClient createBatch(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionBatch(array $args = [])
 * @method \Aws3\Budgets\BudgetsClient createBudgets(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionBudgets(array $args = [])
 * @method \Aws3\CloudDirectory\CloudDirectoryClient createCloudDirectory(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionCloudDirectory(array $args = [])
 * @method \Aws3\CloudFormation\CloudFormationClient createCloudFormation(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionCloudFormation(array $args = [])
 * @method \Aws3\CloudFront\CloudFrontClient createCloudFront(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionCloudFront(array $args = [])
 * @method \Aws3\CloudHsm\CloudHsmClient createCloudHsm(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionCloudHsm(array $args = [])
 * @method \Aws3\CloudSearch\CloudSearchClient createCloudSearch(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionCloudSearch(array $args = [])
 * @method \Aws3\CloudSearchDomain\CloudSearchDomainClient createCloudSearchDomain(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionCloudSearchDomain(array $args = [])
 * @method \Aws3\CloudTrail\CloudTrailClient createCloudTrail(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionCloudTrail(array $args = [])
 * @method \Aws3\CloudWatch\CloudWatchClient createCloudWatch(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionCloudWatch(array $args = [])
 * @method \Aws3\CloudWatchEvents\CloudWatchEventsClient createCloudWatchEvents(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionCloudWatchEvents(array $args = [])
 * @method \Aws3\CloudWatchLogs\CloudWatchLogsClient createCloudWatchLogs(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionCloudWatchLogs(array $args = [])
 * @method \Aws3\CodeBuild\CodeBuildClient createCodeBuild(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionCodeBuild(array $args = [])
 * @method \Aws3\CodeCommit\CodeCommitClient createCodeCommit(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionCodeCommit(array $args = [])
 * @method \Aws3\CodeDeploy\CodeDeployClient createCodeDeploy(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionCodeDeploy(array $args = [])
 * @method \Aws3\CodePipeline\CodePipelineClient createCodePipeline(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionCodePipeline(array $args = [])
 * @method \Aws3\CodeStar\CodeStarClient createCodeStar(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionCodeStar(array $args = [])
 * @method \Aws3\CognitoIdentity\CognitoIdentityClient createCognitoIdentity(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionCognitoIdentity(array $args = [])
 * @method \Aws3\CognitoIdentityProvider\CognitoIdentityProviderClient createCognitoIdentityProvider(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionCognitoIdentityProvider(array $args = [])
 * @method \Aws3\CognitoSync\CognitoSyncClient createCognitoSync(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionCognitoSync(array $args = [])
 * @method \Aws3\ConfigService\ConfigServiceClient createConfigService(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionConfigService(array $args = [])
 * @method \Aws3\CostandUsageReportService\CostandUsageReportServiceClient createCostandUsageReportService(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionCostandUsageReportService(array $args = [])
 * @method \Aws3\DataPipeline\DataPipelineClient createDataPipeline(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionDataPipeline(array $args = [])
 * @method \Aws3\DatabaseMigrationService\DatabaseMigrationServiceClient createDatabaseMigrationService(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionDatabaseMigrationService(array $args = [])
 * @method \Aws3\DeviceFarm\DeviceFarmClient createDeviceFarm(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionDeviceFarm(array $args = [])
 * @method \Aws3\DirectConnect\DirectConnectClient createDirectConnect(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionDirectConnect(array $args = [])
 * @method \Aws3\DirectoryService\DirectoryServiceClient createDirectoryService(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionDirectoryService(array $args = [])
 * @method \Aws3\DynamoDb\DynamoDbClient createDynamoDb(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionDynamoDb(array $args = [])
 * @method \Aws3\DynamoDbStreams\DynamoDbStreamsClient createDynamoDbStreams(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionDynamoDbStreams(array $args = [])
 * @method \Aws3\Ec2\Ec2Client createEc2(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionEc2(array $args = [])
 * @method \Aws3\Ecr\EcrClient createEcr(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionEcr(array $args = [])
 * @method \Aws3\Ecs\EcsClient createEcs(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionEcs(array $args = [])
 * @method \Aws3\Efs\EfsClient createEfs(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionEfs(array $args = [])
 * @method \Aws3\ElastiCache\ElastiCacheClient createElastiCache(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionElastiCache(array $args = [])
 * @method \Aws3\ElasticBeanstalk\ElasticBeanstalkClient createElasticBeanstalk(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionElasticBeanstalk(array $args = [])
 * @method \Aws3\ElasticLoadBalancing\ElasticLoadBalancingClient createElasticLoadBalancing(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionElasticLoadBalancing(array $args = [])
 * @method \Aws3\ElasticLoadBalancingV2\ElasticLoadBalancingV2Client createElasticLoadBalancingV2(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionElasticLoadBalancingV2(array $args = [])
 * @method \Aws3\ElasticTranscoder\ElasticTranscoderClient createElasticTranscoder(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionElasticTranscoder(array $args = [])
 * @method \Aws3\ElasticsearchService\ElasticsearchServiceClient createElasticsearchService(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionElasticsearchService(array $args = [])
 * @method \Aws3\Emr\EmrClient createEmr(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionEmr(array $args = [])
 * @method \Aws3\Firehose\FirehoseClient createFirehose(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionFirehose(array $args = [])
 * @method \Aws3\GameLift\GameLiftClient createGameLift(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionGameLift(array $args = [])
 * @method \Aws3\Glacier\GlacierClient createGlacier(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionGlacier(array $args = [])
 * @method \Aws3\Health\HealthClient createHealth(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionHealth(array $args = [])
 * @method \Aws3\Iam\IamClient createIam(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionIam(array $args = [])
 * @method \Aws3\ImportExport\ImportExportClient createImportExport(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionImportExport(array $args = [])
 * @method \Aws3\Inspector\InspectorClient createInspector(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionInspector(array $args = [])
 * @method \Aws3\Iot\IotClient createIot(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionIot(array $args = [])
 * @method \Aws3\IotDataPlane\IotDataPlaneClient createIotDataPlane(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionIotDataPlane(array $args = [])
 * @method \Aws3\Kinesis\KinesisClient createKinesis(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionKinesis(array $args = [])
 * @method \Aws3\KinesisAnalytics\KinesisAnalyticsClient createKinesisAnalytics(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionKinesisAnalytics(array $args = [])
 * @method \Aws3\Kms\KmsClient createKms(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionKms(array $args = [])
 * @method \Aws3\Lambda\LambdaClient createLambda(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionLambda(array $args = [])
 * @method \Aws3\LexModelBuildingService\LexModelBuildingServiceClient createLexModelBuildingService(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionLexModelBuildingService(array $args = [])
 * @method \Aws3\LexRuntimeService\LexRuntimeServiceClient createLexRuntimeService(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionLexRuntimeService(array $args = [])
 * @method \Aws3\Lightsail\LightsailClient createLightsail(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionLightsail(array $args = [])
 * @method \Aws3\MTurk\MTurkClient createMTurk(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionMTurk(array $args = [])
 * @method \Aws3\MachineLearning\MachineLearningClient createMachineLearning(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionMachineLearning(array $args = [])
 * @method \Aws3\MarketplaceCommerceAnalytics\MarketplaceCommerceAnalyticsClient createMarketplaceCommerceAnalytics(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionMarketplaceCommerceAnalytics(array $args = [])
 * @method \Aws3\MarketplaceMetering\MarketplaceMeteringClient createMarketplaceMetering(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionMarketplaceMetering(array $args = [])
 * @method \Aws3\OpsWorks\OpsWorksClient createOpsWorks(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionOpsWorks(array $args = [])
 * @method \Aws3\OpsWorksCM\OpsWorksCMClient createOpsWorksCM(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionOpsWorksCM(array $args = [])
 * @method \Aws3\Organizations\OrganizationsClient createOrganizations(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionOrganizations(array $args = [])
 * @method \Aws3\Pinpoint\PinpointClient createPinpoint(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionPinpoint(array $args = [])
 * @method \Aws3\Polly\PollyClient createPolly(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionPolly(array $args = [])
 * @method \Aws3\Rds\RdsClient createRds(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionRds(array $args = [])
 * @method \Aws3\Redshift\RedshiftClient createRedshift(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionRedshift(array $args = [])
 * @method \Aws3\Rekognition\RekognitionClient createRekognition(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionRekognition(array $args = [])
 * @method \Aws3\ResourceGroupsTaggingAPI\ResourceGroupsTaggingAPIClient createResourceGroupsTaggingAPI(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionResourceGroupsTaggingAPI(array $args = [])
 * @method \Aws3\Route53\Route53Client createRoute53(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionRoute53(array $args = [])
 * @method \Aws3\Route53Domains\Route53DomainsClient createRoute53Domains(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionRoute53Domains(array $args = [])
 * @method \Aws3\S3\S3Client createS3(array $args = [])
 * @method \Aws3\S3\S3MultiRegionClient createMultiRegionS3(array $args = [])
 * @method \Aws3\ServiceCatalog\ServiceCatalogClient createServiceCatalog(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionServiceCatalog(array $args = [])
 * @method \Aws3\Ses\SesClient createSes(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionSes(array $args = [])
 * @method \Aws3\Sfn\SfnClient createSfn(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionSfn(array $args = [])
 * @method \Aws3\Shield\ShieldClient createShield(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionShield(array $args = [])
 * @method \Aws3\Sms\SmsClient createSms(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionSms(array $args = [])
 * @method \Aws3\SnowBall\SnowBallClient createSnowBall(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionSnowBall(array $args = [])
 * @method \Aws3\Sns\SnsClient createSns(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionSns(array $args = [])
 * @method \Aws3\Sqs\SqsClient createSqs(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionSqs(array $args = [])
 * @method \Aws3\Ssm\SsmClient createSsm(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionSsm(array $args = [])
 * @method \Aws3\StorageGateway\StorageGatewayClient createStorageGateway(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionStorageGateway(array $args = [])
 * @method \Aws3\Sts\StsClient createSts(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionSts(array $args = [])
 * @method \Aws3\Support\SupportClient createSupport(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionSupport(array $args = [])
 * @method \Aws3\Swf\SwfClient createSwf(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionSwf(array $args = [])
 * @method \Aws3\Waf\WafClient createWaf(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionWaf(array $args = [])
 * @method \Aws3\WafRegional\WafRegionalClient createWafRegional(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionWafRegional(array $args = [])
 * @method \Aws3\WorkDocs\WorkDocsClient createWorkDocs(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionWorkDocs(array $args = [])
 * @method \Aws3\WorkSpaces\WorkSpacesClient createWorkSpaces(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionWorkSpaces(array $args = [])
 * @method \Aws3\XRay\XRayClient createXRay(array $args = [])
 * @method \Aws3\MultiRegionClient createMultiRegionXRay(array $args = [])
 */
class Sdk
{
    const VERSION = '3.26.5';

    /** @var array Arguments for creating clients */
    private $args;

    /**
     * Constructs a new SDK object with an associative array of default
     * client settings.
     *
     * @param array $args
     *
     * @throws \InvalidArgumentException
     * @see Aws3\AwsClient::__construct for a list of available options.
     */
    public function __construct(array $args = [])
    {
        $this->args = $args;

        if (!isset($args['handler']) && !isset($args['http_handler'])) {
            $this->args['http_handler'] = default_http_handler();
        }
    }

    public function __call($name, array $args)
    {
        $args = isset($args[0]) ? $args[0] : [];
        if (strpos($name, 'createMultiRegion') === 0) {
            return $this->createMultiRegionClient(substr($name, 17), $args);
        } elseif (strpos($name, 'create') === 0) {
            return $this->createClient(substr($name, 6), $args);
        }

        throw new \BadMethodCallException("Unknown method: {$name}.");
    }

    /**
     * Get a client by name using an array of constructor options.
     *
     * @param string $name Service name or namespace (e.g., DynamoDb, s3).
     * @param array  $args Arguments to configure the client.
     *
     * @return AwsClientInterface
     * @throws \InvalidArgumentException if any required options are missing or
     *                                   the service is not supported.
     * @see Aws3\AwsClient::__construct for a list of available options for args.
     */
    public function createClient($name, array $args = [])
    {
        // Get information about the service from the manifest file.
        $service = manifest($name);
        $namespace = $service['namespace'];

        // Instantiate the client class.
        $client = "Aws3\\{$namespace}\\{$namespace}Client";
        return new $client($this->mergeArgs($namespace, $service, $args));
    }

    public function createMultiRegionClient($name, array $args = [])
    {
        // Get information about the service from the manifest file.
        $service = manifest($name);
        $namespace = $service['namespace'];

        $klass = "Aws3\\{$namespace}\\{$namespace}MultiRegionClient";
        $klass = class_exists($klass) ? $klass : 'Aws3\\MultiRegionClient';

        return new $klass($this->mergeArgs($namespace, $service, $args));
    }

    private function mergeArgs($namespace, array $manifest, array $args = [])
    {
        // Merge provided args with stored, service-specific args.
        if (isset($this->args[$namespace])) {
            $args += $this->args[$namespace];
        }

        // Provide the endpoint prefix in the args.
        if (!isset($args['service'])) {
            $args['service'] = $manifest['endpoint'];
        }

        return $args + $this->args;
    }

    /**
     * Determine the endpoint prefix from a client namespace.
     *
     * @param string $name Namespace name
     *
     * @return string
     * @internal
     * @deprecated Use the `\Aws3\manifest()` function instead.
     */
    public static function getEndpointPrefix($name)
    {
        return manifest($name)['endpoint'];
    }
}
