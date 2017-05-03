<?php
namespace Aws3\KinesisAnalytics;

use Aws3\AwsClient;

/**
 * This client is used to interact with the **Amazon Kinesis Analytics** service.
 * @method \Aws3\Result addApplicationInput(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addApplicationInputAsync(array $args = [])
 * @method \Aws3\Result addApplicationOutput(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addApplicationOutputAsync(array $args = [])
 * @method \Aws3\Result addApplicationReferenceDataSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addApplicationReferenceDataSourceAsync(array $args = [])
 * @method \Aws3\Result createApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createApplicationAsync(array $args = [])
 * @method \Aws3\Result deleteApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteApplicationAsync(array $args = [])
 * @method \Aws3\Result deleteApplicationOutput(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteApplicationOutputAsync(array $args = [])
 * @method \Aws3\Result deleteApplicationReferenceDataSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteApplicationReferenceDataSourceAsync(array $args = [])
 * @method \Aws3\Result describeApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeApplicationAsync(array $args = [])
 * @method \Aws3\Result discoverInputSchema(array $args = [])
 * @method \GuzzleHttp\Promise\Promise discoverInputSchemaAsync(array $args = [])
 * @method \Aws3\Result listApplications(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listApplicationsAsync(array $args = [])
 * @method \Aws3\Result startApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startApplicationAsync(array $args = [])
 * @method \Aws3\Result stopApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopApplicationAsync(array $args = [])
 * @method \Aws3\Result updateApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateApplicationAsync(array $args = [])
 */
class KinesisAnalyticsClient extends AwsClient {}
