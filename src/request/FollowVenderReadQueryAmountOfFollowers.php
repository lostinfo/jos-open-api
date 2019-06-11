<?php

namespca Lostinfo\JosOpenApi;

/**
 * 批量查询店铺关注总数
 * 用户API -用户信息及操作
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=106&apiId=2482&apiName=jingdong.follow.vender.read.queryAmountOfFollowers
 * Class FollowVenderReadQueryAmountOfFollowers
 * @package Jd\request
 */
class FollowVenderReadQueryAmountOfFollowers
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.follow.vender.read.queryAmountOfFollowers";
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
     * @param int[] $shopIds
     * 店铺ID
     * Required: true
     * Example Value: 
     */
    private $shopIds;

    /**
     * @param int[] $shopIds
     * 店铺ID
     * Example Value: 
     */
    public function setShopIds($shopIds)
    {
        $this->shopIds             = $shopIds;
        $this->apiParas["shopIds"]  = $shopIds;
    }

    public function getShopIds()
    {
        return $this->shopIds;
    }

}