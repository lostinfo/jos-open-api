<?php

namespace JD\request;

/**
 * 合同同步
 * 京东房产-京东房产
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=253&apiId=2284&apiName=jingdong.nbhouse.rent.contract.queryBetweenTime
 * Class NbhouseRentContractQueryBetweenTime
 * @package Jd\request
 */
class NbhouseRentContractQueryBetweenTime
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.nbhouse.rent.contract.queryBetweenTime";
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
     * @param Date $startTime
     * 起始时间
     * Required: true
     * Example Value: 
     */
    private $startTime;

    /**
     * @param Date $startTime
     * 起始时间
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
     * Required: true
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

}