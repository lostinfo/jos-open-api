<?php

namespace JD\request;

/**
 * 库存调整单下传
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=1797&apiName=jingdong.eclp.stock.createStockChangeTransfer
 * Class EclpStockCreateStockChangeTransfer
 * @package Jd\request
 */
class EclpStockCreateStockChangeTransfer
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.stock.createStockChangeTransfer";
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
     * @param String $changeNo
     * 库存调整单号
     * Required: true
     * Example Value: 
     */
    private $changeNo;

    /**
     * @param String $changeNo
     * 库存调整单号
     * Example Value: 
     */
    public function setChangeNo($changeNo)
    {
        $this->changeNo             = $changeNo;
        $this->apiParas["changeNo"]  = $changeNo;
    }

    public function getChangeNo()
    {
        return $this->changeNo;
    }

    /**
     * @param String $changeType
     * 调整类型
     * Required: true
     * Example Value: 
     */
    private $changeType;

    /**
     * @param String $changeType
     * 调整类型
     * Example Value: 
     */
    public function setChangeType($changeType)
    {
        $this->changeType             = $changeType;
        $this->apiParas["changeType"]  = $changeType;
    }

    public function getChangeType()
    {
        return $this->changeType;
    }

    /**
     * @param String[] $ownerNo
     * 货主编号
     * Required: true
     * Example Value: 
     */
    private $ownerNo;

    /**
     * @param String[] $ownerNo
     * 货主编号
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
     * @param String[] $skuNo
     * 商品编码
     * Required: true
     * Example Value: 
     */
    private $skuNo;

    /**
     * @param String[] $skuNo
     * 商品编码
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
     * @param String[] $productLevel
     * 商品等级
     * Required: true
     * Example Value: 
     */
    private $productLevel;

    /**
     * @param String[] $productLevel
     * 商品等级
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
     * @param Number[] $changeQty
     * 调整数量
     * Required: true
     * Example Value: 
     */
    private $changeQty;

    /**
     * @param Number[] $changeQty
     * 调整数量
     * Example Value: 
     */
    public function setChangeQty($changeQty)
    {
        $this->changeQty             = $changeQty;
        $this->apiParas["changeQty"]  = $changeQty;
    }

    public function getChangeQty()
    {
        return $this->changeQty;
    }

    /**
     * @param String[] $toOwnerNo
     * 目标货主
     * Required: true
     * Example Value: 
     */
    private $toOwnerNo;

    /**
     * @param String[] $toOwnerNo
     * 目标货主
     * Example Value: 
     */
    public function setToOwnerNo($toOwnerNo)
    {
        $this->toOwnerNo             = $toOwnerNo;
        $this->apiParas["toOwnerNo"]  = $toOwnerNo;
    }

    public function getToOwnerNo()
    {
        return $this->toOwnerNo;
    }

    /**
     * @param String[] $toSkuNo
     * 目标商品编码
     * Required: true
     * Example Value: 
     */
    private $toSkuNo;

    /**
     * @param String[] $toSkuNo
     * 目标商品编码
     * Example Value: 
     */
    public function setToSkuNo($toSkuNo)
    {
        $this->toSkuNo             = $toSkuNo;
        $this->apiParas["toSkuNo"]  = $toSkuNo;
    }

    public function getToSkuNo()
    {
        return $this->toSkuNo;
    }

    /**
     * @param String[] $toProductLevel
     * 目标商品等级
     * Required: true
     * Example Value: 
     */
    private $toProductLevel;

    /**
     * @param String[] $toProductLevel
     * 目标商品等级
     * Example Value: 
     */
    public function setToProductLevel($toProductLevel)
    {
        $this->toProductLevel             = $toProductLevel;
        $this->apiParas["toProductLevel"]  = $toProductLevel;
    }

    public function getToProductLevel()
    {
        return $this->toProductLevel;
    }

    /**
     * @param String $warehouseNo
     * 库房号
     * Required: true
     * Example Value: 
     */
    private $warehouseNo;

    /**
     * @param String $warehouseNo
     * 库房号
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
     * @param String $tenantId
     * 租户
     * Required: true
     * Example Value: 
     */
    private $tenantId;

    /**
     * @param String $tenantId
     * 租户
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
     * @param String $pin
     * 商家授权码
     * Required: true
     * Example Value: 
     */
    private $pin;

    /**
     * @param String $pin
     * 商家授权码
     * Example Value: 
     */
    public function setPin($pin)
    {
        $this->pin             = $pin;
        $this->apiParas["paramStrin"]  = $pin;
    }

    public function getPin()
    {
        return $this->pin;
    }

}