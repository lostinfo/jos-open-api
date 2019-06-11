<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * SN号查询
 * B2B开放API-B2B开放
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=391&apiId=3137&apiName=jingdong.b2b.sn.get
 * Class B2bSnGet
 * @package Jd\request
 */
class B2bSnGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.b2b.sn.get";
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
     * 商品编号
     * Required: false
     * Example Value: ''
     */
    private $wareId;

    /**
     * @param string $wareId
     * 商品编号
     * Example Value: ''
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
     * Example Value: ''
     */
    private $orderId;

    /**
     * @param string $orderId
     * 京东订单号
     * Example Value: ''
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