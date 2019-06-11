<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 查询图片是否被引用
 * 图片空间API-京东图片空间系统API 可实现图片的增删改查等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=61&apiId=256&apiName=jingdong.imgzone.picture.isreferenced
 * Class ImgzonePictureIsreferenced
 * @package Jd\request
 */
class ImgzonePictureIsreferenced
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.imgzone.picture.isreferenced";
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
     * @param string $imgId
     * 图片ID
     * Required: true
     * Example Value: 
     */
    private $imgId;

    /**
     * @param string $imgId
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

}