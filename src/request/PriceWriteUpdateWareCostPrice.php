<?php

namespca Lostinfo\JosOpenApi;

/**
 * 更新商品成本价
 * 商品API-提供网站商品信息更新、查询API,该组下所有接口均不支持自营店铺业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=48&apiId=1246&apiName=jingdong.price.write.updateWareCostPrice
 * Class PriceWriteUpdateWareCostPrice
 * @package Jd\request
 */
class PriceWriteUpdateWareCostPrice
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.price.write.updateWareCostPrice";
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
     * @param int $wareId
     * 商品ID
     * Required: true
     * Example Value: wareId
     */
    private $wareId;

    /**
     * @param int $wareId
     * 商品ID
     * Example Value: wareId
     */
    public function setWareId($wareId)
    {
        $this->wareId             = $wareId;
        $this->apiParas["wareId"]  = $wareId;
    }

    public function getWareId()
    {
        return $this->wareId;
    }

    /**
     * @param int $costPrice
     * 成本价,单位元
     * Required: true
     * Example Value: 
     */
    private $costPrice;

    /**
     * @param int $costPrice
     * 成本价,单位元
     * Example Value: 
     */
    public function setCostPrice($costPrice)
    {
        $this->costPrice             = $costPrice;
        $this->apiParas["costPrice"]  = $costPrice;
    }

    public function getCostPrice()
    {
        return $this->costPrice;
    }

}