<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 检索需要出库的客单
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=471&apiName=jingdong.dropship.dps.search
 * Class DropshipDpsSearch
 * @package Jd\request
 */
class DropshipDpsSearch
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dropship.dps.search";
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
     * @param int $pageSize
     * 每页加载的条数：范围为10—100
     * Required: false
     * Example Value: 10
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 每页加载的条数：范围为10—100
     * Example Value: 10
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize             = $pageSize;
        $this->apiParas["pageSize"]  = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * @param int $page
     * 查询的页数必须从1开始，且必须大于等于1
     * Required: false
     * Example Value: 1
     */
    private $page;

    /**
     * @param int $page
     * 查询的页数必须从1开始，且必须大于等于1
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
     * @param string $beginDate
     * 开始时间(格式 yyyy-MM-dd HH:mm:ss)
     * Required: true
     * Example Value: 2011-06-16 13:23:30
     */
    private $beginDate;

    /**
     * @param string $beginDate
     * 开始时间(格式 yyyy-MM-dd HH:mm:ss)
     * Example Value: 2011-06-16 13:23:30
     */
    public function setBeginDate($beginDate)
    {
        $this->beginDate             = $beginDate;
        $this->apiParas["beginDate"]  = $beginDate;
    }

    public function getBeginDate()
    {
        return $this->beginDate;
    }

    /**
     * @param string $endDate
     * 结束时间(格式 yyyy-MM-dd HH:mm:ss)
     * Required: true
     * Example Value: 2013-06-16 13:23:30
     */
    private $endDate;

    /**
     * @param string $endDate
     * 结束时间(格式 yyyy-MM-dd HH:mm:ss)
     * Example Value: 2013-06-16 13:23:30
     */
    public function setEndDate($endDate)
    {
        $this->endDate             = $endDate;
        $this->apiParas["endDate"]  = $endDate;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }

}