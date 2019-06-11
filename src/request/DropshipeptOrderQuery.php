<?php

namespace JD\request;

/**
 * 海外厂直订单查询接口  for  jos
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=2993&apiName=jingdong.dropshipept.order.query
 * Class DropshipeptOrderQuery
 * @package Jd\request
 */
class DropshipeptOrderQuery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dropshipept.order.query";
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
     * @param Date $beginTime
     * 下单时间范围-开始(格式yyyy-MM-dd HH:mm:ss)
     * Required: true
     * Example Value: 
     */
    private $beginTime;

    /**
     * @param Date $beginTime
     * 下单时间范围-开始(格式yyyy-MM-dd HH:mm:ss)
     * Example Value: 
     */
    public function setBeginTime($beginTime)
    {
        $this->beginTime             = $beginTime;
        $this->apiParas["beginTime"]  = $beginTime;
    }

    public function getBeginTime()
    {
        return $this->beginTime;
    }

    /**
     * @param Date $endTime
     * 下单时间范围-结束(格式yyyy-MM-dd HH:mm:ss)
     * Required: true
     * Example Value: 
     */
    private $endTime;

    /**
     * @param Date $endTime
     * 下单时间范围-结束(格式yyyy-MM-dd HH:mm:ss)
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
     * 查询页
     * Required: false
     * Example Value: 
     */
    private $page;

    /**
     * @param Number $page
     * 查询页
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
     * 每页条数
     * Required: false
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 每页条数
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