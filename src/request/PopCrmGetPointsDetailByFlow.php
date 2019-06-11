<?php

namespace JD\request;

/**
 * 顺序获取积分明细
 * 用户API -用户信息及操作
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=106&apiId=2529&apiName=jingdong.pop.crm.getPointsDetailByFlow
 * Class PopCrmGetPointsDetailByFlow
 * @package Jd\request
 */
class PopCrmGetPointsDetailByFlow
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.crm.getPointsDetailByFlow";
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
     * @param String $customerPin
     * 用户pin
     * Required: true
     * Example Value: 
     */
    private $customerPin;

    /**
     * @param String $customerPin
     * 用户pin
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
     * @param String $startTime
     * 查询开始时间
     * Required: true
     * Example Value: 
     */
    private $startTime;

    /**
     * @param String $startTime
     * 查询开始时间
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
     * 查询结束时间
     * Required: true
     * Example Value: 
     */
    private $endTime;

    /**
     * @param String $endTime
     * 查询结束时间
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
     * @param Number $startPage
     * 本次查询起始页码
     * Required: true
     * Example Value: 
     */
    private $startPage;

    /**
     * @param Number $startPage
     * 本次查询起始页码
     * Example Value: 
     */
    public function setStartPage($startPage)
    {
        $this->startPage             = $startPage;
        $this->apiParas["startPage"]  = $startPage;
    }

    public function getStartPage()
    {
        return $this->startPage;
    }

    /**
     * @param Number $endPage
     * 本次查询终止页码
     * Required: true
     * Example Value: 
     */
    private $endPage;

    /**
     * @param Number $endPage
     * 本次查询终止页码
     * Example Value: 
     */
    public function setEndPage($endPage)
    {
        $this->endPage             = $endPage;
        $this->apiParas["endPage"]  = $endPage;
    }

    public function getEndPage()
    {
        return $this->endPage;
    }

    /**
     * @param Number $page
     * 本次查询页
     * Required: true
     * Example Value: 
     */
    private $page;

    /**
     * @param Number $page
     * 本次查询页
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
     * @param Number $pageSize
     * 页长
     * Required: true
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 页长
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
     * @param String $startRowKey
     * 本次Hbase查询的endRowKey,做为下一查询的startRowKey
     * Required: true
     * Example Value: 
     */
    private $startRowKey;

    /**
     * @param String $startRowKey
     * 本次Hbase查询的endRowKey,做为下一查询的startRowKey
     * Example Value: 
     */
    public function setStartRowKey($startRowKey)
    {
        $this->startRowKey             = $startRowKey;
        $this->apiParas["startRowKey"]  = $startRowKey;
    }

    public function getStartRowKey()
    {
        return $this->startRowKey;
    }

}