<?php

namespca Lostinfo\JosOpenApi;

/**
 * 查询用户关注店铺状态（批量）
 * 用户API -用户信息及操作
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=106&apiId=2481&apiName=jingdong.follow.vender.read.batchIsFollowByPinAndVids
 * Class FollowVenderReadBatchIsFollowByPinAndVids
 * @package Jd\request
 */
class FollowVenderReadBatchIsFollowByPinAndVids
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.follow.vender.read.batchIsFollowByPinAndVids";
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
     * 用户pin
     * Required: true
     * Example Value: 
     */
    private $pin;

    /**
     * @param string $pin
     * 用户pin
     * Example Value: 
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
     * @param int[] $v1
     * 店铺ID集合
     * Required: true
     * Example Value: 
     */
    private $v1;

    /**
     * @param int[] $v1
     * 店铺ID集合
     * Example Value: 
     */
    public function setV1($v1)
    {
        $this->v1             = $v1;
        $this->apiParas["v1"]  = $v1;
    }

    public function getV1()
    {
        return $this->v1;
    }

}