<?php

namespace JD\request;

/**
 * 分页查询采购单明细
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=484&apiName=jingdong.po.detail.page.get
 * Class PoDetailPageGet
 * @package Jd\request
 */
class PoDetailPageGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.po.detail.page.get";
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
     * @param Number $orderId
     * 采购单单号
     * Required: true
     * Example Value: 1234567
     */
    private $orderId;

    /**
     * @param Number $orderId
     * 采购单单号
     * Example Value: 1234567
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
     * @param String $sortFiled
     * 排序字段（按照商品采购价、原始预计采购数量排序，分别对应字段：jiage、originalNum）
     * Required: false
     * Example Value: originalNum
     */
    private $sortFiled;

    /**
     * @param String $sortFiled
     * 排序字段（按照商品采购价、原始预计采购数量排序，分别对应字段：jiage、originalNum）
     * Example Value: originalNum
     */
    public function setSortFiled($sortFiled)
    {
        $this->sortFiled             = $sortFiled;
        $this->apiParas["sortFiled"]  = $sortFiled;
    }

    public function getSortFiled()
    {
        return $this->sortFiled;
    }

    /**
     * @param String $sortMode
     * 排序方式（按照升序或降序，分别对应字段：ASC、DESC）
     * Required: false
     * Example Value: DESC
     */
    private $sortMode;

    /**
     * @param String $sortMode
     * 排序方式（按照升序或降序，分别对应字段：ASC、DESC）
     * Example Value: DESC
     */
    public function setSortMode($sortMode)
    {
        $this->sortMode             = $sortMode;
        $this->apiParas["sortMode"]  = $sortMode;
    }

    public function getSortMode()
    {
        return $this->sortMode;
    }

    /**
     * @param Number $pageIndex
     * 当前页码(从1开始）
     * Required: true
     * Example Value: 1
     */
    private $pageIndex;

    /**
     * @param Number $pageIndex
     * 当前页码(从1开始）
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
     * 每页大小(最大支持100)
     * Required: true
     * Example Value: 50
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 每页大小(最大支持100)
     * Example Value: 50
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