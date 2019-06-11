<?php

namespace JD\request;

/**
 * 增量查询服务单信息
 * 商家售后服务开放API-商家售后服务开放
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=241&apiId=2171&apiName=jingdong.asc.sync.list
 * Class AscSyncList
 * @package Jd\request
 */
class AscSyncList
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.asc.sync.list";
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
     * @param String $buId
     * 商家编号
     * Required: true
     * Example Value: 
     */
    private $buId;

    /**
     * @param String $buId
     * 商家编号
     * Example Value: 
     */
    public function setBuId($buId)
    {
        $this->buId             = $buId;
        $this->apiParas["buId"]  = $buId;
    }

    public function getBuId()
    {
        return $this->buId;
    }

    /**
     * @param String $operatePin
     * 操作人账号
     * Required: true
     * Example Value: 
     */
    private $operatePin;

    /**
     * @param String $operatePin
     * 操作人账号
     * Example Value: 
     */
    public function setOperatePin($operatePin)
    {
        $this->operatePin             = $operatePin;
        $this->apiParas["operatePin"]  = $operatePin;
    }

    public function getOperatePin()
    {
        return $this->operatePin;
    }

    /**
     * @param String $operateNick
     * 操作人姓名
     * Required: true
     * Example Value: 
     */
    private $operateNick;

    /**
     * @param String $operateNick
     * 操作人姓名
     * Example Value: 
     */
    public function setOperateNick($operateNick)
    {
        $this->operateNick             = $operateNick;
        $this->apiParas["operateNick"]  = $operateNick;
    }

    public function getOperateNick()
    {
        return $this->operateNick;
    }

    /**
     * @param Number $serviceId
     * 服务单号
     * Required: false
     * Example Value: 
     */
    private $serviceId;

    /**
     * @param Number $serviceId
     * 服务单号
     * Example Value: 
     */
    public function setServiceId($serviceId)
    {
        $this->serviceId             = $serviceId;
        $this->apiParas["serviceId"]  = $serviceId;
    }

    public function getServiceId()
    {
        return $this->serviceId;
    }

    /**
     * @param Number $orderId
     * 订单号
     * Required: false
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
     * @param Number $serviceStatus
     * 服务单状态
     * Required: false
     * Example Value: 
     */
    private $serviceStatus;

    /**
     * @param Number $serviceStatus
     * 服务单状态
     * Example Value: 
     */
    public function setServiceStatus($serviceStatus)
    {
        $this->serviceStatus             = $serviceStatus;
        $this->apiParas["serviceStatus"]  = $serviceStatus;
    }

    public function getServiceStatus()
    {
        return $this->serviceStatus;
    }

    /**
     * @param Number $orderType
     * 订单类型
     * Required: false
     * Example Value: 
     */
    private $orderType;

    /**
     * @param Number $orderType
     * 订单类型
     * Example Value: 
     */
    public function setOrderType($orderType)
    {
        $this->orderType             = $orderType;
        $this->apiParas["orderType"]  = $orderType;
    }

    public function getOrderType()
    {
        return $this->orderType;
    }

    /**
     * @param Date $updateTimeBegin
     * 服务单更新时间开始（与服务单更新时间结束成对必填）
     * Required: false
     * Example Value: 
     */
    private $updateTimeBegin;

    /**
     * @param Date $updateTimeBegin
     * 服务单更新时间开始（与服务单更新时间结束成对必填）
     * Example Value: 
     */
    public function setUpdateTimeBegin($updateTimeBegin)
    {
        $this->updateTimeBegin             = $updateTimeBegin;
        $this->apiParas["updateTimeBegin"]  = $updateTimeBegin;
    }

    public function getUpdateTimeBegin()
    {
        return $this->updateTimeBegin;
    }

    /**
     * @param Date $updateTimeEnd
     * 服务单更新时间结束（与服务单更新时间开始成对必填）
     * Required: false
     * Example Value: 
     */
    private $updateTimeEnd;

    /**
     * @param Date $updateTimeEnd
     * 服务单更新时间结束（与服务单更新时间开始成对必填）
     * Example Value: 
     */
    public function setUpdateTimeEnd($updateTimeEnd)
    {
        $this->updateTimeEnd             = $updateTimeEnd;
        $this->apiParas["updateTimeEnd"]  = $updateTimeEnd;
    }

    public function getUpdateTimeEnd()
    {
        return $this->updateTimeEnd;
    }

    /**
     * @param Date $freightUpdateDateBegin
     * 运单更新时间开始（与运单更新时间结束成对必填）
     * Required: false
     * Example Value: 
     */
    private $freightUpdateDateBegin;

    /**
     * @param Date $freightUpdateDateBegin
     * 运单更新时间开始（与运单更新时间结束成对必填）
     * Example Value: 
     */
    public function setFreightUpdateDateBegin($freightUpdateDateBegin)
    {
        $this->freightUpdateDateBegin             = $freightUpdateDateBegin;
        $this->apiParas["freightUpdateDateBegin"]  = $freightUpdateDateBegin;
    }

    public function getFreightUpdateDateBegin()
    {
        return $this->freightUpdateDateBegin;
    }

    /**
     * @param Date $freightUpdateDateEnd
     * 运单更新时间结束（与运单更新时间开始成对必填）
     * Required: false
     * Example Value: 
     */
    private $freightUpdateDateEnd;

    /**
     * @param Date $freightUpdateDateEnd
     * 运单更新时间结束（与运单更新时间开始成对必填）
     * Example Value: 
     */
    public function setFreightUpdateDateEnd($freightUpdateDateEnd)
    {
        $this->freightUpdateDateEnd             = $freightUpdateDateEnd;
        $this->apiParas["freightUpdateDateEnd"]  = $freightUpdateDateEnd;
    }

    public function getFreightUpdateDateEnd()
    {
        return $this->freightUpdateDateEnd;
    }

    /**
     * @param Number $pageNumber
     * 页码(从1开始)
     * Required: false
     * Example Value: 
     */
    private $pageNumber;

    /**
     * @param Number $pageNumber
     * 页码(从1开始)
     * Example Value: 
     */
    public function setPageNumber($pageNumber)
    {
        $this->pageNumber             = $pageNumber;
        $this->apiParas["pageNumber"]  = $pageNumber;
    }

    public function getPageNumber()
    {
        return $this->pageNumber;
    }

    /**
     * @param Number $pageSize
     * 每页大小（1\\\x7e50，默认10）
     * Required: false
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 每页大小（1\\\x7e50，默认10）
     * Example Value: 
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize             = $pageSize;
        $this->apiParas["pageSize"]  = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * @param String $extJsonStr
     * 扩展条件（JSON格式）
     * Required: false
     * Example Value: 
     */
    private $extJsonStr;

    /**
     * @param String $extJsonStr
     * 扩展条件（JSON格式）
     * Example Value: 
     */
    public function setExtJsonStr($extJsonStr)
    {
        $this->extJsonStr             = $extJsonStr;
        $this->apiParas["extJsonStr"]  = $extJsonStr;
    }

    public function getExtJsonStr()
    {
        return $this->extJsonStr;
    }

}