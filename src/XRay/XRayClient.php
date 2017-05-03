<?php
namespace Aws3\XRay;

use Aws3\AwsClient;

/**
 * This client is used to interact with the **AWS X-Ray** service.
 * @method \Aws3\Result batchGetTraces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetTracesAsync(array $args = [])
 * @method \Aws3\Result getServiceGraph(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getServiceGraphAsync(array $args = [])
 * @method \Aws3\Result getTraceGraph(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTraceGraphAsync(array $args = [])
 * @method \Aws3\Result getTraceSummaries(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTraceSummariesAsync(array $args = [])
 * @method \Aws3\Result putTelemetryRecords(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putTelemetryRecordsAsync(array $args = [])
 * @method \Aws3\Result putTraceSegments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putTraceSegmentsAsync(array $args = [])
 */
class XRayClient extends AwsClient {}
