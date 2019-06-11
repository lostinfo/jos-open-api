<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 短信敏感词校验接口(用于精准营销短信)
 * 数据API-数据开放API已下线，如有数据需求请进入云海数据开放平台（http://data.jd.com）进行申请。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=69&apiId=2884&apiName=jingdong.data.vender.userpack.isv.sensitive.word.check
 * Class DataVenderUserpackIsvSensitiveWordCheck
 * @package Jd\request
 */
class DataVenderUserpackIsvSensitiveWordCheck
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.data.vender.userpack.isv.sensitive.word.check";
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
     * @param string $smsContent
     * 短信内容
     * Required: true
     * Example Value: 
     */
    private $smsContent;

    /**
     * @param string $smsContent
     * 短信内容
     * Example Value: 
     */
    public function setSmsContent($smsContent)
    {
        $this->smsContent             = $smsContent;
        $this->apiParas["sms_content"]  = $smsContent;
    }

    public function getSmsContent()
    {
        return $this->smsContent;
    }

}