<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 按小区纬度批量新增小区成交记录
 * 京东房产-京东房产
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=253&apiId=2646&apiName=jingdong.ers.fang.addDealAverageRecord
 * Class ErsFangAddDealAverageRecord
 * @package Jd\request
 */
class ErsFangAddDealAverageRecord
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ers.fang.addDealAverageRecord";
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
     * @param int[] $cityCode
     * 城市code
     * Required: true
     * Example Value: 
     */
    private $cityCode;

    /**
     * @param int[] $cityCode
     * 城市code
     * Example Value: 
     */
    public function setCityCode($cityCode)
    {
        $this->cityCode             = $cityCode;
        $this->apiParas["cityCode"]  = $cityCode;
    }

    public function getCityCode()
    {
        return $this->cityCode;
    }

    /**
     * @param int[] $sourceId
     * 来源主键
     * Required: true
     * Example Value: 
     */
    private $sourceId;

    /**
     * @param int[] $sourceId
     * 来源主键
     * Example Value: 
     */
    public function setSourceId($sourceId)
    {
        $this->sourceId             = $sourceId;
        $this->apiParas["sourceId"]  = $sourceId;
    }

    public function getSourceId()
    {
        return $this->sourceId;
    }

    /**
     * @param int[] $pSourceId
     * 来源小区主键
     * Required: true
     * Example Value: 
     */
    private $pSourceId;

    /**
     * @param int[] $pSourceId
     * 来源小区主键
     * Example Value: 
     */
    public function setPSourceId($pSourceId)
    {
        $this->pSourceId             = $pSourceId;
        $this->apiParas["pSourceId"]  = $pSourceId;
    }

    public function getPSourceId()
    {
        return $this->pSourceId;
    }

    /**
     * @param string[] $externalPlotName
     * 来源小区名称
     * Required: true
     * Example Value: 
     */
    private $externalPlotName;

    /**
     * @param string[] $externalPlotName
     * 来源小区名称
     * Example Value: 
     */
    public function setExternalPlotName($externalPlotName)
    {
        $this->externalPlotName             = $externalPlotName;
        $this->apiParas["externalPlotName"]  = $externalPlotName;
    }

    public function getExternalPlotName()
    {
        return $this->externalPlotName;
    }

    /**
     * @param int[] $totalRate
     * 总价(万元)
     * Required: true
     * Example Value: 
     */
    private $totalRate;

    /**
     * @param int[] $totalRate
     * 总价(万元)
     * Example Value: 
     */
    public function setTotalRate($totalRate)
    {
        $this->totalRate             = $totalRate;
        $this->apiParas["totalRate"]  = $totalRate;
    }

    public function getTotalRate()
    {
        return $this->totalRate;
    }

    /**
     * @param int[] $unitRate
     * 单价（元）
     * Required: true
     * Example Value: 
     */
    private $unitRate;

    /**
     * @param int[] $unitRate
     * 单价（元）
     * Example Value: 
     */
    public function setUnitRate($unitRate)
    {
        $this->unitRate             = $unitRate;
        $this->apiParas["unitRate"]  = $unitRate;
    }

    public function getUnitRate()
    {
        return $this->unitRate;
    }

    /**
     * @param int[] $houseArea
     * 面积（㎡）
     * Required: true
     * Example Value: 
     */
    private $houseArea;

    /**
     * @param int[] $houseArea
     * 面积（㎡）
     * Example Value: 
     */
    public function setHouseArea($houseArea)
    {
        $this->houseArea             = $houseArea;
        $this->apiParas["houseArea"]  = $houseArea;
    }

    public function getHouseArea()
    {
        return $this->houseArea;
    }

    /**
     * @param int[] $houseRoom
     * 居室 (0 全部， 1 一居， 2 二居， 3 三居， 4 四居， 5 五居及以上)
     * Required: true
     * Example Value: 
     */
    private $houseRoom;

    /**
     * @param int[] $houseRoom
     * 居室 (0 全部， 1 一居， 2 二居， 3 三居， 4 四居， 5 五居及以上)
     * Example Value: 
     */
    public function setHouseRoom($houseRoom)
    {
        $this->houseRoom             = $houseRoom;
        $this->apiParas["houseRoom"]  = $houseRoom;
    }

    public function getHouseRoom()
    {
        return $this->houseRoom;
    }

    /**
     * @param int[] $houseHall
     * 厅(0 0厅， 1 一厅， 2 二厅， 3 三厅， 4 四厅， 5 五厅及以上)
     * Required: true
     * Example Value: 
     */
    private $houseHall;

    /**
     * @param int[] $houseHall
     * 厅(0 0厅， 1 一厅， 2 二厅， 3 三厅， 4 四厅， 5 五厅及以上)
     * Example Value: 
     */
    public function setHouseHall($houseHall)
    {
        $this->houseHall             = $houseHall;
        $this->apiParas["houseHall"]  = $houseHall;
    }

    public function getHouseHall()
    {
        return $this->houseHall;
    }

    /**
     * @param string[] $finishTime
     * 成交日期
     * Required: true
     * Example Value: 
     */
    private $finishTime;

    /**
     * @param string[] $finishTime
     * 成交日期
     * Example Value: 
     */
    public function setFinishTime($finishTime)
    {
        $this->finishTime             = $finishTime;
        $this->apiParas["finishTime"]  = $finishTime;
    }

    public function getFinishTime()
    {
        return $this->finishTime;
    }

    /**
     * @param int[] $externalChannelId
     * 来源渠道id
     * Required: true
     * Example Value: 
     */
    private $externalChannelId;

    /**
     * @param int[] $externalChannelId
     * 来源渠道id
     * Example Value: 
     */
    public function setExternalChannelId($externalChannelId)
    {
        $this->externalChannelId             = $externalChannelId;
        $this->apiParas["externalChannelId"]  = $externalChannelId;
    }

    public function getExternalChannelId()
    {
        return $this->externalChannelId;
    }

    /**
     * @param string[] $externalChannelName
     * 来源渠道名称
     * Required: true
     * Example Value: 
     */
    private $externalChannelName;

    /**
     * @param string[] $externalChannelName
     * 来源渠道名称
     * Example Value: 
     */
    public function setExternalChannelName($externalChannelName)
    {
        $this->externalChannelName             = $externalChannelName;
        $this->apiParas["externalChannelName"]  = $externalChannelName;
    }

    public function getExternalChannelName()
    {
        return $this->externalChannelName;
    }

    /**
     * @param int[] $externalBrokerId
     * 来源经纪人id
     * Required: false
     * Example Value: 
     */
    private $externalBrokerId;

    /**
     * @param int[] $externalBrokerId
     * 来源经纪人id
     * Example Value: 
     */
    public function setExternalBrokerId($externalBrokerId)
    {
        $this->externalBrokerId             = $externalBrokerId;
        $this->apiParas["externalBrokerId"]  = $externalBrokerId;
    }

    public function getExternalBrokerId()
    {
        return $this->externalBrokerId;
    }

    /**
     * @param string[] $externalBrokerName
     * 来源经纪人名称
     * Required: false
     * Example Value: 
     */
    private $externalBrokerName;

    /**
     * @param string[] $externalBrokerName
     * 来源经纪人名称
     * Example Value: 
     */
    public function setExternalBrokerName($externalBrokerName)
    {
        $this->externalBrokerName             = $externalBrokerName;
        $this->apiParas["externalBrokerName"]  = $externalBrokerName;
    }

    public function getExternalBrokerName()
    {
        return $this->externalBrokerName;
    }

}