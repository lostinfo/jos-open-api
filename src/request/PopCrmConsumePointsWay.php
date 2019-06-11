<?php

namespace JD\request;

/**
 * 消耗积分途径
 * 用户API -用户信息及操作
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=106&apiId=2519&apiName=jingdong.pop.crm.consumePointsWay
 * Class PopCrmConsumePointsWay
 * @package Jd\request
 */
class PopCrmConsumePointsWay
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.crm.consumePointsWay";
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