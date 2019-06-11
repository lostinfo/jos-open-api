<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 查找子类目列表
 * 类目API-获取商家已开通的类目信息、类目下属性及属性值信息。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=62&apiId=1268&apiName=jingdong.category.read.findByPId
 * Class CategoryReadFindByPId
 * @package Jd\request
 */
class CategoryReadFindByPId
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.category.read.findByPId";
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
     * @param int $parentCid
     * 父类目id
     * Required: true
     * Example Value: 12345
     */
    private $parentCid;

    /**
     * @param int $parentCid
     * 父类目id
     * Example Value: 12345
     */
    public function setParentCid($parentCid)
    {
        $this->parentCid             = $parentCid;
        $this->apiParas["parentCid"]  = $parentCid;
    }

    public function getParentCid()
    {
        return $this->parentCid;
    }

    /**
     * @param string[] $fields
     * 可选的返回的字段
     * Required: false
     * Example Value: fid,id
     */
    private $fields;

    /**
     * @param string[] $fields
     * 可选的返回的字段
     * Example Value: fid,id
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