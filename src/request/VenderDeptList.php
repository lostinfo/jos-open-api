<?php

namespca Lostinfo\JosOpenApi;

/**
 * 查询部门列表
 * 子账号API-查询员工权限信息、部门信息、角色信息。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=111&apiId=710&apiName=jingdong.vender.dept.list
 * Class VenderDeptList
 * @package Jd\request
 */
class VenderDeptList
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vender.dept.list";
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
     * @param int $parentId
     * 所属上级部门编号。一级部门所属上级部门编号为0
     * Required: true
     * Example Value: 0
     */
    private $parentId;

    /**
     * @param int $parentId
     * 所属上级部门编号。一级部门所属上级部门编号为0
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

    /**
     * @param int $page
     * 页码（必须为正整数）。页码超过最大页码，会默认返回最后一页的数据
     * Required: false
     * Example Value: 1
     */
    private $page;

    /**
     * @param int $page
     * 页码（必须为正整数）。页码超过最大页码，会默认返回最后一页的数据
     * Example Value: 1
     */
    public function setPage($page)
    {
        $this->page             = $page;
        $this->apiParas["page"]  = $page;
    }

    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param int $size
     * 每页记录个数（每页最少1个，最多100个）
     * Required: false
     * Example Value: 10
     */
    private $size;

    /**
     * @param int $size
     * 每页记录个数（每页最少1个，最多100个）
     * Example Value: 10
     */
    public function setSize($size)
    {
        $this->size             = $size;
        $this->apiParas["size"]  = $size;
    }

    public function getSize()
    {
        return $this->size;
    }

}