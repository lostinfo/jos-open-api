<?php

namespca Lostinfo\JosOpenApi;

/**
 * 获取图书大字段信息
 * 商城API-面向用户类商城系统商品相关信息获取
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=49&apiId=129&apiName=jingdong.ware.bookbigfield.get
 * Class WareBookbigfieldGet
 * @package Jd\request
 */
class WareBookbigfieldGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ware.bookbigfield.get";
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
     * @param int[] $skuId
     * skuid
     * Required: true
     * Example Value: 
     */
    private $skuId;

    /**
     * @param int[] $skuId
     * skuid
     * Example Value: 
     */
    public function setSkuId($skuId)
    {
        $this->skuId             = $skuId;
        $this->apiParas["sku_id"]  = $skuId;
    }

    public function getSkuId()
    {
        return $this->skuId;
    }

}