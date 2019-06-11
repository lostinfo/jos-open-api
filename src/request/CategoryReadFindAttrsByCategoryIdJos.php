<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 获取类目属性列表
 * 类目API-获取商家已开通的类目信息、类目下属性及属性值信息。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=62&apiId=1471&apiName=jingdong.category.read.findAttrsByCategoryIdJos
 * Class CategoryReadFindAttrsByCategoryIdJos
 * @package Jd\request
 */
class CategoryReadFindAttrsByCategoryIdJos
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.category.read.findAttrsByCategoryIdJos";
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
     * @param int $cid
     * 类目id
     * Required: true
     * Example Value: 1234
     */
    private $cid;

    /**
     * @param int $cid
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
     * @param int $attributeType
     * 属性类型:1.关键属性 2.不变属性 3.可变属性 4.销售属性
     * Required: true
     * Example Value: 1
     */
    private $attributeType;

    /**
     * @param int $attributeType
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
     * @param string[] $fields
     * 可选的返回的字段
     * Required: false
     * Example Value: categoryAttrId,categoryId,attName
     */
    private $fields;

    /**
     * @param string[] $fields
     * 可选的返回的字段
     * Example Value: categoryAttrId,categoryId,attName
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