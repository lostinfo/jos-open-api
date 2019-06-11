<?php

namespca Lostinfo\JosOpenApi;

/**
 * 店铺库存查询
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=1522&apiName=jingdong.eclp.stock.queryVmiShopStock
 * Class EclpStockQueryVmiShopStock
 * @package Jd\request
 */
class EclpStockQueryVmiShopStock
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.stock.queryVmiShopStock";
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
     * @param string $goodsNos
     * 事业部商品编号，多个以用英文“,”分割；最多支持50个商品
     * Required: true
     * Example Value: EMGXXX,EMGYYY,EMGZZZ
     */
    private $goodsNos;

    /**
     * @param string $goodsNos
     * 事业部商品编号，多个以用英文“,”分割；最多支持50个商品
     * Example Value: EMGXXX,EMGYYY,EMGZZZ
     */
    public function setGoodsNos($goodsNos)
    {
        $this->goodsNos             = $goodsNos;
        $this->apiParas["goodsNos"]  = $goodsNos;
    }

    public function getGoodsNos()
    {
        return $this->goodsNos;
    }

    /**
     * @param string $shopNos
     * 店铺编号；支持查询多个店铺，多个以用英文“,”分割；单个店铺编码最大50字符
     * Required: true
     * Example Value: ECPXXX,ECPYYY,ECPZZZ
     */
    private $shopNos;

    /**
     * @param string $shopNos
     * 店铺编号；支持查询多个店铺，多个以用英文“,”分割；单个店铺编码最大50字符
     * Example Value: ECPXXX,ECPYYY,ECPZZZ
     */
    public function setShopNos($shopNos)
    {
        $this->shopNos             = $shopNos;
        $this->apiParas["shopNos"]  = $shopNos;
    }

    public function getShopNos()
    {
        return $this->shopNos;
    }

    /**
     * @param int $currentPage
     * 当前页；大于0的整数
     * Required: false
     * Example Value: 1
     */
    private $currentPage;

    /**
     * @param int $currentPage
     * 当前页；大于0的整数
     * Example Value: 1
     */
    public function setCurrentPage($currentPage)
    {
        $this->currentPage             = $currentPage;
        $this->apiParas["currentPage"]  = $currentPage;
    }

    public function getCurrentPage()
    {
        return $this->currentPage;
    }

    /**
     * @param int $pageSize
     * 每页记录显示条数；最大100
     * Required: false
     * Example Value: 10
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 每页记录显示条数；最大100
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
     * @param string $deptNo
     * 事业部编号；最大50字符
     * Required: true
     * Example Value: EBUXXX
     */
    private $deptNo;

    /**
     * @param string $deptNo
     * 事业部编号；最大50字符
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
     * @param string $warehouseNo
     * 库房编号；最大50字符
     * Required: false
     * Example Value: 110000001
     */
    private $warehouseNo;

    /**
     * @param string $warehouseNo
     * 库房编号；最大50字符
     * Example Value: 110000001
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