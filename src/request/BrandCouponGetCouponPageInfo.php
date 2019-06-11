<?php

namespace JD\request;

/**
 * 查询优惠券列表
 * 无界门店API-无界门店API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=351&apiId=3512&apiName=jingdong.brand.coupon.getCouponPageInfo
 * Class BrandCouponGetCouponPageInfo
 * @package Jd\request
 */
class BrandCouponGetCouponPageInfo
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.brand.coupon.getCouponPageInfo";
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
     * @param String $couponName
     * 优惠券名称
     * Required: false
     * Example Value: 测试名称
     */
    private $couponName;

    /**
     * @param String $couponName
     * 优惠券名称
     * Example Value: 测试名称
     */
    public function setCouponName($couponName)
    {
        $this->couponName             = $couponName;
        $this->apiParas["couponName"]  = $couponName;
    }

    public function getCouponName()
    {
        return $this->couponName;
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
     * @param Number $couponId
     * 优惠券批次ID
     * Required: false
     * Example Value: 123456
     */
    private $couponId;

    /**
     * @param Number $couponId
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
     * @param Number $status
     * 优惠券状态（0：待投放 4：已绑定 5：已过期 6：待投放且已审核）
     * Required: false
     * Example Value: 1
     */
    private $status;

    /**
     * @param Number $status
     * 优惠券状态（0：待投放 4：已绑定 5：已过期 6：待投放且已审核）
     * Example Value: 1
     */
    public function setStatus($status)
    {
        $this->status             = $status;
        $this->apiParas["status"]  = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

}