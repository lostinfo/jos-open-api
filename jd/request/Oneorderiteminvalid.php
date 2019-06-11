<?php

namespace JD\request;

/**
 * 一段订单不符合商品上报
 * 集运商API-集运商对集运订单查询，集运商上报订单数据等业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=263&apiId=2449&apiName=jingdong.oneorderiteminvalid
 * Class Oneorderiteminvalid
 * @package Jd\request
 */
class Oneorderiteminvalid
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.oneorderiteminvalid";
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
     * @param Number $oneOrderId
     * oneOrderId
     * Required: true
     * Example Value: 
     */
    private $oneOrderId;

    /**
     * @param Number $oneOrderId
     * oneOrderId
     * Example Value: 
     */
    public function setOneOrderId($oneOrderId)
    {
        $this->oneOrderId             = $oneOrderId;
        $this->apiParas["oneOrderId"]  = $oneOrderId;
    }

    public function getOneOrderId()
    {
        return $this->oneOrderId;
    }

    /**
     * @param Number $skuId
     * skuId
     * Required: true
     * Example Value: 
     */
    private $skuId;

    /**
     * @param Number $skuId
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

    /**
     * @param Number $refuseType
     * refuseType
     * Required: true
     * Example Value: 
     */
    private $refuseType;

    /**
     * @param Number $refuseType
     * refuseType
     * Example Value: 
     */
    public function setRefuseType($refuseType)
    {
        $this->refuseType             = $refuseType;
        $this->apiParas["refuseType"]  = $refuseType;
    }

    public function getRefuseType()
    {
        return $this->refuseType;
    }

    /**
     * @param String $refuseReason
     * refuseReason
     * Required: false
     * Example Value: 
     */
    private $refuseReason;

    /**
     * @param String $refuseReason
     * refuseReason
     * Example Value: 
     */
    public function setRefuseReason($refuseReason)
    {
        $this->refuseReason             = $refuseReason;
        $this->apiParas["refuseReason"]  = $refuseReason;
    }

    public function getRefuseReason()
    {
        return $this->refuseReason;
    }

    /**
     * @param String $extStr
     * extStr
     * Required: false
     * Example Value: 
     */
    private $extStr;

    /**
     * @param String $extStr
     * extStr
     * Example Value: 
     */
    public function setExtStr($extStr)
    {
        $this->extStr             = $extStr;
        $this->apiParas["extStr"]  = $extStr;
    }

    public function getExtStr()
    {
        return $this->extStr;
    }

}