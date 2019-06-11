<?php

namespace JD\request;

/**
 * 获取商家设置的积分发放规则
 * 用户API -用户信息及操作
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=106&apiId=2528&apiName=jingdong.pop.crm.getVenderPointsRule
 * Class PopCrmGetVenderPointsRule
 * @package Jd\request
 */
class PopCrmGetVenderPointsRule
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.crm.getVenderPointsRule";
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