<?php

namespace JD\request;

/**
 * 商品类目查询
 * 京东联盟API-查询推广产品，获取推广链接。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=117&apiId=2016&apiName=jingdong.union.search.goods.category.query
 * Class UnionSearchGoodsCategoryQuery
 * @package Jd\request
 */
class UnionSearchGoodsCategoryQuery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.union.search.goods.category.query";
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
     * @param Number $parentId
     * 父类目id(一级父类目为0)
     * Required: true
     * Example Value: 
     */
    private $parentId;

    /**
     * @param Number $parentId
     * 父类目id(一级父类目为0)
     * Example Value: 
     */
    public function setParentId($parentId)
    {
        $this->parentId             = $parentId;
        $this->apiParas["parent_id"]  = $parentId;
    }

    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * @param Number $grade
     * 类目级别 0，1，2 代表一、二、三级类目
     * Required: true
     * Example Value: 
     */
    private $grade;

    /**
     * @param Number $grade
     * 类目级别 0，1，2 代表一、二、三级类目
     * Example Value: 
     */
    public function setGrade($grade)
    {
        $this->grade             = $grade;
        $this->apiParas["grade"]  = $grade;
    }

    public function getGrade()
    {
        return $this->grade;
    }

}