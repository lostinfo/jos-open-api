<?php

namespace JD\request;

/**
 * 查询商家SKU列表
 * 商品API-提供网站商品信息更新、查询API,该组下所有接口均不支持自营店铺业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=48&apiId=2289&apiName=jingdong.new.ware.vender.skus.query
 * Class NewWareVenderSkusQuery
 * @package Jd\request
 */
class NewWareVenderSkusQuery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.new.ware.vender.skus.query";
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
     * @param Number $index
     * 分页查询起点
     * Required: true
     * Example Value: 1
     */
    private $index;

    /**
     * @param Number $index
     * 分页查询起点
     * Example Value: 1
     */
    public function setIndex($index)
    {
        $this->index             = $index;
        $this->apiParas["index"]  = $index;
    }

    public function getIndex()
    {
        return $this->index;
    }

}