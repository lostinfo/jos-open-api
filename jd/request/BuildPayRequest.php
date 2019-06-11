<?php

namespace JD\request;

/**
 * 对接京东收银台
 * 京东万家API-对外提供万家系统的标准API接口，支持整个万家系统供应链的接口对接。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=352&apiId=2794&apiName=jingdong.buildPayRequest
 * Class BuildPayRequest
 * @package Jd\request
 */
class BuildPayRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.buildPayRequest";
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
     * @param Number $shopId
     * 店铺ID
     * Required: true
     * Example Value: 
     */
    private $shopId;

    /**
     * @param Number $shopId
     * 店铺ID
     * Example Value: 
     */
    public function setShopId($shopId)
    {
        $this->shopId             = $shopId;
        $this->apiParas["shopId"]  = $shopId;
    }

    public function getShopId()
    {
        return $this->shopId;
    }

    /**
     * @param Number $orderId
     * 订单ID
     * Required: true
     * Example Value: 
     */
    private $orderId;

    /**
     * @param Number $orderId
     * 订单ID
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
     * @param String $source
     * source
     * Required: true
     * Example Value: 
     */
    private $source;

    /**
     * @param String $source
     * source
     * Example Value: 
     */
    public function setSource($source)
    {
        $this->source             = $source;
        $this->apiParas["source"]  = $source;
    }

    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param String $bizToken
     * bizToken
     * Required: true
     * Example Value: 
     */
    private $bizToken;

    /**
     * @param String $bizToken
     * bizToken
     * Example Value: 
     */
    public function setBizToken($bizToken)
    {
        $this->bizToken             = $bizToken;
        $this->apiParas["bizToken"]  = $bizToken;
    }

    public function getBizToken()
    {
        return $this->bizToken;
    }

}