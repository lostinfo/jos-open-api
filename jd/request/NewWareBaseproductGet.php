<?php

namespace JD\request;

/**
 * 获取商品基本信息
 * 商城API-面向用户类商城系统商品相关信息获取
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=49&apiId=1038&apiName=jingdong.new.ware.baseproduct.get
 * Class NewWareBaseproductGet
 * @package Jd\request
 */
class NewWareBaseproductGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.new.ware.baseproduct.get";
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
     * @param Number[] $ids
     * skuId
     * Required: false
     * Example Value: 
     */
    private $ids;

    /**
     * @param Number[] $ids
     * skuId
     * Example Value: 
     */
    public function setIds($ids)
    {
        $this->ids             = $ids;
        $this->apiParas["ids"]  = $ids;
    }

    public function getIds()
    {
        return $this->ids;
    }

    /**
     * @param String[] $basefields
     * 需要查询的字段，与返回值ProductBase中的字段对应
     * Required: true
     * Example Value: 
     */
    private $basefields;

    /**
     * @param String[] $basefields
     * 需要查询的字段，与返回值ProductBase中的字段对应
     * Example Value: 
     */
    public function setBasefields($basefields)
    {
        $this->basefields             = $basefields;
        $this->apiParas["basefields"]  = $basefields;
    }

    public function getBasefields()
    {
        return $this->basefields;
    }

}