<?php

namespca Lostinfo\JosOpenApi;

/**
 * 查看售后和退款信息
 * 商家售后服务开放API-商家售后服务开放
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=241&apiId=3405&apiName=jingdong.asc.serviceAndRefund.view
 * Class AscServiceAndRefundView
 * @package Jd\request
 */
class AscServiceAndRefundView
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.asc.serviceAndRefund.view";
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
     * Required: false
     * Example Value: 123
     */
    private $orderId;

    /**
     * @param int $orderId
     * 订单号
     * Example Value: 123
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
     * @param string $applyTimeBegin
     * 申请时间开始（与结束两两不为空）
     * Required: false
     * Example Value: 
     */
    private $applyTimeBegin;

    /**
     * @param string $applyTimeBegin
     * 申请时间开始（与结束两两不为空）
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
     * @param string $applyTimeEnd
     * 申请时间结束（与开始两两不为空）
     * Required: false
     * Example Value: 
     */
    private $applyTimeEnd;

    /**
     * @param string $applyTimeEnd
     * 申请时间结束（与开始两两不为空）
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
     * @param string $approveTimeBegin
     * 审核时间开始（与结束两两不为空）
     * Required: false
     * Example Value: 
     */
    private $approveTimeBegin;

    /**
     * @param string $approveTimeBegin
     * 审核时间开始（与结束两两不为空）
     * Example Value: 
     */
    public function setApproveTimeBegin($approveTimeBegin)
    {
        $this->approveTimeBegin             = $approveTimeBegin;
        $this->apiParas["approveTimeBegin"]  = $approveTimeBegin;
    }

    public function getApproveTimeBegin()
    {
        return $this->approveTimeBegin;
    }

    /**
     * @param string $approveTimeEnd
     * 审核时间结束（与开始两两不为空）
     * Required: false
     * Example Value: 
     */
    private $approveTimeEnd;

    /**
     * @param string $approveTimeEnd
     * 审核时间结束（与开始两两不为空）
     * Example Value: 
     */
    public function setApproveTimeEnd($approveTimeEnd)
    {
        $this->approveTimeEnd             = $approveTimeEnd;
        $this->apiParas["approveTimeEnd"]  = $approveTimeEnd;
    }

    public function getApproveTimeEnd()
    {
        return $this->approveTimeEnd;
    }

    /**
     * @param int $pageNumber
     * 页码(从1开始)
     * Required: false
     * Example Value: 1
     */
    private $pageNumber;

    /**
     * @param int $pageNumber
     * 页码(从1开始)
     * Example Value: 1
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
     * @param int $pageSize
     * 每页大小（1-50，默认10）
     * Required: false
     * Example Value: 10
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 每页大小（1-50，默认10）
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
     * @param string $extJsonStr
     * 扩展条件（JSON格式）
     * Required: false
     * Example Value: abc
     */
    private $extJsonStr;

    /**
     * @param string $extJsonStr
     * 扩展条件（JSON格式）
     * Example Value: abc
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