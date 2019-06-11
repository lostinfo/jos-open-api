<?php

namespace JD\request;

/**
 * 查询厂家直送商品库存信息接口
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=2595&apiName=jingdong.dropship.dps.queryStockInfo
 * Class DropshipDpsQueryStockInfo
 * @package Jd\request
 */
class DropshipDpsQueryStockInfo
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dropship.dps.queryStockInfo";
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
     * @param Number[] $sku
     * 商品编号
     * Required: false
     * Example Value: 
     */
    private $sku;

    /**
     * @param Number[] $sku
     * 商品编号
     * Example Value: 
     */
    public function setSku($sku)
    {
        $this->sku             = $sku;
        $this->apiParas["sku"]  = $sku;
    }

    public function getSku()
    {
        return $this->sku;
    }

}