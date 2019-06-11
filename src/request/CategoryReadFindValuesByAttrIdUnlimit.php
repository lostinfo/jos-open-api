<?php

namespca Lostinfo\JosOpenApi;

/**
 * 获取属性的可选值列表，不限制类目等级
 * 类目API-获取商家已开通的类目信息、类目下属性及属性值信息。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=62&apiId=2821&apiName=jingdong.category.read.findValuesByAttrIdUnlimit
 * Class CategoryReadFindValuesByAttrIdUnlimit
 * @package Jd\request
 */
class CategoryReadFindValuesByAttrIdUnlimit
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.category.read.findValuesByAttrIdUnlimit";
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
     * 属性ID
     * Required: true
     * Example Value: 1234
     */
    private $categoryAttrId;

    /**
     * @param int $categoryAttrId
     * 属性ID
     * Example Value: 1234
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
     * 可选的返回项
     * Required: false
     * Example Value: id,attId
     */
    private $fields;

    /**
     * @param string[] $fields
     * 可选的返回项
     * Example Value: id,attId
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