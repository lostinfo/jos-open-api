<?php

namespace JD\request;

/**
 * 停用活动
 * 无界门店API-无界门店API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=351&apiId=3522&apiName=jingdong.brand.coupon.stopCouponActivity
 * Class BrandCouponStopCouponActivity
 * @package Jd\request
 */
class BrandCouponStopCouponActivity
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.brand.coupon.stopCouponActivity";
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
     * @param Number $activityId
     * 活动Id
     * Required: true
     * Example Value: 123456
     */
    private $activityId;

    /**
     * @param Number $activityId
     * 活动Id
     * Example Value: 123456
     */
    public function setActivityId($activityId)
    {
        $this->activityId             = $activityId;
        $this->apiParas["activityId"]  = $activityId;
    }

    public function getActivityId()
    {
        return $this->activityId;
    }

}