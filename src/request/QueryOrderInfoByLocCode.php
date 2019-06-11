<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 方法描述
 * 无界门店API-无界门店API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=351&apiId=3025&apiName=jingdong.queryOrderInfoByLocCode
 * Class QueryOrderInfoByLocCode
 * @package Jd\request
 */
class QueryOrderInfoByLocCode
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.queryOrderInfoByLocCode";
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
     * @param string $couponCode
     * 核销码
     * Required: true
     * Example Value: 
     */
    private $couponCode;

    /**
     * @param string $couponCode
     * 核销码
     * Example Value: 
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