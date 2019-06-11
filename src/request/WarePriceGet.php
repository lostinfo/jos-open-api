<?php

namespca Lostinfo\JosOpenApi;

/**
 * 根据SKU ID获取商品价格信息
 * 商城API-面向用户类商城系统商品相关信息获取
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=49&apiId=386&apiName=jingdong.ware.price.get
 * Class WarePriceGet
 * @package Jd\request
 */
class WarePriceGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ware.price.get";
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
     * @param string $skuId
     * 商品ID,特别注意：请以大写J_作为开头skuid，否则无法正确返回。
     * Required: true
     * Example Value: J_100012
     */
    private $skuId;

    /**
     * @param string $skuId
     * 商品ID,特别注意：请以大写J_作为开头skuid，否则无法正确返回。
     * Example Value: J_100012
     */
    public function setSkuId($skuId)
    {
        $this->skuId             = $skuId;
        $this->apiParas["sku_id"]  = $skuId;
    }

    public function getSkuId()
    {
        return $this->skuId;
    }

}