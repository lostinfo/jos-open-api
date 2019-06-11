<?php

namespace JD\request;

/**
 * 通过skuId修改商品采购价
 * B2B开放API-B2B开放
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=391&apiId=3089&apiName=jingdong.b2b.gxpt.productService.modifyProductPrice
 * Class B2bGxptProductServiceModifyProductPrice
 * @package Jd\request
 */
class B2bGxptProductServiceModifyProductPrice
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.b2b.gxpt.productService.modifyProductPrice";
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
     * @param Number $jdSkuId
     * 京东skuId
     * Required: true
     * Example Value: 
     */
    private $jdSkuId;

    /**
     * @param Number $jdSkuId
     * 京东skuId
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
     * @param String $lineId
     * 产品线id
     * Required: true
     * Example Value: 
     */
    private $lineId;

    /**
     * @param String $lineId
     * 产品线id
     * Example Value: 
     */
    public function setLineId($lineId)
    {
        $this->lineId             = $lineId;
        $this->apiParas["lineId"]  = $lineId;
    }

    public function getLineId()
    {
        return $this->lineId;
    }

    /**
     * @param Number $purchasePrice
     * sku采购价
     * Required: true
     * Example Value: 
     */
    private $purchasePrice;

    /**
     * @param Number $purchasePrice
     * sku采购价
     * Example Value: 
     */
    public function setPurchasePrice($purchasePrice)
    {
        $this->purchasePrice             = $purchasePrice;
        $this->apiParas["purchasePrice"]  = $purchasePrice;
    }

    public function getPurchasePrice()
    {
        return $this->purchasePrice;
    }

    /**
     * @param String $consumerSkuId
     * 第三方skuId
     * Required: false
     * Example Value: 
     */
    private $consumerSkuId;

    /**
     * @param String $consumerSkuId
     * 第三方skuId
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

}