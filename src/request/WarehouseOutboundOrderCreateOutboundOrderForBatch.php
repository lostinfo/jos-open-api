<?php

namespca Lostinfo\JosOpenApi;

/**
 * 批量创建出库单
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1743&apiName=jingdong.warehouse.outbound.order.createOutboundOrderForBatch
 * Class WarehouseOutboundOrderCreateOutboundOrderForBatch
 * @package Jd\request
 */
class WarehouseOutboundOrderCreateOutboundOrderForBatch
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.warehouse.outbound.order.createOutboundOrderForBatch";
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
     * @param int $stockOutType
     * 出库单类型
     * Required: true
     * Example Value: 
     */
    private $stockOutType;

    /**
     * @param int $stockOutType
     * 出库单类型
     * Example Value: 
     */
    public function setStockOutType($stockOutType)
    {
        $this->stockOutType             = $stockOutType;
        $this->apiParas["stockOutType"]  = $stockOutType;
    }

    public function getStockOutType()
    {
        return $this->stockOutType;
    }

    /**
     * @param string $remarkForOutBound
     * 备注
     * Required: false
     * Example Value: 
     */
    private $remarkForOutBound;

    /**
     * @param string $remarkForOutBound
     * 备注
     * Example Value: 
     */
    public function setRemarkForOutBound($remarkForOutBound)
    {
        $this->remarkForOutBound             = $remarkForOutBound;
        $this->apiParas["remarkForOutBound"]  = $remarkForOutBound;
    }

    public function getRemarkForOutBound()
    {
        return $this->remarkForOutBound;
    }

    /**
     * @param string[] $snNo
     * SN码
     * Required: false
     * Example Value: 
     */
    private $snNo;

    /**
     * @param string[] $snNo
     * SN码
     * Example Value: 
     */
    public function setSnNo($snNo)
    {
        $this->snNo             = $snNo;
        $this->apiParas["snNo"]  = $snNo;
    }

    public function getSnNo()
    {
        return $this->snNo;
    }

    /**
     * @param string[] $spareCode
     * 备件条码
     * Required: false
     * Example Value: 
     */
    private $spareCode;

    /**
     * @param string[] $spareCode
     * 备件条码
     * Example Value: 
     */
    public function setSpareCode($spareCode)
    {
        $this->spareCode             = $spareCode;
        $this->apiParas["spareCode"]  = $spareCode;
    }

    public function getSpareCode()
    {
        return $this->spareCode;
    }

    /**
     * @param string[] $vendorCode
     * 供应商简码
     * Required: false
     * Example Value: 
     */
    private $vendorCode;

    /**
     * @param string[] $vendorCode
     * 供应商简码
     * Example Value: 
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
     * @param string[] $remark
     * 备注
     * Required: false
     * Example Value: 
     */
    private $remark;

    /**
     * @param string[] $remark
     * 备注
     * Example Value: 
     */
    public function setRemark($remark)
    {
        $this->remark             = $remark;
        $this->apiParas["remark"]  = $remark;
    }

    public function getRemark()
    {
        return $this->remark;
    }

}