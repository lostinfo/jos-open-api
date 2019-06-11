<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 创建app推广位jos接口
 * 京东联盟API-查询推广产品，获取推广链接。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=117&apiId=1336&apiName=jingdong.CreatePromotionSiteJos.saveAppPromtionSiteInfo
 * Class CreatePromotionSiteJosSaveAppPromtionSiteInfo
 * @package Jd\request
 */
class CreatePromotionSiteJosSaveAppPromtionSiteInfo
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.CreatePromotionSiteJos.saveAppPromtionSiteInfo";
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
     * 京东下单人 如果有中文，最好先urlEncode编码
     * Required: true
     * Example Value: 
     */
    private $pin;

    /**
     * @param string $pin
     * 京东下单人 如果有中文，最好先urlEncode编码
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
     * @param int $appId
     * app应用id
     * Required: true
     * Example Value: 
     */
    private $appId;

    /**
     * @param int $appId
     * app应用id
     * Example Value: 
     */
    public function setAppId($appId)
    {
        $this->appId             = $appId;
        $this->apiParas["appId"]  = $appId;
    }

    public function getAppId()
    {
        return $this->appId;
    }

    /**
     * @param string $adName
     * app广告位名称
     * Required: true
     * Example Value: 
     */
    private $adName;

    /**
     * @param string $adName
     * app广告位名称
     * Example Value: 
     */
    public function setAdName($adName)
    {
        $this->adName             = $adName;
        $this->apiParas["adName"]  = $adName;
    }

    public function getAdName()
    {
        return $this->adName;
    }

    /**
     * @param int $adType
     * app广告位类型 1:banner广告，2：插屏广告，3：信息流广告
     * Required: true
     * Example Value: 
     */
    private $adType;

    /**
     * @param int $adType
     * app广告位类型 1:banner广告，2：插屏广告，3：信息流广告
     * Example Value: 
     */
    public function setAdType($adType)
    {
        $this->adType             = $adType;
        $this->apiParas["adType"]  = $adType;
    }

    public function getAdType()
    {
        return $this->adType;
    }

    /**
     * @param string $adSize
     * app广告位尺寸
     * Required: true
     * Example Value: 
     */
    private $adSize;

    /**
     * @param string $adSize
     * app广告位尺寸
     * Example Value: 
     */
    public function setAdSize($adSize)
    {
        $this->adSize             = $adSize;
        $this->apiParas["adSize"]  = $adSize;
    }

    public function getAdSize()
    {
        return $this->adSize;
    }

}