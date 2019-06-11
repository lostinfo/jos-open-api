<?php

namespace JD\request;

/**
 * 保存商品店内分类
 * 商品API-提供网站商品信息更新、查询API,该组下所有接口均不支持自营店铺业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=48&apiId=1256&apiName=jingdong.shopcategories.write.saveWareShopCategories
 * Class ShopcategoriesWriteSaveWareShopCategories
 * @package Jd\request
 */
class ShopcategoriesWriteSaveWareShopCategories
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.shopcategories.write.saveWareShopCategories";
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
     * @param Number $wareId
     * 商品id
     * Required: true
     * Example Value: wareId
     */
    private $wareId;

    /**
     * @param Number $wareId
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

    /**
     * @param Number[] $shopCategory
     * 店内分类ID数组
     * Required: false
     * Example Value: shopCategory
     */
    private $shopCategory;

    /**
     * @param Number[] $shopCategory
     * 店内分类ID数组
     * Example Value: shopCategory
     */
    public function setShopCategory($shopCategory)
    {
        $this->shopCategory             = $shopCategory;
        $this->apiParas["shopCategory"]  = $shopCategory;
    }

    public function getShopCategory()
    {
        return $this->shopCategory;
    }

}