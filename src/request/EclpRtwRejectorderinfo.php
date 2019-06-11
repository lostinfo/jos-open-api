<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 拒收订单入库信息接口
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=1761&apiName=jingdong.eclp.rtw.rejectorderinfo
 * Class EclpRtwRejectorderinfo
 * @package Jd\request
 */
class EclpRtwRejectorderinfo
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.rtw.rejectorderinfo";
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
     * @param string $startDate
     * 查询开始时间
     * Required: true
     * Example Value: 
     */
    private $startDate;

    /**
     * @param string $startDate
     * 查询开始时间
     * Example Value: 
     */
    public function setStartDate($startDate)
    {
        $this->startDate             = $startDate;
        $this->apiParas["startDate"]  = $startDate;
    }

    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param string $endDate
     * 查询结束时间
     * Required: true
     * Example Value: 
     */
    private $endDate;

    /**
     * @param string $endDate
     * 查询结束时间
     * Example Value: 
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

    /**
     * @param string $pageStart
     * 当前页
     * Required: true
     * Example Value: 
     */
    private $pageStart;

    /**
     * @param string $pageStart
     * 当前页
     * Example Value: 
     */
    public function setPageStart($pageStart)
    {
        $this->pageStart             = $pageStart;
        $this->apiParas["pageStart"]  = $pageStart;
    }

    public function getPageStart()
    {
        return $this->pageStart;
    }

    /**
     * @param string $pageSize
     * 每页记录数
     * Required: true
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param string $pageSize
     * 每页记录数
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