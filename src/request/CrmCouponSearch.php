<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 查询店铺优惠券
 * 客户关系管理API -客户关系管理API 
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=59&apiId=558&apiName=jingdong.crm.coupon.search
 * Class CrmCouponSearch
 * @package Jd\request
 */
class CrmCouponSearch
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.crm.coupon.search";
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
     * @param int $couponId
     * 优惠劵ID
     * Required: false
     * Example Value: 1000
     */
    private $couponId;

    /**
     * @param int $couponId
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
     * @param int $denomination
     * 优惠券面值；单位是元
     * Required: false
     * Example Value: 10
     */
    private $denomination;

    /**
     * @param int $denomination
     * 优惠券面值；单位是元
     * Example Value: 10
     */
    public function setDenomination($denomination)
    {
        $this->denomination             = $denomination;
        $this->apiParas["denomination"]  = $denomination;
    }

    public function getDenomination()
    {
        return $this->denomination;
    }

    /**
     * @param string $endTime
     * 优惠券的结束日期，精确至年月日
     * Required: false
     * Example Value: 2013-10-30 00:00:00
     */
    private $endTime;

    /**
     * @param string $endTime
     * 优惠券的结束日期，精确至年月日
     * Example Value: 2013-10-30 00:00:00
     */
    public function setEndTime($endTime)
    {
        $this->endTime             = $endTime;
        $this->apiParas["end_time"]  = $endTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param int $currentPage
     * 显示第几页的会员，如果输入的页码大于总共的页码数，例如总共10页，但是current_page的值为11，则返回空白页，最小页数为1，最大页数为5000
     * Required: true
     * Example Value: 45
     */
    private $currentPage;

    /**
     * @param int $currentPage
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
     * @param int $pageSize
     * 表示每页显示的会员数量,page_size的最大值不能超过100条,最小值不能低于1
     * Required: true
     * Example Value: 20
     */
    private $pageSize;

    /**
     * @param int $pageSize
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