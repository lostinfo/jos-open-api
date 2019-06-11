<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * isv当前有效活动查询
 * 用户API -用户信息及操作
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=106&apiId=2514&apiName=jingdong.promo.unit.getActiveActivity
 * Class PromoUnitGetActiveActivity
 * @package Jd\request
 */
class PromoUnitGetActiveActivity
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.promo.unit.getActiveActivity";
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