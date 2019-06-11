<?php

namespace JD\request;

/**
 * 根据属性id 获取属性值id,属性值名
 * 商城API-面向用户类商城系统商品相关信息获取
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=49&apiId=1034&apiName=jingdong.new.ware.AttributeValues.query
 * Class NewWareAttributeValuesQuery
 * @package Jd\request
 */
class NewWareAttributeValuesQuery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.new.ware.AttributeValues.query";
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
     * 属性号
     * Required: false
     * Example Value: 
     */
    private $id;

    /**
     * @param Number[] $id
     * 属性号
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