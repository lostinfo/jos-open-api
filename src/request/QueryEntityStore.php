<?php

namespace JD\request;

/**
 * POP-O2O 查询门店信息
 * 订单API-订单API组(该组下所有接口均不支持自营店铺业务)
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=55&apiId=2223&apiName=jingdong.queryEntityStore
 * Class QueryEntityStore
 * @package Jd\request
 */
class QueryEntityStore
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.queryEntityStore";
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
     * @param Number $id
     * 门店ID
     * Required: true
     * Example Value: 
     */
    private $id;

    /**
     * @param Number $id
     * 门店ID
     * Example Value: 
     */
    public function setId($id)
    {
        $this->id             = $id;
        $this->apiParas["storeId"]  = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param String $categoryName
     * 扩展属性类目名称
     * Required: false
     * Example Value: 
     */
    private $categoryName;

    /**
     * @param String $categoryName
     * 扩展属性类目名称
     * Example Value: 
     */
    public function setCategoryName($categoryName)
    {
        $this->categoryName             = $categoryName;
        $this->apiParas["categoryName"]  = $categoryName;
    }

    public function getCategoryName()
    {
        return $this->categoryName;
    }

}