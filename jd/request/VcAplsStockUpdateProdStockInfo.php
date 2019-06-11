<?php

namespace JD\request;

/**
 * 修改库存信息
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1402&apiName=jingdong.vc.apls.stock.updateProdStockInfo
 * Class VcAplsStockUpdateProdStockInfo
 * @package Jd\request
 */
class VcAplsStockUpdateProdStockInfo
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vc.apls.stock.updateProdStockInfo";
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
     * @param String $vendorCode
     * 供应商简码
     * Required: true
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
     * @param Number $companyId
     * 商家编号
     * Required: true
     * Example Value: 
     */
    private $companyId;

    /**
     * @param Number $companyId
     * 商家编号
     * Example Value: 
     */
    public function setCompanyId($companyId)
    {
        $this->companyId             = $companyId;
        $this->apiParas["companyId"]  = $companyId;
    }

    public function getCompanyId()
    {
        return $this->companyId;
    }

    /**
     * @param String $stockRfId
     * 业务单据号，VC-VC账号- 确认来源
     * Required: true
     * Example Value: VC-jd12345-
     */
    private $stockRfId;

    /**
     * @param String $stockRfId
     * 业务单据号，VC-VC账号- 确认来源
     * Example Value: VC-jd12345-
     */
    public function setStockRfId($stockRfId)
    {
        $this->stockRfId             = $stockRfId;
        $this->apiParas["stockRfId"]  = $stockRfId;
    }

    public function getStockRfId()
    {
        return $this->stockRfId;
    }

    /**
     * @param Number $skuid
     * 商品编号
     * Required: true
     * Example Value: 
     */
    private $skuid;

    /**
     * @param Number $skuid
     * 商品编号
     * Example Value: 
     */
    public function setSkuid($skuid)
    {
        $this->skuid             = $skuid;
        $this->apiParas["skuid"]  = $skuid;
    }

    public function getSkuid()
    {
        return $this->skuid;
    }

    /**
     * @param Number $stockNum
     * 库存数量
     * Required: true
     * Example Value: 
     */
    private $stockNum;

    /**
     * @param Number $stockNum
     * 库存数量
     * Example Value: 
     */
    public function setStockNum($stockNum)
    {
        $this->stockNum             = $stockNum;
        $this->apiParas["stockNum"]  = $stockNum;
    }

    public function getStockNum()
    {
        return $this->stockNum;
    }

}