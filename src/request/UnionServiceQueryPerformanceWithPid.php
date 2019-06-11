<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * PID业绩订单查询(即将下线)
 * 京东联盟API-查询推广产品，获取推广链接。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=117&apiId=2014&apiName=jingdong.UnionService.queryPerformanceWithPid
 * Class UnionServiceQueryPerformanceWithPid
 * @package Jd\request
 */
class UnionServiceQueryPerformanceWithPid
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.UnionService.queryPerformanceWithPid";
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
     * @param int $unionId
     * 站长Id
     * Required: true
     * Example Value: 
     */
    private $unionId;

    /**
     * @param int $unionId
     * 站长Id
     * Example Value: 
     */
    public function setUnionId($unionId)
    {
        $this->unionId             = $unionId;
        $this->apiParas["unionId"]  = $unionId;
    }

    public function getUnionId()
    {
        return $this->unionId;
    }

    /**
     * @param int $childUnionId
     * 子站长ID
     * Required: true
     * Example Value: 
     */
    private $childUnionId;

    /**
     * @param int $childUnionId
     * 子站长ID
     * Example Value: 
     */
    public function setChildUnionId($childUnionId)
    {
        $this->childUnionId             = $childUnionId;
        $this->apiParas["childUnionId"]  = $childUnionId;
    }

    public function getChildUnionId()
    {
        return $this->childUnionId;
    }

    /**
     * @param string $time
     * 查询时间
     * Required: true
     * Example Value: 时间格式：yyyyMMddHH(2017110312)
     */
    private $time;

    /**
     * @param string $time
     * 查询时间
     * Example Value: 时间格式：yyyyMMddHH(2017110312)
     */
    public function setTime($time)
    {
        $this->time             = $time;
        $this->apiParas["time"]  = $time;
    }

    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param int $pageIndex
     * 页数
     * Required: true
     * Example Value: 1
     */
    private $pageIndex;

    /**
     * @param int $pageIndex
     * 页数
     * Example Value: 1
     */
    public function setPageIndex($pageIndex)
    {
        $this->pageIndex             = $pageIndex;
        $this->apiParas["pageIndex"]  = $pageIndex;
    }

    public function getPageIndex()
    {
        return $this->pageIndex;
    }

    /**
     * @param int $pageSize
     * 每页显示多少条
     * Required: true
     * Example Value: 100
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 每页显示多少条
     * Example Value: 100
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