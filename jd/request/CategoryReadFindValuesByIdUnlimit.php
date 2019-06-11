<?php

namespace JD\request;

/**
 * 通过id获取属性值，不限制类目等级
 * 类目API-获取商家已开通的类目信息、类目下属性及属性值信息。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=62&apiId=2810&apiName=jingdong.category.read.findValuesByIdUnlimit
 * Class CategoryReadFindValuesByIdUnlimit
 * @package Jd\request
 */
class CategoryReadFindValuesByIdUnlimit
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.category.read.findValuesByIdUnlimit";
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
     * 属性值ID
     * Required: true
     * Example Value: 1234
     */
    private $id;

    /**
     * @param Number $id
     * 属性值ID
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
     * @param String[] $fields
     * 可选的返回项
     * Required: false
     * Example Value: id
     */
    private $fields;

    /**
     * @param String[] $fields
     * 可选的返回项
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