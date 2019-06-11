<?php

namespace JD\request;

/**
 * 方法描述
 * 用户API -用户信息及操作
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=106&apiId=3109&apiName=jingdong.com.jd.jpos.rpc.jsf.JingBeanExpireJsfFacade
 * Class ComJdJposRpcJsfJingBeanExpireJsfFacade
 * @package Jd\request
 */
class ComJdJposRpcJsfJingBeanExpireJsfFacade
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.com.jd.jpos.rpc.jsf.JingBeanExpireJsfFacade";
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
     * @param String $pin
     * 用户帐号
     * Required: true
     * Example Value: jdxxxx
     */
    private $pin;

    /**
     * @param String $pin
     * 用户帐号
     * Example Value: jdxxxx
     */
    public function setPin($pin)
    {
        $this->pin             = $pin;
        $this->apiParas["pin"]  = $pin;
    }

    public function getPin()
    {
        return $this->pin;
    }

}