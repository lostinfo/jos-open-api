<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 获取商品上的所有图片列表
 * 商品API-提供网站商品信息更新、查询API,该组下所有接口均不支持自营店铺业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=48&apiId=1229&apiName=jingdong.image.read.findImagesByWareId
 * Class ImageReadFindImagesByWareId
 * @package Jd\request
 */
class ImageReadFindImagesByWareId
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.image.read.findImagesByWareId";
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
     * @param int $wareId
     * 商品id
     * Required: true
     * Example Value: 
     */
    private $wareId;

    /**
     * @param int $wareId
     * 商品id
     * Example Value: 
     */
    public function setWareId($wareId)
    {
        $this->wareId             = $wareId;
        $this->apiParas["wareId"]  = $wareId;
    }

    public function getWareId()
    {
        return $this->wareId;
    }

}