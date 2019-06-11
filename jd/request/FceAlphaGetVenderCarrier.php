<?php

namespace JD\request;

/**
 * 获取商家已签约承运商
 * 阿尔法API-阿尔法系统
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=191&apiId=2502&apiName=jingdong.fce.alpha.getVenderCarrier
 * Class FceAlphaGetVenderCarrier
 * @package Jd\request
 */
class FceAlphaGetVenderCarrier
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.fce.alpha.getVenderCarrier";
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