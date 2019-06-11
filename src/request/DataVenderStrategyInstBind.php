<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 人群实例绑定活动信息
 * 数据API-数据开放API已下线，如有数据需求请进入云海数据开放平台（http://data.jd.com）进行申请。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=69&apiId=3647&apiName=jingdong.data.vender.strategy.inst.bind
 * Class DataVenderStrategyInstBind
 * @package Jd\request
 */
class DataVenderStrategyInstBind
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.data.vender.strategy.inst.bind";
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
     * @param string $mktActivityId
     * 营销活动ID
     * Required: true
     * Example Value: 
     */
    private $mktActivityId;

    /**
     * @param string $mktActivityId
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
     * @param string $taskInstId
     * 任务实例ID
     * Required: true
     * Example Value: 
     */
    private $taskInstId;

    /**
     * @param string $taskInstId
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
     * @param string $mktActivityInstId
     * 营销活动实例ID
     * Required: true
     * Example Value: 
     */
    private $mktActivityInstId;

    /**
     * @param string $mktActivityInstId
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
     * @param string $taskId
     * 任务ID
     * Required: true
     * Example Value: 
     */
    private $taskId;

    /**
     * @param string $taskId
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
     * @param string $strategyInstId
     * 人群实例ID
     * Required: true
     * Example Value: 
     */
    private $strategyInstId;

    /**
     * @param string $strategyInstId
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