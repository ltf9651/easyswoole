<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CompareFace compareFace(array $options = [])
 * @method CompareImageFaces compareImageFaces(array $options = [])
 * @method ConvertOfficeFormat convertOfficeFormat(array $options = [])
 * @method CreateCADConversionTask createCADConversionTask(array $options = [])
 * @method CreateDocIndexTask createDocIndexTask(array $options = [])
 * @method CreateFaceSet createFaceSet(array $options = [])
 * @method CreateGroupFacesJob createGroupFacesJob(array $options = [])
 * @method CreateMediaComplexTask createMediaComplexTask(array $options = [])
 * @method CreateMergeFaceGroupsJob createMergeFaceGroupsJob(array $options = [])
 * @method CreateOfficeConversionTask createOfficeConversionTask(array $options = [])
 * @method CreatePornBatchDetectJob createPornBatchDetectJob(array $options = [])
 * @method CreateSet createSet(array $options = [])
 * @method CreateTagJob createTagJob(array $options = [])
 * @method CreateTagSet createTagSet(array $options = [])
 * @method CreateVideoAbstractTask createVideoAbstractTask(array $options = [])
 * @method CreateVideoAnalyseTask createVideoAnalyseTask(array $options = [])
 * @method CreateVideoCompressTask createVideoCompressTask(array $options = [])
 * @method DecodeBlindWatermark decodeBlindWatermark(array $options = [])
 * @method DeleteDocIndex deleteDocIndex(array $options = [])
 * @method DeleteFaceJob deleteFaceJob(array $options = [])
 * @method DeleteFaceSearchGroup deleteFaceSearchGroup(array $options = [])
 * @method DeleteFaceSearchImageById deleteFaceSearchImageById(array $options = [])
 * @method DeleteFaceSearchUser deleteFaceSearchUser(array $options = [])
 * @method DeleteImage deleteImage(array $options = [])
 * @method DeleteImageJob deleteImageJob(array $options = [])
 * @method DeleteOfficeConversionTask deleteOfficeConversionTask(array $options = [])
 * @method DeletePhotoProcessTask deletePhotoProcessTask(array $options = [])
 * @method DeletePornBatchDetectJob deletePornBatchDetectJob(array $options = [])
 * @method DeleteProject deleteProject(array $options = [])
 * @method DeleteSet deleteSet(array $options = [])
 * @method DeleteTagByName deleteTagByName(array $options = [])
 * @method DeleteTagByUrl deleteTagByUrl(array $options = [])
 * @method DeleteTagJob deleteTagJob(array $options = [])
 * @method DeleteTagSet deleteTagSet(array $options = [])
 * @method DeleteVideo deleteVideo(array $options = [])
 * @method DeleteVideoTask deleteVideoTask(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DetectClothes detectClothes(array $options = [])
 * @method DetectImageBodies detectImageBodies(array $options = [])
 * @method DetectImageCelebrity detectImageCelebrity(array $options = [])
 * @method DetectImageFaces detectImageFaces(array $options = [])
 * @method DetectImageLogos detectImageLogos(array $options = [])
 * @method DetectImageTags detectImageTags(array $options = [])
 * @method DetectImageTexts detectImageTexts(array $options = [])
 * @method DetectLogo detectLogo(array $options = [])
 * @method DetectQRCodes detectQRCodes(array $options = [])
 * @method DetectTag detectTag(array $options = [])
 * @method EncodeBlindWatermark encodeBlindWatermark(array $options = [])
 * @method FindImages findImages(array $options = [])
 * @method FindImagesByTagNames findImagesByTagNames(array $options = [])
 * @method FindSimilarFaces findSimilarFaces(array $options = [])
 * @method GetDocIndex getDocIndex(array $options = [])
 * @method GetDocIndexTask getDocIndexTask(array $options = [])
 * @method GetFaceSearchGroup getFaceSearchGroup(array $options = [])
 * @method GetFaceSearchImage getFaceSearchImage(array $options = [])
 * @method GetFaceSearchUser getFaceSearchUser(array $options = [])
 * @method GetImage getImage(array $options = [])
 * @method GetImageJob getImageJob(array $options = [])
 * @method GetMediaMeta getMediaMeta(array $options = [])
 * @method GetOfficeConversionTask getOfficeConversionTask(array $options = [])
 * @method GetPhotoProcessTask getPhotoProcessTask(array $options = [])
 * @method GetPornBatchDetectJob getPornBatchDetectJob(array $options = [])
 * @method GetProject getProject(array $options = [])
 * @method GetSet getSet(array $options = [])
 * @method GetTagJob getTagJob(array $options = [])
 * @method GetTagSet getTagSet(array $options = [])
 * @method GetVideo getVideo(array $options = [])
 * @method GetVideoTask getVideoTask(array $options = [])
 * @method IndexImage indexImage(array $options = [])
 * @method IndexTag indexTag(array $options = [])
 * @method IndexVideo indexVideo(array $options = [])
 * @method ListFaceGroups listFaceGroups(array $options = [])
 * @method ListFaceSearchGroupImages listFaceSearchGroupImages(array $options = [])
 * @method ListFaceSearchGroups listFaceSearchGroups(array $options = [])
 * @method ListFaceSearchGroupUsers listFaceSearchGroupUsers(array $options = [])
 * @method ListImageJobs listImageJobs(array $options = [])
 * @method ListImages listImages(array $options = [])
 * @method ListOfficeConversionTask listOfficeConversionTask(array $options = [])
 * @method ListPhotoProcessTasks listPhotoProcessTasks(array $options = [])
 * @method ListPornBatchDetectJobs listPornBatchDetectJobs(array $options = [])
 * @method ListProjectAPIs listProjectAPIs(array $options = [])
 * @method ListProjects listProjects(array $options = [])
 * @method ListSets listSets(array $options = [])
 * @method ListSetTags listSetTags(array $options = [])
 * @method ListTagJobs listTagJobs(array $options = [])
 * @method ListTagNames listTagNames(array $options = [])
 * @method ListTagPhotos listTagPhotos(array $options = [])
 * @method ListTagSets listTagSets(array $options = [])
 * @method ListVideoAudios listVideoAudios(array $options = [])
 * @method ListVideoFrames listVideoFrames(array $options = [])
 * @method ListVideos listVideos(array $options = [])
 * @method ListVideoTasks listVideoTasks(array $options = [])
 * @method PhotoProcess photoProcess(array $options = [])
 * @method PutProject putProject(array $options = [])
 * @method RegistFace registFace(array $options = [])
 * @method SearchDocIndex searchDocIndex(array $options = [])
 * @method SearchFace searchFace(array $options = [])
 * @method UpdateDocIndexMeta updateDocIndexMeta(array $options = [])
 * @method UpdateFaceGroup updateFaceGroup(array $options = [])
 * @method UpdateImage updateImage(array $options = [])
 * @method UpdateProject updateProject(array $options = [])
 * @method UpdateSet updateSet(array $options = [])
 */
class ImmApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'imm';

    /** @var string */
    public $version = '2017-09-06';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'imm';
}

