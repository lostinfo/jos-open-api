<?php

namespace JD\request;

/**
 * 查询商家积分可兑换优惠券
 * 客户关系管理API -客户关系管理API 
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=59&apiId=3291&apiName=jingdong.points.jos.getCouponInfo
 * Class PointsJosGetCouponInfo
 * @package Jd\request
 */
class PointsJosGetCouponInfo
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.points.jos.getCouponInfo";
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