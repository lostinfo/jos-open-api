<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 核销数量查询
 * 无界门店API-无界门店API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=351&apiId=3499&apiName=jingdong.brand.coupon.getCancelNumByCouponId
 * Class BrandCouponGetCancelNumByCouponId
 * @package Jd\request
 */
class BrandCouponGetCancelNumByCouponId
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.brand.coupon.getCancelNumByCouponId";
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
     * 统计核销开始时间
     * Required: false
     * Example Value: 2019-03-31 00:00:00
     */
    private $startDate;

    /**
     * @param string $startDate
     * 统计核销开始时间
     * Example Value: 2019-03-31 00:00:00
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
     * 统计核销结束时间
     * Required: false
     * Example Value: 2019-03-31 10:40:39
     */
    private $endDate;

    /**
     * @param string $endDate
     * 统计核销结束时间
     * Example Value: 2019-03-31 10:40:39
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
     * @param int $couponId
     * 优惠券批次Id
     * Required: true
     * Example Value: 123456
     */
    private $couponId;

    /**
     * @param int $couponId
     * 优惠券批次Id
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

}