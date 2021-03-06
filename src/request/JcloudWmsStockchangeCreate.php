<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 库存调整单下传
 * 物流云-WMS-API-物流云仓储
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=192&apiId=1614&apiName=jingdong.jcloud.wms.stockchange.create
 * Class JcloudWmsStockchangeCreate
 * @package Jd\request
 */
class JcloudWmsStockchangeCreate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.jcloud.wms.stockchange.create";
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
     * @param string $changeNo
     * 库存调整单号
     * Required: true
     * Example Value: 
     */
    private $changeNo;

    /**
     * @param string $changeNo
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
     * @param string $changeType
     * 调整类型
     * Required: true
     * Example Value: 
     */
    private $changeType;

    /**
     * @param string $changeType
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
     * 货主编号
     * Required: true
     * Example Value: 
     */
    private $ownerNo;

    /**
     * @param string[] $ownerNo
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
     * @param string[] $skuNo
     * 商品编号
     * Required: true
     * Example Value: 
     */
    private $skuNo;

    /**
     * @param string[] $skuNo
     * 商品编号
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
     * 产品等级
     * Required: true
     * Example Value: 
     */
    private $productLevel;

    /**
     * @param string[] $productLevel
     * 产品等级
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
     * @param int[] $changeQty
     * 调整数量
     * Required: true
     * Example Value: 
     */
    private $changeQty;

    /**
     * @param int[] $changeQty
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
     * @param string[] $toOwnerNo
     * 目标货主
     * Required: true
     * Example Value: 
     */
    private $toOwnerNo;

    /**
     * @param string[] $toOwnerNo
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
     * @param string[] $toSkuNo
     * 目标商品编号
     * Required: true
     * Example Value: 
     */
    private $toSkuNo;

    /**
     * @param string[] $toSkuNo
     * 目标商品编号
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
     * @param string[] $toProductLevel
     * 目标商品等级
     * Required: true
     * Example Value: 
     */
    private $toProductLevel;

    /**
     * @param string[] $toProductLevel
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

}