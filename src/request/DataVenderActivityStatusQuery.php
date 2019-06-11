<?php

namespca Lostinfo\JosOpenApi;

/**
 * 查询活动状态(用于用户标签开放)
 * 数据API-数据开放API已下线，如有数据需求请进入云海数据开放平台（http://data.jd.com）进行申请。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=69&apiId=2937&apiName=jingdong.data.vender.activity.status.query
 * Class DataVenderActivityStatusQuery
 * @package Jd\request
 */
class DataVenderActivityStatusQuery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.data.vender.activity.status.query";
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
     * @param string $activity_record_id
     * 活动记录ID
     * Required: true
     * Example Value: 
     */
    private $activity_record_id;

    /**
     * @param string $activity_record_id
     * 活动记录ID
     * Example Value: 
     */
    public function setActivity_record_id($activity_record_id)
    {
        $this->activity_record_id             = $activity_record_id;
        $this->apiParas["activity_record_id"]  = $activity_record_id;
    }

    public function getActivity_record_id()
    {
        return $this->activity_record_id;
    }

}