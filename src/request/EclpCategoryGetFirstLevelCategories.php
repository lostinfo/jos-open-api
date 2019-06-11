<?php

namespace JD\request;

/**
 * 查询商品一级分类
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=944&apiName=jingdong.eclp.category.getFirstLevelCategories
 * Class EclpCategoryGetFirstLevelCategories
 * @package Jd\request
 */
class EclpCategoryGetFirstLevelCategories
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.category.getFirstLevelCategories";
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