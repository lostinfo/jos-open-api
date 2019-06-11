<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 短信签名信息修改(用于精准营销短信)
 * 数据API-数据开放API已下线，如有数据需求请进入云海数据开放平台（http://data.jd.com）进行申请。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=69&apiId=3422&apiName=jingdong.data.vender.sms.sign.info.modify
 * Class DataVenderSmsSignInfoModify
 * @package Jd\request
 */
class DataVenderSmsSignInfoModify
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.data.vender.sms.sign.info.modify";
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
     * @param string $signature
     * 修改新签名
     * Required: false
     * Example Value: 
     */
    private $signature;

    /**
     * @param string $signature
     * 修改新签名
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
     * @param string[] $mobilePhone
     * 修改测试手机号(号码前加0086)，最多3个
     * Required: false
     * Example Value: 0086138XXXXXXXX,0086138XXXXXXXX
     */
    private $mobilePhone;

    /**
     * @param string[] $mobilePhone
     * 修改测试手机号(号码前加0086)，最多3个
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