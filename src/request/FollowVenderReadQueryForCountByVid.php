<?php

namespca Lostinfo\JosOpenApi;

/**
 *  查询该店铺被关注的人数
 * 用户API -用户信息及操作
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=106&apiId=2464&apiName=jingdong.follow.vender.read.queryForCountByVid
 * Class FollowVenderReadQueryForCountByVid
 * @package Jd\request
 */
class FollowVenderReadQueryForCountByVid
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.follow.vender.read.queryForCountByVid";
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
     * @param int $shopId
     * 店铺ID
     * Required: true
     * Example Value: 
     */
    private $shopId;

    /**
     * @param int $shopId
     * 店铺ID
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