<?php

namespace JD\request;

/**
 * 通过颜色获取商品图片列表
 * 商品API-提供网站商品信息更新、查询API,该组下所有接口均不支持自营店铺业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=48&apiId=1228&apiName=jingdong.image.read.findImagesByColor
 * Class ImageReadFindImagesByColor
 * @package Jd\request
 */
class ImageReadFindImagesByColor
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.image.read.findImagesByColor";
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
     * @param Number $wareId
     * 商品id
     * Required: true
     * Example Value: 
     */
    private $wareId;

    /**
     * @param Number $wareId
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

    /**
     * @param String $colorId
     * 颜色id.如果默认SKU,则传0000000000
     * Required: true
     * Example Value: 
     */
    private $colorId;

    /**
     * @param String $colorId
     * 颜色id.如果默认SKU,则传0000000000
     * Example Value: 
     */
    public function setColorId($colorId)
    {
        $this->colorId             = $colorId;
        $this->apiParas["colorId"]  = $colorId;
    }

    public function getColorId()
    {
        return $this->colorId;
    }

}