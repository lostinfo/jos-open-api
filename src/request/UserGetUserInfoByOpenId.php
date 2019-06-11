<?php

namespace JD\request;

/**
 * 根据openId获取用户信息
 * 用户API -用户信息及操作
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=106&apiId=3051&apiName=jingdong.user.getUserInfoByOpenId
 * Class UserGetUserInfoByOpenId
 * @package Jd\request
 */
class UserGetUserInfoByOpenId
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.user.getUserInfoByOpenId";
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
     * @param String $openId
     * 用户标识
     * Required: true
     * Example Value: openId
     */
    private $openId;

    /**
     * @param String $openId
     * 用户标识
     * Example Value: openId
     */
    public function setOpenId($openId)
    {
        $this->openId             = $openId;
        $this->apiParas["openId"]  = $openId;
    }

    public function getOpenId()
    {
        return $this->openId;
    }

}