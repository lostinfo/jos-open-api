<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 查询核销明细记录
 * 无界门店API-无界门店API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=351&apiId=3505&apiName=jingdong.brand.coupon.getCanCelInfo
 * Class BrandCouponGetCanCelInfo
 * @package Jd\request
 */
class BrandCouponGetCanCelInfo
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.brand.coupon.getCanCelInfo";
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
     * @param int $orderId
     * 订单Id
     * Required: false
     * Example Value: 123456
     */
    private $orderId;

    /**
     * @param int $orderId
     * 订单Id
     * Example Value: 123456
     */
    public function setOrderId($orderId)
    {
        $this->orderId             = $orderId;
        $this->apiParas["orderId"]  = $orderId;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param int $couponId
     * 优惠券批次ID
     * Required: true
     * Example Value: 1234
     */
    private $couponId;

    /**
     * @param int $couponId
     * 优惠券批次ID
     * Example Value: 1234
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
     * @param int $couponCode
     * 券码
     * Required: false
     * Example Value: 123
     */
    private $couponCode;

    /**
     * @param int $couponCode
     * 券码
     * Example Value: 123
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
     * @param int $pageSize
     * 每页数量（少于100）
     * Required: true
     * Example Value: 10
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 每页数量（少于100）
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

}