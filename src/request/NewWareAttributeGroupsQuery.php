<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 根据分类id 获取属性组id,属性组名
 * 商城API-面向用户类商城系统商品相关信息获取
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=49&apiId=1036&apiName=jingdong.new.ware.AttributeGroups.query
 * Class NewWareAttributeGroupsQuery
 * @package Jd\request
 */
class NewWareAttributeGroupsQuery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.new.ware.AttributeGroups.query";
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
     * 分类编号
     * Required: false
     * Example Value: 
     */
    private $id;

    /**
     * @param int[] $id
     * 分类编号
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