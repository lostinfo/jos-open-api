<?php

namespca Lostinfo\JosOpenApi;

/**
 * 通过属性ID，获取类目的属性，不限制等级，可以查询销售属性
 * 类目API-获取商家已开通的类目信息、类目下属性及属性值信息。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=62&apiId=2805&apiName=jingdong.category.read.findAttrByIdUnlimitCate
 * Class CategoryReadFindAttrByIdUnlimitCate
 * @package Jd\request
 */
class CategoryReadFindAttrByIdUnlimitCate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.category.read.findAttrByIdUnlimitCate";
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
     * 属性ID
     * Required: true
     * Example Value: 1234
     */
    private $attrId;

    /**
     * @param int $attrId
     * 属性ID
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
     * 属性对可选返回字段，可用值为 attrValueList ,attrGroup   ps:返回对象中带@Field注解的为默认不返回项，需要在fields中传入对应字段才会返回
     * Required: false
     * Example Value: attrValueList ,attrGroup
     */
    private $fields;

    /**
     * @param string[] $fields
     * 属性对可选返回字段，可用值为 attrValueList ,attrGroup   ps:返回对象中带@Field注解的为默认不返回项，需要在fields中传入对应字段才会返回
     * Example Value: attrValueList ,attrGroup
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