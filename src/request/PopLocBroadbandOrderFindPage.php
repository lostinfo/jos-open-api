<?php

namespca Lostinfo\JosOpenApi;

/**
 * LOC宽带订单列表查询
 * 订单API-订单API组(该组下所有接口均不支持自营店铺业务)
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=55&apiId=1886&apiName=jingdong.pop.loc.broadband.order.findPage
 * Class PopLocBroadbandOrderFindPage
 * @package Jd\request
 */
class PopLocBroadbandOrderFindPage
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.loc.broadband.order.findPage";
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
     * @param string $orderCreatedBegin
     * 订单创建开始时间,格式为yyyy-MM-dd HH:mm:ss
     * Required: true
     * Example Value: 
     */
    private $orderCreatedBegin;

    /**
     * @param string $orderCreatedBegin
     * 订单创建开始时间,格式为yyyy-MM-dd HH:mm:ss
     * Example Value: 
     */
    public function setOrderCreatedBegin($orderCreatedBegin)
    {
        $this->orderCreatedBegin             = $orderCreatedBegin;
        $this->apiParas["order_created_begin"]  = $orderCreatedBegin;
    }

    public function getOrderCreatedBegin()
    {
        return $this->orderCreatedBegin;
    }

    /**
     * @param string $orderCreatedEnd
     * 订单创建截止时间,格式为yyyy-MM-dd HH:mm:ss
     * Required: true
     * Example Value: 
     */
    private $orderCreatedEnd;

    /**
     * @param string $orderCreatedEnd
     * 订单创建截止时间,格式为yyyy-MM-dd HH:mm:ss
     * Example Value: 
     */
    public function setOrderCreatedEnd($orderCreatedEnd)
    {
        $this->orderCreatedEnd             = $orderCreatedEnd;
        $this->apiParas["order_created_end"]  = $orderCreatedEnd;
    }

    public function getOrderCreatedEnd()
    {
        return $this->orderCreatedEnd;
    }

    /**
     * @param int $orderStatus
     * 订单状态4完成|9暂停
     * Required: false
     * Example Value: 
     */
    private $orderStatus;

    /**
     * @param int $orderStatus
     * 订单状态4完成|9暂停
     * Example Value: 
     */
    public function setOrderStatus($orderStatus)
    {
        $this->orderStatus             = $orderStatus;
        $this->apiParas["order_status"]  = $orderStatus;
    }

    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    /**
     * @param int $page
     * 页码（从1开始）
     * Required: true
     * Example Value: 
     */
    private $page;

    /**
     * @param int $page
     * 页码（从1开始）
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
     * 每页数量(1到50条)
     * Required: true
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 每页数量(1到50条)
     * Example Value: 
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize             = $pageSize;
        $this->apiParas["page_size"]  = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

}