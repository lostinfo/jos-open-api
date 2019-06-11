<?php

namespca Lostinfo\JosOpenApi;

/**
 * 用户过期京豆数量
 * 用户API -用户信息及操作
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=106&apiId=3112&apiName=jingdong.JingBeanExpireJsfFacade.queryExpireJpos
 * Class JingBeanExpireJsfFacadeQueryExpireJpos
 * @package Jd\request
 */
class JingBeanExpireJsfFacadeQueryExpireJpos
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.JingBeanExpireJsfFacade.queryExpireJpos";
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
     * @param string $pin
     * 用户账户
     * Required: true
     * Example Value: jd155
     */
    private $pin;

    /**
     * @param string $pin
     * 用户账户
     * Example Value: jd155
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