<?php

namespace JD\request;

/**
 * 获取场景标签下人群信息(用于用户标签开放)
 * 数据API-数据开放API已下线，如有数据需求请进入云海数据开放平台（http://data.jd.com）进行申请。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=69&apiId=3156&apiName=jingdong.data.vender.userpack.isv.scenesum.get
 * Class DataVenderUserpackIsvScenesumGet
 * @package Jd\request
 */
class DataVenderUserpackIsvScenesumGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.data.vender.userpack.isv.scenesum.get";
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