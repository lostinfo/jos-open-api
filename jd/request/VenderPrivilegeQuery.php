<?php

namespace JD\request;

/**
 * 查询商家的权限信息
 * 子账号API-查询员工权限信息、部门信息、角色信息。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=111&apiId=589&apiName=jingdong.vender.privilege.query
 * Class VenderPrivilegeQuery
 * @package Jd\request
 */
class VenderPrivilegeQuery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vender.privilege.query";
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

}