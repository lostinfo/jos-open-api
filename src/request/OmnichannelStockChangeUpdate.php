<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 同步库存信息（变化量）
 * 全渠道开放平台API-全渠道开放平台API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=244&apiId=2307&apiName=jingdong.omnichannel.stock.change.update
 * Class OmnichannelStockChangeUpdate
 * @package Jd\request
 */
class OmnichannelStockChangeUpdate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.omnichannel.stock.change.update";
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
     * @param int[] $stockType
     * 库存类型
     * Required: true
     * Example Value: 
     */
    private $stockType;

    /**
     * @param int[] $stockType
     * 库存类型
     * Example Value: 
     */
    public function setStockType($stockType)
    {
        $this->stockType             = $stockType;
        $this->apiParas["stockType"]  = $stockType;
    }

    public function getStockType()
    {
        return $this->stockType;
    }

    /**
     * @param string[] $storeId
     * 商家原始门店ID
     * Required: true
     * Example Value: 
     */
    private $storeId;

    /**
     * @param string[] $storeId
     * 商家原始门店ID
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
     * @param int[] $jdSkuId
     * 京东SKUID
     * Required: true
     * Example Value: 
     */
    private $jdSkuId;

    /**
     * @param int[] $jdSkuId
     * 京东SKUID
     * Example Value: 
     */
    public function setJdSkuId($jdSkuId)
    {
        $this->jdSkuId             = $jdSkuId;
        $this->apiParas["jdSkuId"]  = $jdSkuId;
    }

    public function getJdSkuId()
    {
        return $this->jdSkuId;
    }

    /**
     * @param string[] $outerSkuId
     * 商家SKUID
     * Required: true
     * Example Value: 
     */
    private $outerSkuId;

    /**
     * @param string[] $outerSkuId
     * 商家SKUID
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
     * @param int[] $spotStockNum
     * 现货库存量
     * Required: true
     * Example Value: 
     */
    private $spotStockNum;

    /**
     * @param int[] $spotStockNum
     * 现货库存量
     * Example Value: 
     */
    public function setSpotStockNum($spotStockNum)
    {
        $this->spotStockNum             = $spotStockNum;
        $this->apiParas["spotStockNum"]  = $spotStockNum;
    }

    public function getSpotStockNum()
    {
        return $this->spotStockNum;
    }

    /**
     * @param int[] $saleStockNum
     * 销售预占库存量
     * Required: false
     * Example Value: 
     */
    private $saleStockNum;

    /**
     * @param int[] $saleStockNum
     * 销售预占库存量
     * Example Value: 
     */
    public function setSaleStockNum($saleStockNum)
    {
        $this->saleStockNum             = $saleStockNum;
        $this->apiParas["saleStockNum"]  = $saleStockNum;
    }

    public function getSaleStockNum()
    {
        return $this->saleStockNum;
    }

    /**
     * @param int[] $produceStockNum
     * 生产预占库存量
     * Required: false
     * Example Value: 
     */
    private $produceStockNum;

    /**
     * @param int[] $produceStockNum
     * 生产预占库存量
     * Example Value: 
     */
    public function setProduceStockNum($produceStockNum)
    {
        $this->produceStockNum             = $produceStockNum;
        $this->apiParas["produceStockNum"]  = $produceStockNum;
    }

    public function getProduceStockNum()
    {
        return $this->produceStockNum;
    }

    /**
     * @param string[] $updateTime
     * 库存更新时间
     * Required: true
     * Example Value: 
     */
    private $updateTime;

    /**
     * @param string[] $updateTime
     * 库存更新时间
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