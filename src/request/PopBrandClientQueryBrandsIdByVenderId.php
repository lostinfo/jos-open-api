<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 品牌中心接口
 * 客户关系管理API -客户关系管理API 
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=59&apiId=3547&apiName=jingdong.pop.brand.client.queryBrandsIdByVenderId
 * Class PopBrandClientQueryBrandsIdByVenderId
 * @package Jd\request
 */
class PopBrandClientQueryBrandsIdByVenderId
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.brand.client.queryBrandsIdByVenderId";
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