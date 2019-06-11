<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 获取单个类目信息
 * 类目API-获取商家已开通的类目信息、类目下属性及属性值信息。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=62&apiId=1267&apiName=jingdong.category.read.findById
 * Class CategoryReadFindById
 * @package Jd\request
 */
class CategoryReadFindById
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.category.read.findById";
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
     * Example Value: 
     */
    private $cid;

    /**
     * @param int $cid
     * 类目id
     * Example Value: 
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