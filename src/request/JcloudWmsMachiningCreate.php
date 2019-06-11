<?php

namespca Lostinfo\JosOpenApi;

/**
 * 组装单下传
 * 物流云-WMS-API-物流云仓储
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=192&apiId=1624&apiName=jingdong.jcloud.wms.machining.create
 * Class JcloudWmsMachiningCreate
 * @package Jd\request
 */
class JcloudWmsMachiningCreate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.jcloud.wms.machining.create";
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
     * @param string $machiningNo
     * 加工单号
     * Required: true
     * Example Value: 
     */
    private $machiningNo;

    /**
     * @param string $machiningNo
     * 加工单号
     * Example Value: 
     */
    public function setMachiningNo($machiningNo)
    {
        $this->machiningNo             = $machiningNo;
        $this->apiParas["machiningNo"]  = $machiningNo;
    }

    public function getMachiningNo()
    {
        return $this->machiningNo;
    }

    /**
     * @param string $machiningType
     * 加工类型
     * Required: true
     * Example Value: 
     */
    private $machiningType;

    /**
     * @param string $machiningType
     * 加工类型
     * Example Value: 
     */
    public function setMachiningType($machiningType)
    {
        $this->machiningType             = $machiningType;
        $this->apiParas["machiningType"]  = $machiningType;
    }

    public function getMachiningType()
    {
        return $this->machiningType;
    }

    /**
     * @param string $warehouseNo
     * 仓库编号
     * Required: true
     * Example Value: 
     */
    private $warehouseNo;

    /**
     * @param string $warehouseNo
     * 仓库编号
     * Example Value: 
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
     * @param string $tenantId
     * 租户ID
     * Required: true
     * Example Value: 
     */
    private $tenantId;

    /**
     * @param string $tenantId
     * 租户ID
     * Example Value: 
     */
    public function setTenantId($tenantId)
    {
        $this->tenantId             = $tenantId;
        $this->apiParas["tenantId"]  = $tenantId;
    }

    public function getTenantId()
    {
        return $this->tenantId;
    }

    /**
     * @param string[] $ownerNo
     * 源货主编号
     * Required: true
     * Example Value: 
     */
    private $ownerNo;

    /**
     * @param string[] $ownerNo
     * 源货主编号
     * Example Value: 
     */
    public function setOwnerNo($ownerNo)
    {
        $this->ownerNo             = $ownerNo;
        $this->apiParas["ownerNo"]  = $ownerNo;
    }

    public function getOwnerNo()
    {
        return $this->ownerNo;
    }

    /**
     * @param string[] $skuNo
     * 源商品编号
     * Required: true
     * Example Value: 
     */
    private $skuNo;

    /**
     * @param string[] $skuNo
     * 源商品编号
     * Example Value: 
     */
    public function setSkuNo($skuNo)
    {
        $this->skuNo             = $skuNo;
        $this->apiParas["skuNo"]  = $skuNo;
    }

    public function getSkuNo()
    {
        return $this->skuNo;
    }

    /**
     * @param string[] $productLevel
     * 源商品等级
     * Required: true
     * Example Value: 
     */
    private $productLevel;

    /**
     * @param string[] $productLevel
     * 源商品等级
     * Example Value: 
     */
    public function setProductLevel($productLevel)
    {
        $this->productLevel             = $productLevel;
        $this->apiParas["productLevel"]  = $productLevel;
    }

    public function getProductLevel()
    {
        return $this->productLevel;
    }

    /**
     * @param int[] $qty
     * 源数量
     * Required: true
     * Example Value: 
     */
    private $qty;

    /**
     * @param int[] $qty
     * 源数量
     * Example Value: 
     */
    public function setQty($qty)
    {
        $this->qty             = $qty;
        $this->apiParas["qty"]  = $qty;
    }

    public function getQty()
    {
        return $this->qty;
    }

    /**
     * @param string[] $ownerNo
     * 目的货主编号
     * Required: true
     * Example Value: 
     */
    private $ownerNo;

    /**
     * @param string[] $ownerNo
     * 目的货主编号
     * Example Value: 
     */
    public function setOwnerNo($ownerNo)
    {
        $this->ownerNo             = $ownerNo;
        $this->apiParas["destOwnerNo"]  = $ownerNo;
    }

    public function getOwnerNo()
    {
        return $this->ownerNo;
    }

    /**
     * @param string[] $skuNo
     * 目的商品编号
     * Required: true
     * Example Value: 
     */
    private $skuNo;

    /**
     * @param string[] $skuNo
     * 目的商品编号
     * Example Value: 
     */
    public function setSkuNo($skuNo)
    {
        $this->skuNo             = $skuNo;
        $this->apiParas["destSkuNo"]  = $skuNo;
    }

    public function getSkuNo()
    {
        return $this->skuNo;
    }

    /**
     * @param string[] $productLevel
     * 目的商品等级
     * Required: true
     * Example Value: 
     */
    private $productLevel;

    /**
     * @param string[] $productLevel
     * 目的商品等级
     * Example Value: 
     */
    public function setProductLevel($productLevel)
    {
        $this->productLevel             = $productLevel;
        $this->apiParas["destProductLevel"]  = $productLevel;
    }

    public function getProductLevel()
    {
        return $this->productLevel;
    }

    /**
     * @param int[] $qty
     * 目的数量
     * Required: true
     * Example Value: 
     */
    private $qty;

    /**
     * @param int[] $qty
     * 目的数量
     * Example Value: 
     */
    public function setQty($qty)
    {
        $this->qty             = $qty;
        $this->apiParas["destQty"]  = $qty;
    }

    public function getQty()
    {
        return $this->qty;
    }

}