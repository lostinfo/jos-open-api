<?php

namespca Lostinfo\JosOpenApi;

/**
 * 获取积分明细
 * 用户API -用户信息及操作
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=106&apiId=2518&apiName=jingdong.pop.crm.getPointsDetail
 * Class PopCrmGetPointsDetail
 * @package Jd\request
 */
class PopCrmGetPointsDetail
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.crm.getPointsDetail";
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
     * @param string $customerPin
     * 客户唯一号
     * Required: true
     * Example Value: 
     */
    private $customerPin;

    /**
     * @param string $customerPin
     * 客户唯一号
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
     * @param string $startTime
     * 查询开始时间(yyyyMMddHHmmss)
     * Required: true
     * Example Value: 2018-08-02 16:30:11
     */
    private $startTime;

    /**
     * @param string $startTime
     * 查询开始时间(yyyyMMddHHmmss)
     * Example Value: 2018-08-02 16:30:11
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
     * @param string $endTime
     * 查询结束时间(yyyyMMddHHmmss)
     * Required: true
     * Example Value: 
     */
    private $endTime;

    /**
     * @param string $endTime
     * 查询结束时间(yyyyMMddHHmmss)
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
     * @param int $startPage
     * 本次查询起始页码（大于等于1）
     * Required: true
     * Example Value: 
     */
    private $startPage;

    /**
     * @param int $startPage
     * 本次查询起始页码（大于等于1）
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
     * @param int $endPage
     * 本次查询终止页码（大于等于startRowkey）
     * Required: true
     * Example Value: 
     */
    private $endPage;

    /**
     * @param int $endPage
     * 本次查询终止页码（大于等于startRowkey）
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
     * @param int $page
     * 本次查询页（要返回数据的页码，从1开始，必须在startPage和endPage之间（可以相等））
     * Required: true
     * Example Value: 
     */
    private $page;

    /**
     * @param int $page
     * 本次查询页（要返回数据的页码，从1开始，必须在startPage和endPage之间（可以相等））
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
     * 页长
     * Required: true
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param int $pageSize
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
     * @param string $startRowKey
     * 本次Hbase查询的endRowKey,做为下一查询的startRowKey（page对应页数的startRowkey，如果为空，需要page=1，从第一页开始查询）
     * Required: true
     * Example Value: 
     */
    private $startRowKey;

    /**
     * @param string $startRowKey
     * 本次Hbase查询的endRowKey,做为下一查询的startRowKey（page对应页数的startRowkey，如果为空，需要page=1，从第一页开始查询）
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