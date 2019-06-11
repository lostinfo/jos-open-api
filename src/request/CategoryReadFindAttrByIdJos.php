<?php

namespca Lostinfo\JosOpenApi;

/**
 * 获取属性的可选值列表(过滤重复字段名)
 * 类目API-获取商家已开通的类目信息、类目下属性及属性值信息。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=62&apiId=1472&apiName=jingdong.category.read.findAttrByIdJos
 * Class CategoryReadFindAttrByIdJos
 * @package Jd\request
 */
class CategoryReadFindAttrByIdJos
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.category.read.findAttrByIdJos";
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
     * @param int $attrId
     * 属性id
     * Required: true
     * Example Value: 1234
     */
    private $attrId;

    /**
     * @param int $attrId
     * 属性id
     * Example Value: 1234
     */
    public function setAttrId($attrId)
    {
        $this->attrId             = $attrId;
        $this->apiParas["attrId"]  = $attrId;
    }

    public function getAttrId()
    {
        return $this->attrId;
    }

    /**
     * @param string[] $fields
     * 可选的返回的字段
     * Required: false
     * Example Value: categoryAttrId
     */
    private $fields;

    /**
     * @param string[] $fields
     * 可选的返回的字段
     * Example Value: categoryAttrId
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