<?php
namespace Aws3\StorageGateway;

use Aws3\AwsClient;

/**
 * AWS Storage Gateway client.
 *
 * @method \Aws3\Result activateGateway(array $args = [])
 * @method \GuzzleHttp\Promise\Promise activateGatewayAsync(array $args = [])
 * @method \Aws3\Result addCache(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addCacheAsync(array $args = [])
 * @method \Aws3\Result addTagsToResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addTagsToResourceAsync(array $args = [])
 * @method \Aws3\Result addUploadBuffer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addUploadBufferAsync(array $args = [])
 * @method \Aws3\Result addWorkingStorage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addWorkingStorageAsync(array $args = [])
 * @method \Aws3\Result cancelArchival(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelArchivalAsync(array $args = [])
 * @method \Aws3\Result cancelRetrieval(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelRetrievalAsync(array $args = [])
 * @method \Aws3\Result createCachediSCSIVolume(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCachediSCSIVolumeAsync(array $args = [])
 * @method \Aws3\Result createNFSFileShare(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createNFSFileShareAsync(array $args = [])
 * @method \Aws3\Result createSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSnapshotAsync(array $args = [])
 * @method \Aws3\Result createSnapshotFromVolumeRecoveryPoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSnapshotFromVolumeRecoveryPointAsync(array $args = [])
 * @method \Aws3\Result createStorediSCSIVolume(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createStorediSCSIVolumeAsync(array $args = [])
 * @method \Aws3\Result createTapeWithBarcode(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTapeWithBarcodeAsync(array $args = [])
 * @method \Aws3\Result createTapes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTapesAsync(array $args = [])
 * @method \Aws3\Result deleteBandwidthRateLimit(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBandwidthRateLimitAsync(array $args = [])
 * @method \Aws3\Result deleteChapCredentials(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteChapCredentialsAsync(array $args = [])
 * @method \Aws3\Result deleteFileShare(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFileShareAsync(array $args = [])
 * @method \Aws3\Result deleteGateway(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteGatewayAsync(array $args = [])
 * @method \Aws3\Result deleteSnapshotSchedule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSnapshotScheduleAsync(array $args = [])
 * @method \Aws3\Result deleteTape(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTapeAsync(array $args = [])
 * @method \Aws3\Result deleteTapeArchive(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTapeArchiveAsync(array $args = [])
 * @method \Aws3\Result deleteVolume(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVolumeAsync(array $args = [])
 * @method \Aws3\Result describeBandwidthRateLimit(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBandwidthRateLimitAsync(array $args = [])
 * @method \Aws3\Result describeCache(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCacheAsync(array $args = [])
 * @method \Aws3\Result describeCachediSCSIVolumes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCachediSCSIVolumesAsync(array $args = [])
 * @method \Aws3\Result describeChapCredentials(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeChapCredentialsAsync(array $args = [])
 * @method \Aws3\Result describeGatewayInformation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeGatewayInformationAsync(array $args = [])
 * @method \Aws3\Result describeMaintenanceStartTime(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMaintenanceStartTimeAsync(array $args = [])
 * @method \Aws3\Result describeNFSFileShares(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeNFSFileSharesAsync(array $args = [])
 * @method \Aws3\Result describeSnapshotSchedule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSnapshotScheduleAsync(array $args = [])
 * @method \Aws3\Result describeStorediSCSIVolumes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStorediSCSIVolumesAsync(array $args = [])
 * @method \Aws3\Result describeTapeArchives(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTapeArchivesAsync(array $args = [])
 * @method \Aws3\Result describeTapeRecoveryPoints(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTapeRecoveryPointsAsync(array $args = [])
 * @method \Aws3\Result describeTapes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTapesAsync(array $args = [])
 * @method \Aws3\Result describeUploadBuffer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeUploadBufferAsync(array $args = [])
 * @method \Aws3\Result describeVTLDevices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeVTLDevicesAsync(array $args = [])
 * @method \Aws3\Result describeWorkingStorage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWorkingStorageAsync(array $args = [])
 * @method \Aws3\Result disableGateway(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableGatewayAsync(array $args = [])
 * @method \Aws3\Result listFileShares(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFileSharesAsync(array $args = [])
 * @method \Aws3\Result listGateways(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listGatewaysAsync(array $args = [])
 * @method \Aws3\Result listLocalDisks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listLocalDisksAsync(array $args = [])
 * @method \Aws3\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws3\Result listTapes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTapesAsync(array $args = [])
 * @method \Aws3\Result listVolumeInitiators(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listVolumeInitiatorsAsync(array $args = [])
 * @method \Aws3\Result listVolumeRecoveryPoints(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listVolumeRecoveryPointsAsync(array $args = [])
 * @method \Aws3\Result listVolumes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listVolumesAsync(array $args = [])
 * @method \Aws3\Result refreshCache(array $args = [])
 * @method \GuzzleHttp\Promise\Promise refreshCacheAsync(array $args = [])
 * @method \Aws3\Result removeTagsFromResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeTagsFromResourceAsync(array $args = [])
 * @method \Aws3\Result resetCache(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resetCacheAsync(array $args = [])
 * @method \Aws3\Result retrieveTapeArchive(array $args = [])
 * @method \GuzzleHttp\Promise\Promise retrieveTapeArchiveAsync(array $args = [])
 * @method \Aws3\Result retrieveTapeRecoveryPoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise retrieveTapeRecoveryPointAsync(array $args = [])
 * @method \Aws3\Result setLocalConsolePassword(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setLocalConsolePasswordAsync(array $args = [])
 * @method \Aws3\Result shutdownGateway(array $args = [])
 * @method \GuzzleHttp\Promise\Promise shutdownGatewayAsync(array $args = [])
 * @method \Aws3\Result startGateway(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startGatewayAsync(array $args = [])
 * @method \Aws3\Result updateBandwidthRateLimit(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateBandwidthRateLimitAsync(array $args = [])
 * @method \Aws3\Result updateChapCredentials(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateChapCredentialsAsync(array $args = [])
 * @method \Aws3\Result updateGatewayInformation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateGatewayInformationAsync(array $args = [])
 * @method \Aws3\Result updateGatewaySoftwareNow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateGatewaySoftwareNowAsync(array $args = [])
 * @method \Aws3\Result updateMaintenanceStartTime(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateMaintenanceStartTimeAsync(array $args = [])
 * @method \Aws3\Result updateNFSFileShare(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateNFSFileShareAsync(array $args = [])
 * @method \Aws3\Result updateSnapshotSchedule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSnapshotScheduleAsync(array $args = [])
 * @method \Aws3\Result updateVTLDeviceType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateVTLDeviceTypeAsync(array $args = [])
 */
class StorageGatewayClient extends AwsClient {}
