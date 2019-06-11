<?php

namespca Lostinfo\JosOpenApi;

/**
 * 创建直投活动
 * 无界门店API-无界门店API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=351&apiId=3500&apiName=jingdong.brand.coupon.createCouponActivity
 * Class BrandCouponCreateCouponActivity
 * @package Jd\request
 */
class BrandCouponCreateCouponActivity
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.brand.coupon.createCouponActivity";
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
     * @param string $name
     * 活动名称
     * Required: true
     * Example Value: 测试活动名称
     */
    private $name;

    /**
     * @param string $name
     * 活动名称
     * Example Value: 测试活动名称
     */
    public function setName($name)
    {
        $this->name             = $name;
        $this->apiParas["activityName"]  = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $startDate
     * 活动开始时间
     * Required: true
     * Example Value: 
     */
    private $startDate;

    /**
     * @param string $startDate
     * 活动开始时间
     * Example Value: 
     */
    public function setStartDate($startDate)
    {
        $this->startDate             = $startDate;
        $this->apiParas["startActivityDate"]  = $startDate;
    }

    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param int[] $couponId
     * 优惠券ID
     * Required: true
     * Example Value: 123456
     */
    private $couponId;

    /**
     * @param int[] $couponId
     * 优惠券ID
     * Example Value: 123456
     */
    public function setCouponId($couponId)
    {
        $this->couponId             = $couponId;
        $this->apiParas["couponId"]  = $couponId;
    }

    public function getCouponId()
    {
        return $this->couponId;
    }

    /**
     * @param string $endDate
     * 活动结束时间
     * Required: true
     * Example Value: 
     */
    private $endDate;

    /**
     * @param string $endDate
     * 活动结束时间
     * Example Value: 
     */
    public function setEndDate($endDate)
    {
        $this->endDate             = $endDate;
        $this->apiParas["endActivityDate"]  = $endDate;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }

}