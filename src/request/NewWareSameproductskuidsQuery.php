<?php

namespace JD\request;

/**
 * 查询同类产品ids
 * 商城API-面向用户类商城系统商品相关信息获取
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=49&apiId=1033&apiName=jingdong.new.ware.sameproductskuids.query
 * Class NewWareSameproductskuidsQuery
 * @package Jd\request
 */
class NewWareSameproductskuidsQuery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.new.ware.sameproductskuids.query";
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
     * @param Number[] $id
     * 商品编号
     * Required: true
     * Example Value: 
     */
    private $id;

    /**
     * @param Number[] $id
     * 商品编号
     * Example Value: 
     */
    public function setId($id)
    {
        $this->id             = $id;
        $this->apiParas["id"]  = $id;
    }

    public function getId()
    {
        return $this->id;
    }

}