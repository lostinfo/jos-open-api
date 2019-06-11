<?php

namespca Lostinfo\JosOpenApi;

/**
 * 人群策略删除接口
 * 数据API-数据开放API已下线，如有数据需求请进入云海数据开放平台（http://data.jd.com）进行申请。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=69&apiId=3633&apiName=jingdong.data.vender.strategy.delete
 * Class DataVenderStrategyDelete
 * @package Jd\request
 */
class DataVenderStrategyDelete
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.data.vender.strategy.delete";
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
     * 人群筛选策略ID
     * Required: true
     * Example Value: 
     */
    private $strategyId;

    /**
     * @param string $strategyId
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