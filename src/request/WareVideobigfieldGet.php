<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 获取音像大字段信息
 * 商城API-面向用户类商城系统商品相关信息获取
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=49&apiId=88&apiName=jingdong.ware.videobigfield.get
 * Class WareVideobigfieldGet
 * @package Jd\request
 */
class WareVideobigfieldGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ware.videobigfield.get";
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
     * skuId
     * Required: true
     * Example Value: 
     */
    private $skuId;

    /**
     * @param int[] $skuId
     * skuId
     * Example Value: 
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