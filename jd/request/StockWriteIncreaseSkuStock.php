<?php

namespace JD\request;

/**
 * 增量更新库存接口
 * 商品API-提供网站商品信息更新、查询API,该组下所有接口均不支持自营店铺业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=48&apiId=2170&apiName=jingdong.stock.write.increaseSkuStock
 * Class StockWriteIncreaseSkuStock
 * @package Jd\request
 */
class StockWriteIncreaseSkuStock
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.stock.write.increaseSkuStock";
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
     * @param Number $skuId
     * sku编号
     * Required: true
     * Example Value: 
     */
    private $skuId;

    /**
     * @param Number $skuId
     * sku编号
     * Example Value: 
     */
    public function setSkuId($skuId)
    {
        $this->skuId             = $skuId;
        $this->apiParas["skuId"]  = $skuId;
    }

    public function getSkuId()
    {
        return $this->skuId;
    }

    /**
     * @param Number $stockNum
     * 增量库存数量
     * Required: true
     * Example Value: 
     */
    private $stockNum;

    /**
     * @param Number $stockNum
     * 增量库存数量
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

    /**
     * @param Number $storeId
     * 仓库编号
     * Required: true
     * Example Value: 
     */
    private $storeId;

    /**
     * @param Number $storeId
     * 仓库编号
     * Example Value: 
     */
    public function setStoreId($storeId)
    {
        $this->storeId             = $storeId;
        $this->apiParas["storeId"]  = $storeId;
    }

    public function getStoreId()
    {
        return $this->storeId;
    }

    /**
     * @param String $stockRfId
     * 业务单据号
     * Required: true
     * Example Value: 
     */
    private $stockRfId;

    /**
     * @param String $stockRfId
     * 业务单据号
     * Example Value: 
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

}