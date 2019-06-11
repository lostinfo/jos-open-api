<?php

namespca Lostinfo\JosOpenApi;

/**
 * 返回true当商家开通了会员积分功能
 * 用户API -用户信息及操作
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=106&apiId=2527&apiName=jingdong.pop.crm.isPointsEnabled
 * Class PopCrmIsPointsEnabled
 * @package Jd\request
 */
class PopCrmIsPointsEnabled
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.crm.isPointsEnabled";
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