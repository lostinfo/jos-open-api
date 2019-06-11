<?php

namespca Lostinfo\JosOpenApi;

/**
 * 查询角色列表
 * 子账号API-查询员工权限信息、部门信息、角色信息。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=111&apiId=728&apiName=jingdong.vender.role.list
 * Class VenderRoleList
 * @package Jd\request
 */
class VenderRoleList
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vender.role.list";
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
     * @param int $page
     * 页码（必须为正整数）
     * Required: false
     * Example Value: 1
     */
    private $page;

    /**
     * @param int $page
     * 页码（必须为正整数）
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
     * 每页记录个数（每页最少1个，最多20个）
     * Required: false
     * Example Value: 10
     */
    private $size;

    /**
     * @param int $size
     * 每页记录个数（每页最少1个，最多20个）
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