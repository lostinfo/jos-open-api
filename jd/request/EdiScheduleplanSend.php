<?php

namespace JD\request;

/**
 * 发送排产计划
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1979&apiName=jingdong.edi.scheduleplan.send
 * Class EdiScheduleplanSend
 * @package Jd\request
 */
class EdiScheduleplanSend
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.edi.scheduleplan.send";
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
     * @param String $schedulePlanCode
     * 排产计划编码
     * Required: true
     * Example Value: 
     */
    private $schedulePlanCode;

    /**
     * @param String $schedulePlanCode
     * 排产计划编码
     * Example Value: 
     */
    public function setSchedulePlanCode($schedulePlanCode)
    {
        $this->schedulePlanCode             = $schedulePlanCode;
        $this->apiParas["schedulePlanCode"]  = $schedulePlanCode;
    }

    public function getSchedulePlanCode()
    {
        return $this->schedulePlanCode;
    }

    /**
     * @param String[] $jdSku
     * 京东SKU
     * Required: false
     * Example Value: 
     */
    private $jdSku;

    /**
     * @param String[] $jdSku
     * 京东SKU
     * Example Value: 
     */
    public function setJdSku($jdSku)
    {
        $this->jdSku             = $jdSku;
        $this->apiParas["jdSku"]  = $jdSku;
    }

    public function getJdSku()
    {
        return $this->jdSku;
    }

    /**
     * @param String[] $vendorProductId
     * 供应商商品ID
     * Required: false
     * Example Value: 
     */
    private $vendorProductId;

    /**
     * @param String[] $vendorProductId
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
     * @param Date[] $schedulePlanTime
     * 排产时间
     * Required: false
     * Example Value: 
     */
    private $schedulePlanTime;

    /**
     * @param Date[] $schedulePlanTime
     * 排产时间
     * Example Value: 
     */
    public function setSchedulePlanTime($schedulePlanTime)
    {
        $this->schedulePlanTime             = $schedulePlanTime;
        $this->apiParas["schedulePlanTime"]  = $schedulePlanTime;
    }

    public function getSchedulePlanTime()
    {
        return $this->schedulePlanTime;
    }

    /**
     * @param Number[] $quantity
     * 排产数量
     * Required: false
     * Example Value: 
     */
    private $quantity;

    /**
     * @param Number[] $quantity
     * 排产数量
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

}