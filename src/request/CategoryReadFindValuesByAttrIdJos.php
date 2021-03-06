<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 通过类目属性ID获取属性值列表
 * 类目API-获取商家已开通的类目信息、类目下属性及属性值信息。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=62&apiId=1475&apiName=jingdong.category.read.findValuesByAttrIdJos
 * Class CategoryReadFindValuesByAttrIdJos
 * @package Jd\request
 */
class CategoryReadFindValuesByAttrIdJos
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.category.read.findValuesByAttrIdJos";
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
     * Example Value: 1234
     */
    private $categoryAttrId;

    /**
     * @param int $categoryAttrId
     * 类目属性id
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
     * 可选的返回的字段
     * Required: false
     * Example Value: attributeId
     */
    private $fields;

    /**
     * @param string[] $fields
     * 可选的返回的字段
     * Example Value: attributeId
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