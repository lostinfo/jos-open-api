<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 特权金券码获取分阶段订单信息
 * 订单API-订单API组(该组下所有接口均不支持自营店铺业务)
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=55&apiId=2524&apiName=jingdong.getStagepayBusinessExtInfoByCouponCode
 * Class GetStagepayBusinessExtInfoByCouponCode
 * @package Jd\request
 */
class GetStagepayBusinessExtInfoByCouponCode
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.getStagepayBusinessExtInfoByCouponCode";
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
     * @param string $CouponCode
     * 特权金券
     * Required: true
     * Example Value: 
     */
    private $CouponCode;

    /**
     * @param string $CouponCode
     * 特权金券
     * Example Value: 
     */
    public function setCouponCode($CouponCode)
    {
        $this->CouponCode             = $CouponCode;
        $this->apiParas["CouponCode"]  = $CouponCode;
    }

    public function getCouponCode()
    {
        return $this->CouponCode;
    }

}