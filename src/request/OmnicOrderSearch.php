<?php

namespace JD\request;

/**
 * 订单信息查询接口
 * 全渠道开放平台API-全渠道开放平台API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=244&apiId=2896&apiName=jingdong.omnic.order.search
 * Class OmnicOrderSearch
 * @package Jd\request
 */
class OmnicOrderSearch
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.omnic.order.search";
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
     * 订单ID（选填）
     * Required: false
     * Example Value: 
     */
    private $orderId;

    /**
     * @param Number $orderId
     * 订单ID（选填）
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
     * 订单状态（选填）
     * Required: false
     * Example Value: 
     */
    private $status;

    /**
     * @param Number $status
     * 订单状态（选填）
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
     * @param Number $currentPage
     * 查询当前页码
     * Required: true
     * Example Value: 
     */
    private $currentPage;

    /**
     * @param Number $currentPage
     * 查询当前页码
     * Example Value: 
     */
    public function setCurrentPage($currentPage)
    {
        $this->currentPage             = $currentPage;
        $this->apiParas["currentPage"]  = $currentPage;
    }

    public function getCurrentPage()
    {
        return $this->currentPage;
    }

    /**
     * @param Number $pageSize
     * 每页条数
     * Required: true
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 每页条数
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
     * @param Date $startDate
     * 查询开始时间
     * Required: false
     * Example Value: 
     */
    private $startDate;

    /**
     * @param Date $startDate
     * 查询开始时间
     * Example Value: 
     */
    public function setStartDate($startDate)
    {
        $this->startDate             = $startDate;
        $this->apiParas["startDate"]  = $startDate;
    }

    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param Date $endDate
     * 查询结束时间
     * Required: false
     * Example Value: 
     */
    private $endDate;

    /**
     * @param Date $endDate
     * 查询结束时间
     * Example Value: 
     */
    public function setEndDate($endDate)
    {
        $this->endDate             = $endDate;
        $this->apiParas["endDate"]  = $endDate;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param Number $dateType
     * 查询时间类型
     * Required: false
     * Example Value: 
     */
    private $dateType;

    /**
     * @param Number $dateType
     * 查询时间类型
     * Example Value: 
     */
    public function setDateType($dateType)
    {
        $this->dateType             = $dateType;
        $this->apiParas["dateType"]  = $dateType;
    }

    public function getDateType()
    {
        return $this->dateType;
    }

    /**
     * @param Number[] $fieldList
     * 商家希望返回的订单的信息字段
     * Required: false
     * Example Value: 
     */
    private $fieldList;

    /**
     * @param Number[] $fieldList
     * 商家希望返回的订单的信息字段
     * Example Value: 
     */
    public function setFieldList($fieldList)
    {
        $this->fieldList             = $fieldList;
        $this->apiParas["fieldList"]  = $fieldList;
    }

    public function getFieldList()
    {
        return $this->fieldList;
    }

}