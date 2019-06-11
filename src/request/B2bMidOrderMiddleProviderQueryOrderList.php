<?php

namespca Lostinfo\JosOpenApi;

/**
 * 查询订单列表
 * B2B开放API-B2B开放
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=391&apiId=3140&apiName=jingdong.b2b.mid.OrderMiddleProvider.queryOrderList
 * Class B2bMidOrderMiddleProviderQueryOrderList
 * @package Jd\request
 */
class B2bMidOrderMiddleProviderQueryOrderList
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.b2b.mid.OrderMiddleProvider.queryOrderList";
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
     * @param int $orderTier
     * 订单层级
     * Required: true
     * Example Value: (1-父；2-子)
     */
    private $orderTier;

    /**
     * @param int $orderTier
     * 订单层级
     * Example Value: (1-父；2-子)
     */
    public function setOrderTier($orderTier)
    {
        $this->orderTier             = $orderTier;
        $this->apiParas["orderTier"]  = $orderTier;
    }

    public function getOrderTier()
    {
        return $this->orderTier;
    }

    /**
     * @param int $pageIndex
     * 页码
     * Required: true
     * Example Value: 
     */
    private $pageIndex;

    /**
     * @param int $pageIndex
     * 页码
     * Example Value: 
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
     * @param int $pageSize
     * 每页大小
     * Required: true
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 每页大小
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
     * 排序类型
     * Required: true
     * Example Value: 
     */
    private $sortType;

    /**
     * @param int $sortType
     * 排序类型
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
     * @param string $submitOrderTimeFrom
     * 下单-开始时间
     * Required: true
     * Example Value: 
     */
    private $submitOrderTimeFrom;

    /**
     * @param string $submitOrderTimeFrom
     * 下单-开始时间
     * Example Value: 
     */
    public function setSubmitOrderTimeFrom($submitOrderTimeFrom)
    {
        $this->submitOrderTimeFrom             = $submitOrderTimeFrom;
        $this->apiParas["submitOrderTimeFrom"]  = $submitOrderTimeFrom;
    }

    public function getSubmitOrderTimeFrom()
    {
        return $this->submitOrderTimeFrom;
    }

    /**
     * @param string $submitOrderTimeTo
     * 下单-结束时间
     * Required: true
     * Example Value: 
     */
    private $submitOrderTimeTo;

    /**
     * @param string $submitOrderTimeTo
     * 下单-结束时间
     * Example Value: 
     */
    public function setSubmitOrderTimeTo($submitOrderTimeTo)
    {
        $this->submitOrderTimeTo             = $submitOrderTimeTo;
        $this->apiParas["submitOrderTimeTo"]  = $submitOrderTimeTo;
    }

    public function getSubmitOrderTimeTo()
    {
        return $this->submitOrderTimeTo;
    }

    /**
     * @param int[] $jdOrderState
     * 参数描述
     * Required: true
     * Example Value: 
     */
    private $jdOrderState;

    /**
     * @param int[] $jdOrderState
     * 参数描述
     * Example Value: 
     */
    public function setJdOrderState($jdOrderState)
    {
        $this->jdOrderState             = $jdOrderState;
        $this->apiParas["jdOrderState"]  = $jdOrderState;
    }

    public function getJdOrderState()
    {
        return $this->jdOrderState;
    }

    /**
     * @param int $deliverState
     * 物流状态
     * Required: true
     * Example Value: 
     */
    private $deliverState;

    /**
     * @param int $deliverState
     * 物流状态
     * Example Value: 
     */
    public function setDeliverState($deliverState)
    {
        $this->deliverState             = $deliverState;
        $this->apiParas["deliverState"]  = $deliverState;
    }

    public function getDeliverState()
    {
        return $this->deliverState;
    }

}