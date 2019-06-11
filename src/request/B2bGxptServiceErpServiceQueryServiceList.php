<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 批量查询服务单列表
 * B2B开放API-B2B开放
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=391&apiId=3147&apiName=jingdong.b2b.gxpt.serviceErpService.queryServiceList
 * Class B2bGxptServiceErpServiceQueryServiceList
 * @package Jd\request
 */
class B2bGxptServiceErpServiceQueryServiceList
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.b2b.gxpt.serviceErpService.queryServiceList";
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
     * @param string $applyStartDate
     * 开始申请日期
     * Required: false
     * Example Value: 
     */
    private $applyStartDate;

    /**
     * @param string $applyStartDate
     * 开始申请日期
     * Example Value: 
     */
    public function setApplyStartDate($applyStartDate)
    {
        $this->applyStartDate             = $applyStartDate;
        $this->apiParas["applyStartDate"]  = $applyStartDate;
    }

    public function getApplyStartDate()
    {
        return $this->applyStartDate;
    }

    /**
     * @param int $purchaseId
     * 采购单编号
     * Required: false
     * Example Value: 111
     */
    private $purchaseId;

    /**
     * @param int $purchaseId
     * 采购单编号
     * Example Value: 111
     */
    public function setPurchaseId($purchaseId)
    {
        $this->purchaseId             = $purchaseId;
        $this->apiParas["purchaseId"]  = $purchaseId;
    }

    public function getPurchaseId()
    {
        return $this->purchaseId;
    }

    /**
     * @param int $orderStatus
     * 订单状态
     * Required: false
     * Example Value: 1
     */
    private $orderStatus;

    /**
     * @param int $orderStatus
     * 订单状态
     * Example Value: 1
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
     * @param int $pageSize
     * 页大小
     * Required: true
     * Example Value: 10
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 页大小
     * Example Value: 10
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
     * @param string $applyEndDate
     * 申请结束日期
     * Required: false
     * Example Value: 
     */
    private $applyEndDate;

    /**
     * @param string $applyEndDate
     * 申请结束日期
     * Example Value: 
     */
    public function setApplyEndDate($applyEndDate)
    {
        $this->applyEndDate             = $applyEndDate;
        $this->apiParas["applyEndDate"]  = $applyEndDate;
    }

    public function getApplyEndDate()
    {
        return $this->applyEndDate;
    }

    /**
     * @param int $type
     * 类型
     * Required: false
     * Example Value: 1
     */
    private $type;

    /**
     * @param int $type
     * 类型
     * Example Value: 1
     */
    public function setType($type)
    {
        $this->type             = $type;
        $this->apiParas["type"]  = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $submitEndDate
     * 下单结束时间
     * Required: false
     * Example Value: 
     */
    private $submitEndDate;

    /**
     * @param string $submitEndDate
     * 下单结束时间
     * Example Value: 
     */
    public function setSubmitEndDate($submitEndDate)
    {
        $this->submitEndDate             = $submitEndDate;
        $this->apiParas["submitEndDate"]  = $submitEndDate;
    }

    public function getSubmitEndDate()
    {
        return $this->submitEndDate;
    }

    /**
     * @param int $pageIndex
     * 页码
     * Required: true
     * Example Value: 1
     */
    private $pageIndex;

    /**
     * @param int $pageIndex
     * 页码
     * Example Value: 1
     */
    public function setPageIndex($pageIndex)
    {
        $this->pageIndex             = $pageIndex;
        $this->apiParas["pageIndex"]  = $pageIndex;
    }

    public function getPageIndex()
    {
        return $this->pageIndex;
    }

    /**
     * @param int $serviceStatus
     * 服务单状态
     * Required: false
     * Example Value: 1
     */
    private $serviceStatus;

    /**
     * @param int $serviceStatus
     * 服务单状态
     * Example Value: 1
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
     * @param string $submitStartDate
     * 下单开始时间
     * Required: false
     * Example Value: 
     */
    private $submitStartDate;

    /**
     * @param string $submitStartDate
     * 下单开始时间
     * Example Value: 
     */
    public function setSubmitStartDate($submitStartDate)
    {
        $this->submitStartDate             = $submitStartDate;
        $this->apiParas["submitStartDate"]  = $submitStartDate;
    }

    public function getSubmitStartDate()
    {
        return $this->submitStartDate;
    }

    /**
     * @param int $serviceId
     * 服务单编号
     * Required: false
     * Example Value: 1
     */
    private $serviceId;

    /**
     * @param int $serviceId
     * 服务单编号
     * Example Value: 1
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
     * @param int $saleServiceType
     * 服务单类型
     * Required: false
     * Example Value: 1
     */
    private $saleServiceType;

    /**
     * @param int $saleServiceType
     * 服务单类型
     * Example Value: 1
     */
    public function setSaleServiceType($saleServiceType)
    {
        $this->saleServiceType             = $saleServiceType;
        $this->apiParas["saleServiceType"]  = $saleServiceType;
    }

    public function getSaleServiceType()
    {
        return $this->saleServiceType;
    }

    /**
     * @param string $startModified
     * 服务单更新起始时间
     * Required: false
     * Example Value: 
     */
    private $startModified;

    /**
     * @param string $startModified
     * 服务单更新起始时间
     * Example Value: 
     */
    public function setStartModified($startModified)
    {
        $this->startModified             = $startModified;
        $this->apiParas["startModified"]  = $startModified;
    }

    public function getStartModified()
    {
        return $this->startModified;
    }

    /**
     * @param string $endModified
     * 服务单更新截止时间
     * Required: false
     * Example Value: 
     */
    private $endModified;

    /**
     * @param string $endModified
     * 服务单更新截止时间
     * Example Value: 
     */
    public function setEndModified($endModified)
    {
        $this->endModified             = $endModified;
        $this->apiParas["endModified"]  = $endModified;
    }

    public function getEndModified()
    {
        return $this->endModified;
    }

}