<?php
namespace Aws3\DeviceFarm;

use Aws3\AwsClient;

/**
 * This client is used to interact with the **Amazon DeviceFarm** service.
 *
 * @method \Aws3\Result createDevicePool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDevicePoolAsync(array $args = [])
 * @method \Aws3\Result createNetworkProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createNetworkProfileAsync(array $args = [])
 * @method \Aws3\Result createProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createProjectAsync(array $args = [])
 * @method \Aws3\Result createRemoteAccessSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRemoteAccessSessionAsync(array $args = [])
 * @method \Aws3\Result createUpload(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createUploadAsync(array $args = [])
 * @method \Aws3\Result deleteDevicePool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDevicePoolAsync(array $args = [])
 * @method \Aws3\Result deleteNetworkProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteNetworkProfileAsync(array $args = [])
 * @method \Aws3\Result deleteProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteProjectAsync(array $args = [])
 * @method \Aws3\Result deleteRemoteAccessSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRemoteAccessSessionAsync(array $args = [])
 * @method \Aws3\Result deleteRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRunAsync(array $args = [])
 * @method \Aws3\Result deleteUpload(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteUploadAsync(array $args = [])
 * @method \Aws3\Result getAccountSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAccountSettingsAsync(array $args = [])
 * @method \Aws3\Result getDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDeviceAsync(array $args = [])
 * @method \Aws3\Result getDevicePool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDevicePoolAsync(array $args = [])
 * @method \Aws3\Result getDevicePoolCompatibility(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDevicePoolCompatibilityAsync(array $args = [])
 * @method \Aws3\Result getJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getJobAsync(array $args = [])
 * @method \Aws3\Result getNetworkProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getNetworkProfileAsync(array $args = [])
 * @method \Aws3\Result getOfferingStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getOfferingStatusAsync(array $args = [])
 * @method \Aws3\Result getProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getProjectAsync(array $args = [])
 * @method \Aws3\Result getRemoteAccessSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRemoteAccessSessionAsync(array $args = [])
 * @method \Aws3\Result getRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRunAsync(array $args = [])
 * @method \Aws3\Result getSuite(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSuiteAsync(array $args = [])
 * @method \Aws3\Result getTest(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTestAsync(array $args = [])
 * @method \Aws3\Result getUpload(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getUploadAsync(array $args = [])
 * @method \Aws3\Result installToRemoteAccessSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise installToRemoteAccessSessionAsync(array $args = [])
 * @method \Aws3\Result listArtifacts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listArtifactsAsync(array $args = [])
 * @method \Aws3\Result listDevicePools(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDevicePoolsAsync(array $args = [])
 * @method \Aws3\Result listDevices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDevicesAsync(array $args = [])
 * @method \Aws3\Result listJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listJobsAsync(array $args = [])
 * @method \Aws3\Result listNetworkProfiles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listNetworkProfilesAsync(array $args = [])
 * @method \Aws3\Result listOfferingPromotions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listOfferingPromotionsAsync(array $args = [])
 * @method \Aws3\Result listOfferingTransactions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listOfferingTransactionsAsync(array $args = [])
 * @method \Aws3\Result listOfferings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listOfferingsAsync(array $args = [])
 * @method \Aws3\Result listProjects(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProjectsAsync(array $args = [])
 * @method \Aws3\Result listRemoteAccessSessions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRemoteAccessSessionsAsync(array $args = [])
 * @method \Aws3\Result listRuns(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRunsAsync(array $args = [])
 * @method \Aws3\Result listSamples(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSamplesAsync(array $args = [])
 * @method \Aws3\Result listSuites(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSuitesAsync(array $args = [])
 * @method \Aws3\Result listTests(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTestsAsync(array $args = [])
 * @method \Aws3\Result listUniqueProblems(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listUniqueProblemsAsync(array $args = [])
 * @method \Aws3\Result listUploads(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listUploadsAsync(array $args = [])
 * @method \Aws3\Result purchaseOffering(array $args = [])
 * @method \GuzzleHttp\Promise\Promise purchaseOfferingAsync(array $args = [])
 * @method \Aws3\Result renewOffering(array $args = [])
 * @method \GuzzleHttp\Promise\Promise renewOfferingAsync(array $args = [])
 * @method \Aws3\Result scheduleRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise scheduleRunAsync(array $args = [])
 * @method \Aws3\Result stopRemoteAccessSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopRemoteAccessSessionAsync(array $args = [])
 * @method \Aws3\Result stopRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopRunAsync(array $args = [])
 * @method \Aws3\Result updateDevicePool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDevicePoolAsync(array $args = [])
 * @method \Aws3\Result updateNetworkProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateNetworkProfileAsync(array $args = [])
 * @method \Aws3\Result updateProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateProjectAsync(array $args = [])
 */
class DeviceFarmClient extends AwsClient {}