<?php

namespace Lostinfo\JosOpenApi\request;

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
     * @param string $vendorCode
     * 供应商简码
     * Required: false
     * Example Value: 
     */
    private $vendorCode;

    /**
     * @param string $vendorCode
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
     * @param string $vendorName
     * 供应商名称
     * Required: false
     * Example Value: 
     */
    private $vendorName;

    /**
     * @param string $vendorName
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
     * @param string $vendorProductId
     * 供应商商品ID
     * Required: true
     * Example Value: 
     */
    private $vendorProductId;

    /**
     * @param string $vendorProductId
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
     * @param string $inventoryDate
     * 库存日期
     * Required: true
     * Example Value: 
     */
    private $inventoryDate;

    /**
     * @param string $inventoryDate
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
     * @param int $totalQuantity
     * 库存总量
     * Required: true
     * Example Value: 
     */
    private $totalQuantity;

    /**
     * @param int $totalQuantity
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
     * @param string $estimateDate
     * 预计库存日期
     * Required: false
     * Example Value: 
     */
    private $estimateDate;

    /**
     * @param string $estimateDate
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
     * @param int $totalEstimateQuantity
     * 预计库存总量
     * Required: false
     * Example Value: 
     */
    private $totalEstimateQuantity;

    /**
     * @param int $totalEstimateQuantity
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
     * @param int $costPrice
     * 进价
     * Required: false
     * Example Value: 
     */
    private $costPrice;

    /**
     * @param int $costPrice
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
     * @param string[] $storeId
     * 供应商仓库ID
     * Required: false
     * Example Value: 
     */
    private $storeId;

    /**
     * @param string[] $storeId
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
     * @param string[] $storeName
     * 供应商仓库名称
     * Required: false
     * Example Value: 
     */
    private $storeName;

    /**
     * @param string[] $storeName
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
     * @param int[] $quantity
     * 分仓库存数量
     * Required: false
     * Example Value: 
     */
    private $quantity;

    /**
     * @param int[] $quantity
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
     * @param int[] $estimateQuantity
     * 预计库存数量
     * Required: false
     * Example Value: 
     */
    private $estimateQuantity;

    /**
     * @param int[] $estimateQuantity
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