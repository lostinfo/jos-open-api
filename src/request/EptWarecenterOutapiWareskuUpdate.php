<?php

namespca Lostinfo\JosOpenApi;

/**
 * 更新商品SKU信息
 * EPT全球售API-EPT全球售业务，开放订单查询、发货、商品查询、新增商品、修改商品等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=137&apiId=902&apiName=jingdong.ept.warecenter.outapi.waresku.update
 * Class EptWarecenterOutapiWareskuUpdate
 * @package Jd\request
 */
class EptWarecenterOutapiWareskuUpdate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ept.warecenter.outapi.waresku.update";
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
     * @param int $skuId
     * skuId
     * Required: true
     * Example Value: 
     */
    private $skuId;

    /**
     * @param int $skuId
     * skuId
     * Example Value: 
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
     * @param int $wareId
     * 商品Id
     * Required: true
     * Example Value: 
     */
    private $wareId;

    /**
     * @param int $wareId
     * 商品Id
     * Example Value: 
     */
    public function setWareId($wareId)
    {
        $this->wareId             = $wareId;
        $this->apiParas["wareId"]  = $wareId;
    }

    public function getWareId()
    {
        return $this->wareId;
    }

    /**
     * @param string $rfId
     * 商家的sku编码
     * Required: false
     * Example Value: 
     */
    private $rfId;

    /**
     * @param string $rfId
     * 商家的sku编码
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

    /**
     * @param string $attributes
     * 销售属性
     * Required: false
     * Example Value: 
     */
    private $attributes;

    /**
     * @param string $attributes
     * 销售属性
     * Example Value: 
     */
    public function setAttributes($attributes)
    {
        $this->attributes             = $attributes;
        $this->apiParas["attributes"]  = $attributes;
    }

    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @param int $supplyPrice
     * 供货价(单位:分)
     * Required: false
     * Example Value: 
     */
    private $supplyPrice;

    /**
     * @param int $supplyPrice
     * 供货价(单位:分)
     * Example Value: 
     */
    public function setSupplyPrice($supplyPrice)
    {
        $this->supplyPrice             = $supplyPrice;
        $this->apiParas["supplyPrice"]  = $supplyPrice;
    }

    public function getSupplyPrice()
    {
        return $this->supplyPrice;
    }

    /**
     * @param int $amountCount
     * 库存总数
     * Required: false
     * Example Value: 
     */
    private $amountCount;

    /**
     * @param int $amountCount
     * 库存总数
     * Example Value: 
     */
    public function setAmountCount($amountCount)
    {
        $this->amountCount             = $amountCount;
        $this->apiParas["amountCount"]  = $amountCount;
    }

    public function getAmountCount()
    {
        return $this->amountCount;
    }

    /**
     * @param int $lockCount
     * 锁定的库存数
     * Required: false
     * Example Value: 
     */
    private $lockCount;

    /**
     * @param int $lockCount
     * 锁定的库存数
     * Example Value: 
     */
    public function setLockCount($lockCount)
    {
        $this->lockCount             = $lockCount;
        $this->apiParas["lockCount"]  = $lockCount;
    }

    public function getLockCount()
    {
        return $this->lockCount;
    }

    /**
     * @param string $lockStartTime
     * 锁定开始日期(格式:yyyy-MM-dd)
     * Required: false
     * Example Value: 
     */
    private $lockStartTime;

    /**
     * @param string $lockStartTime
     * 锁定开始日期(格式:yyyy-MM-dd)
     * Example Value: 
     */
    public function setLockStartTime($lockStartTime)
    {
        $this->lockStartTime             = $lockStartTime;
        $this->apiParas["lockStartTime"]  = $lockStartTime;
    }

    public function getLockStartTime()
    {
        return $this->lockStartTime;
    }

    /**
     * @param string $lockEndTime
     * 锁定结束日期(格式:yyyy-MM-dd)
     * Required: false
     * Example Value: 
     */
    private $lockEndTime;

    /**
     * @param string $lockEndTime
     * 锁定结束日期(格式:yyyy-MM-dd)
     * Example Value: 
     */
    public function setLockEndTime($lockEndTime)
    {
        $this->lockEndTime             = $lockEndTime;
        $this->apiParas["lockEndTime"]  = $lockEndTime;
    }

    public function getLockEndTime()
    {
        return $this->lockEndTime;
    }

    /**
     * @param string $hsCode
     * hscode
     * Required: false
     * Example Value: 
     */
    private $hsCode;

    /**
     * @param string $hsCode
     * hscode
     * Example Value: 
     */
    public function setHsCode($hsCode)
    {
        $this->hsCode             = $hsCode;
        $this->apiParas["hsCode"]  = $hsCode;
    }

    public function getHsCode()
    {
        return $this->hsCode;
    }

    /**
     * @param string $upc
     * 商品sku的upc编码,长度小于50字符
     * Required: false
     * Example Value: 
     */
    private $upc;

    /**
     * @param string $upc
     * 商品sku的upc编码,长度小于50字符
     * Example Value: 
     */
    public function setUpc($upc)
    {
        $this->upc             = $upc;
        $this->apiParas["upc"]  = $upc;
    }

    public function getUpc()
    {
        return $this->upc;
    }

}