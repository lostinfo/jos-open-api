<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 根据组id 获取属性id,属性名
 * 商城API-面向用户类商城系统商品相关信息获取
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=49&apiId=1035&apiName=jingdong.new.ware.Attributes.query
 * Class NewWareAttributesQuery
 * @package Jd\request
 */
class NewWareAttributesQuery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.new.ware.Attributes.query";
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
     * @param int[] $id
     * 组号
     * Required: false
     * Example Value: 
     */
    private $id;

    /**
     * @param int[] $id
     * 组号
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