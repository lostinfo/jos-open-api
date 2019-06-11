<?php

namespace JD\request;

/**
 * 查询当前商家可领用优惠券
 * 用户API -用户信息及操作
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=106&apiId=2517&apiName=jingdong.pop.crm.getCouponInfo
 * Class PopCrmGetCouponInfo
 * @package Jd\request
 */
class PopCrmGetCouponInfo
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.crm.getCouponInfo";
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

}