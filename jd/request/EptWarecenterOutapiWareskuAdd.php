<?php

namespace JD\request;

/**
 * 新增商品SKU
 * EPT全球售API-EPT全球售业务，开放订单查询、发货、商品查询、新增商品、修改商品等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=137&apiId=903&apiName=jingdong.ept.warecenter.outapi.waresku.add
 * Class EptWarecenterOutapiWareskuAdd
 * @package Jd\request
 */
class EptWarecenterOutapiWareskuAdd
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ept.warecenter.outapi.waresku.add";
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
     * @param Number $wareId
     * 商品Id
     * Required: true
     * Example Value: 
     */
    private $wareId;

    /**
     * @param Number $wareId
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
     * @param String $rfId
     * 商家的sku编码
     * Required: false
     * Example Value: 
     */
    private $rfId;

    /**
     * @param String $rfId
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
     * @param String $attributes
     * 销售属性
     * Required: true
     * Example Value: 
     */
    private $attributes;

    /**
     * @param String $attributes
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
     * @param Number $supplyPrice
     * 供货价(单位:分)
     * Required: true
     * Example Value: 
     */
    private $supplyPrice;

    /**
     * @param Number $supplyPrice
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
     * @param Number $amountCount
     * 库存总数
     * Required: true
     * Example Value: 
     */
    private $amountCount;

    /**
     * @param Number $amountCount
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
     * @param Number $lockCount
     * 锁定的库存数
     * Required: false
     * Example Value: 
     */
    private $lockCount;

    /**
     * @param Number $lockCount
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
     * @param Date $lockStartTime
     * 锁定开始日期(格式:yyyy-MM-dd)
     * Required: false
     * Example Value: 
     */
    private $lockStartTime;

    /**
     * @param Date $lockStartTime
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
     * @param Date $lockEndTime
     * 锁定结束日期(格式:yyyy-MM-dd)
     * Required: false
     * Example Value: 
     */
    private $lockEndTime;

    /**
     * @param Date $lockEndTime
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
     * @param String $hsCode
     * hscode
     * Required: false
     * Example Value: 
     */
    private $hsCode;

    /**
     * @param String $hsCode
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
     * @param String $upc
     * 商品sku的upc编码,长度小于50字符
     * Required: false
     * Example Value: 
     */
    private $upc;

    /**
     * @param String $upc
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