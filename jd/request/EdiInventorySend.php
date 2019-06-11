<?php

namespace JD\request;

/**
 * 发送供应商库存
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1980&apiName=jingdong.edi.inventory.send
 * Class EdiInventorySend
 * @package Jd\request
 */
class EdiInventorySend
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.edi.inventory.send";
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
     * @param String $vendorCode
     * 供应商简码
     * Required: false
     * Example Value: 
     */
    private $vendorCode;

    /**
     * @param String $vendorCode
     * 供应商简码
     * Example Value: 
     */
    public function setVendorCode($vendorCode)
    {
        $this->vendorCode             = $vendorCode;
        $this->apiParas["vendorCode"]  = $vendorCode;
    }

    public function getVendorCode()
    {
        return $this->vendorCode;
    }

    /**
     * @param String $vendorName
     * 供应商名称
     * Required: false
     * Example Value: 
     */
    private $vendorName;

    /**
     * @param String $vendorName
     * 供应商名称
     * Example Value: 
     */
    public function setVendorName($vendorName)
    {
        $this->vendorName             = $vendorName;
        $this->apiParas["vendorName"]  = $vendorName;
    }

    public function getVendorName()
    {
        return $this->vendorName;
    }

    /**
     * @param String $vendorProductId
     * 供应商商品ID
     * Required: true
     * Example Value: 
     */
    private $vendorProductId;

    /**
     * @param String $vendorProductId
     * 供应商商品ID
     * Example Value: 
     */
    public function setVendorProductId($vendorProductId)
    {
        $this->vendorProductId             = $vendorProductId;
        $this->apiParas["vendorProductId"]  = $vendorProductId;
    }

    public function getVendorProductId()
    {
        return $this->vendorProductId;
    }

    /**
     * @param Date $inventoryDate
     * 库存日期
     * Required: true
     * Example Value: 
     */
    private $inventoryDate;

    /**
     * @param Date $inventoryDate
     * 库存日期
     * Example Value: 
     */
    public function setInventoryDate($inventoryDate)
    {
        $this->inventoryDate             = $inventoryDate;
        $this->apiParas["inventoryDate"]  = $inventoryDate;
    }

    public function getInventoryDate()
    {
        return $this->inventoryDate;
    }

    /**
     * @param Number $totalQuantity
     * 库存总量
     * Required: true
     * Example Value: 
     */
    private $totalQuantity;

    /**
     * @param Number $totalQuantity
     * 库存总量
     * Example Value: 
     */
    public function setTotalQuantity($totalQuantity)
    {
        $this->totalQuantity             = $totalQuantity;
        $this->apiParas["totalQuantity"]  = $totalQuantity;
    }

    public function getTotalQuantity()
    {
        return $this->totalQuantity;
    }

    /**
     * @param Date $estimateDate
     * 预计库存日期
     * Required: false
     * Example Value: 
     */
    private $estimateDate;

    /**
     * @param Date $estimateDate
     * 预计库存日期
     * Example Value: 
     */
    public function setEstimateDate($estimateDate)
    {
        $this->estimateDate             = $estimateDate;
        $this->apiParas["estimateDate"]  = $estimateDate;
    }

    public function getEstimateDate()
    {
        return $this->estimateDate;
    }

    /**
     * @param Number $totalEstimateQuantity
     * 预计库存总量
     * Required: false
     * Example Value: 
     */
    private $totalEstimateQuantity;

    /**
     * @param Number $totalEstimateQuantity
     * 预计库存总量
     * Example Value: 
     */
    public function setTotalEstimateQuantity($totalEstimateQuantity)
    {
        $this->totalEstimateQuantity             = $totalEstimateQuantity;
        $this->apiParas["totalEstimateQuantity"]  = $totalEstimateQuantity;
    }

    public function getTotalEstimateQuantity()
    {
        return $this->totalEstimateQuantity;
    }

    /**
     * @param Number $costPrice
     * 进价
     * Required: false
     * Example Value: 
     */
    private $costPrice;

    /**
     * @param Number $costPrice
     * 进价
     * Example Value: 
     */
    public function setCostPrice($costPrice)
    {
        $this->costPrice             = $costPrice;
        $this->apiParas["costPrice"]  = $costPrice;
    }

    public function getCostPrice()
    {
        return $this->costPrice;
    }

    /**
     * @param String[] $storeId
     * 供应商仓库ID
     * Required: false
     * Example Value: 
     */
    private $storeId;

    /**
     * @param String[] $storeId
     * 供应商仓库ID
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
     * @param String[] $storeName
     * 供应商仓库名称
     * Required: false
     * Example Value: 
     */
    private $storeName;

    /**
     * @param String[] $storeName
     * 供应商仓库名称
     * Example Value: 
     */
    public function setStoreName($storeName)
    {
        $this->storeName             = $storeName;
        $this->apiParas["storeName"]  = $storeName;
    }

    public function getStoreName()
    {
        return $this->storeName;
    }

    /**
     * @param Number[] $quantity
     * 分仓库存数量
     * Required: false
     * Example Value: 
     */
    private $quantity;

    /**
     * @param Number[] $quantity
     * 分仓库存数量
     * Example Value: 
     */
    public function setQuantity($quantity)
    {
        $this->quantity             = $quantity;
        $this->apiParas["quantity"]  = $quantity;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param Number[] $estimateQuantity
     * 预计库存数量
     * Required: false
     * Example Value: 
     */
    private $estimateQuantity;

    /**
     * @param Number[] $estimateQuantity
     * 预计库存数量
     * Example Value: 
     */
    public function setEstimateQuantity($estimateQuantity)
    {
        $this->estimateQuantity             = $estimateQuantity;
        $this->apiParas["estimateQuantity"]  = $estimateQuantity;
    }

    public function getEstimateQuantity()
    {
        return $this->estimateQuantity;
    }

}