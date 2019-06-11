<?php

namespace JD\request;

/**
 * 人群预计算接口(按策略)
 * 数据API-数据开放API已下线，如有数据需求请进入云海数据开放平台（http://data.jd.com）进行申请。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=69&apiId=3646&apiName=jingdong.data.vender.strategy.compute.general.bystrategy
 * Class DataVenderStrategyComputeGeneralBystrategy
 * @package Jd\request
 */
class DataVenderStrategyComputeGeneralBystrategy
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.data.vender.strategy.compute.general.bystrategy";
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
     * @param String $strategy
     * 筛选策略
     * Required: true
     * Example Value: {策略设定}
     */
    private $strategy;

    /**
     * @param String $strategy
     * 筛选策略
     * Example Value: {策略设定}
     */
    public function setStrategy($strategy)
    {
        $this->strategy             = $strategy;
        $this->apiParas["strategy"]  = $strategy;
    }

    public function getStrategy()
    {
        return $this->strategy;
    }

}