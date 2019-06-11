<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 营销活动创建更新
 * 数据API-数据开放API已下线，如有数据需求请进入云海数据开放平台（http://data.jd.com）进行申请。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=69&apiId=3643&apiName=jingdong.data.vender.marketing.activity.create
 * Class DataVenderMarketingActivityCreate
 * @package Jd\request
 */
class DataVenderMarketingActivityCreate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.data.vender.marketing.activity.create";
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
     * @param  $mode
     * 调度模式（1：单次，2：循环）
     * Required: true
     * Example Value: 1
     */
    private $mode;

    /**
     * @param  $mode
     * 调度模式（1：单次，2：循环）
     * Example Value: 1
     */
    public function setMode($mode)
    {
        $this->mode             = $mode;
        $this->apiParas["mode"]  = $mode;
    }

    public function getMode()
    {
        return $this->mode;
    }

    /**
     * @param string $mktActivityDes
     * 活动描述
     * Required: false
     * Example Value: 京东读书节
     */
    private $mktActivityDes;

    /**
     * @param string $mktActivityDes
     * 活动描述
     * Example Value: 京东读书节
     */
    public function setMktActivityDes($mktActivityDes)
    {
        $this->mktActivityDes             = $mktActivityDes;
        $this->apiParas["mkt_activity_des"]  = $mktActivityDes;
    }

    public function getMktActivityDes()
    {
        return $this->mktActivityDes;
    }

    /**
     * @param string $mktActivityId
     * 营销活动Id
     * Required: true
     * Example Value: xxxxx
     */
    private $mktActivityId;

    /**
     * @param string $mktActivityId
     * 营销活动Id
     * Example Value: xxxxx
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
     * @param string $startTime
     * 起始时间
     * Required: false
     * Example Value: 
     */
    private $startTime;

    /**
     * @param string $startTime
     * 起始时间
     * Example Value: 
     */
    public function setStartTime($startTime)
    {
        $this->startTime             = $startTime;
        $this->apiParas["start_time"]  = $startTime;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param string $endTime
     * 结束时间
     * Required: false
     * Example Value: 
     */
    private $endTime;

    /**
     * @param string $endTime
     * 结束时间
     * Example Value: 
     */
    public function setEndTime($endTime)
    {
        $this->endTime             = $endTime;
        $this->apiParas["end_time"]  = $endTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param  $state
     * 0：删除，1：未开始，2：进行中，3：完成，4：暂停，5：执行异常
     * Required: true
     * Example Value: 1
     */
    private $state;

    /**
     * @param  $state
     * 0：删除，1：未开始，2：进行中，3：完成，4：暂停，5：执行异常
     * Example Value: 1
     */
    public function setState($state)
    {
        $this->state             = $state;
        $this->apiParas["state"]  = $state;
    }

    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $mktActivityName
     * 活动名称
     * Required: true
     * Example Value: 京东读书节
     */
    private $mktActivityName;

    /**
     * @param string $mktActivityName
     * 活动名称
     * Example Value: 京东读书节
     */
    public function setMktActivityName($mktActivityName)
    {
        $this->mktActivityName             = $mktActivityName;
        $this->apiParas["mkt_activity_name"]  = $mktActivityName;
    }

    public function getMktActivityName()
    {
        return $this->mktActivityName;
    }

}