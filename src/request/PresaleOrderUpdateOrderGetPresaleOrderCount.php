<?php

namespca Lostinfo\JosOpenApi;

/**
 * 查询预售订单总数（支持多种条件查询）
 * 订单API-订单API组(该组下所有接口均不支持自营店铺业务)
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=55&apiId=2868&apiName=jingdong.presale.order.updateOrder.getPresaleOrderCount
 * Class PresaleOrderUpdateOrderGetPresaleOrderCount
 * @package Jd\request
 */
class PresaleOrderUpdateOrderGetPresaleOrderCount
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.presale.order.updateOrder.getPresaleOrderCount";
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
     * @param string $userPin
     * 用户pin
     * Required: false
     * Example Value: 
     */
    private $userPin;

    /**
     * @param string $userPin
     * 用户pin
     * Example Value: 
     */
    public function setUserPin($userPin)
    {
        $this->userPin             = $userPin;
        $this->apiParas["userPin"]  = $userPin;
    }

    public function getUserPin()
    {
        return $this->userPin;
    }

    /**
     * @param int $orderId
     * 订单ID
     * Required: false
     * Example Value: 
     */
    private $orderId;

    /**
     * @param int $orderId
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
     * @param int[] $orderStatusItem
     * 订单状态
     * Required: true
     * Example Value: 
     */
    private $orderStatusItem;

    /**
     * @param int[] $orderStatusItem
     * 订单状态
     * Example Value: 
     */
    public function setOrderStatusItem($orderStatusItem)
    {
        $this->orderStatusItem             = $orderStatusItem;
        $this->apiParas["orderStatusItem"]  = $orderStatusItem;
    }

    public function getOrderStatusItem()
    {
        return $this->orderStatusItem;
    }

    /**
     * @param string $startTime
     * 查询开始时间
     * Required: false
     * Example Value: 
     */
    private $startTime;

    /**
     * @param string $startTime
     * 查询开始时间
     * Example Value: 
     */
    public function setStartTime($startTime)
    {
        $this->startTime             = $startTime;
        $this->apiParas["startTime"]  = $startTime;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param string $endTime
     * 查询结束时间
     * Required: false
     * Example Value: 
     */
    private $endTime;

    /**
     * @param string $endTime
     * 查询结束时间
     * Example Value: 
     */
    public function setEndTime($endTime)
    {
        $this->endTime             = $endTime;
        $this->apiParas["endTime"]  = $endTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param int $skuID
     * skuID
     * Required: false
     * Example Value: 
     */
    private $skuID;

    /**
     * @param int $skuID
     * skuID
     * Example Value: 
     */
    public function setSkuID($skuID)
    {
        $this->skuID             = $skuID;
        $this->apiParas["skuID"]  = $skuID;
    }

    public function getSkuID()
    {
        return $this->skuID;
    }

}