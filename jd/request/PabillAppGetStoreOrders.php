<?php

namespace JD\request;

/**
 * 京东体育线下店订单查询
 * 订单API-订单API组(该组下所有接口均不支持自营店铺业务)
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=55&apiId=3423&apiName=jingdong.pabill.app.getStoreOrders
 * Class PabillAppGetStoreOrders
 * @package Jd\request
 */
class PabillAppGetStoreOrders
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pabill.app.getStoreOrders";
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
     * @param Number $storeId
     * 线下店店铺ID
     * Required: true
     * Example Value: 1
     */
    private $storeId;

    /**
     * @param Number $storeId
     * 线下店店铺ID
     * Example Value: 1
     */
    public function setStoreId($storeId)
    {
        $this->storeId             = $storeId;
        $this->apiParas["storeId"]  = $storeId;
    }

    public function getStoreId()
    {
        return $this->storeId;
    }

    /**
     * @param Number $startTime
     * 查询起始时间
     * Required: true
     * Example Value: 1551715200000
     */
    private $startTime;

    /**
     * @param Number $startTime
     * 查询起始时间
     * Example Value: 1551715200000
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
     * @param Number $endTime
     * 查询截止时间
     * Required: true
     * Example Value: 1551801599000
     */
    private $endTime;

    /**
     * @param Number $endTime
     * 查询截止时间
     * Example Value: 1551801599000
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
     * @param Number $pageNum
     * 分页查询页码,默认值1
     * Required: false
     * Example Value: 1
     */
    private $pageNum;

    /**
     * @param Number $pageNum
     * 分页查询页码,默认值1
     * Example Value: 1
     */
    public function setPageNum($pageNum)
    {
        $this->pageNum             = $pageNum;
        $this->apiParas["pageNum"]  = $pageNum;
    }

    public function getPageNum()
    {
        return $this->pageNum;
    }

    /**
     * @param Number $pageSize
     * 分页查询每页记录数，默认值10
     * Required: false
     * Example Value: 10
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 分页查询每页记录数，默认值10
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

}