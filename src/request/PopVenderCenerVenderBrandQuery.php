<?php

namespca Lostinfo\JosOpenApi;

/**
 * 查询商家已授权的品牌
 * 类目API-获取商家已开通的类目信息、类目下属性及属性值信息。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=62&apiId=209&apiName=jingdong.pop.vender.cener.venderBrand.query
 * Class PopVenderCenerVenderBrandQuery
 * @package Jd\request
 */
class PopVenderCenerVenderBrandQuery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.vender.cener.venderBrand.query";
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
     * @param string $name
     * 品牌名称，支持模糊查询
     * Required: false
     * Example Value: 
     */
    private $name;

    /**
     * @param string $name
     * 品牌名称，支持模糊查询
     * Example Value: 
     */
    public function setName($name)
    {
        $this->name             = $name;
        $this->apiParas["name"]  = $name;
    }

    public function getName()
    {
        return $this->name;
    }

}