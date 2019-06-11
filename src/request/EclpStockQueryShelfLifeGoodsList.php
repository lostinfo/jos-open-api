<?php

namespace JD\request;

/**
 * 奔驰保质期商品库存查询
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=2566&apiName=jingdong.eclp.stock.queryShelfLifeGoodsList
 * Class EclpStockQueryShelfLifeGoodsList
 * @package Jd\request
 */
class EclpStockQueryShelfLifeGoodsList
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.stock.queryShelfLifeGoodsList";
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
     * 事业部编码；最大长度50
     * Required: true
     * Example Value: EBU000000000000X
     */
    private $deptNo;

    /**
     * @param String $deptNo
     * 事业部编码；最大长度50
     * Example Value: EBU000000000000X
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
     * 库房编码；最大长度50
     * Required: true
     * Example Value: 11000000X
     */
    private $warehouseNo;

    /**
     * @param String $warehouseNo
     * 库房编码；最大长度50
     * Example Value: 11000000X
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
     * 商品编码；最大长度50
     * Required: false
     * Example Value: EMG00xxx
     */
    private $goodsNo;

    /**
     * @param String $goodsNo
     * 商品编码；最大长度50
     * Example Value: EMG00xxx
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
     * @param String $isvGoodsNo
     * 商家商品编码；如果goodsNo为空，则根据商家商品编码查询；最大长度50
     * Required: false
     * Example Value: abcd
     */
    private $isvGoodsNo;

    /**
     * @param String $isvGoodsNo
     * 商家商品编码；如果goodsNo为空，则根据商家商品编码查询；最大长度50
     * Example Value: abcd
     */
    public function setIsvGoodsNo($isvGoodsNo)
    {
        $this->isvGoodsNo             = $isvGoodsNo;
        $this->apiParas["isvGoodsNo"]  = $isvGoodsNo;
    }

    public function getIsvGoodsNo()
    {
        return $this->isvGoodsNo;
    }

    /**
     * @param Number $status
     * 状态(1非临期,2预警,3临期,4过期)；最大长度4
     * Required: false
     * Example Value: 1
     */
    private $status;

    /**
     * @param Number $status
     * 状态(1非临期,2预警,3临期,4过期)；最大长度4
     * Example Value: 1
     */
    public function setStatus($status)
    {
        $this->status             = $status;
        $this->apiParas["status"]  = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param String $goodsLevel
     * 商品等级(100良品，200残品)；最大长度100
     * Required: false
     * Example Value: 100
     */
    private $goodsLevel;

    /**
     * @param String $goodsLevel
     * 商品等级(100良品，200残品)；最大长度100
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
     * @param Number $currentPage
     * 当前页数,需从1开始；
     * Required: true
     * Example Value: 1
     */
    private $currentPage;

    /**
     * @param Number $currentPage
     * 当前页数,需从1开始；
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
     * @param Number $pageSize
     * 当前页数量，范围为1到50
     * Required: true
     * Example Value: 50
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 当前页数量，范围为1到50
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