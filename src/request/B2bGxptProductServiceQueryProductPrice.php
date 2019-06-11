<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 通过spuId查询商品价格
 * B2B开放API-B2B开放
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=391&apiId=3088&apiName=jingdong.b2b.gxpt.productService.queryProductPrice
 * Class B2bGxptProductServiceQueryProductPrice
 * @package Jd\request
 */
class B2bGxptProductServiceQueryProductPrice
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.b2b.gxpt.productService.queryProductPrice";
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
     * 供应商id
     * Required: true
     * Example Value: 
     */
    private $venderId;

    /**
     * @param int $venderId
     * 供应商id
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
     * @param int[] $spuSet
     * spu集合
     * Required: true
     * Example Value: 
     */
    private $spuSet;

    /**
     * @param int[] $spuSet
     * spu集合
     * Example Value: 
     */
    public function setSpuSet($spuSet)
    {
        $this->spuSet             = $spuSet;
        $this->apiParas["spuSet"]  = $spuSet;
    }

    public function getSpuSet()
    {
        return $this->spuSet;
    }

}