<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 操作.聚效.修改计划投放时间
 * 京准通-品牌聚效API（展位）-京准通展位相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=341&apiId=883&apiName=jingdong.dsp.campain.validdate.update
 * Class DspCampainValiddateUpdate
 * @package Jd\request
 */
class DspCampainValiddateUpdate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.campain.validdate.update";
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
     * @param int $id
     * 计划ID
     * Required: true
     * Example Value: 
     */
    private $id;

    /**
     * @param int $id
     * 计划ID
     * Example Value: 
     */
    public function setId($id)
    {
        $this->id             = $id;
        $this->apiParas["id"]  = $id;
    }

    public function getId()
    {
        return $this->id;
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
     * 投放时间段
     * Required: false
     * Example Value: 
     */
    private $timeRange;

    /**
     * @param string $timeRange
     * 投放时间段
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