<?php

namespace JD\request;

/**
 * 发送预采购单
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1967&apiName=jingdong.edi.prepo.send
 * Class EdiPrepoSend
 * @package Jd\request
 */
class EdiPrepoSend
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.edi.prepo.send";
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
     * @param String $forecastPurchaseOrderCode
     * 预测订单编码
     * Required: true
     * Example Value: 
     */
    private $forecastPurchaseOrderCode;

    /**
     * @param String $forecastPurchaseOrderCode
     * 预测订单编码
     * Example Value: 
     */
    public function setForecastPurchaseOrderCode($forecastPurchaseOrderCode)
    {
        $this->forecastPurchaseOrderCode             = $forecastPurchaseOrderCode;
        $this->apiParas["forecastPurchaseOrderCode"]  = $forecastPurchaseOrderCode;
    }

    public function getForecastPurchaseOrderCode()
    {
        return $this->forecastPurchaseOrderCode;
    }

    /**
     * @param String $prePurchaseOrderCode
     * 预采购单编码
     * Required: true
     * Example Value: 
     */
    private $prePurchaseOrderCode;

    /**
     * @param String $prePurchaseOrderCode
     * 预采购单编码
     * Example Value: 
     */
    public function setPrePurchaseOrderCode($prePurchaseOrderCode)
    {
        $this->prePurchaseOrderCode             = $prePurchaseOrderCode;
        $this->apiParas["prePurchaseOrderCode"]  = $prePurchaseOrderCode;
    }

    public function getPrePurchaseOrderCode()
    {
        return $this->prePurchaseOrderCode;
    }

    /**
     * @param String $vendorCode
     * 供应商简码
     * Required: false
     * Example Value: 
     */
    private $vendorCode;

    /**
     * @param String $vendorCode
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
     * @param String $vendorName
     * 供应商名称
     * Required: false
     * Example Value: 
     */
    private $vendorName;

    /**
     * @param String $vendorName
     * 供应商名称
     * Example Value: 
     */
    public function setVendorName($vendorName)
    {
        $this->vendorName             = $vendorName;
        $this->apiParas["vendorName"]  = $vendorName;
    }

    public function getVendorName()
    {
        return $this->vendorName;
    }

    /**
     * @param String $orgCode
     * 机构编码
     * Required: false
     * Example Value: 
     */
    private $orgCode;

    /**
     * @param String $orgCode
     * 机构编码
     * Example Value: 
     */
    public function setOrgCode($orgCode)
    {
        $this->orgCode             = $orgCode;
        $this->apiParas["orgCode"]  = $orgCode;
    }

    public function getOrgCode()
    {
        return $this->orgCode;
    }

    /**
     * @param String $orgName
     * 机构名称
     * Required: false
     * Example Value: 
     */
    private $orgName;

    /**
     * @param String $orgName
     * 机构名称
     * Example Value: 
     */
    public function setOrgName($orgName)
    {
        $this->orgName             = $orgName;
        $this->apiParas["orgName"]  = $orgName;
    }

    public function getOrgName()
    {
        return $this->orgName;
    }

    /**
     * @param String[] $jdSku
     * 京东SKU
     * Required: true
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
     * 供货商商品ID
     * Required: false
     * Example Value: 
     */
    private $vendorProductId;

    /**
     * @param String[] $vendorProductId
     * 供货商商品ID
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
     * @param Number[] $quantity
     * 数量
     * Required: true
     * Example Value: 
     */
    private $quantity;

    /**
     * @param Number[] $quantity
     * 数量
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