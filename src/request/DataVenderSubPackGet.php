<?php

namespace JD\request;

/**
 * 获取母包拆分的子包信息
 * 数据API-数据开放API已下线，如有数据需求请进入云海数据开放平台（http://data.jd.com）进行申请。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=69&apiId=3640&apiName=jingdong.data.vender.sub.pack.get
 * Class DataVenderSubPackGet
 * @package Jd\request
 */
class DataVenderSubPackGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.data.vender.sub.pack.get";
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
     * @param String $searchId
     * 父包Id
     * Required: true
     * Example Value: xx
     */
    private $searchId;

    /**
     * @param String $searchId
     * 父包Id
     * Example Value: xx
     */
    public function setSearchId($searchId)
    {
        $this->searchId             = $searchId;
        $this->apiParas["parent_search_id"]  = $searchId;
    }

    public function getSearchId()
    {
        return $this->searchId;
    }

}