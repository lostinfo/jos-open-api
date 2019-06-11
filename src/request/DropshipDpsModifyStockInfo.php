<?php

namespca Lostinfo\JosOpenApi;

/**
 * 修改厂家直送商品库存接口
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=2594&apiName=jingdong.dropship.dps.modifyStockInfo
 * Class DropshipDpsModifyStockInfo
 * @package Jd\request
 */
class DropshipDpsModifyStockInfo
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dropship.dps.modifyStockInfo";
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
     * @param int[] $sku
     * 商品编号
     * Required: false
     * Example Value: 
     */
    private $sku;

    /**
     * @param int[] $sku
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

    /**
     * @param int[] $stockNum
     * 商品总库存
     * Required: false
     * Example Value: 
     */
    private $stockNum;

    /**
     * @param int[] $stockNum
     * 商品总库存
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