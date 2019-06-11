<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 获取人群包状态(用于用户标签开放)
 * 数据API-数据开放API已下线，如有数据需求请进入云海数据开放平台（http://data.jd.com）进行申请。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=69&apiId=2887&apiName=jingdong.data.vender.userpack.isv.status.get
 * Class DataVenderUserpackIsvStatusGet
 * @package Jd\request
 */
class DataVenderUserpackIsvStatusGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.data.vender.userpack.isv.status.get";
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
     * @param string $searchId
     * 人群包ID
     * Required: true
     * Example Value: 
     */
    private $searchId;

    /**
     * @param string $searchId
     * 人群包ID
     * Example Value: 
     */
    public function setSearchId($searchId)
    {
        $this->searchId             = $searchId;
        $this->apiParas["search_id"]  = $searchId;
    }

    public function getSearchId()
    {
        return $this->searchId;
    }

}