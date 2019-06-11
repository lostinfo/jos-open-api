<?php

namespace JD\request;

/**
 * 店铺库存流水查询
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=3421&apiName=jingdong.eclp.stock.searchShopStockFlow
 * Class EclpStockSearchShopStockFlow
 * @package Jd\request
 */
class EclpStockSearchShopStockFlow
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.stock.searchShopStockFlow";
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
     * @param String $requestId
     * 请求编号;唯一确定本次请求;长度50
     * Required: true
     * Example Value: abc
     */
    private $requestId;

    /**
     * @param String $requestId
     * 请求编号;唯一确定本次请求;长度50
     * Example Value: abc
     */
    public function setRequestId($requestId)
    {
        $this->requestId             = $requestId;
        $this->apiParas["requestId"]  = $requestId;
    }

    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * @param String $deptNo
     * 事业部编码;长度50
     * Required: true
     * Example Value: abc
     */
    private $deptNo;

    /**
     * @param String $deptNo
     * 事业部编码;长度50
     * Example Value: abc
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
     * @param String $shopNo
     * 店铺编码;长度50
     * Required: true
     * Example Value: abc
     */
    private $shopNo;

    /**
     * @param String $shopNo
     * 店铺编码;长度50
     * Example Value: abc
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
     * 库房编码;长度50
     * Required: false
     * Example Value: abc
     */
    private $warehouseNo;

    /**
     * @param String $warehouseNo
     * 库房编码;长度50
     * Example Value: abc
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
     * @param String $goodsNo
     * 商品编码;长度50
     * Required: false
     * Example Value: abc
     */
    private $goodsNo;

    /**
     * @param String $goodsNo
     * 商品编码;长度50
     * Example Value: abc
     */
    public function setGoodsNo($goodsNo)
    {
        $this->goodsNo             = $goodsNo;
        $this->apiParas["goodsNo"]  = $goodsNo;
    }

    public function getGoodsNo()
    {
        return $this->goodsNo;
    }

    /**
     * @param String $startDate
     * 开始日期;格式: yyyy-MM-dd HH:mm:ss.S
     * Required: true
     * Example Value: abc
     */
    private $startDate;

    /**
     * @param String $startDate
     * 开始日期;格式: yyyy-MM-dd HH:mm:ss.S
     * Example Value: abc
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
     * 结束日期;1：开始时间与结束日期小于等于31天   2：格式: yyyy-MM-dd HH:mm:ss S
     * Required: true
     * Example Value: abc
     */
    private $endDate;

    /**
     * @param String $endDate
     * 结束日期;1：开始时间与结束日期小于等于31天   2：格式: yyyy-MM-dd HH:mm:ss S
     * Example Value: abc
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
     * @param Number $pageNumber
     * 页码;页码最小为1
     * Required: true
     * Example Value: 1
     */
    private $pageNumber;

    /**
     * @param Number $pageNumber
     * 页码;页码最小为1
     * Example Value: 1
     */
    public function setPageNumber($pageNumber)
    {
        $this->pageNumber             = $pageNumber;
        $this->apiParas["pageNumber"]  = $pageNumber;
    }

    public function getPageNumber()
    {
        return $this->pageNumber;
    }

    /**
     * @param Number $pageSize
     * 每页条数;每页条数据最大1000
     * Required: true
     * Example Value: 10
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 每页条数;每页条数据最大1000
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