<?php

namespace JD\request;

/**
 * 查询订单列表
 * B2B开放API-B2B开放
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=391&apiId=3133&apiName=jingdong.b2b.order.list.get
 * Class B2bOrderListGet
 * @package Jd\request
 */
class B2bOrderListGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.b2b.order.list.get";
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
     * @param Number $pageIndex
     * 页码
     * Required: false
     * Example Value: 1
     */
    private $pageIndex;

    /**
     * @param Number $pageIndex
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
     * @param Number $pageSize
     * 每页大小
     * Required: false
     * Example Value: 10
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 每页大小
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
     * @param Number $orderTier
     * 订单层级(父:1;子:2)
     * Required: false
     * Example Value: 1
     */
    private $orderTier;

    /**
     * @param Number $orderTier
     * 订单层级(父:1;子:2)
     * Example Value: 1
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
     * @param Number $sortType
     * 排序类型1,按订单创建时间逆序 2, 创建时间顺序 3, 更新时间逆序 4, 更新时间顺序 5, 京东订单号逆序 6, 京东订单号顺序
     * Required: false
     * Example Value: 1
     */
    private $sortType;

    /**
     * @param Number $sortType
     * 排序类型1,按订单创建时间逆序 2, 创建时间顺序 3, 更新时间逆序 4, 更新时间顺序 5, 京东订单号逆序 6, 京东订单号顺序
     * Example Value: 1
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
     * @param Date $submitOrderTimeFrom
     * 下单开始时间
     * Required: false
     * Example Value: 2018-12-12 16:25:00
     */
    private $submitOrderTimeFrom;

    /**
     * @param Date $submitOrderTimeFrom
     * 下单开始时间
     * Example Value: 2018-12-12 16:25:00
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
     * @param Date $submitOrderTimeTo
     * 下单结束时间
     * Required: false
     * Example Value: 2018-12-12 16:25:59
     */
    private $submitOrderTimeTo;

    /**
     * @param Date $submitOrderTimeTo
     * 下单结束时间
     * Example Value: 2018-12-12 16:25:59
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
     * @param Number[] $jdOrderState
     * 京东订单状态
     * Required: false
     * Example Value: 1,2,3
     */
    private $jdOrderState;

    /**
     * @param Number[] $jdOrderState
     * 京东订单状态
     * Example Value: 1,2,3
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
     * @param Number $deliverState
     * 物流状态
     * Required: false
     * Example Value: 1
     */
    private $deliverState;

    /**
     * @param Number $deliverState
     * 物流状态
     * Example Value: 1
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