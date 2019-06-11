<?php

namespace JD\request;

/**
 * 根据商品id(wareId)和colorId查询透图
 * 商品API-提供网站商品信息更新、查询API,该组下所有接口均不支持自营店铺业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=48&apiId=2499&apiName=jingdong.transparentImage.read.findByWareIdAndColorId
 * Class TransparentImageReadFindByWareIdAndColorId
 * @package Jd\request
 */
class TransparentImageReadFindByWareIdAndColorId
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.transparentImage.read.findByWareIdAndColorId";
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
     * 颜色id
     * Required: true
     * Example Value: 
     */
    private $colorId;

    /**
     * @param String $colorId
     * 颜色id
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