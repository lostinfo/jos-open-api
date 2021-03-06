<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 获取京东体育线下店订单列表
 * 订单API-订单API组(该组下所有接口均不支持自营店铺业务)
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=55&apiId=3213&apiName=jingdong.alfred.store.getStoreOrders
 * Class AlfredStoreGetStoreOrders
 * @package Jd\request
 */
class AlfredStoreGetStoreOrders
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.alfred.store.getStoreOrders";
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
     * @param int $storeId
     * 线下店店铺ID
     * Required: false
     * Example Value: 100001
     */
    private $storeId;

    /**
     * @param int $storeId
     * 线下店店铺ID
     * Example Value: 100001
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
     * @param int $startTime
     * 查询起始时间
     * Required: true
     * Example Value: 0
     */
    private $startTime;

    /**
     * @param int $startTime
     * 查询起始时间
     * Example Value: 0
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
     * @param int $endTime
     * 查询截止时间
     * Required: true
     * Example Value: 2000000
     */
    private $endTime;

    /**
     * @param int $endTime
     * 查询截止时间
     * Example Value: 2000000
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
     * @param int $pageNum
     * 分页查询页码,默认值1
     * Required: false
     * Example Value: 1
     */
    private $pageNum;

    /**
     * @param int $pageNum
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
     * @param int $pageSize
     * 分页查询每页记录数，默认值10
     * Required: false
     * Example Value: 10
     */
    private $pageSize;

    /**
     * @param int $pageSize
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