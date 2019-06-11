<?php

namespca Lostinfo\JosOpenApi;

/**
 * 获取用户昵称
 * 用户API -用户信息及操作
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=106&apiId=1006&apiName=jingdong.nicknamebyuid.query
 * Class NicknamebyuidQuery
 * @package Jd\request
 */
class NicknamebyuidQuery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.nicknamebyuid.query";
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
     * @param string $uid
     * 用户uid
     * Required: false
     * Example Value: 
     */
    private $uid;

    /**
     * @param string $uid
     * 用户uid
     * Example Value: 
     */
    public function setUid($uid)
    {
        $this->uid             = $uid;
        $this->apiParas["uid"]  = $uid;
    }

    public function getUid()
    {
        return $this->uid;
    }

}