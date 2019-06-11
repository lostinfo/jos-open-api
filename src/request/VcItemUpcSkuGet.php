<?php

namespca Lostinfo\JosOpenApi;

/**
 * 获取重复UPC码的商品编号列表
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1661&apiName=jingdong.vc.item.upc.sku.get
 * Class VcItemUpcSkuGet
 * @package Jd\request
 */
class VcItemUpcSkuGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vc.item.upc.sku.get";
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
     * @param string $upcCode
     * upc编码
     * Required: true
     * Example Value: 12225
     */
    private $upcCode;

    /**
     * @param string $upcCode
     * upc编码
     * Example Value: 12225
     */
    public function setUpcCode($upcCode)
    {
        $this->upcCode             = $upcCode;
        $this->apiParas["upc_code"]  = $upcCode;
    }

    public function getUpcCode()
    {
        return $this->upcCode;
    }

    /**
     * @param string $salerCode
     * 销售员erp
     * Required: true
     * Example Value: bjwht
     */
    private $salerCode;

    /**
     * @param string $salerCode
     * 销售员erp
     * Example Value: bjwht
     */
    public function setSalerCode($salerCode)
    {
        $this->salerCode             = $salerCode;
        $this->apiParas["saler_code"]  = $salerCode;
    }

    public function getSalerCode()
    {
        return $this->salerCode;
    }

}