<?php

namespace JD\request;

/**
 * 京仓订单查询
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=1521&apiName=jingdong.eclp.order.queryOrderList
 * Class EclpOrderQueryOrderList
 * @package Jd\request
 */
class EclpOrderQueryOrderList
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.order.queryOrderList";
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
     * @param String $deptNo
     * 事业部编号
     * Required: true
     * Example Value: 
     */
    private $deptNo;

    /**
     * @param String $deptNo
     * 事业部编号
     * Example Value: 
     */
    public function setDeptNo($deptNo)
    {
        $this->deptNo             = $deptNo;
        $this->apiParas["deptNo"]  = $deptNo;
    }

    public function getDeptNo()
    {
        return $this->deptNo;
    }

    /**
     * @param String $startDate
     * 开始时间(salePlatformOrderNo有值时,startDate非必填)
     * Required: true
     * Example Value: 
     */
    private $startDate;

    /**
     * @param String $startDate
     * 开始时间(salePlatformOrderNo有值时,startDate非必填)
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
     * @param String $endDate
     * 结束时间(salePlatformOrderNo有值时,endDate非必填)
     * Required: true
     * Example Value: 
     */
    private $endDate;

    /**
     * @param String $endDate
     * 结束时间(salePlatformOrderNo有值时,endDate非必填)
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
     * @param String $shopNo
     * ECLP店铺编号
     * Required: true
     * Example Value: 
     */
    private $shopNo;

    /**
     * @param String $shopNo
     * ECLP店铺编号
     * Example Value: 
     */
    public function setShopNo($shopNo)
    {
        $this->shopNo             = $shopNo;
        $this->apiParas["shopNo"]  = $shopNo;
    }

    public function getShopNo()
    {
        return $this->shopNo;
    }

    /**
     * @param String $warehouseNo
     * 库房编号
     * Required: false
     * Example Value: 
     */
    private $warehouseNo;

    /**
     * @param String $warehouseNo
     * 库房编号
     * Example Value: 
     */
    public function setWarehouseNo($warehouseNo)
    {
        $this->warehouseNo             = $warehouseNo;
        $this->apiParas["warehouseNo"]  = $warehouseNo;
    }

    public function getWarehouseNo()
    {
        return $this->warehouseNo;
    }

    /**
     * @param Number $pageNo
     * 页码数
     * Required: true
     * Example Value: 
     */
    private $pageNo;

    /**
     * @param Number $pageNo
     * 页码数
     * Example Value: 
     */
    public function setPageNo($pageNo)
    {
        $this->pageNo             = $pageNo;
        $this->apiParas["pageNo"]  = $pageNo;
    }

    public function getPageNo()
    {
        return $this->pageNo;
    }

    /**
     * @param Number $pageSize
     * 返回记录条数
     * Required: true
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 返回记录条数
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
     * @param String $salePlatformOrderNo
     * 销售平台订单号|京东平台订单号
     * Required: false
     * Example Value: 
     */
    private $salePlatformOrderNo;

    /**
     * @param String $salePlatformOrderNo
     * 销售平台订单号|京东平台订单号
     * Example Value: 
     */
    public function setSalePlatformOrderNo($salePlatformOrderNo)
    {
        $this->salePlatformOrderNo             = $salePlatformOrderNo;
        $this->apiParas["salePlatformOrderNo"]  = $salePlatformOrderNo;
    }

    public function getSalePlatformOrderNo()
    {
        return $this->salePlatformOrderNo;
    }

    /**
     * @param Number $orderStatus
     * 订单状态
     * Required: false
     * Example Value: 
     */
    private $orderStatus;

    /**
     * @param Number $orderStatus
     * 订单状态
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

}