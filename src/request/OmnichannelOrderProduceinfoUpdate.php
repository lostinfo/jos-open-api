<?php

namespace JD\request;

/**
 * 同步订单生产信息
 * 全渠道开放平台API-全渠道开放平台API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=244&apiId=2321&apiName=jingdong.omnichannel.order.produceinfo.update
 * Class OmnichannelOrderProduceinfoUpdate
 * @package Jd\request
 */
class OmnichannelOrderProduceinfoUpdate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.omnichannel.order.produceinfo.update";
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
     * @param Number $orderId
     * 订单号
     * Required: true
     * Example Value: 
     */
    private $orderId;

    /**
     * @param Number $orderId
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
     * @param Number $status
     * 生产状态
     * Required: true
     * Example Value: 
     */
    private $status;

    /**
     * @param Number $status
     * 生产状态
     * Example Value: 
     */
    public function setStatus($status)
    {
        $this->status             = $status;
        $this->apiParas["status"]  = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param String $storeType
     * 库房类型
     * Required: true
     * Example Value: 
     */
    private $storeType;

    /**
     * @param String $storeType
     * 库房类型
     * Example Value: 
     */
    public function setStoreType($storeType)
    {
        $this->storeType             = $storeType;
        $this->apiParas["storeType"]  = $storeType;
    }

    public function getStoreType()
    {
        return $this->storeType;
    }

    /**
     * @param String $storeId
     * 库房ID
     * Required: true
     * Example Value: 
     */
    private $storeId;

    /**
     * @param String $storeId
     * 库房ID
     * Example Value: 
     */
    public function setStoreId($storeId)
    {
        $this->storeId             = $storeId;
        $this->apiParas["storeId"]  = $storeId;
    }

    public function getStoreId()
    {
        return $this->storeId;
    }

    /**
     * @param String $operateName
     * 操作人名
     * Required: false
     * Example Value: 
     */
    private $operateName;

    /**
     * @param String $operateName
     * 操作人名
     * Example Value: 
     */
    public function setOperateName($operateName)
    {
        $this->operateName             = $operateName;
        $this->apiParas["operateName"]  = $operateName;
    }

    public function getOperateName()
    {
        return $this->operateName;
    }

    /**
     * @param Date $operateTime
     * 操作时间
     * Required: false
     * Example Value: 
     */
    private $operateTime;

    /**
     * @param Date $operateTime
     * 操作时间
     * Example Value: 
     */
    public function setOperateTime($operateTime)
    {
        $this->operateTime             = $operateTime;
        $this->apiParas["operateTime"]  = $operateTime;
    }

    public function getOperateTime()
    {
        return $this->operateTime;
    }

}