<?php

namespca Lostinfo\JosOpenApi;

/**
 * 短信实时效果数据(用于精准营销短信)
 * 数据API-数据开放API已下线，如有数据需求请进入云海数据开放平台（http://data.jd.com）进行申请。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=69&apiId=3227&apiName=jingdong.data.vender.sms.effect.getrt
 * Class DataVenderSmsEffectGetrt
 * @package Jd\request
 */
class DataVenderSmsEffectGetrt
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.data.vender.sms.effect.getrt";
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
     * @param string $search_id
     * 筛选包ID (单个)
     * Required: true
     * Example Value: 
     */
    private $search_id;

    /**
     * @param string $search_id
     * 筛选包ID (单个)
     * Example Value: 
     */
    public function setSearch_id($search_id)
    {
        $this->search_id             = $search_id;
        $this->apiParas["search_id"]  = $search_id;
    }

    public function getSearch_id()
    {
        return $this->search_id;
    }

    /**
     * @param string $advertis_id
     * 投放活动记录ID
     * Required: true
     * Example Value: 
     */
    private $advertis_id;

    /**
     * @param string $advertis_id
     * 投放活动记录ID
     * Example Value: 
     */
    public function setAdvertis_id($advertis_id)
    {
        $this->advertis_id             = $advertis_id;
        $this->apiParas["activity_record_id"]  = $advertis_id;
    }

    public function getAdvertis_id()
    {
        return $this->advertis_id;
    }

}