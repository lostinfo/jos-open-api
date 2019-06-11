<?php

namespace JD\request;

/**
 * 查询员工角色信息
 * 子账号API-查询员工权限信息、部门信息、角色信息。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=111&apiId=590&apiName=jingdong.vender.childaccount.role.query
 * Class VenderChildaccountRoleQuery
 * @package Jd\request
 */
class VenderChildaccountRoleQuery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vender.childaccount.role.query";
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
     * @param String[] $accountNames
     * 员工账号(不能为空，且一次最多为20个。多个账号用英文逗号(,)分隔，每个账号长度为4-20个字符)
     * Required: true
     * Example Value: test1
     */
    private $accountNames;

    /**
     * @param String[] $accountNames
     * 员工账号(不能为空，且一次最多为20个。多个账号用英文逗号(,)分隔，每个账号长度为4-20个字符)
     * Example Value: test1
     */
    public function setAccountNames($accountNames)
    {
        $this->accountNames             = $accountNames;
        $this->apiParas["account_name_s"]  = $accountNames;
    }

    public function getAccountNames()
    {
        return $this->accountNames;
    }

}