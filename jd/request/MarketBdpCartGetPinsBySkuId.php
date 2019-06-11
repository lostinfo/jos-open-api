<?php

namespace JD\request;

/**
 * 查询单个sku最近三天内加购的用户PIN列表
 * 商品API-提供网站商品信息更新、查询API,该组下所有接口均不支持自营店铺业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=48&apiId=3418&apiName=jingdong.market.bdp.cart.getPinsBySkuId
 * Class MarketBdpCartGetPinsBySkuId
 * @package Jd\request
 */
class MarketBdpCartGetPinsBySkuId
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.market.bdp.cart.getPinsBySkuId";
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
     * SKU编号
     * Required: true
     * Example Value: 12345678
     */
    private $skuId;

    /**
     * @param Number $skuId
     * SKU编号
     * Example Value: 12345678
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
     * @param String $days
     * 最近天数（仅支持最近3天的数据，可选值为1、2、3）
     * Required: true
     * Example Value: 2
     */
    private $days;

    /**
     * @param String $days
     * 最近天数（仅支持最近3天的数据，可选值为1、2、3）
     * Example Value: 2
     */
    public function setDays($days)
    {
        $this->days             = $days;
        $this->apiParas["days"]  = $days;
    }

    public function getDays()
    {
        return $this->days;
    }

}