<?php

namespace JD\request;

/**
 * 获取商品业绩数据
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=3016&apiName=jingdong.edi.sdv.ware.performancedata.get
 * Class EdiSdvWarePerformancedataGet
 * @package Jd\request
 */
class EdiSdvWarePerformancedataGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.edi.sdv.ware.performancedata.get";
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
     * @param Date $queryStartTime
     * 数据查询起始时间
     * Required: true
     * Example Value: 
     */
    private $queryStartTime;

    /**
     * @param Date $queryStartTime
     * 数据查询起始时间
     * Example Value: 
     */
    public function setQueryStartTime($queryStartTime)
    {
        $this->queryStartTime             = $queryStartTime;
        $this->apiParas["queryStartTime"]  = $queryStartTime;
    }

    public function getQueryStartTime()
    {
        return $this->queryStartTime;
    }

    /**
     * @param Date $queryEndTime
     * 数据查询结束时间
     * Required: true
     * Example Value: 
     */
    private $queryEndTime;

    /**
     * @param Date $queryEndTime
     * 数据查询结束时间
     * Example Value: 
     */
    public function setQueryEndTime($queryEndTime)
    {
        $this->queryEndTime             = $queryEndTime;
        $this->apiParas["queryEndTime"]  = $queryEndTime;
    }

    public function getQueryEndTime()
    {
        return $this->queryEndTime;
    }

    /**
     * @param Number $pageNum
     * 页码
     * Required: true
     * Example Value: 
     */
    private $pageNum;

    /**
     * @param Number $pageNum
     * 页码
     * Example Value: 
     */
    public function setPageNum($pageNum)
    {
        $this->pageNum             = $pageNum;
        $this->apiParas["pageNum"]  = $pageNum;
    }

    public function getPageNum()
    {
        return $this->pageNum;
    }

    /**
     * @param Number $pageSize
     * 每页条数
     * Required: true
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