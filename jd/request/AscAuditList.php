<?php

namespace JD\request;

/**
 * 查询待审核申请单列表
 * 商家售后服务开放API-商家售后服务开放
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=241&apiId=2070&apiName=jingdong.asc.audit.list
 * Class AscAuditList
 * @package Jd\request
 */
class AscAuditList
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.asc.audit.list";
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
     * 客户名称
     * Required: false
     * Example Value: 
     */
    private $customerName;

    /**
     * @param String $customerName
     * 客户名称
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
     * 客户联系电话
     * Required: false
     * Example Value: 
     */
    private $customerTel;

    /**
     * @param String $customerTel
     * 客户联系电话
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
     * @param String $verificationCode
     * 验证码
     * Required: false
     * Example Value: 
     */
    private $verificationCode;

    /**
     * @param String $verificationCode
     * 验证码
     * Example Value: 
     */
    public function setVerificationCode($verificationCode)
    {
        $this->verificationCode             = $verificationCode;
        $this->apiParas["verificationCode"]  = $verificationCode;
    }

    public function getVerificationCode()
    {
        return $this->verificationCode;
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