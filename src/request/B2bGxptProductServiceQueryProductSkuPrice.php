<?php

namespca Lostinfo\JosOpenApi;

/**
 * 通过skuId查询采购价
 * B2B开放API-B2B开放
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=391&apiId=3087&apiName=jingdong.b2b.gxpt.ProductService.queryProductSkuPrice
 * Class B2bGxptProductServiceQueryProductSkuPrice
 * @package Jd\request
 */
class B2bGxptProductServiceQueryProductSkuPrice
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.b2b.gxpt.ProductService.queryProductSkuPrice";
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
     * @param int $venderId
     * 商家id
     * Required: true
     * Example Value: 
     */
    private $venderId;

    /**
     * @param int $venderId
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
     * @param int[] $skuSet
     * sku集合
     * Required: true
     * Example Value: 
     */
    private $skuSet;

    /**
     * @param int[] $skuSet
     * sku集合
     * Example Value: 
     */
    public function setSkuSet($skuSet)
    {
        $this->skuSet             = $skuSet;
        $this->apiParas["skuSet"]  = $skuSet;
    }

    public function getSkuSet()
    {
        return $this->skuSet;
    }

    /**
     * @param int $lineId
     * 产品线id
     * Required: true
     * Example Value: 
     */
    private $lineId;

    /**
     * @param int $lineId
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

}