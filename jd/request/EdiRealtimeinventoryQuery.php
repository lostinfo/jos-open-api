<?php

namespace JD\request;

/**
 * 查询京东实时库存数据
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=3661&apiName=jingdong.edi.realtimeinventory.query
 * Class EdiRealtimeinventoryQuery
 * @package Jd\request
 */
class EdiRealtimeinventoryQuery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.edi.realtimeinventory.query";
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
     * @param String $operatorErp
     * 操作人erp
     * Required: true
     * Example Value: 
     */
    private $operatorErp;

    /**
     * @param String $operatorErp
     * 操作人erp
     * Example Value: 
     */
    public function setOperatorErp($operatorErp)
    {
        $this->operatorErp             = $operatorErp;
        $this->apiParas["operatorErp"]  = $operatorErp;
    }

    public function getOperatorErp()
    {
        return $this->operatorErp;
    }

    /**
     * @param String[] $jdSku
     * 京东sku
     * Required: true
     * Example Value: 
     */
    private $jdSku;

    /**
     * @param String[] $jdSku
     * 京东sku
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
     * @param String $vendorCode
     * 供应商编码
     * Required: true
     * Example Value: 
     */
    private $vendorCode;

    /**
     * @param String $vendorCode
     * 供应商编码
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

}