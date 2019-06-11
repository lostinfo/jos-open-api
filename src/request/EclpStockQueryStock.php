<?php

namespca Lostinfo\JosOpenApi;

/**
 * 仓库实物库存查询
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=936&apiName=jingdong.eclp.stock.queryStock
 * Class EclpStockQueryStock
 * @package Jd\request
 */
class EclpStockQueryStock
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.stock.queryStock";
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
     * @param string $deptNo
     * 事业部编号；最大50字符
     * Required: true
     * Example Value: EBU123
     */
    private $deptNo;

    /**
     * @param string $deptNo
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
     * @param string $warehouseNo
     * 仓库编号；最大50字符
     * Required: true
     * Example Value: 1100000001
     */
    private $warehouseNo;

    /**
     * @param string $warehouseNo
     * 仓库编号；最大50字符
     * Example Value: 1100000001
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
     * @param string $stockStatus
     * 库存状态，枚举值：1.良品；2.残品；3.样品
     * Required: false
     * Example Value: 1
     */
    private $stockStatus;

    /**
     * @param string $stockStatus
     * 库存状态，枚举值：1.良品；2.残品；3.样品
     * Example Value: 1
     */
    public function setStockStatus($stockStatus)
    {
        $this->stockStatus             = $stockStatus;
        $this->apiParas["stockStatus"]  = $stockStatus;
    }

    public function getStockStatus()
    {
        return $this->stockStatus;
    }

    /**
     * @param string $stockType
     * 库存类型，枚举值：1.可销售2.待退品3.商家预留4.仓库锁定5.临期锁定6.盘点锁定7.隔离库存
     * Required: false
     * Example Value: 1
     */
    private $stockType;

    /**
     * @param string $stockType
     * 库存类型，枚举值：1.可销售2.待退品3.商家预留4.仓库锁定5.临期锁定6.盘点锁定7.隔离库存
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
     * @param string $goodsNo
     * 主商品编号；最大50字符
     * Required: false
     * Example Value: EMG123
     */
    private $goodsNo;

    /**
     * @param string $goodsNo
     * 主商品编号；最大50字符
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
     * @param int $currentPage
     * 当前页；默认第一页
     * Required: false
     * Example Value: 1
     */
    private $currentPage;

    /**
     * @param int $currentPage
     * 当前页；默认第一页
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
     * 每页记录数；默认：100
     * Required: false
     * Example Value: 10
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 每页记录数；默认：100
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
     * @param int $returnZeroStock
     * 是否返回0库存数据，1表示不返回库存为0的数据，2表示返回库存为0的数据；默认1(云集除外)
     * Required: false
     * Example Value: 1
     */
    private $returnZeroStock;

    /**
     * @param int $returnZeroStock
     * 是否返回0库存数据，1表示不返回库存为0的数据，2表示返回库存为0的数据；默认1(云集除外)
     * Example Value: 1
     */
    public function setReturnZeroStock($returnZeroStock)
    {
        $this->returnZeroStock             = $returnZeroStock;
        $this->apiParas["returnZeroStock"]  = $returnZeroStock;
    }

    public function getReturnZeroStock()
    {
        return $this->returnZeroStock;
    }

    /**
     * @param int $returnIsvLotattrs
     * 是否返回isv串 ,不传时不返回,为原查询方式,填1时代表返回isv串,将影响查询方式和返回数据的维度(物流云专用)
     * Required: false
     * Example Value: 无
     */
    private $returnIsvLotattrs;

    /**
     * @param int $returnIsvLotattrs
     * 是否返回isv串 ,不传时不返回,为原查询方式,填1时代表返回isv串,将影响查询方式和返回数据的维度(物流云专用)
     * Example Value: 无
     */
    public function setReturnIsvLotattrs($returnIsvLotattrs)
    {
        $this->returnIsvLotattrs             = $returnIsvLotattrs;
        $this->apiParas["returnIsvLotattrs"]  = $returnIsvLotattrs;
    }

    public function getReturnIsvLotattrs()
    {
        return $this->returnIsvLotattrs;
    }

    /**
     * @param string $goodsLevel
     * 商品等级；100-199 良品；200-299残品
     * Required: false
     * Example Value: 100
     */
    private $goodsLevel;

    /**
     * @param string $goodsLevel
     * 商品等级；100-199 良品；200-299残品
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

}