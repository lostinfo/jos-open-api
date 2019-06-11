<?php

namespace JD\request;

/**
 * 批次库存查询
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=3184&apiName=jingdong.eclp.stock.queryBatchAttrStock
 * Class EclpStockQueryBatchAttrStock
 * @package Jd\request
 */
class EclpStockQueryBatchAttrStock
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.stock.queryBatchAttrStock";
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
     * @param String $cursor
     * 游标，滚动分页查询参数；分页遍历数据时使用，首次传空，后续每次传上次查询返回值；最大100字符
     * Required: false
     * Example Value: abc
     */
    private $cursor;

    /**
     * @param String $cursor
     * 游标，滚动分页查询参数；分页遍历数据时使用，首次传空，后续每次传上次查询返回值；最大100字符
     * Example Value: abc
     */
    public function setCursor($cursor)
    {
        $this->cursor             = $cursor;
        $this->apiParas["cursor"]  = $cursor;
    }

    public function getCursor()
    {
        return $this->cursor;
    }

    /**
     * @param Number $stockType
     * 库存类型；默认：1；长度：10
     * Required: false
     * Example Value: 1
     */
    private $stockType;

    /**
     * @param Number $stockType
     * 库存类型；默认：1；长度：10
     * Example Value: 1
     */
    public function setStockType($stockType)
    {
        $this->stockType             = $stockType;
        $this->apiParas["stockType"]  = $stockType;
    }

    public function getStockType()
    {
        return $this->stockType;
    }

    /**
     * @param String $goodsLevel
     * 商品等级；最大10字符
     * Required: false
     * Example Value: 100
     */
    private $goodsLevel;

    /**
     * @param String $goodsLevel
     * 商品等级；最大10字符
     * Example Value: 100
     */
    public function setGoodsLevel($goodsLevel)
    {
        $this->goodsLevel             = $goodsLevel;
        $this->apiParas["goodsLevel"]  = $goodsLevel;
    }

    public function getGoodsLevel()
    {
        return $this->goodsLevel;
    }

    /**
     * @param Number $pageSize
     * 每页数量；默认：10；最大：1000
     * Required: true
     * Example Value: 10
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 每页数量；默认：10；最大：1000
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
     * @param String $startTime
     * 开始时间；格式：yyyy-MM-dd
     * Required: false
     * Example Value: 2019-01-01
     */
    private $startTime;

    /**
     * @param String $startTime
     * 开始时间；格式：yyyy-MM-dd
     * Example Value: 2019-01-01
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
     * @param Number $page
     * 页码；默认：1
     * Required: true
     * Example Value: 1
     */
    private $page;

    /**
     * @param Number $page
     * 页码；默认：1
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
     * @param String $endTime
     * 结束时间；格式：yyyy-MM-dd
     * Required: false
     * Example Value: 2019-01-02
     */
    private $endTime;

    /**
     * @param String $endTime
     * 结束时间；格式：yyyy-MM-dd
     * Example Value: 2019-01-02
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
     * @param String $sku
     * 商品编码；最大50字符
     * Required: false
     * Example Value: EMGXXX
     */
    private $sku;

    /**
     * @param String $sku
     * 商品编码；最大50字符
     * Example Value: EMGXXX
     */
    public function setSku($sku)
    {
        $this->sku             = $sku;
        $this->apiParas["sku"]  = $sku;
    }

    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param String $deptNo
     * 事业部编码；最大50字符
     * Required: true
     * Example Value: EBUXXX
     */
    private $deptNo;

    /**
     * @param String $deptNo
     * 事业部编码；最大50字符
     * Example Value: EBUXXX
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
     * @param String $warehouseNo
     * 库房编码；最大50字符
     * Required: true
     * Example Value: 11008989
     */
    private $warehouseNo;

    /**
     * @param String $warehouseNo
     * 库房编码；最大50字符
     * Example Value: 11008989
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

}