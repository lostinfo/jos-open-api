<?php

namespace JD\request;

/**
 * 商家查询库存
 * 京云仓API-提供查询库存、入库单查询、出库单查询等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=56&apiId=151&apiName=jingdong.logistics.stock.search
 * Class LogisticsStockSearch
 * @package Jd\request
 */
class LogisticsStockSearch
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.logistics.stock.search";
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
        $this->apiParas["warehouse_no"]  = $warehouseNo;
    }

    public function getWarehouseNo()
    {
        return $this->warehouseNo;
    }

    /**
     * @param String $goodsNo
     * 商品编号
     * Required: false
     * Example Value: 
     */
    private $goodsNo;

    /**
     * @param String $goodsNo
     * 商品编号
     * Example Value: 
     */
    public function setGoodsNo($goodsNo)
    {
        $this->goodsNo             = $goodsNo;
        $this->apiParas["goods_no"]  = $goodsNo;
    }

    public function getGoodsNo()
    {
        return $this->goodsNo;
    }

    /**
     * @param Number $currentPage
     * 当前页码
     * Required: true
     * Example Value: 
     */
    private $currentPage;

    /**
     * @param Number $currentPage
     * 当前页码
     * Example Value: 
     */
    public function setCurrentPage($currentPage)
    {
        $this->currentPage             = $currentPage;
        $this->apiParas["current_page"]  = $currentPage;
    }

    public function getCurrentPage()
    {
        return $this->currentPage;
    }

}