<?php

namespace JD\request;

/**
 * 短信签名注册与创建(用于精准营销短信)
 * 数据API-数据开放API已下线，如有数据需求请进入云海数据开放平台（http://data.jd.com）进行申请。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=69&apiId=3148&apiName=jingdong.data.vender.sms.sign.add
 * Class DataVenderSmsSignAdd
 * @package Jd\request
 */
class DataVenderSmsSignAdd
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.data.vender.sms.sign.add";
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
     * @param Number $channel
     * 渠道
     * Required: true
     * Example Value: 
     */
    private $channel;

    /**
     * @param Number $channel
     * 渠道
     * Example Value: 
     */
    public function setChannel($channel)
    {
        $this->channel             = $channel;
        $this->apiParas["channel"]  = $channel;
    }

    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * @param String $channelName
     * 渠道名称
     * Required: true
     * Example Value: 
     */
    private $channelName;

    /**
     * @param String $channelName
     * 渠道名称
     * Example Value: 
     */
    public function setChannelName($channelName)
    {
        $this->channelName             = $channelName;
        $this->apiParas["channelName"]  = $channelName;
    }

    public function getChannelName()
    {
        return $this->channelName;
    }

    /**
     * @param String $signature
     * 签名
     * Required: true
     * Example Value: 
     */
    private $signature;

    /**
     * @param String $signature
     * 签名
     * Example Value: 
     */
    public function setSignature($signature)
    {
        $this->signature             = $signature;
        $this->apiParas["signature"]  = $signature;
    }

    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * @param String[] $mobilePhone
     * 测试手机号(号码前加0086)，最多3个
     * Required: true
     * Example Value: 0086138XXXXXXXX,0086138XXXXXXXX
     */
    private $mobilePhone;

    /**
     * @param String[] $mobilePhone
     * 测试手机号(号码前加0086)，最多3个
     * Example Value: 0086138XXXXXXXX,0086138XXXXXXXX
     */
    public function setMobilePhone($mobilePhone)
    {
        $this->mobilePhone             = $mobilePhone;
        $this->apiParas["mobilePhone"]  = $mobilePhone;
    }

    public function getMobilePhone()
    {
        return $this->mobilePhone;
    }

}