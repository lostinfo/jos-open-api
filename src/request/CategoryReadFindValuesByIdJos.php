<?php

namespca Lostinfo\JosOpenApi;

/**
 * 获取类目属性值
 * 类目API-获取商家已开通的类目信息、类目下属性及属性值信息。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=62&apiId=1473&apiName=jingdong.category.read.findValuesByIdJos
 * Class CategoryReadFindValuesByIdJos
 * @package Jd\request
 */
class CategoryReadFindValuesByIdJos
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.category.read.findValuesByIdJos";
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
     * @param int $id
     * 类目属性值id
     * Required: true
     * Example Value: 1234
     */
    private $id;

    /**
     * @param int $id
     * 类目属性值id
     * Example Value: 1234
     */
    public function setId($id)
    {
        $this->id             = $id;
        $this->apiParas["id"]  = $id;
    }

    public function getId()
    {
        return $this->id;
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