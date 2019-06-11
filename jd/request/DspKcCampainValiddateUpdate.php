<?php

namespace JD\request;

/**
 * 操作.快车.修改计划投放时间和时段
 * 京准通-快车API-京准通快车相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=151&apiId=1302&apiName=jingdong.dsp.kc.campain.validdate.update
 * Class DspKcCampainValiddateUpdate
 * @package Jd\request
 */
class DspKcCampainValiddateUpdate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.kc.campain.validdate.update";
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
     * @param Number $id
     * 计划ID
     * Required: true
     * Example Value: 
     */
    private $id;

    /**
     * @param Number $id
     * 计划ID
     * Example Value: 
     */
    public function setId($id)
    {
        $this->id             = $id;
        $this->apiParas["campaignId"]  = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param Date $startTime
     * 开始时间
     * Required: true
     * Example Value: 
     */
    private $startTime;

    /**
     * @param Date $startTime
     * 开始时间
     * Example Value: 
     */
    public function setStartTime($startTime)
    {
        $this->startTime             = $startTime;
        $this->apiParas["startTime"]  = $startTime;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param Date $endTime
     * 结束时间
     * Required: false
     * Example Value: 
     */
    private $endTime;

    /**
     * @param Date $endTime
     * 结束时间
     * Example Value: 
     */
    public function setEndTime($endTime)
    {
        $this->endTime             = $endTime;
        $this->apiParas["endTime"]  = $endTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param String $timeRange
     * 投放时间段 如1:0-2|2:2-9|3:3-10|4:4-11|5:5-12|6:6-13|7:0-24
     * Required: true
     * Example Value: 
     */
    private $timeRange;

    /**
     * @param String $timeRange
     * 投放时间段 如1:0-2|2:2-9|3:3-10|4:4-11|5:5-12|6:6-13|7:0-24
     * Example Value: 
     */
    public function setTimeRange($timeRange)
    {
        $this->timeRange             = $timeRange;
        $this->apiParas["timeRange"]  = $timeRange;
    }

    public function getTimeRange()
    {
        return $this->timeRange;
    }

}