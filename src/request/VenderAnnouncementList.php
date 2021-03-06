<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 公告列表查询
 * 子账号API-查询员工权限信息、部门信息、角色信息。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=111&apiId=729&apiName=jingdong.vender.announcement.list
 * Class VenderAnnouncementList
 * @package Jd\request
 */
class VenderAnnouncementList
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vender.announcement.list";
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
     * @param int $type
     * 公告类型，可选值：最新公告（0），最新上线功能（2）
     * Required: true
     * Example Value: 0
     */
    private $type;

    /**
     * @param int $type
     * 公告类型，可选值：最新公告（0），最新上线功能（2）
     * Example Value: 0
     */
    public function setType($type)
    {
        $this->type             = $type;
        $this->apiParas["type"]  = $type;
    }

    public function getType()
    {
        return $this->type;
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