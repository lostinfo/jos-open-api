<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 海外厂直库存维护接口
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=2975&apiName=jingdong.dropshipept.stock.maintain
 * Class DropshipeptStockMaintain
 * @package Jd\request
 */
class DropshipeptStockMaintain
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dropshipept.stock.maintain";
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
     * @param int[] $sku
     * sku
     * Required: true
     * Example Value: 
     */
    private $sku;

    /**
     * @param int[] $sku
     * sku
     * Example Value: 
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
     * @param int[] $storeCode
     * 仓code
     * Required: true
     * Example Value: 
     */
    private $storeCode;

    /**
     * @param int[] $storeCode
     * 仓code
     * Example Value: 
     */
    public function setStoreCode($storeCode)
    {
        $this->storeCode             = $storeCode;
        $this->apiParas["storeCode"]  = $storeCode;
    }

    public function getStoreCode()
    {
        return $this->storeCode;
    }

    /**
     * @param int[] $stockNum
     * 库存数
     * Required: true
     * Example Value: 
     */
    private $stockNum;

    /**
     * @param int[] $stockNum
     * 库存数
     * Example Value: 
     */
    public function setStockNum($stockNum)
    {
        $this->stockNum             = $stockNum;
        $this->apiParas["stockNum"]  = $stockNum;
    }

    public function getStockNum()
    {
        return $this->stockNum;
    }

}