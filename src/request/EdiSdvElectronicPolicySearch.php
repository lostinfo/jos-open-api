<?php

namespace JD\request;

/**
 * 获取电子保单信息
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1921&apiName=jingdong.edi.sdv.electronic.policy.search
 * Class EdiSdvElectronicPolicySearch
 * @package Jd\request
 */
class EdiSdvElectronicPolicySearch
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.edi.sdv.electronic.policy.search";
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
     * @param Date $startTime
     * 订单开始时间
     * Required: true
     * Example Value: 
     */
    private $startTime;

    /**
     * @param Date $startTime
     * 订单开始时间
     * Example Value: 
     */
    public function setStartTime($startTime)
    {
        $this->startTime             = $startTime;
        $this->apiParas["startTime"]  = $startTime;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param Date $endTime
     * 订单结束时间
     * Required: true
     * Example Value: 
     */
    private $endTime;

    /**
     * @param Date $endTime
     * 订单结束时间
     * Example Value: 
     */
    public function setEndTime($endTime)
    {
        $this->endTime             = $endTime;
        $this->apiParas["endTime"]  = $endTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param Number $page
     * 页数
     * Required: true
     * Example Value: 
     */
    private $page;

    /**
     * @param Number $page
     * 页数
     * Example Value: 
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
     * @param Number $pageSize
     * 每页大小
     * Required: true
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 每页大小
     * Example Value: 
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

}