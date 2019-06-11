<?php

namespca Lostinfo\JosOpenApi;

/**
 * 在库序列号查询
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=1686&apiName=jingdong.eclp.serial.queryInStockSIDBySku
 * Class EclpSerialQueryInStockSIDBySku
 * @package Jd\request
 */
class EclpSerialQueryInStockSIDBySku
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.serial.queryInStockSIDBySku";
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
     * @param string $goodsNo
     * 商品编号，以EMG开头，最大长度50
     * Required: true
     * Example Value: EMG44180505467
     */
    private $goodsNo;

    /**
     * @param string $goodsNo
     * 商品编号，以EMG开头，最大长度50
     * Example Value: EMG44180505467
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
     * @param int $pageNo
     * 页码，从1开始
     * Required: true
     * Example Value: 1
     */
    private $pageNo;

    /**
     * @param int $pageNo
     * 页码，从1开始
     * Example Value: 1
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
     * @param int $pageSize
     * 每页记录数
     * Required: true
     * Example Value: 10
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 每页记录数
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
     * @param  $queryType
     * 查询类型 1：中小件，2：大件，不填则默认查中小件
     * Required: false
     * Example Value: 1
     */
    private $queryType;

    /**
     * @param  $queryType
     * 查询类型 1：中小件，2：大件，不填则默认查中小件
     * Example Value: 1
     */
    public function setQueryType($queryType)
    {
        $this->queryType             = $queryType;
        $this->apiParas["queryType"]  = $queryType;
    }

    public function getQueryType()
    {
        return $this->queryType;
    }

}