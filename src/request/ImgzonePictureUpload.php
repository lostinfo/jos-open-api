<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 上传单张图片
 * 图片空间API-京东图片空间系统API 可实现图片的增删改查等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=61&apiId=164&apiName=jingdong.imgzone.picture.upload
 * Class ImgzonePictureUpload
 * @package Jd\request
 */
class ImgzonePictureUpload
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.imgzone.picture.upload";
    }

    public function getApiParas()
    {
        return json_encode($this->apiParas, JSON_FORCE_OBJECT);
    }

    public function check()
    {

    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }

    /**
     * @param byte[] $fileData
     * 图片二进制文件流，允许png、jpg、gif、jpeg、bmp图片格式，1M以内。 
     * Required: true
     * Example Value: 
     */
    private $fileData;

    /**
     * @param byte[] $fileData
     * 图片二进制文件流，允许png、jpg、gif、jpeg、bmp图片格式，1M以内。 
     * Example Value: 
     */
    public function setFileData($fileData)
    {
        $this->fileData             = $fileData;
        $this->apiParas["image_data"]  = $fileData;
    }

    public function getFileData()
    {
        return $this->fileData;
    }

    /**
     * @param int $cateId
     * 上传到的图片分类ID，为空上传至 默认分类
     * Required: false
     * Example Value: 
     */
    private $cateId;

    /**
     * @param int $cateId
     * 上传到的图片分类ID，为空上传至 默认分类
     * Example Value: 
     */
    public function setCateId($cateId)
    {
        $this->cateId             = $cateId;
        $this->apiParas["picture_cate_id"]  = $cateId;
    }

    public function getCateId()
    {
        return $this->cateId;
    }

    /**
     * @param string $fileName
     * 图片名称，不超过64字节，为空默认 未命名
     * Required: false
     * Example Value: 
     */
    private $fileName;

    /**
     * @param string $fileName
     * 图片名称，不超过64字节，为空默认 未命名
     * Example Value: 
     */
    public function setFileName($fileName)
    {
        $this->fileName             = $fileName;
        $this->apiParas["picture_name"]  = $fileName;
    }

    public function getFileName()
    {
        return $this->fileName;
    }

}