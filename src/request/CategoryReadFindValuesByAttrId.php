<?php

namespca Lostinfo\JosOpenApi;

/**
 * 通过类目属性ID获取属性值列表
 * 类目API-获取商家已开通的类目信息、类目下属性及属性值信息。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=62&apiId=1266&apiName=jingdong.category.read.findValuesByAttrId
 * Class CategoryReadFindValuesByAttrId
 * @package Jd\request
 */
class CategoryReadFindValuesByAttrId
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.category.read.findValuesByAttrId";
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
     * @param int $categoryAttrId
     * 类目属性id
     * Required: true
     * Example Value: 
     */
    private $categoryAttrId;

    /**
     * @param int $categoryAttrId
     * 类目属性id
     * Example Value: 
     */
    public function setCategoryAttrId($categoryAttrId)
    {
        $this->categoryAttrId             = $categoryAttrId;
        $this->apiParas["categoryAttrId"]  = $categoryAttrId;
    }

    public function getCategoryAttrId()
    {
        return $this->categoryAttrId;
    }

    /**
     * @param string[] $fields
     * 可选的返回的字段
     * Required: false
     * Example Value: 
     */
    private $fields;

    /**
     * @param string[] $fields
     * 可选的返回的字段
     * Example Value: 
     */
    public function setFields($fields)
    {
        $this->fields             = $fields;
        $this->apiParas["field"]  = $fields;
    }

    public function getFields()
    {
        return $this->fields;
    }

}