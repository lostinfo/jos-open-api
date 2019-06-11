<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 批量查询订单
 * 移动店铺API-移动店铺新业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=202&apiId=1778&apiName=jingdong.miniwms.oc.order.queryOrderInfoBatch
 * Class MiniwmsOcOrderQueryOrderInfoBatch
 * @package Jd\request
 */
class MiniwmsOcOrderQueryOrderInfoBatch
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.miniwms.oc.order.queryOrderInfoBatch";
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
     * @param string $stationId
     * 移动仓ID
     * Required: true
     * Example Value: 
     */
    private $stationId;

    /**
     * @param string $stationId
     * 移动仓ID
     * Example Value: 
     */
    public function setStationId($stationId)
    {
        $this->stationId             = $stationId;
        $this->apiParas["stationId"]  = $stationId;
    }

    public function getStationId()
    {
        return $this->stationId;
    }

    /**
     * @param string $orderId
     * 订单编号
     * Required: true
     * Example Value: 
     */
    private $orderId;

    /**
     * @param string $orderId
     * 订单编号
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