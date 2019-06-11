<?php

namespace JD\request;

/**
 * 查询商品库存信息
 * B2B开放API-B2B开放
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=391&apiId=3126&apiName=jingdong.b2b.product.stock.get
 * Class B2bProductStockGet
 * @package Jd\request
 */
class B2bProductStockGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.b2b.product.stock.get";
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
     * @param String $skuNums
     * 商品和数量
     * Required: true
     * Example Value: [{skuId:569172,num:1}]
     */
    private $skuNums;

    /**
     * @param String $skuNums
     * 商品和数量
     * Example Value: [{skuId:569172,num:1}]
     */
    public function setSkuNums($skuNums)
    {
        $this->skuNums             = $skuNums;
        $this->apiParas["skuNums"]  = $skuNums;
    }

    public function getSkuNums()
    {
        return $this->skuNums;
    }

    /**
     * @param String $area
     * 地址信息，省_市_县_镇
     * Required: true
     * Example Value: 22_1930_50947_52198
     */
    private $area;

    /**
     * @param String $area
     * 地址信息，省_市_县_镇
     * Example Value: 22_1930_50947_52198
     */
    public function setArea($area)
    {
        $this->area             = $area;
        $this->apiParas["area"]  = $area;
    }

    public function getArea()
    {
        return $this->area;
    }

}