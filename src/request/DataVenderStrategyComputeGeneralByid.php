<?php

namespca Lostinfo\JosOpenApi;

/**
 * 人群预计算接口(按ID)
 * 数据API-数据开放API已下线，如有数据需求请进入云海数据开放平台（http://data.jd.com）进行申请。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=69&apiId=3645&apiName=jingdong.data.vender.strategy.compute.general.byid
 * Class DataVenderStrategyComputeGeneralByid
 * @package Jd\request
 */
class DataVenderStrategyComputeGeneralByid
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.data.vender.strategy.compute.general.byid";
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
     * @param string $strategyId
     * 筛选策略ID
     * Required: true
     * Example Value: 123
     */
    private $strategyId;

    /**
     * @param string $strategyId
     * 筛选策略ID
     * Example Value: 123
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