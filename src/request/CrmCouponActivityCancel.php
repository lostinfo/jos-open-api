<?php

namespca Lostinfo\JosOpenApi;

/**
 * 取消优惠劵活动
 * 客户关系管理API -客户关系管理API 
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=59&apiId=556&apiName=jingdong.crm.coupon.activity.cancel
 * Class CrmCouponActivityCancel
 * @package Jd\request
 */
class CrmCouponActivityCancel
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.crm.coupon.activity.cancel";
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
     * @param int $activityId
     * 优惠券活动ID
     * Required: true
     * Example Value: 21
     */
    private $activityId;

    /**
     * @param int $activityId
     * 优惠券活动ID
     * Example Value: 21
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

}