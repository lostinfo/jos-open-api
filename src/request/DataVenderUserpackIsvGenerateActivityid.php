<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 生成活动ID(用于用户标签开放)
 * 数据API-数据开放API已下线，如有数据需求请进入云海数据开放平台（http://data.jd.com）进行申请。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=69&apiId=3185&apiName=jingdong.data.vender.userpack.isv.generate.activityid
 * Class DataVenderUserpackIsvGenerateActivityid
 * @package Jd\request
 */
class DataVenderUserpackIsvGenerateActivityid
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.data.vender.userpack.isv.generate.activityid";
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