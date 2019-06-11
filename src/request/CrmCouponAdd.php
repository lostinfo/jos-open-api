<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 创建店铺优惠劵
 * 客户关系管理API -客户关系管理API 
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=59&apiId=559&apiName=jingdong.crm.coupon.add
 * Class CrmCouponAdd
 * @package Jd\request
 */
class CrmCouponAdd
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.crm.coupon.add";
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
     * @param string $couponName
     * 优惠劵名称，最多20字，中文或英文算一个字
     * Required: true
     * Example Value: 十一促销劵
     */
    private $couponName;

    /**
     * @param string $couponName
     * 优惠劵名称，最多20字，中文或英文算一个字
     * Example Value: 十一促销劵
     */
    public function setCouponName($couponName)
    {
        $this->couponName             = $couponName;
        $this->apiParas["coupon_name"]  = $couponName;
    }

    public function getCouponName()
    {
        return $this->couponName;
    }

    /**
     * @param int $couponAmount
     * 优惠劵数量，必须大于0，最大数量10万
     * Required: true
     * Example Value: 1000
     */
    private $couponAmount;

    /**
     * @param int $couponAmount
     * 优惠劵数量，必须大于0，最大数量10万
     * Example Value: 1000
     */
    public function setCouponAmount($couponAmount)
    {
        $this->couponAmount             = $couponAmount;
        $this->apiParas["coupon_amount"]  = $couponAmount;
    }

    public function getCouponAmount()
    {
        return $this->couponAmount;
    }

    /**
     * @param int $condition
     * 消费满的金额；单位是元，必须10的倍数
     * Required: true
     * Example Value: 200
     */
    private $condition;

    /**
     * @param int $condition
     * 消费满的金额；单位是元，必须10的倍数
     * Example Value: 200
     */
    public function setCondition($condition)
    {
        $this->condition             = $condition;
        $this->apiParas["condition"]  = $condition;
    }

    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * @param int $denomination
     * 优惠券面值；单位是元，必须10的倍数，优惠金额不得大于总金额的80%
     * Required: true
     * Example Value: 10
     */
    private $denomination;

    /**
     * @param int $denomination
     * 优惠券面值；单位是元，必须10的倍数，优惠金额不得大于总金额的80%
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
     * @param string $startTime
     * 优惠券生效日期，精确至年月日
     * Required: true
     * Example Value: 2013-10-01 00:00:00
     */
    private $startTime;

    /**
     * @param string $startTime
     * 优惠券生效日期，精确至年月日
     * Example Value: 2013-10-01 00:00:00
     */
    public function setStartTime($startTime)
    {
        $this->startTime             = $startTime;
        $this->apiParas["start_time"]  = $startTime;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param string $endTime
     * 优惠券结束日期，精确至年月日
     * Required: true
     * Example Value: 2013-10-15 00:00:00
     */
    private $endTime;

    /**
     * @param string $endTime
     * 优惠券结束日期，精确至年月日
     * Example Value: 2013-10-15 00:00:00
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

}