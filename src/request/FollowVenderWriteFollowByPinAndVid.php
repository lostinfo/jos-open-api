<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 关注店铺
 * 用户API -用户信息及操作
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=106&apiId=2480&apiName=jingdong.follow.vender.write.followByPinAndVid
 * Class FollowVenderWriteFollowByPinAndVid
 * @package Jd\request
 */
class FollowVenderWriteFollowByPinAndVid
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.follow.vender.write.followByPinAndVid";
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
     * @param int $shopId
     * 店铺id
     * Required: true
     * Example Value: 
     */
    private $shopId;

    /**
     * @param int $shopId
     * 店铺id
     * Example Value: 
     */
    public function setShopId($shopId)
    {
        $this->shopId             = $shopId;
        $this->apiParas["shopId"]  = $shopId;
    }

    public function getShopId()
    {
        return $this->shopId;
    }

}