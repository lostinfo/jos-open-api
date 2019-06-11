<?php

namespace JD\request;

/**
 * 更新图片
 * 图片空间API-京东图片空间系统API 可实现图片的增删改查等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=61&apiId=210&apiName=jingdong.imgzone.picture.update
 * Class ImgzonePictureUpdate
 * @package Jd\request
 */
class ImgzonePictureUpdate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.imgzone.picture.update";
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
     * @param String $imgId
     * 图片ID
     * Required: true
     * Example Value: 
     */
    private $imgId;

    /**
     * @param String $imgId
     * 图片ID
     * Example Value: 
     */
    public function setImgId($imgId)
    {
        $this->imgId             = $imgId;
        $this->apiParas["picture_id"]  = $imgId;
    }

    public function getImgId()
    {
        return $this->imgId;
    }

    /**
     * @param String $imgName
     * 新的图片名称，不能超过64个字节，与新的图片分类ID不能同时为空(此参数暂未启用)
     * Required: false
     * Example Value: 
     */
    private $imgName;

    /**
     * @param String $imgName
     * 新的图片名称，不能超过64个字节，与新的图片分类ID不能同时为空(此参数暂未启用)
     * Example Value: 
     */
    public function setImgName($imgName)
    {
        $this->imgName             = $imgName;
        $this->apiParas["picture_name"]  = $imgName;
    }

    public function getImgName()
    {
        return $this->imgName;
    }

    /**
     * @param Number $imgCateId
     * 新的图片分类ID，与新的图片名称不能同时为空
     * Required: false
     * Example Value: 
     */
    private $imgCateId;

    /**
     * @param Number $imgCateId
     * 新的图片分类ID，与新的图片名称不能同时为空
     * Example Value: 
     */
    public function setImgCateId($imgCateId)
    {
        $this->imgCateId             = $imgCateId;
        $this->apiParas["picture_cate_id"]  = $imgCateId;
    }

    public function getImgCateId()
    {
        return $this->imgCateId;
    }

}