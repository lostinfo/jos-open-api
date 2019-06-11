<?php

namespace JD\request;

/**
 * 创建采购单
 * 生鲜加工中心API-生鲜接口
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=257&apiId=3192&apiName=jingdong.factory.purchase.createPurchaseOrder
 * Class FactoryPurchaseCreatePurchaseOrder
 * @package Jd\request
 */
class FactoryPurchaseCreatePurchaseOrder
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.factory.purchase.createPurchaseOrder";
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
     * @param String $personalKey
     * 个人Key
     * Required: true
     * Example Value: 0
     */
    private $personalKey;

    /**
     * @param String $personalKey
     * 个人Key
     * Example Value: 0
     */
    public function setPersonalKey($personalKey)
    {
        $this->personalKey             = $personalKey;
        $this->apiParas["personalKey"]  = $personalKey;
    }

    public function getPersonalKey()
    {
        return $this->personalKey;
    }

    /**
     * @param Number $ptId
     * 租户关联Id
     * Required: true
     * Example Value: 0
     */
    private $ptId;

    /**
     * @param Number $ptId
     * 租户关联Id
     * Example Value: 0
     */
    public function setPtId($ptId)
    {
        $this->ptId             = $ptId;
        $this->apiParas["ptId"]  = $ptId;
    }

    public function getPtId()
    {
        return $this->ptId;
    }

    /**
     * @param Number $factoryId
     * 工厂Id
     * Required: true
     * Example Value: 0
     */
    private $factoryId;

    /**
     * @param Number $factoryId
     * 工厂Id
     * Example Value: 0
     */
    public function setFactoryId($factoryId)
    {
        $this->factoryId             = $factoryId;
        $this->apiParas["factoryId"]  = $factoryId;
    }

    public function getFactoryId()
    {
        return $this->factoryId;
    }

    /**
     * @param String $skuId
     * sku编码
     * Required: true
     * Example Value: 0
     */
    private $skuId;

    /**
     * @param String $skuId
     * sku编码
     * Example Value: 0
     */
    public function setSkuId($skuId)
    {
        $this->skuId             = $skuId;
        $this->apiParas["skuId"]  = $skuId;
    }

    public function getSkuId()
    {
        return $this->skuId;
    }

    /**
     * @param String $vendorCode
     * 供应商编码
     * Required: true
     * Example Value: 0
     */
    private $vendorCode;

    /**
     * @param String $vendorCode
     * 供应商编码
     * Example Value: 0
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
     * @param Number $purchaseCount
     * 购买数量
     * Required: true
     * Example Value: 0
     */
    private $purchaseCount;

    /**
     * @param Number $purchaseCount
     * 购买数量
     * Example Value: 0
     */
    public function setPurchaseCount($purchaseCount)
    {
        $this->purchaseCount             = $purchaseCount;
        $this->apiParas["purchaseCount"]  = $purchaseCount;
    }

    public function getPurchaseCount()
    {
        return $this->purchaseCount;
    }

    /**
     * @param String $channelDownCode
     * 订单号
     * Required: true
     * Example Value: 0
     */
    private $channelDownCode;

    /**
     * @param String $channelDownCode
     * 订单号
     * Example Value: 0
     */
    public function setChannelDownCode($channelDownCode)
    {
        $this->channelDownCode             = $channelDownCode;
        $this->apiParas["channelDownCode"]  = $channelDownCode;
    }

    public function getChannelDownCode()
    {
        return $this->channelDownCode;
    }

}