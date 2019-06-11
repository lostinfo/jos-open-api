<?php

namespace JD\request;

/**
 * 营销活动任务详情更新、提交
 * 数据API-数据开放API已下线，如有数据需求请进入云海数据开放平台（http://data.jd.com）进行申请。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=69&apiId=3642&apiName=jingdong.jingdong.data.vender.marketing.activity.update.submit
 * Class JingdongDataVenderMarketingActivityUpdateSubmit
 * @package Jd\request
 */
class JingdongDataVenderMarketingActivityUpdateSubmit
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.jingdong.data.vender.marketing.activity.update.submit";
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
     * 营销活动Id，长度不超过32位
     * Required: true
     * Example Value: xx
     */
    private $mktActivityId;

    /**
     * @param String $mktActivityId
     * 营销活动Id，长度不超过32位
     * Example Value: xx
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
     * @param String[] $taskDesc
     * 任务描述
     * Required: false
     * Example Value: xx
     */
    private $taskDesc;

    /**
     * @param String[] $taskDesc
     * 任务描述
     * Example Value: xx
     */
    public function setTaskDesc($taskDesc)
    {
        $this->taskDesc             = $taskDesc;
        $this->apiParas["task_desc"]  = $taskDesc;
    }

    public function getTaskDesc()
    {
        return $this->taskDesc;
    }

    /**
     * @param Number[] $taskType
     * 任务类型，1：权益，2：优惠券,3：积分, 4：短信
     * Required: true
     * Example Value: 1
     */
    private $taskType;

    /**
     * @param Number[] $taskType
     * 任务类型，1：权益，2：优惠券,3：积分, 4：短信
     * Example Value: 1
     */
    public function setTaskType($taskType)
    {
        $this->taskType             = $taskType;
        $this->apiParas["task_type"]  = $taskType;
    }

    public function getTaskType()
    {
        return $this->taskType;
    }

    /**
     * @param String[] $nextTasks
     * 后置任务Id列表，任务Id之间用竖线（|）分隔，任务Id长度为32位，如：x200|x201
     * Required: false
     * Example Value: x200|x201
     */
    private $nextTasks;

    /**
     * @param String[] $nextTasks
     * 后置任务Id列表，任务Id之间用竖线（|）分隔，任务Id长度为32位，如：x200|x201
     * Example Value: x200|x201
     */
    public function setNextTasks($nextTasks)
    {
        $this->nextTasks             = $nextTasks;
        $this->apiParas["next_tasks"]  = $nextTasks;
    }

    public function getNextTasks()
    {
        return $this->nextTasks;
    }

    /**
     * @param String[] $taskName
     * 任务名称
     * Required: true
     * Example Value: xx
     */
    private $taskName;

    /**
     * @param String[] $taskName
     * 任务名称
     * Example Value: xx
     */
    public function setTaskName($taskName)
    {
        $this->taskName             = $taskName;
        $this->apiParas["task_name"]  = $taskName;
    }

    public function getTaskName()
    {
        return $this->taskName;
    }

    /**
     * @param String[] $preTasks
     * 前置任务Id列表，任务Id之间用竖线（|）分隔，任务Id长度为32位，如：x100|x101
     * Required: false
     * Example Value: x100|x101
     */
    private $preTasks;

    /**
     * @param String[] $preTasks
     * 前置任务Id列表，任务Id之间用竖线（|）分隔，任务Id长度为32位，如：x100|x101
     * Example Value: x100|x101
     */
    public function setPreTasks($preTasks)
    {
        $this->preTasks             = $preTasks;
        $this->apiParas["pre_tasks"]  = $preTasks;
    }

    public function getPreTasks()
    {
        return $this->preTasks;
    }

    /**
     * @param String[] $taskId
     * 任务Id，长度为32位
     * Required: true
     * Example Value: x600
     */
    private $taskId;

    /**
     * @param String[] $taskId
     * 任务Id，长度为32位
     * Example Value: x600
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
     * @param String[] $extraInfo
     * 额外信息
     * Required: false
     * Example Value: xx
     */
    private $extraInfo;

    /**
     * @param String[] $extraInfo
     * 额外信息
     * Example Value: xx
     */
    public function setExtraInfo($extraInfo)
    {
        $this->extraInfo             = $extraInfo;
        $this->apiParas["extra_info"]  = $extraInfo;
    }

    public function getExtraInfo()
    {
        return $this->extraInfo;
    }

}