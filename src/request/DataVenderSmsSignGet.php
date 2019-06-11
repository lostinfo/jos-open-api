<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 获取短信签名(用于精准营销短信)
 * 数据API-数据开放API已下线，如有数据需求请进入云海数据开放平台（http://data.jd.com）进行申请。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=69&apiId=3149&apiName=jingdong.data.vender.sms.sign.get
 * Class DataVenderSmsSignGet
 * @package Jd\request
 */
class DataVenderSmsSignGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.data.vender.sms.sign.get";
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

}