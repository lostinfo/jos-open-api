<?php

namespace JD\request;

/**
 * 通过pin查询用户基本信息
 * 用户API -用户信息及操作
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=106&apiId=2448&apiName=jingdong.pop.jm.getUserBaseInfoByPin
 * Class PopJmGetUserBaseInfoByPin
 * @package Jd\request
 */
class PopJmGetUserBaseInfoByPin
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.jm.getUserBaseInfoByPin";
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
     * 用户标识,加密用户pin
     * Required: true
     * Example Value: 加密pin
     */
    private $pin;

    /**
     * @param String $pin
     * 用户标识,加密用户pin
     * Example Value: 加密pin
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

    /**
     * @param Number $loadType
     * 1=常用信息，2=扩展信息，3=全部
     * Required: true
     * Example Value: 1
     */
    private $loadType;

    /**
     * @param Number $loadType
     * 1=常用信息，2=扩展信息，3=全部
     * Example Value: 1
     */
    public function setLoadType($loadType)
    {
        $this->loadType             = $loadType;
        $this->apiParas["loadType"]  = $loadType;
    }

    public function getLoadType()
    {
        return $this->loadType;
    }

}