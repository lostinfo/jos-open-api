<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 短信资源余量查询接口(用于精准营销短信)
 * 数据API-数据开放API已下线，如有数据需求请进入云海数据开放平台（http://data.jd.com）进行申请。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=69&apiId=2933&apiName=jingdong.data.vender.sms.recharge.surplus
 * Class DataVenderSmsRechargeSurplus
 * @package Jd\request
 */
class DataVenderSmsRechargeSurplus
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.data.vender.sms.recharge.surplus";
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