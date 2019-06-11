<?php

namespace JD\request;

/**
 * 设置商家级别的类目销售属性值
 * 类目API-获取商家已开通的类目信息、类目下属性及属性值信息。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=62&apiId=1262&apiName=jingdong.category.write.saveVenderAttrValue
 * Class CategoryWriteSaveVenderAttrValue
 * @package Jd\request
 */
class CategoryWriteSaveVenderAttrValue
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.category.write.saveVenderAttrValue";
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
     * 类目属性值ID.修改传值,新增不传
     * Required: false
     * Example Value: 1234
     */
    private $id;

    /**
     * @param Number $id
     * 类目属性值ID.修改传值,新增不传
     * Example Value: 1234
     */
    public function setId($id)
    {
        $this->id             = $id;
        $this->apiParas["valueId"]  = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param String $value
     * 属性值.值存在就是修改，否则就是新增
     * Required: true
     * Example Value: 24个
     */
    private $value;

    /**
     * @param String $value
     * 属性值.值存在就是修改，否则就是新增
     * Example Value: 24个
     */
    public function setValue($value)
    {
        $this->value             = $value;
        $this->apiParas["attValue"]  = $value;
    }

    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param Number $attributeId
     * 类目属性ID
     * Required: true
     * Example Value: 1234
     */
    private $attributeId;

    /**
     * @param Number $attributeId
     * 类目属性ID
     * Example Value: 1234
     */
    public function setAttributeId($attributeId)
    {
        $this->attributeId             = $attributeId;
        $this->apiParas["attributeId"]  = $attributeId;
    }

    public function getAttributeId()
    {
        return $this->attributeId;
    }

    /**
     * @param Number $categoryId
     * 类目ID
     * Required: true
     * Example Value: 1234
     */
    private $categoryId;

    /**
     * @param Number $categoryId
     * 类目ID
     * Example Value: 1234
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId             = $categoryId;
        $this->apiParas["categoryId"]  = $categoryId;
    }

    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * @param Number $indexId
     * 排序：越小越靠前
     * Required: true
     * Example Value: 1
     */
    private $indexId;

    /**
     * @param Number $indexId
     * 排序：越小越靠前
     * Example Value: 1
     */
    public function setIndexId($indexId)
    {
        $this->indexId             = $indexId;
        $this->apiParas["indexId"]  = $indexId;
    }

    public function getIndexId()
    {
        return $this->indexId;
    }

    /**
     * @param String[] $key
     * 颜色必须存在key为class
     * Required: false
     * Example Value: 颜色必须存在key为class
     */
    private $key;

    /**
     * @param String[] $key
     * 颜色必须存在key为class
     * Example Value: 颜色必须存在key为class
     */
    public function setKey($key)
    {
        $this->key             = $key;
        $this->apiParas["key"]  = $key;
    }

    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param String[] $value
     * 特征值.当颜色key为class，value不需要加#
     * Required: false
     * Example Value: FF0000
     */
    private $value;

    /**
     * @param String[] $value
     * 特征值.当颜色key为class，value不需要加#
     * Example Value: FF0000
     */
    public function setValue($value)
    {
        $this->value             = $value;
        $this->apiParas["value"]  = $value;
    }

    public function getValue()
    {
        return $this->value;
    }

}