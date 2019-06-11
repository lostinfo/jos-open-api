<?php

namespca Lostinfo\JosOpenApi;

/**
 * 查询库存信息
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1401&apiName=jingdong.vc.apls.stock.batchGetProdStockInfo
 * Class VcAplsStockBatchGetProdStockInfo
 * @package Jd\request
 */
class VcAplsStockBatchGetProdStockInfo
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vc.apls.stock.batchGetProdStockInfo";
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
     * @param string $providerCode
     * 供应商简码
     * Required: true
     * Example Value: 
     */
    private $providerCode;

    /**
     * @param string $providerCode
     * 供应商简码
     * Example Value: 
     */
    public function setProviderCode($providerCode)
    {
        $this->providerCode             = $providerCode;
        $this->apiParas["vendorCode"]  = $providerCode;
    }

    public function getProviderCode()
    {
        return $this->providerCode;
    }

    /**
     * @param int[] $skuList
     * 商品编号list
     * Required: true
     * Example Value: 
     */
    private $skuList;

    /**
     * @param int[] $skuList
     * 商品编号list
     * Example Value: 
     */
    public function setSkuList($skuList)
    {
        $this->skuList             = $skuList;
        $this->apiParas["skuList"]  = $skuList;
    }

    public function getSkuList()
    {
        return $this->skuList;
    }

}