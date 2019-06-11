<?php

namespca Lostinfo\JosOpenApi;

/**
 * 供应商映射关系
 * 生鲜加工中心API-生鲜接口
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=257&apiId=3196&apiName=jingdong.factory.purchase.saveOrUpdateVP
 * Class FactoryPurchaseSaveOrUpdateVP
 * @package Jd\request
 */
class FactoryPurchaseSaveOrUpdateVP
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.factory.purchase.saveOrUpdateVP";
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
     * @param int $factoryId
     * 工厂id
     * Required: true
     * Example Value: 0
     */
    private $factoryId;

    /**
     * @param int $factoryId
     * 工厂id
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
     * @param string $personalKey
     * 个人Key
     * Required: true
     * Example Value: 0
     */
    private $personalKey;

    /**
     * @param string $personalKey
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
     * @param int $ptId
     * 租户关联id
     * Required: true
     * Example Value: 0
     */
    private $ptId;

    /**
     * @param int $ptId
     * 租户关联id
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
     * @param string $skuId
     * sku编码
     * Required: true
     * Example Value: 0
     */
    private $skuId;

    /**
     * @param string $skuId
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
     * @param string $code
     * 供应商产品编码
     * Required: false
     * Example Value: 0
     */
    private $code;

    /**
     * @param string $code
     * 供应商产品编码
     * Example Value: 0
     */
    public function setCode($code)
    {
        $this->code             = $code;
        $this->apiParas["code"]  = $code;
    }

    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $name
     * 供应商产品名称
     * Required: false
     * Example Value: 0
     */
    private $name;

    /**
     * @param string $name
     * 供应商产品名称
     * Example Value: 0
     */
    public function setName($name)
    {
        $this->name             = $name;
        $this->apiParas["name"]  = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $vendorNameAbbr
     * 供应商缩写
     * Required: false
     * Example Value: 0
     */
    private $vendorNameAbbr;

    /**
     * @param string $vendorNameAbbr
     * 供应商缩写
     * Example Value: 0
     */
    public function setVendorNameAbbr($vendorNameAbbr)
    {
        $this->vendorNameAbbr             = $vendorNameAbbr;
        $this->apiParas["vendorNameAbbr"]  = $vendorNameAbbr;
    }

    public function getVendorNameAbbr()
    {
        return $this->vendorNameAbbr;
    }

    /**
     * @param string $unit
     * 供应商产品单位
     * Required: false
     * Example Value: 0
     */
    private $unit;

    /**
     * @param string $unit
     * 供应商产品单位
     * Example Value: 0
     */
    public function setUnit($unit)
    {
        $this->unit             = $unit;
        $this->apiParas["unit"]  = $unit;
    }

    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * @param int $price
     * 采购价格
     * Required: false
     * Example Value: 0
     */
    private $price;

    /**
     * @param int $price
     * 采购价格
     * Example Value: 0
     */
    public function setPrice($price)
    {
        $this->price             = $price;
        $this->apiParas["price"]  = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param string $stockInVendor
     * 入库供应商
     * Required: false
     * Example Value: 0
     */
    private $stockInVendor;

    /**
     * @param string $stockInVendor
     * 入库供应商
     * Example Value: 0
     */
    public function setStockInVendor($stockInVendor)
    {
        $this->stockInVendor             = $stockInVendor;
        $this->apiParas["stockInVendor"]  = $stockInVendor;
    }

    public function getStockInVendor()
    {
        return $this->stockInVendor;
    }

    /**
     * @param string $vendorCode
     * 供应商编码
     * Required: true
     * Example Value: 0
     */
    private $vendorCode;

    /**
     * @param string $vendorCode
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
     * @param bool $available
     * 是否有效
     * Required: false
     * Example Value: 0
     */
    private $available;

    /**
     * @param bool $available
     * 是否有效
     * Example Value: 0
     */
    public function setAvailable($available)
    {
        $this->available             = $available;
        $this->apiParas["available"]  = $available;
    }

    public function getAvailable()
    {
        return $this->available;
    }

}