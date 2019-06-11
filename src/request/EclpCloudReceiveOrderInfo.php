<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 组转单下发接口
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=1800&apiName=jingdong.eclp.cloud.receiveOrderInfo
 * Class EclpCloudReceiveOrderInfo
 * @package Jd\request
 */
class EclpCloudReceiveOrderInfo
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.cloud.receiveOrderInfo";
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
     * @param string[] $destOwnerNo
     * 目标货主编号
     * Required: true
     * Example Value: 
     */
    private $destOwnerNo;

    /**
     * @param string[] $destOwnerNo
     * 目标货主编号
     * Example Value: 
     */
    public function setDestOwnerNo($destOwnerNo)
    {
        $this->destOwnerNo             = $destOwnerNo;
        $this->apiParas["destOwnerNo"]  = $destOwnerNo;
    }

    public function getDestOwnerNo()
    {
        return $this->destOwnerNo;
    }

    /**
     * @param string[] $destSkuNo
     * 目标商品编号
     * Required: true
     * Example Value: 
     */
    private $destSkuNo;

    /**
     * @param string[] $destSkuNo
     * 目标商品编号
     * Example Value: 
     */
    public function setDestSkuNo($destSkuNo)
    {
        $this->destSkuNo             = $destSkuNo;
        $this->apiParas["destSkuNo"]  = $destSkuNo;
    }

    public function getDestSkuNo()
    {
        return $this->destSkuNo;
    }

    /**
     * @param int[] $destQty
     * 目标数量
     * Required: true
     * Example Value: 
     */
    private $destQty;

    /**
     * @param int[] $destQty
     * 目标数量
     * Example Value: 
     */
    public function setDestQty($destQty)
    {
        $this->destQty             = $destQty;
        $this->apiParas["destQty"]  = $destQty;
    }

    public function getDestQty()
    {
        return $this->destQty;
    }

    /**
     * @param string[] $destProductLevel
     * 目标商品等级
     * Required: true
     * Example Value: 
     */
    private $destProductLevel;

    /**
     * @param string[] $destProductLevel
     * 目标商品等级
     * Example Value: 
     */
    public function setDestProductLevel($destProductLevel)
    {
        $this->destProductLevel             = $destProductLevel;
        $this->apiParas["destProductLevel"]  = $destProductLevel;
    }

    public function getDestProductLevel()
    {
        return $this->destProductLevel;
    }

    /**
     * @param string $warehouseNo
     * 库房号
     * Required: true
     * Example Value: 
     */
    private $warehouseNo;

    /**
     * @param string $warehouseNo
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
     * @param string $tenantId
     * 租户
     * Required: true
     * Example Value: 
     */
    private $tenantId;

    /**
     * @param string $tenantId
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
     * @param string $pin
     * 商家授权码
     * Required: true
     * Example Value: 
     */
    private $pin;

    /**
     * @param string $pin
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