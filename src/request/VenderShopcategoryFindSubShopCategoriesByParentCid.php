<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 获取指定分类的子分类列表
 * 店铺API-京东店铺API，包含提供商家、商家店铺基本信息及店内分类操作查询等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=88&apiId=2797&apiName=jingdong.vender.shopcategory.findSubShopCategoriesByParentCid
 * Class VenderShopcategoryFindSubShopCategoriesByParentCid
 * @package Jd\request
 */
class VenderShopcategoryFindSubShopCategoriesByParentCid
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vender.shopcategory.findSubShopCategoriesByParentCid";
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
     * @param int $parentId
     * 父分类编号。（必须大于0）
     * Required: true
     * Example Value: 123456
     */
    private $parentId;

    /**
     * @param int $parentId
     * 父分类编号。（必须大于0）
     * Example Value: 123456
     */
    public function setParentId($parentId)
    {
        $this->parentId             = $parentId;
        $this->apiParas["parent_cid"]  = $parentId;
    }

    public function getParentId()
    {
        return $this->parentId;
    }

}