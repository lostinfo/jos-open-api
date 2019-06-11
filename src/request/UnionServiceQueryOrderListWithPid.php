<?php

namespca Lostinfo\JosOpenApi;

/**
 * PID订单查询
 * 京东联盟API-查询推广产品，获取推广链接。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=117&apiId=2174&apiName=jingdong.UnionService.queryOrderListWithPid
 * Class UnionServiceQueryOrderListWithPid
 * @package Jd\request
 */
class UnionServiceQueryOrderListWithPid
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.UnionService.queryOrderListWithPid";
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
     * Example Value: 格式yyyyMMddHH:2018012316 (按数据更新时间查询)
     */
    private $time;

    /**
     * @param string $time
     * 查询时间
     * Example Value: 格式yyyyMMddHH:2018012316 (按数据更新时间查询)
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
     * Example Value: 从1开始
     */
    private $pageIndex;

    /**
     * @param int $pageIndex
     * 页数
     * Example Value: 从1开始
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
     * 每页条数
     * Required: true
     * Example Value: 上限500
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 每页条数
     * Example Value: 上限500
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