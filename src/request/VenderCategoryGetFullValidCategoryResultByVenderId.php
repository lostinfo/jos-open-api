<?php

namespace JD\request;

/**
 * 方法描述
 * 类目API-获取商家已开通的类目信息、类目下属性及属性值信息。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=62&apiId=2871&apiName=jingdong.vender.category.getFullValidCategoryResultByVenderId
 * Class VenderCategoryGetFullValidCategoryResultByVenderId
 * @package Jd\request
 */
class VenderCategoryGetFullValidCategoryResultByVenderId
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vender.category.getFullValidCategoryResultByVenderId";
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