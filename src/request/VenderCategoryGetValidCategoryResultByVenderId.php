<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 获取商家可用的经营分类列表
 * 店铺API-京东店铺API，包含提供商家、商家店铺基本信息及店内分类操作查询等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=88&apiId=2727&apiName=jingdong.vender.category.getValidCategoryResultByVenderId
 * Class VenderCategoryGetValidCategoryResultByVenderId
 * @package Jd\request
 */
class VenderCategoryGetValidCategoryResultByVenderId
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vender.category.getValidCategoryResultByVenderId";
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