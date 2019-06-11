<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 厂直分区库存维护接口
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=2897&apiName=jingdong.dropship.dps.partitionStock.maintain
 * Class DropshipDpsPartitionStockMaintain
 * @package Jd\request
 */
class DropshipDpsPartitionStockMaintain
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dropship.dps.partitionStock.maintain";
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

    /**
     * @param int[] $storeId
     * 库房编号
     * Required: true
     * Example Value: 
     */
    private $storeId;

    /**
     * @param int[] $storeId
     * 库房编号
     * Example Value: 
     */
    public function setStoreId($storeId)
    {
        $this->storeId             = $storeId;
        $this->apiParas["storeId"]  = $storeId;
    }

    public function getStoreId()
    {
        return $this->storeId;
    }

    /**
     * @param string $rfId
     * 为保证调用的幂等性（防止重复请求），需要唯一编码，调用方要保证业务单据号的唯一性
     * Required: true
     * Example Value: 
     */
    private $rfId;

    /**
     * @param string $rfId
     * 为保证调用的幂等性（防止重复请求），需要唯一编码，调用方要保证业务单据号的唯一性
     * Example Value: 
     */
    public function setRfId($rfId)
    {
        $this->rfId             = $rfId;
        $this->apiParas["rfId"]  = $rfId;
    }

    public function getRfId()
    {
        return $this->rfId;
    }

}