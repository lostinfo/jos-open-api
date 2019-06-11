<?php

namespace JD\request;

/**
 * 商家渠道注册
 * 京东房产-京东房产
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=253&apiId=2185&apiName=jingdong.newhouse.channel.register
 * Class NewhouseChannelRegister
 * @package Jd\request
 */
class NewhouseChannelRegister
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.newhouse.channel.register";
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
     * @param Number $channelId
     * 渠道id
     * Required: true
     * Example Value: 
     */
    private $channelId;

    /**
     * @param Number $channelId
     * 渠道id
     * Example Value: 
     */
    public function setChannelId($channelId)
    {
        $this->channelId             = $channelId;
        $this->apiParas["channelId"]  = $channelId;
    }

    public function getChannelId()
    {
        return $this->channelId;
    }

}