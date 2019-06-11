<?php

namespace JD\request;

/**
 * 通过微信手q，京东app的token,获得京东用户jos加密后的用户pin
 * 用户API -用户信息及操作
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=106&apiId=2288&apiName=jingdong.jos.convert.token.to.pin
 * Class JosConvertTokenToPin
 * @package Jd\request
 */
class JosConvertTokenToPin
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.jos.convert.token.to.pin";
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
     * @param String $token
     * token
     * Required: true
     * Example Value: 
     */
    private $token;

    /**
     * @param String $token
     * token
     * Example Value: 
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