<?php

namespace JD\request;

/**
 * 查询任务状态
 * 移动店铺API-移动店铺新业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=202&apiId=1765&apiName=jingdong.miniwms.oc.order.queryOrderTask
 * Class MiniwmsOcOrderQueryOrderTask
 * @package Jd\request
 */
class MiniwmsOcOrderQueryOrderTask
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.miniwms.oc.order.queryOrderTask";
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
     * @param String $stationId
     * 移动仓ID
     * Required: true
     * Example Value: 
     */
    private $stationId;

    /**
     * @param String $stationId
     * 移动仓ID
     * Example Value: 
     */
    public function setStationId($stationId)
    {
        $this->stationId             = $stationId;
        $this->apiParas["stationId"]  = $stationId;
    }

    public function getStationId()
    {
        return $this->stationId;
    }

    /**
     * @param Number $taskId
     * 任务号
     * Required: true
     * Example Value: 
     */
    private $taskId;

    /**
     * @param Number $taskId
     * 任务号
     * Example Value: 
     */
    public function setTaskId($taskId)
    {
        $this->taskId             = $taskId;
        $this->apiParas["taskId"]  = $taskId;
    }

    public function getTaskId()
    {
        return $this->taskId;
    }

}