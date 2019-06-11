<?php

namespace JD\request;

/**
 * 新增部门
 * 子账号API-查询员工权限信息、部门信息、角色信息。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=111&apiId=724&apiName=jingdong.vender.dept.add
 * Class VenderDeptAdd
 * @package Jd\request
 */
class VenderDeptAdd
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vender.dept.add";
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
     * @param String $name
     * 部门名称。字符串长度小于等于10，只能由中文、数字、英文字符组成
     * Required: true
     * Example Value: 商品部
     */
    private $name;

    /**
     * @param String $name
     * 部门名称。字符串长度小于等于10，只能由中文、数字、英文字符组成
     * Example Value: 商品部
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

    /**
     * @param Number $parentId
     * 所属上级部门编号.一级部门的所属上级部门编号为0
     * Required: true
     * Example Value: 0
     */
    private $parentId;

    /**
     * @param Number $parentId
     * 所属上级部门编号.一级部门的所属上级部门编号为0
     * Example Value: 0
     */
    public function setParentId($parentId)
    {
        $this->parentId             = $parentId;
        $this->apiParas["parentId"]  = $parentId;
    }

    public function getParentId()
    {
        return $this->parentId;
    }

}