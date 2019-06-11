<?php

namespca Lostinfo\JosOpenApi;

/**
 * 修改部门名称
 * 子账号API-查询员工权限信息、部门信息、角色信息。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=111&apiId=721&apiName=jingdong.vender.dept.modify
 * Class VenderDeptModify
 * @package Jd\request
 */
class VenderDeptModify
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vender.dept.modify";
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
     * 部门编号
     * Required: true
     * Example Value: 123456
     */
    private $id;

    /**
     * @param int $id
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

    /**
     * @param string $name
     * 部门名称。字符串长度小于等于10，只能由中文、数字、英文字符组成
     * Required: true
     * Example Value: 促销部
     */
    private $name;

    /**
     * @param string $name
     * 部门名称。字符串长度小于等于10，只能由中文、数字、英文字符组成
     * Example Value: 促销部
     */
    public function setName($name)
    {
        $this->name             = $name;
        $this->apiParas["name"]  = $name;
    }

    public function getName()
    {
        return $this->name;
    }

}