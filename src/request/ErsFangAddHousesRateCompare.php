<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 添加楼盘全网比价价格
 * 京东房产-京东房产
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=253&apiId=2639&apiName=jingdong.ers.fang.addHousesRateCompare
 * Class ErsFangAddHousesRateCompare
 * @package Jd\request
 */
class ErsFangAddHousesRateCompare
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ers.fang.addHousesRateCompare";
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
     * @param int $cityCode
     * 城市code
     * Required: true
     * Example Value: 
     */
    private $cityCode;

    /**
     * @param int $cityCode
     * 城市code
     * Example Value: 
     */
    public function setCityCode($cityCode)
    {
        $this->cityCode             = $cityCode;
        $this->apiParas["cityCode"]  = $cityCode;
    }

    public function getCityCode()
    {
        return $this->cityCode;
    }

    /**
     * @param int $sourceId
     * 来源主键
     * Required: true
     * Example Value: 
     */
    private $sourceId;

    /**
     * @param int $sourceId
     * 来源主键
     * Example Value: 
     */
    public function setSourceId($sourceId)
    {
        $this->sourceId             = $sourceId;
        $this->apiParas["sourceId"]  = $sourceId;
    }

    public function getSourceId()
    {
        return $this->sourceId;
    }

    /**
     * @param int $pSourceId
     * 楼盘来源主键
     * Required: true
     * Example Value: 
     */
    private $pSourceId;

    /**
     * @param int $pSourceId
     * 楼盘来源主键
     * Example Value: 
     */
    public function setPSourceId($pSourceId)
    {
        $this->pSourceId             = $pSourceId;
        $this->apiParas["pSourceId"]  = $pSourceId;
    }

    public function getPSourceId()
    {
        return $this->pSourceId;
    }

    /**
     * @param int $channelExternalId
     * 来源渠道id
     * Required: true
     * Example Value: 
     */
    private $channelExternalId;

    /**
     * @param int $channelExternalId
     * 来源渠道id
     * Example Value: 
     */
    public function setChannelExternalId($channelExternalId)
    {
        $this->channelExternalId             = $channelExternalId;
        $this->apiParas["channelExternalId"]  = $channelExternalId;
    }

    public function getChannelExternalId()
    {
        return $this->channelExternalId;
    }

    /**
     * @param string $rate
     * 价格
     * Required: true
     * Example Value: 
     */
    private $rate;

    /**
     * @param string $rate
     * 价格
     * Example Value: 
     */
    public function setRate($rate)
    {
        $this->rate             = $rate;
        $this->apiParas["rate"]  = $rate;
    }

    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @param string $discounts
     * 优惠
     * Required: false
     * Example Value: 
     */
    private $discounts;

    /**
     * @param string $discounts
     * 优惠
     * Example Value: 
     */
    public function setDiscounts($discounts)
    {
        $this->discounts             = $discounts;
        $this->apiParas["discounts"]  = $discounts;
    }

    public function getDiscounts()
    {
        return $this->discounts;
    }

}