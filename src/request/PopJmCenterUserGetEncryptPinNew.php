<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 根据京东或微信token获取用户加密pin
 * 用户API -用户信息及操作
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=106&apiId=3691&apiName=jingdong.pop.jm.center.user.getEncryptPinNew
 * Class PopJmCenterUserGetEncryptPinNew
 * @package Jd\request
 */
class PopJmCenterUserGetEncryptPinNew
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.jm.center.user.getEncryptPinNew";
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
     * @param string $source
     * 01:京东App，02：微信
     * Required: true
     * Example Value: 01
     */
    private $source;

    /**
     * @param string $source
     * 01:京东App，02：微信
     * Example Value: 01
     */
    public function setSource($source)
    {
        $this->source             = $source;
        $this->apiParas["source"]  = $source;
    }

    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param string $token
     * 京东或者微信token
     * Required: true
     * Example Value: 99350649-3237-47c6-b175-32aa15cd798d
     */
    private $token;

    /**
     * @param string $token
     * 京东或者微信token
     * Example Value: 99350649-3237-47c6-b175-32aa15cd798d
     */
    public function setToken($token)
    {
        $this->token             = $token;
        $this->apiParas["token"]  = $token;
    }

    public function getToken()
    {
        return $this->token;
    }

}