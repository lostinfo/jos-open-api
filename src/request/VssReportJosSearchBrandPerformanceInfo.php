<?php

namespace JD\request;

/**
 * 品牌业绩数据报表接口
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=2531&apiName=jingdong.vss.report.jos.searchBrandPerformanceInfo
 * Class VssReportJosSearchBrandPerformanceInfo
 * @package Jd\request
 */
class VssReportJosSearchBrandPerformanceInfo
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vss.report.jos.searchBrandPerformanceInfo";
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
     * @param Number $searchType
     * 查询类型 (1.日期查询 2.天数查询)
     * Required: true
     * Example Value: 
     */
    private $searchType;

    /**
     * @param Number $searchType
     * 查询类型 (1.日期查询 2.天数查询)
     * Example Value: 
     */
    public function setSearchType($searchType)
    {
        $this->searchType             = $searchType;
        $this->apiParas["searchType"]  = $searchType;
    }

    public function getSearchType()
    {
        return $this->searchType;
    }

    /**
     * @param Number $year
     * 年份(日期查询专用)
     * Required: false
     * Example Value: 
     */
    private $year;

    /**
     * @param Number $year
     * 年份(日期查询专用)
     * Example Value: 
     */
    public function setYear($year)
    {
        $this->year             = $year;
        $this->apiParas["year"]  = $year;
    }

    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param Number $month
     * 月份(日期查询专用)
     * Required: false
     * Example Value: 
     */
    private $month;

    /**
     * @param Number $month
     * 月份(日期查询专用)
     * Example Value: 
     */
    public function setMonth($month)
    {
        $this->month             = $month;
        $this->apiParas["month"]  = $month;
    }

    public function getMonth()
    {
        return $this->month;
    }

    /**
     * @param String $daysCode
     * 查询日期(1.近一天 5.近五天 30:本月初至昨天 天数查询专用)
     * Required: true
     * Example Value: 
     */
    private $daysCode;

    /**
     * @param String $daysCode
     * 查询日期(1.近一天 5.近五天 30:本月初至昨天 天数查询专用)
     * Example Value: 
     */
    public function setDaysCode($daysCode)
    {
        $this->daysCode             = $daysCode;
        $this->apiParas["daysCode"]  = $daysCode;
    }

    public function getDaysCode()
    {
        return $this->daysCode;
    }

    /**
     * @param Number $pageIndex
     * 当前页
     * Required: true
     * Example Value: 
     */
    private $pageIndex;

    /**
     * @param Number $pageIndex
     * 当前页
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
     * @param Number $pageSize
     * 页码大小
     * Required: true
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 页码大小
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