<?php

namespca Lostinfo\JosOpenApi;

/**
 * 修改角色名称
 * 子账号API-查询员工权限信息、部门信息、角色信息。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=111&apiId=727&apiName=jingdong.vender.role.modify
 * Class VenderRoleModify
 * @package Jd\request
 */
class VenderRoleModify
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vender.role.modify";
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
     * Example Value: 2332
     */
    private $id;

    /**
     * @param int $id
     * 角色编号
     * Example Value: 2332
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

    /**
     * @param string $roleName
     * 角色名称。字符串长度小于等于25，只能由中文、数字、英文字符组成
     * Required: true
     * Example Value: 巡查员
     */
    private $roleName;

    /**
     * @param string $roleName
     * 角色名称。字符串长度小于等于25，只能由中文、数字、英文字符组成
     * Example Value: 巡查员
     */
    public function setRoleName($roleName)
    {
        $this->roleName             = $roleName;
        $this->apiParas["name"]  = $roleName;
    }

    public function getRoleName()
    {
        return $this->roleName;
    }

}