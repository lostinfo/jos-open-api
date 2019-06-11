<?php

namespca Lostinfo\JosOpenApi;

/**
 * 根据商品id获取 规格参数，属性id 属性值 属性值id
 * 商城API-面向用户类商城系统商品相关信息获取
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=49&apiId=1032&apiName=jingdong.new.ware.productsortatt.get
 * Class NewWareProductsortattGet
 * @package Jd\request
 */
class NewWareProductsortattGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.new.ware.productsortatt.get";
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
     * @param int $skuid
     * 商品编号id
     * Required: false
     * Example Value: 
     */
    private $skuid;

    /**
     * @param int $skuid
     * 商品编号id
     * Example Value: 
     */
    public function setSkuid($skuid)
    {
        $this->skuid             = $skuid;
        $this->apiParas["skuid"]  = $skuid;
    }

    public function getSkuid()
    {
        return $this->skuid;
    }

}