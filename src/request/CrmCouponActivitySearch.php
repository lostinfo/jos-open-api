<?php

namespace JD\request;

/**
 * 查询优惠券发放活动
 * 客户关系管理API -客户关系管理API 
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=59&apiId=557&apiName=jingdong.crm.coupon.activity.search
 * Class CrmCouponActivitySearch
 * @package Jd\request
 */
class CrmCouponActivitySearch
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.crm.coupon.activity.search";
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
     * @param Number $couponId
     * 优惠劵ID
     * Required: false
     * Example Value: 1000
     */
    private $couponId;

    /**
     * @param Number $couponId
     * 优惠劵ID
     * Example Value: 1000
     */
    public function setCouponId($couponId)
    {
        $this->couponId             = $couponId;
        $this->apiParas["coupon_id"]  = $couponId;
    }

    public function getCouponId()
    {
        return $this->couponId;
    }

    /**
     * @param Number $activityId
     * 优惠劵发放活动ID
     * Required: false
     * Example Value: 2100
     */
    private $activityId;

    /**
     * @param Number $activityId
     * 优惠劵发放活动ID
     * Example Value: 2100
     */
    public function setActivityId($activityId)
    {
        $this->activityId             = $activityId;
        $this->apiParas["activity_id"]  = $activityId;
    }

    public function getActivityId()
    {
        return $this->activityId;
    }

    /**
     * @param String $activityName
     * 活动名称关键字
     * Required: false
     * Example Value: 十一促销劵
     */
    private $activityName;

    /**
     * @param String $activityName
     * 活动名称关键字
     * Example Value: 十一促销劵
     */
    public function setActivityName($activityName)
    {
        $this->activityName             = $activityName;
        $this->apiParas["activity_name"]  = $activityName;
    }

    public function getActivityName()
    {
        return $this->activityName;
    }

    /**
     * @param Number $ativityStatus
     * 活动状态:5待发劵，8发送中，6发劵完成待统计，7统计完成，13删除
     * Required: false
     * Example Value: 5
     */
    private $ativityStatus;

    /**
     * @param Number $ativityStatus
     * 活动状态:5待发劵，8发送中，6发劵完成待统计，7统计完成，13删除
     * Example Value: 5
     */
    public function setAtivityStatus($ativityStatus)
    {
        $this->ativityStatus             = $ativityStatus;
        $this->apiParas["ativity_status"]  = $ativityStatus;
    }

    public function getAtivityStatus()
    {
        return $this->ativityStatus;
    }

    /**
     * @param Date $minSendTime
     * 起始发放日期
     * Required: false
     * Example Value: 2013-10-21 00:00:00
     */
    private $minSendTime;

    /**
     * @param Date $minSendTime
     * 起始发放日期
     * Example Value: 2013-10-21 00:00:00
     */
    public function setMinSendTime($minSendTime)
    {
        $this->minSendTime             = $minSendTime;
        $this->apiParas["start_send_time"]  = $minSendTime;
    }

    public function getMinSendTime()
    {
        return $this->minSendTime;
    }

    /**
     * @param Date $maxSendTime
     * 结束发放日期
     * Required: false
     * Example Value: 2013-10-22 00:00:00
     */
    private $maxSendTime;

    /**
     * @param Date $maxSendTime
     * 结束发放日期
     * Example Value: 2013-10-22 00:00:00
     */
    public function setMaxSendTime($maxSendTime)
    {
        $this->maxSendTime             = $maxSendTime;
        $this->apiParas["end_send_time"]  = $maxSendTime;
    }

    public function getMaxSendTime()
    {
        return $this->maxSendTime;
    }

    /**
     * @param Number $currentPage
     * 显示第几页的会员，如果输入的页码大于总共的页码数，例如总共10页，但是current_page的值为11，则返回空白页，最小页数为1，最大页数为5000
     * Required: true
     * Example Value: 45
     */
    private $currentPage;

    /**
     * @param Number $currentPage
     * 显示第几页的会员，如果输入的页码大于总共的页码数，例如总共10页，但是current_page的值为11，则返回空白页，最小页数为1，最大页数为5000
     * Example Value: 45
     */
    public function setCurrentPage($currentPage)
    {
        $this->currentPage             = $currentPage;
        $this->apiParas["current_page"]  = $currentPage;
    }

    public function getCurrentPage()
    {
        return $this->currentPage;
    }

    /**
     * @param Number $pageSize
     * 表示每页显示的会员数量,page_size的最大值不能超过100条,最小值不能低于1
     * Required: true
     * Example Value: 20
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 表示每页显示的会员数量,page_size的最大值不能超过100条,最小值不能低于1
     * Example Value: 20
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize             = $pageSize;
        $this->apiParas["page_size"]  = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

}