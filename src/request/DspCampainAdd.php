<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 操作.聚效.新增计划（不含店铺计划）
 * 京准通-品牌聚效API（展位）-京准通展位相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=341&apiId=874&apiName=jingdong.dsp.campain.add
 * Class DspCampainAdd
 * @package Jd\request
 */
class DspCampainAdd
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.campain.add";
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
     * @param string $name
     * 计划名称
     * Required: true
     * Example Value: 
     */
    private $name;

    /**
     * @param string $name
     * 计划名称
     * Example Value: 
     */
    public function setName($name)
    {
        $this->name             = $name;
        $this->apiParas["name"]  = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $startTime
     * 开始时间
     * Required: true
     * Example Value: 
     */
    private $startTime;

    /**
     * @param string $startTime
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
        $this->apiParas["endTime"]  = $endTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param string $timeRange
     * 投放时间段 如1:0-2|2:2-9|3:3-10|4:4-11|5:5-12|6:6-13|7:0-24
     * Required: false
     * Example Value: 
     */
    private $timeRange;

    /**
     * @param string $timeRange
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

    /**
     * @param int $dayBudget
     * 预算 当匀速投放为是时必须填写
     * Required: false
     * Example Value: 
     */
    private $dayBudget;

    /**
     * @param int $dayBudget
     * 预算 当匀速投放为是时必须填写
     * Example Value: 
     */
    public function setDayBudget($dayBudget)
    {
        $this->dayBudget             = $dayBudget;
        $this->apiParas["dayBudget"]  = $dayBudget;
    }

    public function getDayBudget()
    {
        return $this->dayBudget;
    }

    /**
     * @param int $uniformSpeed
     * 匀速投放 0为否 1为是
     * Required: true
     * Example Value: 
     */
    private $uniformSpeed;

    /**
     * @param int $uniformSpeed
     * 匀速投放 0为否 1为是
     * Example Value: 
     */
    public function setUniformSpeed($uniformSpeed)
    {
        $this->uniformSpeed             = $uniformSpeed;
        $this->apiParas["uniformSpeed"]  = $uniformSpeed;
    }

    public function getUniformSpeed()
    {
        return $this->uniformSpeed;
    }

}