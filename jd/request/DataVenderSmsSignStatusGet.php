<?php

namespace JD\request;

/**
 * 获取签名审核状态(用于精准营销短信)
 * 数据API-数据开放API已下线，如有数据需求请进入云海数据开放平台（http://data.jd.com）进行申请。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=69&apiId=3144&apiName=jingdong.data.vender.sms.sign.status.get
 * Class DataVenderSmsSignStatusGet
 * @package Jd\request
 */
class DataVenderSmsSignStatusGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.data.vender.sms.sign.status.get";
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

}