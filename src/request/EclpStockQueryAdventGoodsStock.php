<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 临期商品库存查询
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=939&apiName=jingdong.eclp.stock.queryAdventGoodsStock
 * Class EclpStockQueryAdventGoodsStock
 * @package Jd\request
 */
class EclpStockQueryAdventGoodsStock
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.stock.queryAdventGoodsStock";
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
     * 事业部编号，可查询开放平台中本事业部下所有临期商品，仅限1个事业部；最大50个字符
     * Required: true
     * Example Value: EBU123
     */
    private $deptNo;

    /**
     * @param string $deptNo
     * 事业部编号，可查询开放平台中本事业部下所有临期商品，仅限1个事业部；最大50个字符
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
     * @param string $warehouseNos
     * 库房编号，可查询多个库房临期商品，用英文“,”分隔，不填默认为全部库房
     * Required: false
     * Example Value: 110000001,110000002,110000003
     */
    private $warehouseNos;

    /**
     * @param string $warehouseNos
     * 库房编号，可查询多个库房临期商品，用英文“,”分隔，不填默认为全部库房
     * Example Value: 110000001,110000002,110000003
     */
    public function setWarehouseNos($warehouseNos)
    {
        $this->warehouseNos             = $warehouseNos;
        $this->apiParas["warehouseNos"]  = $warehouseNos;
    }

    public function getWarehouseNos()
    {
        return $this->warehouseNos;
    }

    /**
     * @param string $goodsNos
     * 主商品编号，可支持多个主商品查询，多个以英文逗号分隔，每次查询限制10个商品
     * Required: false
     * Example Value: EMG001,EMG002,EMG003
     */
    private $goodsNos;

    /**
     * @param string $goodsNos
     * 主商品编号，可支持多个主商品查询，多个以英文逗号分隔，每次查询限制10个商品
     * Example Value: EMG001,EMG002,EMG003
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
     * @param int $currentPage
     * 当前页；默认：1；大于0
     * Required: false
     * Example Value: 1
     */
    private $currentPage;

    /**
     * @param int $currentPage
     * 当前页；默认：1；大于0
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
     * 每页显示行数；默认：100；最大100，最小1
     * Required: false
     * Example Value: 10
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 每页显示行数；默认：100；最大100，最小1
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