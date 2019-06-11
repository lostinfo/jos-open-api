<?php

namespca Lostinfo\JosOpenApi;

/**
 * 同步订单生产信息
 * 全渠道开放平台API-全渠道开放平台API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=244&apiId=2310&apiName=jingdong.omnichannel.order.ship.update
 * Class OmnichannelOrderShipUpdate
 * @package Jd\request
 */
class OmnichannelOrderShipUpdate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.omnichannel.order.ship.update";
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
     * 订单号
     * Required: true
     * Example Value: 
     */
    private $orderId;

    /**
     * @param int $orderId
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
     * @param string $deliveryId
     * 运单号
     * Required: true
     * Example Value: 
     */
    private $deliveryId;

    /**
     * @param string $deliveryId
     * 运单号
     * Example Value: 
     */
    public function setDeliveryId($deliveryId)
    {
        $this->deliveryId             = $deliveryId;
        $this->apiParas["deliveryId"]  = $deliveryId;
    }

    public function getDeliveryId()
    {
        return $this->deliveryId;
    }

    /**
     * @param int $status
     * 配送状态
     * Required: true
     * Example Value: 
     */
    private $status;

    /**
     * @param int $status
     * 配送状态
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
     * @param string $operateName
     * 操作人名
     * Required: false
     * Example Value: 
     */
    private $operateName;

    /**
     * @param string $operateName
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
     * @param string $contactPhone
     * 操作人联系电话
     * Required: false
     * Example Value: 
     */
    private $contactPhone;

    /**
     * @param string $contactPhone
     * 操作人联系电话
     * Example Value: 
     */
    public function setContactPhone($contactPhone)
    {
        $this->contactPhone             = $contactPhone;
        $this->apiParas["contactPhone"]  = $contactPhone;
    }

    public function getContactPhone()
    {
        return $this->contactPhone;
    }

    /**
     * @param string $operateTime
     * 操作时间
     * Required: false
     * Example Value: 
     */
    private $operateTime;

    /**
     * @param string $operateTime
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