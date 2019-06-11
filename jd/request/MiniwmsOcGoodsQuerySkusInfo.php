<?php

namespace JD\request;

/**
 * 查询商品信息
 * 移动店铺API-移动店铺新业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=202&apiId=1768&apiName=jingdong.miniwms.oc.goods.querySkusInfo
 * Class MiniwmsOcGoodsQuerySkusInfo
 * @package Jd\request
 */
class MiniwmsOcGoodsQuerySkusInfo
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.miniwms.oc.goods.querySkusInfo";
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
     * @param String $stationId
     * 移动仓ID
     * Required: true
     * Example Value: 
     */
    private $stationId;

    /**
     * @param String $stationId
     * 移动仓ID
     * Example Value: 
     */
    public function setStationId($stationId)
    {
        $this->stationId             = $stationId;
        $this->apiParas["stationId"]  = $stationId;
    }

    public function getStationId()
    {
        return $this->stationId;
    }

    /**
     * @param String $sku
     * 商品sku
     * Required: true
     * Example Value: 
     */
    private $sku;

    /**
     * @param String $sku
     * 商品sku
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