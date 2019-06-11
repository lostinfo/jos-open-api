<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 查询商品店内分类列表
 * 商品API-提供网站商品信息更新、查询API,该组下所有接口均不支持自营店铺业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=48&apiId=1231&apiName=jingdong.shopcategories.read.findShopCategoriesByWareId
 * Class ShopcategoriesReadFindShopCategoriesByWareId
 * @package Jd\request
 */
class ShopcategoriesReadFindShopCategoriesByWareId
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.shopcategories.read.findShopCategoriesByWareId";
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
     * 商品id
     * Required: true
     * Example Value: wareId
     */
    private $wareId;

    /**
     * @param int $wareId
     * 商品id
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

}