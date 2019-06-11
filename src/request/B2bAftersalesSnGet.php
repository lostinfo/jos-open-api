<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 获取SN码
 * B2B开放API-B2B开放
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=391&apiId=3152&apiName=jingdong.b2b.aftersales.sn.get
 * Class B2bAftersalesSnGet
 * @package Jd\request
 */
class B2bAftersalesSnGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.b2b.aftersales.sn.get";
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
     * @param string $wareId
     * 京东商品号
     * Required: true
     * Example Value: 
     */
    private $wareId;

    /**
     * @param string $wareId
     * 京东商品号
     * Example Value: 
     */
    public function setWareId($wareId)
    {
        $this->wareId             = $wareId;
        $this->apiParas["wareId"]  = $wareId;
    }

    public function getWareId()
    {
        return $this->wareId;
    }

    /**
     * @param string $orderId
     * 京东订单号
     * Required: true
     * Example Value: 
     */
    private $orderId;

    /**
     * @param string $orderId
     * 京东订单号
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

}