<?php

namespca Lostinfo\JosOpenApi;

/**
 * 查询出库单
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1742&apiName=jingdong.warehouse.outbound.order.query.condition
 * Class WarehouseOutboundOrderQueryCondition
 * @package Jd\request
 */
class WarehouseOutboundOrderQueryCondition
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.warehouse.outbound.order.query.condition";
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
     * @param int $pageIndex
     * 当前页码（默认值1）
     * Required: false
     * Example Value: 1
     */
    private $pageIndex;

    /**
     * @param int $pageIndex
     * 当前页码（默认值1）
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
     * @param int $pageSize
     * 每页大小(最大支持200)
     * Required: false
     * Example Value: 200
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 每页大小(最大支持200)
     * Example Value: 200
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
     * @param string $stockOutNo
     * 出库单号
     * Required: true
     * Example Value: 
     */
    private $stockOutNo;

    /**
     * @param string $stockOutNo
     * 出库单号
     * Example Value: 
     */
    public function setStockOutNo($stockOutNo)
    {
        $this->stockOutNo             = $stockOutNo;
        $this->apiParas["stockOutNo"]  = $stockOutNo;
    }

    public function getStockOutNo()
    {
        return $this->stockOutNo;
    }

    /**
     * @param string $createTimeBegin
     * 制单日期开始时间
     * Required: false
     * Example Value: 
     */
    private $createTimeBegin;

    /**
     * @param string $createTimeBegin
     * 制单日期开始时间
     * Example Value: 
     */
    public function setCreateTimeBegin($createTimeBegin)
    {
        $this->createTimeBegin             = $createTimeBegin;
        $this->apiParas["createTimeBegin"]  = $createTimeBegin;
    }

    public function getCreateTimeBegin()
    {
        return $this->createTimeBegin;
    }

    /**
     * @param string $createTimeEnd
     * 制单日期结束时间
     * Required: false
     * Example Value: 
     */
    private $createTimeEnd;

    /**
     * @param string $createTimeEnd
     * 制单日期结束时间
     * Example Value: 
     */
    public function setCreateTimeEnd($createTimeEnd)
    {
        $this->createTimeEnd             = $createTimeEnd;
        $this->apiParas["createTimeEnd"]  = $createTimeEnd;
    }

    public function getCreateTimeEnd()
    {
        return $this->createTimeEnd;
    }

}