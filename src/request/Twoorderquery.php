<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 二段订单查询
 * 集运商API-集运商对集运订单查询，集运商上报订单数据等业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=263&apiId=2451&apiName=jingdong.twoorderquery
 * Class Twoorderquery
 * @package Jd\request
 */
class Twoorderquery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.twoorderquery";
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
     * @param string $startDate
     * startDate
     * Required: true
     * Example Value: 
     */
    private $startDate;

    /**
     * @param string $startDate
     * startDate
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
     * @param string $endDate
     * endDate
     * Required: true
     * Example Value: 
     */
    private $endDate;

    /**
     * @param string $endDate
     * endDate
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
     * @param int $orderStatus
     * orderStatus
     * Required: false
     * Example Value: 
     */
    private $orderStatus;

    /**
     * @param int $orderStatus
     * orderStatus
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
     * @param int $page
     * page
     * Required: false
     * Example Value: 
     */
    private $page;

    /**
     * @param int $page
     * page
     * Example Value: 
     */
    public function setPage($page)
    {
        $this->page             = $page;
        $this->apiParas["page"]  = $page;
    }

    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param int $pageSize
     * pageSize
     * Required: false
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * pageSize
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
     * @param int $sortType
     * sortType
     * Required: false
     * Example Value: 
     */
    private $sortType;

    /**
     * @param int $sortType
     * sortType
     * Example Value: 
     */
    public function setSortType($sortType)
    {
        $this->sortType             = $sortType;
        $this->apiParas["sortType"]  = $sortType;
    }

    public function getSortType()
    {
        return $this->sortType;
    }

    /**
     * @param int $dateType
     * dateType
     * Required: false
     * Example Value: 
     */
    private $dateType;

    /**
     * @param int $dateType
     * dateType
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
     * @param int $operationType
     * operationType
     * Required: false
     * Example Value: 
     */
    private $operationType;

    /**
     * @param int $operationType
     * operationType
     * Example Value: 
     */
    public function setOperationType($operationType)
    {
        $this->operationType             = $operationType;
        $this->apiParas["operationType"]  = $operationType;
    }

    public function getOperationType()
    {
        return $this->operationType;
    }

    /**
     * @param string $extStr
     * extStr
     * Required: false
     * Example Value: 
     */
    private $extStr;

    /**
     * @param string $extStr
     * extStr
     * Example Value: 
     */
    public function setExtStr($extStr)
    {
        $this->extStr             = $extStr;
        $this->apiParas["extStr"]  = $extStr;
    }

    public function getExtStr()
    {
        return $this->extStr;
    }

}