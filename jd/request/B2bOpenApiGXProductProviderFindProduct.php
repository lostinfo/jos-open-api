<?php

namespace JD\request;

/**
 * 查询商品详情接口
 * B2B开放API-B2B开放
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=391&apiId=3081&apiName=jingdong.b2b.open.api.GXProductProvider.findProduct
 * Class B2bOpenApiGXProductProviderFindProduct
 * @package Jd\request
 */
class B2bOpenApiGXProductProviderFindProduct
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.b2b.open.api.GXProductProvider.findProduct";
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
     * @param Number $venderId
     * 商家id
     * Required: true
     * Example Value: 
     */
    private $venderId;

    /**
     * @param Number $venderId
     * 商家id
     * Example Value: 
     */
    public function setVenderId($venderId)
    {
        $this->venderId             = $venderId;
        $this->apiParas["venderId"]  = $venderId;
    }

    public function getVenderId()
    {
        return $this->venderId;
    }

    /**
     * @param String[] $consumerSkuId
     * consumerSkuId
     * Required: false
     * Example Value: 
     */
    private $consumerSkuId;

    /**
     * @param String[] $consumerSkuId
     * consumerSkuId
     * Example Value: 
     */
    public function setConsumerSkuId($consumerSkuId)
    {
        $this->consumerSkuId             = $consumerSkuId;
        $this->apiParas["consumerSkuId"]  = $consumerSkuId;
    }

    public function getConsumerSkuId()
    {
        return $this->consumerSkuId;
    }

    /**
     * @param Number[] $jdSkuId
     * jdSkuId
     * Required: false
     * Example Value: 
     */
    private $jdSkuId;

    /**
     * @param Number[] $jdSkuId
     * jdSkuId
     * Example Value: 
     */
    public function setJdSkuId($jdSkuId)
    {
        $this->jdSkuId             = $jdSkuId;
        $this->apiParas["jdSkuId"]  = $jdSkuId;
    }

    public function getJdSkuId()
    {
        return $this->jdSkuId;
    }

}