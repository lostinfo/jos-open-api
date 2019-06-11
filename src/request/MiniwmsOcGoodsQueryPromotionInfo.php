<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 查询商品促销信息
 * 移动店铺API-移动店铺新业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=202&apiId=1771&apiName=jingdong.miniwms.oc.goods.queryPromotionInfo
 * Class MiniwmsOcGoodsQueryPromotionInfo
 * @package Jd\request
 */
class MiniwmsOcGoodsQueryPromotionInfo
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.miniwms.oc.goods.queryPromotionInfo";
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
     * @param string $stationId
     * 移动仓ID
     * Required: true
     * Example Value: 
     */
    private $stationId;

    /**
     * @param string $stationId
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
     * @param string $sku
     * 商品sku
     * Required: true
     * Example Value: 
     */
    private $sku;

    /**
     * @param string $sku
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