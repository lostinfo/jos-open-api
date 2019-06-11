<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 删除图片
 * 图片空间API-京东图片空间系统API 可实现图片的增删改查等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=61&apiId=187&apiName=jingdong.imgzone.picture.delete
 * Class ImgzonePictureDelete
 * @package Jd\request
 */
class ImgzonePictureDelete
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.imgzone.picture.delete";
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
     * @param string $imgIds
     * 图片ID，批量删除时ID间以半角逗号分隔，已被引用的图片不能删除
     * Required: true
     * Example Value: 
     */
    private $imgIds;

    /**
     * @param string $imgIds
     * 图片ID，批量删除时ID间以半角逗号分隔，已被引用的图片不能删除
     * Example Value: 
     */
    public function setImgIds($imgIds)
    {
        $this->imgIds             = $imgIds;
        $this->apiParas["picture_ids"]  = $imgIds;
    }

    public function getImgIds()
    {
        return $this->imgIds;
    }

}