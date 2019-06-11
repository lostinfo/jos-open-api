<?php

namespca Lostinfo\JosOpenApi;

/**
 * 根据优惠券批次Id和优惠券券码分页查询领取明细
 * 无界门店API-无界门店API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=351&apiId=3498&apiName=jingdong.brand.coupon.getCouponDrawInfo
 * Class BrandCouponGetCouponDrawInfo
 * @package Jd\request
 */
class BrandCouponGetCouponDrawInfo
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.brand.coupon.getCouponDrawInfo";
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
     * @param int $pageSize
     * 每页参数
     * Required: true
     * Example Value: 10
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 每页参数
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
     * @param int $couponId
     * 优惠券批次ID
     * Required: true
     * Example Value: 123456
     */
    private $couponId;

    /**
     * @param int $couponId
     * 优惠券批次ID
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
     * @param int $currentPage
     * 当前页
     * Required: true
     * Example Value: 1
     */
    private $currentPage;

    /**
     * @param int $currentPage
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
     * @param int $couponCode
     * 券码
     * Required: false
     * Example Value: 123456
     */
    private $couponCode;

    /**
     * @param int $couponCode
     * 券码
     * Example Value: 123456
     */
    public function setCouponCode($couponCode)
    {
        $this->couponCode             = $couponCode;
        $this->apiParas["couponCode"]  = $couponCode;
    }

    public function getCouponCode()
    {
        return $this->couponCode;
    }

}