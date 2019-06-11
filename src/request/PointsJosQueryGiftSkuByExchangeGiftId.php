<?php

namespace JD\request;

/**
 * 根据积分兑换商品活动id获取商品信息
 * 客户关系管理API -客户关系管理API 
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=59&apiId=3275&apiName=jingdong.points.jos.queryGiftSkuByExchangeGiftId
 * Class PointsJosQueryGiftSkuByExchangeGiftId
 * @package Jd\request
 */
class PointsJosQueryGiftSkuByExchangeGiftId
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.points.jos.queryGiftSkuByExchangeGiftId";
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
     * @param Number $giftId
     * 兑换活动id
     * Required: true
     * Example Value: 123
     */
    private $giftId;

    /**
     * @param Number $giftId
     * 兑换活动id
     * Example Value: 123
     */
    public function setGiftId($giftId)
    {
        $this->giftId             = $giftId;
        $this->apiParas["giftId"]  = $giftId;
    }

    public function getGiftId()
    {
        return $this->giftId;
    }

}