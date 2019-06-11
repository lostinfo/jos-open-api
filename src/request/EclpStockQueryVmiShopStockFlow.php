<?php

namespace JD\request;

/**
 * 店铺库存流水查询
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=1520&apiName=jingdong.eclp.stock.queryVmiShopStockFlow
 * Class EclpStockQueryVmiShopStockFlow
 * @package Jd\request
 */
class EclpStockQueryVmiShopStockFlow
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.stock.queryVmiShopStockFlow";
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
     * @param Date $startTime
     * 开始时间,格式为：yyyy-MM-dd HH:mm:ss
     * Required: true
     * Example Value: 
     */
    private $startTime;

    /**
     * @param Date $startTime
     * 开始时间,格式为：yyyy-MM-dd HH:mm:ss
     * Example Value: 
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
     * @param Date $endTime
     * 结束时间,格式为：yyyy-MM-dd HH:mm:ss
     * Required: true
     * Example Value: 
     */
    private $endTime;

    /**
     * @param Date $endTime
     * 结束时间,格式为：yyyy-MM-dd HH:mm:ss
     * Example Value: 
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
     * @param String $deptNo
     * 事业部编号；最大50字符
     * Required: true
     * Example Value: EBU123
     */
    private $deptNo;

    /**
     * @param String $deptNo
     * 事业部编号；最大50字符
     * Example Value: EBU123
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
     * 库房编号；最大50字符
     * Required: true
     * Example Value: 110000123
     */
    private $warehouseNo;

    /**
     * @param String $warehouseNo
     * 库房编号；最大50字符
     * Example Value: 110000123
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
     * @param String $shopNo
     * 店铺编号；最大50字符
     * Required: true
     * Example Value: ECP123
     */
    private $shopNo;

    /**
     * @param String $shopNo
     * 店铺编号；最大50字符
     * Example Value: ECP123
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
     * @param String $goodsNo
     * 事业部商品编号；最大50字符
     * Required: true
     * Example Value: EMG123
     */
    private $goodsNo;

    /**
     * @param String $goodsNo
     * 事业部商品编号；最大50字符
     * Example Value: EMG123
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
     * @param Number $startPage
     * 分页起始页（第一页从1开始）
     * Required: false
     * Example Value: 1
     */
    private $startPage;

    /**
     * @param Number $startPage
     * 分页起始页（第一页从1开始）
     * Example Value: 1
     */
    public function setStartPage($startPage)
    {
        $this->startPage             = $startPage;
        $this->apiParas["startPage"]  = $startPage;
    }

    public function getStartPage()
    {
        return $this->startPage;
    }

    /**
     * @param Number $onePageNum
     * 每页记录显示条数（大于0小于100）
     * Required: false
     * Example Value: 10
     */
    private $onePageNum;

    /**
     * @param Number $onePageNum
     * 每页记录显示条数（大于0小于100）
     * Example Value: 10
     */
    public function setOnePageNum($onePageNum)
    {
        $this->onePageNum             = $onePageNum;
        $this->apiParas["onePageNum"]  = $onePageNum;
    }

    public function getOnePageNum()
    {
        return $this->onePageNum;
    }

}