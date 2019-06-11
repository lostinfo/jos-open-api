<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 优惠券领取情况查询接口【申请】
 * 京东联盟API-查询推广产品，获取推广链接。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=117&apiId=1876&apiName=jingdong.service.promotion.coupon.getInfo
 * Class ServicePromotionCouponGetInfo
 * @package Jd\request
 */
class ServicePromotionCouponGetInfo
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.service.promotion.coupon.getInfo";
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
     * @param string[] $couponUrl
     * 优惠券领取链接
     * Required: true
     * Example Value: URLEncoder.encode(url)
     */
    private $couponUrl;

    /**
     * @param string[] $couponUrl
     * 优惠券领取链接
     * Example Value: URLEncoder.encode(url)
     */
    public function setCouponUrl($couponUrl)
    {
        $this->couponUrl             = $couponUrl;
        $this->apiParas["couponUrl"]  = $couponUrl;
    }

    public function getCouponUrl()
    {
        return $this->couponUrl;
    }

}