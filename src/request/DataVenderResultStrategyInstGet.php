<?php

namespace JD\request;

/**
 * 投放任务结果包获取
 * 数据API-数据开放API已下线，如有数据需求请进入云海数据开放平台（http://data.jd.com）进行申请。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=69&apiId=3657&apiName=jingdong.data.vender.result.strategy.inst.get
 * Class DataVenderResultStrategyInstGet
 * @package Jd\request
 */
class DataVenderResultStrategyInstGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.data.vender.result.strategy.inst.get";
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
     * @param String $mktActivityId
     * 营销活动ID
     * Required: true
     * Example Value: 
     */
    private $mktActivityId;

    /**
     * @param String $mktActivityId
     * 营销活动ID
     * Example Value: 
     */
    public function setMktActivityId($mktActivityId)
    {
        $this->mktActivityId             = $mktActivityId;
        $this->apiParas["mkt_activity_id"]  = $mktActivityId;
    }

    public function getMktActivityId()
    {
        return $this->mktActivityId;
    }

    /**
     * @param String $taskInstId
     * 任务实例ID
     * Required: true
     * Example Value: 
     */
    private $taskInstId;

    /**
     * @param String $taskInstId
     * 任务实例ID
     * Example Value: 
     */
    public function setTaskInstId($taskInstId)
    {
        $this->taskInstId             = $taskInstId;
        $this->apiParas["task_inst_id"]  = $taskInstId;
    }

    public function getTaskInstId()
    {
        return $this->taskInstId;
    }

    /**
     * @param String $mktActivityInstId
     * 营销活动实例ID
     * Required: true
     * Example Value: 
     */
    private $mktActivityInstId;

    /**
     * @param String $mktActivityInstId
     * 营销活动实例ID
     * Example Value: 
     */
    public function setMktActivityInstId($mktActivityInstId)
    {
        $this->mktActivityInstId             = $mktActivityInstId;
        $this->apiParas["mkt_activity_inst_id"]  = $mktActivityInstId;
    }

    public function getMktActivityInstId()
    {
        return $this->mktActivityInstId;
    }

    /**
     * @param String $taskId
     * 任务ID
     * Required: true
     * Example Value: 
     */
    private $taskId;

    /**
     * @param String $taskId
     * 任务ID
     * Example Value: 
     */
    public function setTaskId($taskId)
    {
        $this->taskId             = $taskId;
        $this->apiParas["task_id"]  = $taskId;
    }

    public function getTaskId()
    {
        return $this->taskId;
    }

    /**
     * @param String $strategyInstId
     * 人群实例ID
     * Required: true
     * Example Value: 
     */
    private $strategyInstId;

    /**
     * @param String $strategyInstId
     * 人群实例ID
     * Example Value: 
     */
    public function setStrategyInstId($strategyInstId)
    {
        $this->strategyInstId             = $strategyInstId;
        $this->apiParas["strategy_inst_id"]  = $strategyInstId;
    }

    public function getStrategyInstId()
    {
        return $this->strategyInstId;
    }

}