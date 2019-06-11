<?php

namespace JD\request;

/**
 * 价格导入接口
 * 全渠道开放平台API-全渠道开放平台API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=244&apiId=2951&apiName=jingdong.omnichannel.price.update
 * Class OmnichannelPriceUpdate
 * @package Jd\request
 */
class OmnichannelPriceUpdate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.omnichannel.price.update";
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
     * @param String[] $venderId
     * 商家ID(不填)
     * Required: false
     * Example Value: 
     */
    private $venderId;

    /**
     * @param String[] $venderId
     * 商家ID(不填)
     * Example Value: 
     */
    public function setVenderId($venderId)
    {
        $this->venderId             = $venderId;
        $this->apiParas["venderId"]  = $venderId;
    }

    public function getVenderId()
    {
        return $this->venderId;
    }

    /**
     * @param Number[] $saleSkuId
     * 销售渠道商品ID
     * Required: true
     * Example Value: 
     */
    private $saleSkuId;

    /**
     * @param Number[] $saleSkuId
     * 销售渠道商品ID
     * Example Value: 
     */
    public function setSaleSkuId($saleSkuId)
    {
        $this->saleSkuId             = $saleSkuId;
        $this->apiParas["saleSkuId"]  = $saleSkuId;
    }

    public function getSaleSkuId()
    {
        return $this->saleSkuId;
    }

    /**
     * @param String[] $saleSkuName
     * 销售渠道商品名称
     * Required: false
     * Example Value: 
     */
    private $saleSkuName;

    /**
     * @param String[] $saleSkuName
     * 销售渠道商品名称
     * Example Value: 
     */
    public function setSaleSkuName($saleSkuName)
    {
        $this->saleSkuName             = $saleSkuName;
        $this->apiParas["saleSkuName"]  = $saleSkuName;
    }

    public function getSaleSkuName()
    {
        return $this->saleSkuName;
    }

    /**
     * @param String[] $outerSkuId
     * 商家商品ID
     * Required: true
     * Example Value: 
     */
    private $outerSkuId;

    /**
     * @param String[] $outerSkuId
     * 商家商品ID
     * Example Value: 
     */
    public function setOuterSkuId($outerSkuId)
    {
        $this->outerSkuId             = $outerSkuId;
        $this->apiParas["outerSkuId"]  = $outerSkuId;
    }

    public function getOuterSkuId()
    {
        return $this->outerSkuId;
    }

    /**
     * @param String[] $outerSkuName
     * 商家商品名称
     * Required: false
     * Example Value: 
     */
    private $outerSkuName;

    /**
     * @param String[] $outerSkuName
     * 商家商品名称
     * Example Value: 
     */
    public function setOuterSkuName($outerSkuName)
    {
        $this->outerSkuName             = $outerSkuName;
        $this->apiParas["outerSkuName"]  = $outerSkuName;
    }

    public function getOuterSkuName()
    {
        return $this->outerSkuName;
    }

    /**
     * @param String[] $upc
     * UPC码
     * Required: false
     * Example Value: 
     */
    private $upc;

    /**
     * @param String[] $upc
     * UPC码
     * Example Value: 
     */
    public function setUpc($upc)
    {
        $this->upc             = $upc;
        $this->apiParas["upc"]  = $upc;
    }

    public function getUpc()
    {
        return $this->upc;
    }

    /**
     * @param String[] $outerStoreId
     * 商家库房/店铺信息
     * Required: true
     * Example Value: 
     */
    private $outerStoreId;

    /**
     * @param String[] $outerStoreId
     * 商家库房/店铺信息
     * Example Value: 
     */
    public function setOuterStoreId($outerStoreId)
    {
        $this->outerStoreId             = $outerStoreId;
        $this->apiParas["outerStoreId"]  = $outerStoreId;
    }

    public function getOuterStoreId()
    {
        return $this->outerStoreId;
    }

    /**
     * @param Number[] $priceMode
     * 1:阈值价格 2：一口价
     * Required: true
     * Example Value: 
     */
    private $priceMode;

    /**
     * @param Number[] $priceMode
     * 1:阈值价格 2：一口价
     * Example Value: 
     */
    public function setPriceMode($priceMode)
    {
        $this->priceMode             = $priceMode;
        $this->apiParas["priceMode"]  = $priceMode;
    }

    public function getPriceMode()
    {
        return $this->priceMode;
    }

    /**
     * @param Number[] $price
     * 设定价格
     * Required: true
     * Example Value: 
     */
    private $price;

    /**
     * @param Number[] $price
     * 设定价格
     * Example Value: 
     */
    public function setPrice($price)
    {
        $this->price             = $price;
        $this->apiParas["price"]  = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param Date[] $updateTime
     * 更新时间
     * Required: true
     * Example Value: 
     */
    private $updateTime;

    /**
     * @param Date[] $updateTime
     * 更新时间
     * Example Value: 
     */
    public function setUpdateTime($updateTime)
    {
        $this->updateTime             = $updateTime;
        $this->apiParas["updateTime"]  = $updateTime;
    }

    public function getUpdateTime()
    {
        return $this->updateTime;
    }

}