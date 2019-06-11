<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 获取商家下SKU数量
 * 商品API-提供网站商品信息更新、查询API,该组下所有接口均不支持自营店铺业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=48&apiId=2523&apiName=jingdong.market.dbp.cart.CartDataReadService.getCarSkuCount
 * Class MarketDbpCartCartDataReadServiceGetCarSkuCount
 * @package Jd\request
 */
class MarketDbpCartCartDataReadServiceGetCarSkuCount
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.market.dbp.cart.CartDataReadService.getCarSkuCount";
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

}