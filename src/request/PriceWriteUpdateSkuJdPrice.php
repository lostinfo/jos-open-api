<?php

namespace JD\request;

/**
 * 修改SKU京东价
 * 商品API-提供网站商品信息更新、查询API,该组下所有接口均不支持自营店铺业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=48&apiId=1253&apiName=jingdong.price.write.updateSkuJdPrice
 * Class PriceWriteUpdateSkuJdPrice
 * @package Jd\request
 */
class PriceWriteUpdateSkuJdPrice
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.price.write.updateSkuJdPrice";
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
     * @param Number $jdPrice
     * 京东价,单位元
     * Required: true
     * Example Value: 
     */
    private $jdPrice;

    /**
     * @param Number $jdPrice
     * 京东价,单位元
     * Example Value: 
     */
    public function setJdPrice($jdPrice)
    {
        $this->jdPrice             = $jdPrice;
        $this->apiParas["jdPrice"]  = $jdPrice;
    }

    public function getJdPrice()
    {
        return $this->jdPrice;
    }

    /**
     * @param Number $skuId
     * skuId
     * Required: true
     * Example Value: skuId
     */
    private $skuId;

    /**
     * @param Number $skuId
     * skuId
     * Example Value: skuId
     */
    public function setSkuId($skuId)
    {
        $this->skuId             = $skuId;
        $this->apiParas["skuId"]  = $skuId;
    }

    public function getSkuId()
    {
        return $this->skuId;
    }

}