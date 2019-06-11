<?php

namespace JD\request;

/**
 * 删除指定店内分类
 * 店铺API-京东店铺API，包含提供商家、商家店铺基本信息及店内分类操作查询等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=88&apiId=3031&apiName=jingdong.vender.shopcategory.deleteShopCategoryByVenderIdAndCid
 * Class VenderShopcategoryDeleteShopCategoryByVenderIdAndCid
 * @package Jd\request
 */
class VenderShopcategoryDeleteShopCategoryByVenderIdAndCid
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vender.shopcategory.deleteShopCategoryByVenderIdAndCid";
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
     * @param Number $cid
     * 分类编号
     * Required: true
     * Example Value: 
     */
    private $cid;

    /**
     * @param Number $cid
     * 分类编号
     * Example Value: 
     */
    public function setCid($cid)
    {
        $this->cid             = $cid;
        $this->apiParas["cid"]  = $cid;
    }

    public function getCid()
    {
        return $this->cid;
    }

}