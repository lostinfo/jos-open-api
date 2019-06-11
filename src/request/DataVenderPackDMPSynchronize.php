<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 策略实例包同步DMP
 * 数据API-数据开放API已下线，如有数据需求请进入云海数据开放平台（http://data.jd.com）进行申请。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=69&apiId=3677&apiName=jingdong.data.vender.pack.DMP.synchronize
 * Class DataVenderPackDMPSynchronize
 * @package Jd\request
 */
class DataVenderPackDMPSynchronize
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.data.vender.pack.DMP.synchronize";
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
     * @param int $dmpChannelType
     * Dmp投放渠道类型：1-京准通dmp，2-小黑珑
     * Required: true
     * Example Value: 1
     */
    private $dmpChannelType;

    /**
     * @param int $dmpChannelType
     * Dmp投放渠道类型：1-京准通dmp，2-小黑珑
     * Example Value: 1
     */
    public function setDmpChannelType($dmpChannelType)
    {
        $this->dmpChannelType             = $dmpChannelType;
        $this->apiParas["dmp_channel_type"]  = $dmpChannelType;
    }

    public function getDmpChannelType()
    {
        return $this->dmpChannelType;
    }

    /**
     * @param string $mktActivityId
     * 活动Id
     * Required: true
     * Example Value: 074d131b9f734d44b4d0ff892981a157
     */
    private $mktActivityId;

    /**
     * @param string $mktActivityId
     * 活动Id
     * Example Value: 074d131b9f734d44b4d0ff892981a157
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
     * 任务实例Id
     * Required: true
     * Example Value: 074d131b9f734d44b4d0ff892981a157
     */
    private $taskInstId;

    /**
     * @param string $taskInstId
     * 任务实例Id
     * Example Value: 074d131b9f734d44b4d0ff892981a157
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
     * 活动实例Id
     * Required: true
     * Example Value: 074d131b9f734d44b4d0ff892981a157
     */
    private $mktActivityInstId;

    /**
     * @param string $mktActivityInstId
     * 活动实例Id
     * Example Value: 074d131b9f734d44b4d0ff892981a157
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
     * 任务Id
     * Required: true
     * Example Value: 074d131b9f734d44b4d0ff892981a157
     */
    private $taskId;

    /**
     * @param string $taskId
     * 任务Id
     * Example Value: 074d131b9f734d44b4d0ff892981a157
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
     * 策略实例包Id
     * Required: true
     * Example Value: 074d131b9f734d44b4d0ff892981a157
     */
    private $strategyInstId;

    /**
     * @param string $strategyInstId
     * 策略实例包Id
     * Example Value: 074d131b9f734d44b4d0ff892981a157
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