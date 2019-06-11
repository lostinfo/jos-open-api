<?php

namespace JD\request;

/**
 * 根据商品id获取商品保质期信息
 * 商城API-面向用户类商城系统商品相关信息获取
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=49&apiId=1031&apiName=jingdong.new.ware.productsafedays.get
 * Class NewWareProductsafedaysGet
 * @package Jd\request
 */
class NewWareProductsafedaysGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.new.ware.productsafedays.get";
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
     * @param Number $skuid
     * 商品编号id
     * Required: false
     * Example Value: 
     */
    private $skuid;

    /**
     * @param Number $skuid
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