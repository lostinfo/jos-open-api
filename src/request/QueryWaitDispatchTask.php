<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 分页查询供应商待分派任务
 * 企悦对外开放API-企悦对外开放API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=216&apiId=2049&apiName=jingdong.queryWaitDispatchTask
 * Class QueryWaitDispatchTask
 * @package Jd\request
 */
class QueryWaitDispatchTask
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.queryWaitDispatchTask";
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
     * @param int $serviceState
     * 服务单状态,固定值11
     * Required: true
     * Example Value: 
     */
    private $serviceState;

    /**
     * @param int $serviceState
     * 服务单状态,固定值11
     * Example Value: 
     */
    public function setServiceState($serviceState)
    {
        $this->serviceState             = $serviceState;
        $this->apiParas["serviceState"]  = $serviceState;
    }

    public function getServiceState()
    {
        return $this->serviceState;
    }

    /**
     * @param int $pageSize
     * 条数
     * Required: true
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 条数
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

    /**
     * @param int $pageIndex
     * 当前页数
     * Required: true
     * Example Value: 
     */
    private $pageIndex;

    /**
     * @param int $pageIndex
     * 当前页数
     * Example Value: 
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
     * @param string $venderCode
     * 厂商编码
     * Required: true
     * Example Value: 
     */
    private $venderCode;

    /**
     * @param string $venderCode
     * 厂商编码
     * Example Value: 
     */
    public function setVenderCode($venderCode)
    {
        $this->venderCode             = $venderCode;
        $this->apiParas["venderCode"]  = $venderCode;
    }

    public function getVenderCode()
    {
        return $this->venderCode;
    }

}