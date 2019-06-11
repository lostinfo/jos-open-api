<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 查询参赛人
 * 订单API-订单API组(该组下所有接口均不支持自营店铺业务)
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=55&apiId=1410&apiName=jingdong.acty.queryRegistrationItemList
 * Class ActyQueryRegistrationItemList
 * @package Jd\request
 */
class ActyQueryRegistrationItemList
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.acty.queryRegistrationItemList";
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
     * @param int $skuId
     * skuId
     * Required: false
     * Example Value: 
     */
    private $skuId;

    /**
     * @param int $skuId
     * skuId
     * Example Value: 
     */
    public function setSkuId($skuId)
    {
        $this->skuId             = $skuId;
        $this->apiParas["skuId"]  = $skuId;
    }

    public function getSkuId()
    {
        return $this->skuId;
    }

    /**
     * @param int $orderId
     * 订单ID
     * Required: false
     * Example Value: 
     */
    private $orderId;

    /**
     * @param int $orderId
     * 订单ID
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
     * @param string $beginDate
     * 开始日期
     * Required: false
     * Example Value: 
     */
    private $beginDate;

    /**
     * @param string $beginDate
     * 开始日期
     * Example Value: 
     */
    public function setBeginDate($beginDate)
    {
        $this->beginDate             = $beginDate;
        $this->apiParas["beginDate"]  = $beginDate;
    }

    public function getBeginDate()
    {
        return $this->beginDate;
    }

    /**
     * @param string $endDate
     * 结束日期
     * Required: false
     * Example Value: 
     */
    private $endDate;

    /**
     * @param string $endDate
     * 结束日期
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
     * @param int $pageIndex
     * 当前页（(pageIndex - 1) * pageSize）
     * Required: false
     * Example Value: 
     */
    private $pageIndex;

    /**
     * @param int $pageIndex
     * 当前页（(pageIndex - 1) * pageSize）
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
     * 每页显示行数（pageSize）
     * Required: false
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 每页显示行数（pageSize）
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

}