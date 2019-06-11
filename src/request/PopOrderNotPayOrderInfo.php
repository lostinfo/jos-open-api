<?php

namespca Lostinfo\JosOpenApi;

/**
 * 批量查询未付款订单
 * 订单API-订单API组(该组下所有接口均不支持自营店铺业务)
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=55&apiId=1687&apiName=jingdong.pop.order.notPayOrderInfo
 * Class PopOrderNotPayOrderInfo
 * @package Jd\request
 */
class PopOrderNotPayOrderInfo
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.order.notPayOrderInfo";
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
     * 开始时间，不可为空
     * Required: true
     * Example Value: 
     */
    private $startDate;

    /**
     * @param string $startDate
     * 开始时间，不可为空
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
     * 结束时间，不可为空
     * Required: true
     * Example Value: 
     */
    private $endDate;

    /**
     * @param string $endDate
     * 结束时间，不可为空
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
     * @param int $page
     * 页码
     * Required: true
     * Example Value: 1
     */
    private $page;

    /**
     * @param int $page
     * 页码
     * Example Value: 1
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
     * 每页数据条数（最小为1，最大为100）
     * Required: true
     * Example Value: 100
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 每页数据条数（最小为1，最大为100）
     * Example Value: 100
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