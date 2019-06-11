<?php

namespace JD\request;

/**
 * 海外厂直订单发货接口
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=2996&apiName=jingdong.dropshipept.order.delivery
 * Class DropshipeptOrderDelivery
 * @package Jd\request
 */
class DropshipeptOrderDelivery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dropshipept.order.delivery";
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
     * @param Number[] $orderId
     * 订单号
     * Required: true
     * Example Value: 
     */
    private $orderId;

    /**
     * @param Number[] $orderId
     * 订单号
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
     * @param String[] $shipNo
     * 订单号
     * Required: true
     * Example Value: 
     */
    private $shipNo;

    /**
     * @param String[] $shipNo
     * 订单号
     * Example Value: 
     */
    public function setShipNo($shipNo)
    {
        $this->shipNo             = $shipNo;
        $this->apiParas["shipNo"]  = $shipNo;
    }

    public function getShipNo()
    {
        return $this->shipNo;
    }

    /**
     * @param Date $handleTime
     * 发货时间(格式yyyy-MM-dd hh:mm:ss)
     * Required: true
     * Example Value: 
     */
    private $handleTime;

    /**
     * @param Date $handleTime
     * 发货时间(格式yyyy-MM-dd hh:mm:ss)
     * Example Value: 
     */
    public function setHandleTime($handleTime)
    {
        $this->handleTime             = $handleTime;
        $this->apiParas["handleTime"]  = $handleTime;
    }

    public function getHandleTime()
    {
        return $this->handleTime;
    }

}