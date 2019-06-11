<?php

namespace JD\request;

/**
 * 查询活动列表数据
 * 无界门店API-无界门店API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=351&apiId=3521&apiName=jingdong.brand.coupon.queryActivityPageInfo
 * Class BrandCouponQueryActivityPageInfo
 * @package Jd\request
 */
class BrandCouponQueryActivityPageInfo
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.brand.coupon.queryActivityPageInfo";
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
     * @param Date $endDate
     * 活动创建结束时间
     * Required: false
     * Example Value: 
     */
    private $endDate;

    /**
     * @param Date $endDate
     * 活动创建结束时间
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
     * @param String $activityName
     * 活动名称
     * Required: false
     * Example Value: 测试活动名称
     */
    private $activityName;

    /**
     * @param String $activityName
     * 活动名称
     * Example Value: 测试活动名称
     */
    public function setActivityName($activityName)
    {
        $this->activityName             = $activityName;
        $this->apiParas["activityName"]  = $activityName;
    }

    public function getActivityName()
    {
        return $this->activityName;
    }

    /**
     * @param Number $pageSize
     * 每页数量（限制100条）
     * Required: true
     * Example Value: 10
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 每页数量（限制100条）
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
     * @param Number $currentPage
     * 当前页
     * Required: true
     * Example Value: 1
     */
    private $currentPage;

    /**
     * @param Number $currentPage
     * 当前页
     * Example Value: 1
     */
    public function setCurrentPage($currentPage)
    {
        $this->currentPage             = $currentPage;
        $this->apiParas["currentPage"]  = $currentPage;
    }

    public function getCurrentPage()
    {
        return $this->currentPage;
    }

    /**
     * @param Date $startDate
     * 活动创建开始时间
     * Required: false
     * Example Value: 
     */
    private $startDate;

    /**
     * @param Date $startDate
     * 活动创建开始时间
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

}