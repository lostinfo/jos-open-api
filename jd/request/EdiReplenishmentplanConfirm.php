<?php

namespace JD\request;

/**
 * 提供供应计划以确认采购(补货)计划
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1969&apiName=jingdong.edi.replenishmentplan.confirm
 * Class EdiReplenishmentplanConfirm
 * @package Jd\request
 */
class EdiReplenishmentplanConfirm
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.edi.replenishmentplan.confirm";
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
     * @param String $replenishmentPlanCode
     * 采购(补货)计划单号（必填，请与查询出的采购(补货)计划单的相应字段保持一致）
     * Required: true
     * Example Value: 
     */
    private $replenishmentPlanCode;

    /**
     * @param String $replenishmentPlanCode
     * 采购(补货)计划单号（必填，请与查询出的采购(补货)计划单的相应字段保持一致）
     * Example Value: 
     */
    public function setReplenishmentPlanCode($replenishmentPlanCode)
    {
        $this->replenishmentPlanCode             = $replenishmentPlanCode;
        $this->apiParas["replenishmentPlanCode"]  = $replenishmentPlanCode;
    }

    public function getReplenishmentPlanCode()
    {
        return $this->replenishmentPlanCode;
    }

    /**
     * @param String[] $jdSku
     * 京东SKU（必填）
     * Required: false
     * Example Value: 
     */
    private $jdSku;

    /**
     * @param String[] $jdSku
     * 京东SKU（必填）
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
     * @param String[] $productName
     * 商品名称
     * Required: false
     * Example Value: 
     */
    private $productName;

    /**
     * @param String[] $productName
     * 商品名称
     * Example Value: 
     */
    public function setProductName($productName)
    {
        $this->productName             = $productName;
        $this->apiParas["productName"]  = $productName;
    }

    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @param Number[] $week
     * 周（必填，请与查询出的采购(补货)计划单的相应字段保持一致）
     * Required: false
     * Example Value: 
     */
    private $week;

    /**
     * @param Number[] $week
     * 周（必填，请与查询出的采购(补货)计划单的相应字段保持一致）
     * Example Value: 
     */
    public function setWeek($week)
    {
        $this->week             = $week;
        $this->apiParas["week"]  = $week;
    }

    public function getWeek()
    {
        return $this->week;
    }

    /**
     * @param Date[] $weekStartTime
     * 周计划起始时间（必填，请与查询出的采购(补货)计划单的相应字段保持一致）
     * Required: false
     * Example Value: 
     */
    private $weekStartTime;

    /**
     * @param Date[] $weekStartTime
     * 周计划起始时间（必填，请与查询出的采购(补货)计划单的相应字段保持一致）
     * Example Value: 
     */
    public function setWeekStartTime($weekStartTime)
    {
        $this->weekStartTime             = $weekStartTime;
        $this->apiParas["weekStartTime"]  = $weekStartTime;
    }

    public function getWeekStartTime()
    {
        return $this->weekStartTime;
    }

    /**
     * @param Date[] $weekEndTime
     * 周计划结束时间（必填，请与查询出的采购(补货)计划单的相应字段保持一致）
     * Required: false
     * Example Value: 
     */
    private $weekEndTime;

    /**
     * @param Date[] $weekEndTime
     * 周计划结束时间（必填，请与查询出的采购(补货)计划单的相应字段保持一致）
     * Example Value: 
     */
    public function setWeekEndTime($weekEndTime)
    {
        $this->weekEndTime             = $weekEndTime;
        $this->apiParas["weekEndTime"]  = $weekEndTime;
    }

    public function getWeekEndTime()
    {
        return $this->weekEndTime;
    }

    /**
     * @param Number[] $sureQuantity
     * 确认量（必填）
     * Required: false
     * Example Value: 
     */
    private $sureQuantity;

    /**
     * @param Number[] $sureQuantity
     * 确认量（必填）
     * Example Value: 
     */
    public function setSureQuantity($sureQuantity)
    {
        $this->sureQuantity             = $sureQuantity;
        $this->apiParas["sureQuantity"]  = $sureQuantity;
    }

    public function getSureQuantity()
    {
        return $this->sureQuantity;
    }

}