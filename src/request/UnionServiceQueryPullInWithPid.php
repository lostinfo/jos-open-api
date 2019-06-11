<?php

namespace JD\request;

/**
 * PID引入订单查询(即将下线)
 * 京东联盟API-查询推广产品，获取推广链接。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=117&apiId=2015&apiName=jingdong.UnionService.queryPullInWithPid
 * Class UnionServiceQueryPullInWithPid
 * @package Jd\request
 */
class UnionServiceQueryPullInWithPid
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.UnionService.queryPullInWithPid";
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
     * @param Number $unionId
     * 站长Id
     * Required: true
     * Example Value: 
     */
    private $unionId;

    /**
     * @param Number $unionId
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
     * @param Number $childUnionId
     * 子站长ID
     * Required: true
     * Example Value: 
     */
    private $childUnionId;

    /**
     * @param Number $childUnionId
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
     * @param String $time
     * 查询时间
     * Required: true
     * Example Value: 时间格式：yyyyMMddHH(2017110312)
     */
    private $time;

    /**
     * @param String $time
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
     * @param Number $pageIndex
     * 页数
     * Required: true
     * Example Value: 1
     */
    private $pageIndex;

    /**
     * @param Number $pageIndex
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
     * @param Number $pageSize
     * 每页显示多少条
     * Required: true
     * Example Value: 100
     */
    private $pageSize;

    /**
     * @param Number $pageSize
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