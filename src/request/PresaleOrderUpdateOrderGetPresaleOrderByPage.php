<?php

namespace JD\request;

/**
 * 预售订单详情分页查询（支持多种查询条件）
 * 订单API-订单API组(该组下所有接口均不支持自营店铺业务)
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=55&apiId=2869&apiName=jingdong.presale.order.updateOrder.getPresaleOrderByPage
 * Class PresaleOrderUpdateOrderGetPresaleOrderByPage
 * @package Jd\request
 */
class PresaleOrderUpdateOrderGetPresaleOrderByPage
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.presale.order.updateOrder.getPresaleOrderByPage";
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
     * @param String $userPin
     * 用户pin
     * Required: false
     * Example Value: 
     */
    private $userPin;

    /**
     * @param String $userPin
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
     * @param Number $orderId
     * 订单id
     * Required: false
     * Example Value: 
     */
    private $orderId;

    /**
     * @param Number $orderId
     * 订单id
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
     * @param Number[] $orderStatusItem
     * 订单状态，参见https://jos.jd.com/doc/channel.htm?id=764
     * Required: true
     * Example Value: 
     */
    private $orderStatusItem;

    /**
     * @param Number[] $orderStatusItem
     * 订单状态，参见https://jos.jd.com/doc/channel.htm?id=764
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
     * @param Date $startTime
     * 查询开始时间
     * Required: false
     * Example Value: 
     */
    private $startTime;

    /**
     * @param Date $startTime
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
     * @param Date $endTime
     * 查询结束时间
     * Required: false
     * Example Value: 
     */
    private $endTime;

    /**
     * @param Date $endTime
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
     * @param Number $skuID
     * skuID
     * Required: false
     * Example Value: 
     */
    private $skuID;

    /**
     * @param Number $skuID
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

    /**
     * @param Number $beginIndex
     * 起始记录数
     * Required: true
     * Example Value: 
     */
    private $beginIndex;

    /**
     * @param Number $beginIndex
     * 起始记录数
     * Example Value: 
     */
    public function setBeginIndex($beginIndex)
    {
        $this->beginIndex             = $beginIndex;
        $this->apiParas["beginIndex"]  = $beginIndex;
    }

    public function getBeginIndex()
    {
        return $this->beginIndex;
    }

    /**
     * @param Number $endIndex
     * 查询条数
     * Required: true
     * Example Value: 
     */
    private $endIndex;

    /**
     * @param Number $endIndex
     * 查询条数
     * Example Value: 
     */
    public function setEndIndex($endIndex)
    {
        $this->endIndex             = $endIndex;
        $this->apiParas["endIndex"]  = $endIndex;
    }

    public function getEndIndex()
    {
        return $this->endIndex;
    }

}