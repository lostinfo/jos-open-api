<?php

namespace JD\request;

/**
 * 获取单个部门信息
 * 子账号API-查询员工权限信息、部门信息、角色信息。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=111&apiId=722&apiName=jingdong.vender.dept.get
 * Class VenderDeptGet
 * @package Jd\request
 */
class VenderDeptGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vender.dept.get";
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
     * 部门编号
     * Required: true
     * Example Value: 1268
     */
    private $id;

    /**
     * @param Number $id
     * 部门编号
     * Example Value: 1268
     */
    public function setId($id)
    {
        $this->id             = $id;
        $this->apiParas["dept_id"]  = $id;
    }

    public function getId()
    {
        return $this->id;
    }

}