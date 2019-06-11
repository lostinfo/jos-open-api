<?php

namespca Lostinfo\JosOpenApi;

/**
 * 获取单个角色信息
 * 子账号API-查询员工权限信息、部门信息、角色信息。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=111&apiId=726&apiName=jingdong.vender.role.get
 * Class VenderRoleGet
 * @package Jd\request
 */
class VenderRoleGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vender.role.get";
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
     * 角色编号
     * Required: true
     * Example Value: 123456
     */
    private $id;

    /**
     * @param int $id
     * 角色编号
     * Example Value: 123456
     */
    public function setId($id)
    {
        $this->id             = $id;
        $this->apiParas["role_id"]  = $id;
    }

    public function getId()
    {
        return $this->id;
    }

}