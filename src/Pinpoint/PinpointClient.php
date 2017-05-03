<?php
namespace Aws3\Pinpoint;

use Aws3\AwsClient;

/**
 * This client is used to interact with the **Amazon Pinpoint** service.
 * @method \Aws3\Result createCampaign(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCampaignAsync(array $args = [])
 * @method \Aws3\Result createImportJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createImportJobAsync(array $args = [])
 * @method \Aws3\Result createSegment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSegmentAsync(array $args = [])
 * @method \Aws3\Result deleteApnsChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteApnsChannelAsync(array $args = [])
 * @method \Aws3\Result deleteCampaign(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCampaignAsync(array $args = [])
 * @method \Aws3\Result deleteEventStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteEventStreamAsync(array $args = [])
 * @method \Aws3\Result deleteGcmChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteGcmChannelAsync(array $args = [])
 * @method \Aws3\Result deleteSegment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSegmentAsync(array $args = [])
 * @method \Aws3\Result getApnsChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getApnsChannelAsync(array $args = [])
 * @method \Aws3\Result getApplicationSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getApplicationSettingsAsync(array $args = [])
 * @method \Aws3\Result getCampaign(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCampaignAsync(array $args = [])
 * @method \Aws3\Result getCampaignActivities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCampaignActivitiesAsync(array $args = [])
 * @method \Aws3\Result getCampaignVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCampaignVersionAsync(array $args = [])
 * @method \Aws3\Result getCampaignVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCampaignVersionsAsync(array $args = [])
 * @method \Aws3\Result getCampaigns(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCampaignsAsync(array $args = [])
 * @method \Aws3\Result getEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getEndpointAsync(array $args = [])
 * @method \Aws3\Result getEventStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getEventStreamAsync(array $args = [])
 * @method \Aws3\Result getGcmChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getGcmChannelAsync(array $args = [])
 * @method \Aws3\Result getImportJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getImportJobAsync(array $args = [])
 * @method \Aws3\Result getImportJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getImportJobsAsync(array $args = [])
 * @method \Aws3\Result getSegment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSegmentAsync(array $args = [])
 * @method \Aws3\Result getSegmentImportJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSegmentImportJobsAsync(array $args = [])
 * @method \Aws3\Result getSegmentVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSegmentVersionAsync(array $args = [])
 * @method \Aws3\Result getSegmentVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSegmentVersionsAsync(array $args = [])
 * @method \Aws3\Result getSegments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSegmentsAsync(array $args = [])
 * @method \Aws3\Result putEventStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putEventStreamAsync(array $args = [])
 * @method \Aws3\Result updateApnsChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateApnsChannelAsync(array $args = [])
 * @method \Aws3\Result updateApplicationSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateApplicationSettingsAsync(array $args = [])
 * @method \Aws3\Result updateCampaign(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateCampaignAsync(array $args = [])
 * @method \Aws3\Result updateEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateEndpointAsync(array $args = [])
 * @method \Aws3\Result updateEndpointsBatch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateEndpointsBatchAsync(array $args = [])
 * @method \Aws3\Result updateGcmChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateGcmChannelAsync(array $args = [])
 * @method \Aws3\Result updateSegment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSegmentAsync(array $args = [])
 */
class PinpointClient extends AwsClient {}
