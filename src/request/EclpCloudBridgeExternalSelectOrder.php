<?php

namespace JD\request;

/**
 * TMS待运输查询订单信息
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=2025&apiName=jingdong.eclp.cloud.bridge.externalSelectOrder
 * Class EclpCloudBridgeExternalSelectOrder
 * @package Jd\request
 */
class EclpCloudBridgeExternalSelectOrder
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.cloud.bridge.externalSelectOrder";
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
     * @param String $orderNo
     * 单据编号
     * Required: false
     * Example Value: 
     */
    private $orderNo;

    /**
     * @param String $orderNo
     * 单据编号
     * Example Value: 
     */
    public function setOrderNo($orderNo)
    {
        $this->orderNo             = $orderNo;
        $this->apiParas["orderNo"]  = $orderNo;
    }

    public function getOrderNo()
    {
        return $this->orderNo;
    }

    /**
     * @param String $originalOrderNo
     * 客户编号（原单号）
     * Required: false
     * Example Value: 
     */
    private $originalOrderNo;

    /**
     * @param String $originalOrderNo
     * 客户编号（原单号）
     * Example Value: 
     */
    public function setOriginalOrderNo($originalOrderNo)
    {
        $this->originalOrderNo             = $originalOrderNo;
        $this->apiParas["originalOrderNo"]  = $originalOrderNo;
    }

    public function getOriginalOrderNo()
    {
        return $this->originalOrderNo;
    }

    /**
     * @param String $carrierNo
     * 承运商ID
     * Required: false
     * Example Value: 
     */
    private $carrierNo;

    /**
     * @param String $carrierNo
     * 承运商ID
     * Example Value: 
     */
    public function setCarrierNo($carrierNo)
    {
        $this->carrierNo             = $carrierNo;
        $this->apiParas["carrierNo"]  = $carrierNo;
    }

    public function getCarrierNo()
    {
        return $this->carrierNo;
    }

    /**
     * @param String $orderStatus
     * 订单状态支持多个订单查询用逗号分隔
     * Required: true
     * Example Value: 
     */
    private $orderStatus;

    /**
     * @param String $orderStatus
     * 订单状态支持多个订单查询用逗号分隔
     * Example Value: 
     */
    public function setOrderStatus($orderStatus)
    {
        $this->orderStatus             = $orderStatus;
        $this->apiParas["orderStatus"]  = $orderStatus;
    }

    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    /**
     * @param String $startTime
     * 开始时间
     * Required: true
     * Example Value: 
     */
    private $startTime;

    /**
     * @param String $startTime
     * 开始时间
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
     * @param String $endTime
     * 结束时间
     * Required: true
     * Example Value: 
     */
    private $endTime;

    /**
     * @param String $endTime
     * 结束时间
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
     * @param String $ownerNo
     * 贷主ID
     * Required: false
     * Example Value: 
     */
    private $ownerNo;

    /**
     * @param String $ownerNo
     * 贷主ID
     * Example Value: 
     */
    public function setOwnerNo($ownerNo)
    {
        $this->ownerNo             = $ownerNo;
        $this->apiParas["ownerNo"]  = $ownerNo;
    }

    public function getOwnerNo()
    {
        return $this->ownerNo;
    }

    /**
     * @param String $warehouseNo
     * 仓库ID
     * Required: false
     * Example Value: 
     */
    private $warehouseNo;

    /**
     * @param String $warehouseNo
     * 仓库ID
     * Example Value: 
     */
    public function setWarehouseNo($warehouseNo)
    {
        $this->warehouseNo             = $warehouseNo;
        $this->apiParas["warehouseNo"]  = $warehouseNo;
    }

    public function getWarehouseNo()
    {
        return $this->warehouseNo;
    }

}