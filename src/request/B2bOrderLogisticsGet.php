<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 订单配送查询接口，订单轨迹相关服务。
 * B2B开放API-B2B开放
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=391&apiId=3115&apiName=jingdong.b2b.order.logistics.get
 * Class B2bOrderLogisticsGet
 * @package Jd\request
 */
class B2bOrderLogisticsGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.b2b.order.logistics.get";
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
     * @param int $orderId
     * 京东订单号
     * Required: true
     * Example Value: 80606142751
     */
    private $orderId;

    /**
     * @param int $orderId
     * 京东订单号
     * Example Value: 80606142751
     */
    public function setOrderId($orderId)
    {
        $this->orderId             = $orderId;
        $this->apiParas["jdOrderId"]  = $orderId;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

}