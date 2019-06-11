<?php

namespca Lostinfo\JosOpenApi;

/**
 * 设置sku库存
 * 商品API-提供网站商品信息更新、查询API,该组下所有接口均不支持自营店铺业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=48&apiId=1224&apiName=jingdong.stock.write.updateSkuStock
 * Class StockWriteUpdateSkuStock
 * @package Jd\request
 */
class StockWriteUpdateSkuStock
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.stock.write.updateSkuStock";
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
     * @param int $skuId
     * sku编号
     * Required: true
     * Example Value: 
     */
    private $skuId;

    /**
     * @param int $skuId
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
     * @param int $stockNum
     * 库存数量
     * Required: true
     * Example Value: 
     */
    private $stockNum;

    /**
     * @param int $stockNum
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

    /**
     * @param int $storeId
     * 仓库编号
     * Required: false
     * Example Value: 
     */
    private $storeId;

    /**
     * @param int $storeId
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

}