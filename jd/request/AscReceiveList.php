<?php

namespace JD\request;

/**
 * 查询待收货服务单列表
 * 商家售后服务开放API-商家售后服务开放
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=241&apiId=2114&apiName=jingdong.asc.receive.list
 * Class AscReceiveList
 * @package Jd\request
 */
class AscReceiveList
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.asc.receive.list";
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
     * @param Number $skuId
     * 商品编号
     * Required: false
     * Example Value: 
     */
    private $skuId;

    /**
     * @param Number $skuId
     * 商品编号
     * Example Value: 
     */
    public function setSkuId($skuId)
    {
        $this->skuId             = $skuId;
        $this->apiParas["skuId"]  = $skuId;
    }

    public function getSkuId()
    {
        return $this->skuId;
    }

    /**
     * @param Date $applyTimeBegin
     * 申请时间开始
     * Required: false
     * Example Value: 
     */
    private $applyTimeBegin;

    /**
     * @param Date $applyTimeBegin
     * 申请时间开始
     * Example Value: 
     */
    public function setApplyTimeBegin($applyTimeBegin)
    {
        $this->applyTimeBegin             = $applyTimeBegin;
        $this->apiParas["applyTimeBegin"]  = $applyTimeBegin;
    }

    public function getApplyTimeBegin()
    {
        return $this->applyTimeBegin;
    }

    /**
     * @param Date $applyTimeEnd
     * 申请时间结束
     * Required: false
     * Example Value: 
     */
    private $applyTimeEnd;

    /**
     * @param Date $applyTimeEnd
     * 申请时间结束
     * Example Value: 
     */
    public function setApplyTimeEnd($applyTimeEnd)
    {
        $this->applyTimeEnd             = $applyTimeEnd;
        $this->apiParas["applyTimeEnd"]  = $applyTimeEnd;
    }

    public function getApplyTimeEnd()
    {
        return $this->applyTimeEnd;
    }

    /**
     * @param String $expressCode
     * 运单号
     * Required: false
     * Example Value: 
     */
    private $expressCode;

    /**
     * @param String $expressCode
     * 运单号
     * Example Value: 
     */
    public function setExpressCode($expressCode)
    {
        $this->expressCode             = $expressCode;
        $this->apiParas["expressCode"]  = $expressCode;
    }

    public function getExpressCode()
    {
        return $this->expressCode;
    }

    /**
     * @param Boolean $timeoutFlag
     * 是否超时
     * Required: false
     * Example Value: 
     */
    private $timeoutFlag;

    /**
     * @param Boolean $timeoutFlag
     * 是否超时
     * Example Value: 
     */
    public function setTimeoutFlag($timeoutFlag)
    {
        $this->timeoutFlag             = $timeoutFlag;
        $this->apiParas["timeoutFlag"]  = $timeoutFlag;
    }

    public function getTimeoutFlag()
    {
        return $this->timeoutFlag;
    }

    /**
     * @param String $customerPin
     * 客户账号
     * Required: false
     * Example Value: 
     */
    private $customerPin;

    /**
     * @param String $customerPin
     * 客户账号
     * Example Value: 
     */
    public function setCustomerPin($customerPin)
    {
        $this->customerPin             = $customerPin;
        $this->apiParas["customerPin"]  = $customerPin;
    }

    public function getCustomerPin()
    {
        return $this->customerPin;
    }

    /**
     * @param String $customerName
     * 客户姓名
     * Required: false
     * Example Value: 
     */
    private $customerName;

    /**
     * @param String $customerName
     * 客户姓名
     * Example Value: 
     */
    public function setCustomerName($customerName)
    {
        $this->customerName             = $customerName;
        $this->apiParas["customerName"]  = $customerName;
    }

    public function getCustomerName()
    {
        return $this->customerName;
    }

    /**
     * @param String $customerTel
     * 客户电话
     * Required: false
     * Example Value: 
     */
    private $customerTel;

    /**
     * @param String $customerTel
     * 客户电话
     * Example Value: 
     */
    public function setCustomerTel($customerTel)
    {
        $this->customerTel             = $customerTel;
        $this->apiParas["customerTel"]  = $customerTel;
    }

    public function getCustomerTel()
    {
        return $this->customerTel;
    }

    /**
     * @param Number $dealType
     * 处理方式
     * Required: false
     * Example Value: 
     */
    private $dealType;

    /**
     * @param Number $dealType
     * 处理方式
     * Example Value: 
     */
    public function setDealType($dealType)
    {
        $this->dealType             = $dealType;
        $this->apiParas["dealType"]  = $dealType;
    }

    public function getDealType()
    {
        return $this->dealType;
    }

    /**
     * @param Number $customerExpect
     * 客户期望
     * Required: false
     * Example Value: 
     */
    private $customerExpect;

    /**
     * @param Number $customerExpect
     * 客户期望
     * Example Value: 
     */
    public function setCustomerExpect($customerExpect)
    {
        $this->customerExpect             = $customerExpect;
        $this->apiParas["customerExpect"]  = $customerExpect;
    }

    public function getCustomerExpect()
    {
        return $this->customerExpect;
    }

    /**
     * @param Boolean $jdInterveneFlag
     * 是否京东介入
     * Required: false
     * Example Value: 
     */
    private $jdInterveneFlag;

    /**
     * @param Boolean $jdInterveneFlag
     * 是否京东介入
     * Example Value: 
     */
    public function setJdInterveneFlag($jdInterveneFlag)
    {
        $this->jdInterveneFlag             = $jdInterveneFlag;
        $this->apiParas["jdInterveneFlag"]  = $jdInterveneFlag;
    }

    public function getJdInterveneFlag()
    {
        return $this->jdInterveneFlag;
    }

    /**
     * @param Number $approveResult
     * 返回方式
     * Required: false
     * Example Value: 
     */
    private $approveResult;

    /**
     * @param Number $approveResult
     * 返回方式
     * Example Value: 
     */
    public function setApproveResult($approveResult)
    {
        $this->approveResult             = $approveResult;
        $this->apiParas["approveResult"]  = $approveResult;
    }

    public function getApproveResult()
    {
        return $this->approveResult;
    }

    /**
     * @param Number $approveReasonCid1
     * 一级审核原因
     * Required: false
     * Example Value: 
     */
    private $approveReasonCid1;

    /**
     * @param Number $approveReasonCid1
     * 一级审核原因
     * Example Value: 
     */
    public function setApproveReasonCid1($approveReasonCid1)
    {
        $this->approveReasonCid1             = $approveReasonCid1;
        $this->apiParas["approveReasonCid1"]  = $approveReasonCid1;
    }

    public function getApproveReasonCid1()
    {
        return $this->approveReasonCid1;
    }

    /**
     * @param String $orderShopId
     * 订单门店ID
     * Required: false
     * Example Value: 
     */
    private $orderShopId;

    /**
     * @param String $orderShopId
     * 订单门店ID
     * Example Value: 
     */
    public function setOrderShopId($orderShopId)
    {
        $this->orderShopId             = $orderShopId;
        $this->apiParas["orderShopId"]  = $orderShopId;
    }

    public function getOrderShopId()
    {
        return $this->orderShopId;
    }

    /**
     * @param String $returnShopId
     * 售后门店ID
     * Required: false
     * Example Value: 
     */
    private $returnShopId;

    /**
     * @param String $returnShopId
     * 售后门店ID
     * Example Value: 
     */
    public function setReturnShopId($returnShopId)
    {
        $this->returnShopId             = $returnShopId;
        $this->apiParas["returnShopId"]  = $returnShopId;
    }

    public function getReturnShopId()
    {
        return $this->returnShopId;
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
     * 每页大小（1\x7e50，默认10）
     * Required: false
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 每页大小（1\x7e50，默认10）
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