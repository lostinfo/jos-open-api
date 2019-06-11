<?php

namespace JD\request;

/**
 * 通过类目和属性类型，获取类目的属性列表，不限制等级，可以查询销售属性
 * 类目API-获取商家已开通的类目信息、类目下属性及属性值信息。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=62&apiId=2809&apiName=jingdong.category.read.findAttrsByCategoryIdUnlimitCate
 * Class CategoryReadFindAttrsByCategoryIdUnlimitCate
 * @package Jd\request
 */
class CategoryReadFindAttrsByCategoryIdUnlimitCate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.category.read.findAttrsByCategoryIdUnlimitCate";
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
     * @param Number $cid
     * 类目id
     * Required: true
     * Example Value: 1234
     */
    private $cid;

    /**
     * @param Number $cid
     * 类目id
     * Example Value: 1234
     */
    public function setCid($cid)
    {
        $this->cid             = $cid;
        $this->apiParas["cid"]  = $cid;
    }

    public function getCid()
    {
        return $this->cid;
    }

    /**
     * @param Number $attributeType
     * 属性类型:1.关键属性 2.不变属性 3.可变属性 4.销售属性
     * Required: false
     * Example Value: 1
     */
    private $attributeType;

    /**
     * @param Number $attributeType
     * 属性类型:1.关键属性 2.不变属性 3.可变属性 4.销售属性
     * Example Value: 1
     */
    public function setAttributeType($attributeType)
    {
        $this->attributeType             = $attributeType;
        $this->apiParas["attributeType"]  = $attributeType;
    }

    public function getAttributeType()
    {
        return $this->attributeType;
    }

    /**
     * @param String[] $fields
     * 可选的返回的字段
     * Required: false
     * Example Value: id
     */
    private $fields;

    /**
     * @param String[] $fields
     * 可选的返回的字段
     * Example Value: id
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