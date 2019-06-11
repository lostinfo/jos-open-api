<?php

namespace JD\request;

/**
 * 人群策略详情查询接口
 * 数据API-数据开放API已下线，如有数据需求请进入云海数据开放平台（http://data.jd.com）进行申请。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=69&apiId=3634&apiName=jingdong.data.vender.strategy.get
 * Class DataVenderStrategyGet
 * @package Jd\request
 */
class DataVenderStrategyGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.data.vender.strategy.get";
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
     * @param String $strategyId
     * 人群筛选策略ID
     * Required: true
     * Example Value: 
     */
    private $strategyId;

    /**
     * @param String $strategyId
     * 人群筛选策略ID
     * Example Value: 
     */
    public function setStrategyId($strategyId)
    {
        $this->strategyId             = $strategyId;
        $this->apiParas["strategy_id"]  = $strategyId;
    }

    public function getStrategyId()
    {
        return $this->strategyId;
    }

}