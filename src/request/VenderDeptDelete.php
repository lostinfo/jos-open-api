<?php

namespace JD\request;

/**
 * 删除部门
 * 子账号API-查询员工权限信息、部门信息、角色信息。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=111&apiId=723&apiName=jingdong.vender.dept.delete
 * Class VenderDeptDelete
 * @package Jd\request
 */
class VenderDeptDelete
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vender.dept.delete";
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
     * Example Value: 123456
     */
    private $id;

    /**
     * @param Number $id
     * 部门编号
     * Example Value: 123456
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