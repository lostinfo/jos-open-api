<?php

namespace JD\request;

/**
 * 证书查询输入参数
 * 商城API-面向用户类商城系统商品相关信息获取
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=49&apiId=3042&apiName=jingdong.ofc.trace.traceJewelryJsfService.orderForCertificateSearch
 * Class OfcTraceTraceJewelryJsfServiceOrderForCertificateSearch
 * @package Jd\request
 */
class OfcTraceTraceJewelryJsfServiceOrderForCertificateSearch
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ofc.trace.traceJewelryJsfService.orderForCertificateSearch";
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
     * @param String $orderId
     * 订单Id
     * Required: true
     * Example Value: 
     */
    private $orderId;

    /**
     * @param String $orderId
     * 订单Id
     * Example Value: 
     */
    public function setOrderId($orderId)
    {
        $this->orderId             = $orderId;
        $this->apiParas["orderId"]  = $orderId;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param String $skuId
     * SKU
     * Required: true
     * Example Value: 
     */
    private $skuId;

    /**
     * @param String $skuId
     * SKU
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