/**
 * @method string getSrcUriB()
 * @method $this withSrcUriB($value)
 * @method string getSrcUriA()
 * @method $this withSrcUriA($value)
 * @method string getProject()
 * @method $this withProject($value)
 */
class CompareFace extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getFaceIdA()
 * @method $this withFaceIdA($value)
 * @method string getFaceIdB()
 * @method $this withFaceIdB($value)
 * @method string getImageUriB()
 * @method $this withImageUriB($value)
 * @method string getImageUriA()
 * @method $this withImageUriA($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 */
class CompareImageFaces extends Rpc
{
}

/**
 * @method string getSrcType()
 * @method $this withSrcType($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getPdfVector()
 * @method $this withPdfVector($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getStartPage()
 * @method $this withStartPage($value)
 * @method string getFitToPagesWide()
 * @method $this withFitToPagesWide($value)
 * @method string getTgtFilePrefix()
 * @method $this withTgtFilePrefix($value)
 * @method string getModelId()
 * @method $this withModelId($value)
 * @method string getMaxSheetRow()
 * @method $this withMaxSheetRow($value)
 * @method string getMaxSheetCount()
 * @method $this withMaxSheetCount($value)
 * @method string getEndPage()
 * @method $this withEndPage($value)
 * @method string getTgtFileSuffix()
 * @method $this withTgtFileSuffix($value)
 * @method string getSheetOnePage()
 * @method $this withSheetOnePage($value)
 * @method string getMaxSheetCol()
 * @method $this withMaxSheetCol($value)
 * @method string getTgtType()
 * @method $this withTgtType($value)
 * @method string getHidecomments()
 * @method $this withHidecomments($value)
 * @method string getFitToPagesTall()
 * @method $this withFitToPagesTall($value)
 * @method string getSrcUri()
 * @method $this withSrcUri($value)
 * @method string getTgtFilePages()
 * @method $this withTgtFilePages($value)
 * @method string getTgtUri()
 * @method $this withTgtUri($value)
 */
class ConvertOfficeFormat extends Rpc
{
}

/**
 * @method string getSrcType()
 * @method $this withSrcType($value)
 * @method string getBaseRow()
 * @method $this withBaseRow($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getZoomFactor()
 * @method $this withZoomFactor($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getBaseCol()
 * @method $this withBaseCol($value)
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getUnitWidth()
 * @method $this withUnitWidth($value)
 * @method string getZoomLevel()
 * @method $this withZoomLevel($value)
 * @method string getModelId()
 * @method $this withModelId($value)
 * @method string getTgtType()
 * @method $this withTgtType($value)
 * @method string getUnitHeight()
 * @method $this withUnitHeight($value)
 * @method string getSrcUri()
 * @method $this withSrcUri($value)
 * @method string getThumbnails()
 * @method $this withThumbnails($value)
 * @method string getTgtUri()
 * @method $this withTgtUri($value)
 */
class CreateCADConversionTask extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getUniqueId()
 * @method $this withUniqueId($value)
 * @method string getCustomKey1()
 * @method $this withCustomKey1($value)
 * @method string getSet()
 * @method $this withSet($value)
 * @method string getCustomKey5()
 * @method $this withCustomKey5($value)
 * @method string getCustomKey4()
 * @method $this withCustomKey4($value)
 * @method string getCustomKey3()
 * @method $this withCustomKey3($value)
 * @method string getCustomKey2()
 * @method $this withCustomKey2($value)
 * @method string getCustomKey6()
 * @method $this withCustomKey6($value)
 * @method string getContentType()
 * @method $this withContentType($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getSrcUri()
 * @method $this withSrcUri($value)
 */
class CreateDocIndexTask extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 */
class CreateFaceSet extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 */
class CreateGroupFacesJob extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getParameters()
 * @method $this withParameters($value)
 */
class CreateMediaComplexTask extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getGroupIdFrom()
 * @method $this withGroupIdFrom($value)
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getGroupIdTo()
 * @method $this withGroupIdTo($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 */
class CreateMergeFaceGroupsJob extends Rpc
{
}

/**
 * @method string getSrcType()
 * @method $this withSrcType($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getIdempotentToken()
 * @method $this withIdempotentToken($value)
 * @method string getPdfVector()
 * @method $this withPdfVector($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getStartPage()
 * @method $this withStartPage($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getFitToPagesWide()
 * @method $this withFitToPagesWide($value)
 * @method string getTgtFilePrefix()
 * @method $this withTgtFilePrefix($value)
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getModelId()
 * @method $this withModelId($value)
 * @method string getDisplayDpi()
 * @method $this withDisplayDpi($value)
 * @method string getMaxSheetRow()
 * @method $this withMaxSheetRow($value)
 * @method string getMaxSheetCount()
 * @method $this withMaxSheetCount($value)
 * @method string getEndPage()
 * @method $this withEndPage($value)
 * @method string getTgtFileSuffix()
 * @method $this withTgtFileSuffix($value)
 * @method string getSheetOnePage()
 * @method $this withSheetOnePage($value)
 * @method string getMaxSheetCol()
 * @method $this withMaxSheetCol($value)
 * @method string getTgtType()
 * @method $this withTgtType($value)
 * @method string getHidecomments()
 * @method $this withHidecomments($value)
 * @method string getFitToPagesTall()
 * @method $this withFitToPagesTall($value)
 * @method string getSrcUri()
 * @method $this withSrcUri($value)
 * @method string getTgtFilePages()
 * @method $this withTgtFilePages($value)
 * @method string getTgtUri()
 * @method $this withTgtUri($value)
 */
class CreateOfficeConversionTask extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getExternalID()
 * @method $this withExternalID($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getSrcUri()
 * @method $this withSrcUri($value)
 * @method string getTgtUri()
 * @method $this withTgtUri($value)
 */
class CreatePornBatchDetectJob extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getSetName()
 * @method $this withSetName($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 */
class CreateSet extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getExternalID()
 * @method $this withExternalID($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getSrcUri()
 * @method $this withSrcUri($value)
 */
class CreateTagJob extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 */
class CreateTagSet extends Rpc
{
}

/**
 * @method string getTargetVideoUri()
 * @method $this withTargetVideoUri($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getVideoUri()
 * @method $this withVideoUri($value)
 * @method string getAbstractLength()
 * @method $this withAbstractLength($value)
 * @method string getTargetClipsUri()
 * @method $this withTargetClipsUri($value)
 */
class CreateVideoAbstractTask extends Rpc
{
}

/**
 * @method string getGrabType()
 * @method $this withGrabType($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getVideoUri()
 * @method $this withVideoUri($value)
 * @method string getSaveType()
 * @method $this withSaveType($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getTgtUri()
 * @method $this withTgtUri($value)
 */
class CreateVideoAnalyseTask extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getTargetList()
 * @method $this withTargetList($value)
 * @method string getVideoUri()
 * @method $this withVideoUri($value)
 */
class CreateVideoCompressTask extends Rpc
{
}

/**
 * @method string getImageQuality()
 * @method $this withImageQuality($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getWatermarkType()
 * @method $this withWatermarkType($value)
 * @method string getTargetUri()
 * @method $this withTargetUri($value)
 * @method string getImageUri()
 * @method $this withImageUri($value)
 * @method string getOriginalImageUri()
 * @method $this withOriginalImageUri($value)
 */
class DecodeBlindWatermark extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getUniqueId()
 * @method $this withUniqueId($value)
 * @method string getSet()
 * @method $this withSet($value)
 */
class DeleteDocIndex extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getClearIndexData()
 * @method $this withClearIndexData($value)
 */
class DeleteFaceJob extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 */
class DeleteFaceSearchGroup extends Rpc
{
}

/**
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getSrcUri()
 * @method $this withSrcUri($value)
 * @method string getUser()
 * @method $this withUser($value)
 */
class DeleteFaceSearchImageById extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getUser()
 * @method $this withUser($value)
 */
class DeleteFaceSearchUser extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getImageUri()
 * @method $this withImageUri($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 */
class DeleteImage extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getJobType()
 * @method $this withJobType($value)
 */
class DeleteImageJob extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DeleteOfficeConversionTask extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DeletePhotoProcessTask extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 */
class DeletePornBatchDetectJob extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 */
class DeleteProject extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 */
class DeleteSet extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getTagName()
 * @method $this withTagName($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 * @method string getSrcUri()
 * @method $this withSrcUri($value)
 */
class DeleteTagByName extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 * @method string getSrcUri()
 * @method $this withSrcUri($value)
 */
class DeleteTagByUrl extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getClearIndexData()
 * @method $this withClearIndexData($value)
 */
class DeleteTagJob extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getLazyMode()
 * @method $this withLazyMode($value)
 * @method string getCheckEmpty()
 * @method $this withCheckEmpty($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 */
class DeleteTagSet extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getResources()
 * @method $this withResources($value)
 * @method string getVideoUri()
 * @method $this withVideoUri($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 */
class DeleteVideo extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getTaskType()
 * @method $this withTaskType($value)
 */
class DeleteVideoTask extends Rpc
{
}

class DescribeRegions extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getSrcUris()
 * @method $this withSrcUris($value)
 */
class DetectClothes extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getImageUri()
 * @method $this withImageUri($value)
 */
class DetectImageBodies extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getLibrary()
 * @method $this withLibrary($value)
 * @method string getRealUid()
 * @method $this withRealUid($value)
 * @method string getImageUri()
 * @method $this withImageUri($value)
 */
class DetectImageCelebrity extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getRealUid()
 * @method $this withRealUid($value)
 * @method string getImageUri()
 * @method $this withImageUri($value)
 */
class DetectImageFaces extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getImageUri()
 * @method $this withImageUri($value)
 */
class DetectImageLogos extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getRealUid()
 * @method $this withRealUid($value)
 * @method string getImageUri()
 * @method $this withImageUri($value)
 */
class DetectImageTags extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getImageUri()
 * @method $this withImageUri($value)
 */
class DetectImageTexts extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getSrcUris()
 * @method $this withSrcUris($value)
 */
class DetectLogo extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getSrcUris()
 * @method $this withSrcUris($value)
 */
class DetectQRCodes extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getModelId()
 * @method $this withModelId($value)
 * @method string getSrcUris()
 * @method $this withSrcUris($value)
 */
class DetectTag extends Rpc
{
}

/**
 * @method string getImageQuality()
 * @method $this withImageQuality($value)
 * @method string getWatermarkUri()
 * @method $this withWatermarkUri($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getContent()
 * @method $this withContent($value)
 * @method string getWatermarkType()
 * @method $this withWatermarkType($value)
 * @method string getTargetUri()
 * @method $this withTargetUri($value)
 * @method string getTargetImageType()
 * @method $this withTargetImageType($value)
 * @method string getImageUri()
 * @method $this withImageUri($value)
 */
class EncodeBlindWatermark extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getExternalId()
 * @method $this withExternalId($value)
 * @method string getFacesModifyTimeRange()
 * @method $this withFacesModifyTimeRange($value)
 * @method string getOCRContentsMatch()
 * @method $this withOCRContentsMatch($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getRemarksDPrefix()
 * @method $this withRemarksDPrefix($value)
 * @method string getSourceType()
 * @method $this withSourceType($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getTagNames()
 * @method $this withTagNames($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getRemarksCPrefix()
 * @method $this withRemarksCPrefix($value)
 * @method string getModifyTimeRange()
 * @method $this withModifyTimeRange($value)
 * @method string getAddressLineContentsMatch()
 * @method $this withAddressLineContentsMatch($value)
 * @method string getGender()
 * @method $this withGender($value)
 * @method string getImageSizeRange()
 * @method $this withImageSizeRange($value)
 * @method string getRemarksBPrefix()
 * @method $this withRemarksBPrefix($value)
 * @method string getLocationBoundary()
 * @method $this withLocationBoundary($value)
 * @method string getImageTimeRange()
 * @method $this withImageTimeRange($value)
 * @method string getTagsModifyTimeRange()
 * @method $this withTagsModifyTimeRange($value)
 * @method string getAgeRange()
 * @method $this withAgeRange($value)
 * @method string getRemarksAPrefix()
 * @method $this withRemarksAPrefix($value)
 * @method string getSourceUriPrefix()
 * @method $this withSourceUriPrefix($value)
 * @method string getEmotion()
 * @method $this withEmotion($value)
 * @method string getCreateTimeRange()
 * @method $this withCreateTimeRange($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 */
class FindImages extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getTagNames()
 * @method $this withTagNames($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 */
class FindImagesByTagNames extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getMinSimilarity()
 * @method $this withMinSimilarity($value)
 * @method string getResponseFormat()
 * @method $this withResponseFormat($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getFaceId()
 * @method $this withFaceId($value)
 * @method string getImageUri()
 * @method $this withImageUri($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 */
class FindSimilarFaces extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getUniqueId()
 * @method $this withUniqueId($value)
 * @method string getSet()
 * @method $this withSet($value)
 */
class GetDocIndex extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class GetDocIndexTask extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 */
class GetFaceSearchGroup extends Rpc
{
}

/**
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getSrcUri()
 * @method $this withSrcUri($value)
 * @method string getUser()
 * @method $this withUser($value)
 */
class GetFaceSearchImage extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getUser()
 * @method $this withUser($value)
 */
class GetFaceSearchUser extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getImageUri()
 * @method $this withImageUri($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 */
class GetImage extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getJobType()
 * @method $this withJobType($value)
 */
class GetImageJob extends Rpc
{
}

/**
 * @method string getMediaUri()
 * @method $this withMediaUri($value)
 * @method string getProject()
 * @method $this withProject($value)
 */
class GetMediaMeta extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class GetOfficeConversionTask extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class GetPhotoProcessTask extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 */
class GetPornBatchDetectJob extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 */
class GetProject extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 */
class GetSet extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 */
class GetTagJob extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 */
class GetTagSet extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getVideoUri()
 * @method $this withVideoUri($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 */
class GetVideo extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getTaskType()
 * @method $this withTaskType($value)
 */
class GetVideoTask extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getExternalId()
 * @method $this withExternalId($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getSourceType()
 * @method $this withSourceType($value)
 * @method string getRealUid()
 * @method $this withRealUid($value)
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getRemarksB()
 * @method $this withRemarksB($value)
 * @method string getRemarksA()
 * @method $this withRemarksA($value)
 * @method string getImageUri()
 * @method $this withImageUri($value)
 * @method string getSourceUri()
 * @method $this withSourceUri($value)
 * @method string getSourcePosition()
 * @method $this withSourcePosition($value)
 * @method string getRemarksD()
 * @method $this withRemarksD($value)
 * @method string getRemarksC()
 * @method $this withRemarksC($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 */
class IndexImage extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getModelId()
 * @method $this withModelId($value)
 * @method string getSrcUris()
 * @method $this withSrcUris($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 * @method string getForce()
 * @method $this withForce($value)
 */
class IndexTag extends Rpc
{
}

/**
 * @method string getGrabType()
 * @method $this withGrabType($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getExternalId()
 * @method $this withExternalId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getRemarksB()
 * @method $this withRemarksB($value)
 * @method string getRemarksA()
 * @method $this withRemarksA($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getVideoUri()
 * @method $this withVideoUri($value)
 * @method string getSaveType()
 * @method $this withSaveType($value)
 * @method string getRemarksD()
 * @method $this withRemarksD($value)
 * @method string getRemarksC()
 * @method $this withRemarksC($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getTgtUri()
 * @method $this withTgtUri($value)
 */
class IndexVideo extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 */
class ListFaceGroups extends Rpc
{
}

/**
 * @method string getMaxKeys()
 * @method $this withMaxKeys($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getUser()
 * @method $this withUser($value)
 */
class ListFaceSearchGroupImages extends Rpc
{
}

/**
 * @method string getMaxKeys()
 * @method $this withMaxKeys($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 */
class ListFaceSearchGroups extends Rpc
{
}

/**
 * @method string getMaxKeys()
 * @method $this withMaxKeys($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 */
class ListFaceSearchGroupUsers extends Rpc
{
}

/**
 * @method string getMaxKeys()
 * @method $this withMaxKeys($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getJobType()
 * @method $this withJobType($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 */
class ListImageJobs extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 * @method string getCreateTimeStart()
 * @method $this withCreateTimeStart($value)
 */
class ListImages extends Rpc
{
}

/**
 * @method string getMaxKeys()
 * @method $this withMaxKeys($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 */
class ListOfficeConversionTask extends Rpc
{
}

/**
 * @method string getMaxKeys()
 * @method $this withMaxKeys($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 */
class ListPhotoProcessTasks extends Rpc
{
}

/**
 * @method string getMaxKeys()
 * @method $this withMaxKeys($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 */
class ListPornBatchDetectJobs extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 */
class ListProjectAPIs extends Rpc
{
}

/**
 * @method string getMaxKeys()
 * @method $this withMaxKeys($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 */
class ListProjects extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 */
class ListSets extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 */
class ListSetTags extends Rpc
{
}

/**
 * @method string getMaxKeys()
 * @method $this withMaxKeys($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getCondition()
 * @method $this withCondition($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 */
class ListTagJobs extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 */
class ListTagNames extends Rpc
{
}

/**
 * @method string getMaxKeys()
 * @method $this withMaxKeys($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getTagName()
 * @method $this withTagName($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 */
class ListTagPhotos extends Rpc
{
}

/**
 * @method string getMaxKeys()
 * @method $this withMaxKeys($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 */
class ListTagSets extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getVideoUri()
 * @method $this withVideoUri($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 */
class ListVideoAudios extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getVideoUri()
 * @method $this withVideoUri($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 */
class ListVideoFrames extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 * @method string getCreateTimeStart()
 * @method $this withCreateTimeStart($value)
 */
class ListVideos extends Rpc
{
}

/**
 * @method string getMaxKeys()
 * @method $this withMaxKeys($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 */
class ListVideoTasks extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getExternalID()
 * @method $this withExternalID($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getSrcUri()
 * @method $this withSrcUri($value)
 * @method string getStyle()
 * @method $this withStyle($value)
 * @method string getTgtUri()
 * @method $this withTgtUri($value)
 */
class PhotoProcess extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getCU()
 * @method $this withCU($value)
 * @method string getServiceRole()
 * @method $this withServiceRole($value)
 * @method string getBillingType()
 * @method $this withBillingType($value)
 */
class PutProject extends Rpc
{
}

/**
 * @method string getChooseBiggestFace()
 * @method $this withChooseBiggestFace($value)
 * @method string getIsQualityLimit()
 * @method $this withIsQualityLimit($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getSrcUri()
 * @method $this withSrcUri($value)
 * @method string getRegisterCheckLevel()
 * @method $this withRegisterCheckLevel($value)
 * @method string getUser()
 * @method $this withUser($value)
 */
class RegistFace extends Rpc
{
}

/**
 * @method string getModifiedTimeEnd()
 * @method $this withModifiedTimeEnd($value)
 * @method string getSizeLimitEnd()
 * @method $this withSizeLimitEnd($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getModifiedTimeStart()
 * @method $this withModifiedTimeStart($value)
 * @method string getPageNumLimitStart()
 * @method $this withPageNumLimitStart($value)
 * @method string getContent()
 * @method $this withContent($value)
 * @method string getSizeLimitStart()
 * @method $this withSizeLimitStart($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getCustomKey1()
 * @method $this withCustomKey1($value)
 * @method string getSet()
 * @method $this withSet($value)
 * @method string getCustomKey5()
 * @method $this withCustomKey5($value)
 * @method string getOffset()
 * @method $this withOffset($value)
 * @method string getCustomKey4()
 * @method $this withCustomKey4($value)
 * @method string getCustomKey3()
 * @method $this withCustomKey3($value)
 * @method string getCustomKey2()
 * @method $this withCustomKey2($value)
 * @method string getCustomKey6()
 * @method $this withCustomKey6($value)
 * @method string getPageNumLimitEnd()
 * @method $this withPageNumLimitEnd($value)
 * @method string getContentType()
 * @method $this withContentType($value)
 * @method string getName()
 * @method $this withName($value)
 */
class SearchDocIndex extends Rpc
{
}

/**
 * @method string getResultNum()
 * @method $this withResultNum($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getSearchThresholdLevel()
 * @method $this withSearchThresholdLevel($value)
 * @method string getIsThreshold()
 * @method $this withIsThreshold($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getSrcUri()
 * @method $this withSrcUri($value)
 */
class SearchFace extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getUniqueId()
 * @method $this withUniqueId($value)
 * @method string getCustomKey1()
 * @method $this withCustomKey1($value)
 * @method string getSet()
 * @method $this withSet($value)
 * @method string getCustomKey5()
 * @method $this withCustomKey5($value)
 * @method string getCustomKey4()
 * @method $this withCustomKey4($value)
 * @method string getCustomKey3()
 * @method $this withCustomKey3($value)
 * @method string getCustomKey2()
 * @method $this withCustomKey2($value)
 * @method string getCustomKey6()
 * @method $this withCustomKey6($value)
 * @method string getName()
 * @method $this withName($value)
 */
class UpdateDocIndexMeta extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 * @method string getGroupCoverFaceId()
 * @method $this withGroupCoverFaceId($value)
 */
class UpdateFaceGroup extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getExternalId()
 * @method $this withExternalId($value)
 * @method string getSourceType()
 * @method $this withSourceType($value)
 * @method string getRemarksB()
 * @method $this withRemarksB($value)
 * @method string getRemarksA()
 * @method $this withRemarksA($value)
 * @method string getImageUri()
 * @method $this withImageUri($value)
 * @method string getSourceUri()
 * @method $this withSourceUri($value)
 * @method string getSourcePosition()
 * @method $this withSourcePosition($value)
 * @method string getRemarksD()
 * @method $this withRemarksD($value)
 * @method string getRemarksC()
 * @method $this withRemarksC($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 */
class UpdateImage extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getNewServiceRole()
 * @method $this withNewServiceRole($value)
 * @method string getNewCU()
 * @method $this withNewCU($value)
 */
class UpdateProject extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getSetName()
 * @method $this withSetName($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 */
class UpdateSet extends Rpc
{
}
