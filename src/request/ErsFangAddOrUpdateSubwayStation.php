<?php

namespace JD\request;

/**
 * 修改或新增地铁站点关系数据
 * 京东房产-京东房产
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=253&apiId=2621&apiName=jingdong.ers.fang.addOrUpdateSubwayStation
 * Class ErsFangAddOrUpdateSubwayStation
 * @package Jd\request
 */
class ErsFangAddOrUpdateSubwayStation
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ers.fang.addOrUpdateSubwayStation";
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
     * @param Number[] $cityCode
     * 城市code
     * Required: true
     * Example Value: 
     */
    private $cityCode;

    /**
     * @param Number[] $cityCode
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
     * @param Number[] $sourceId
     * 来源主键
     * Required: true
     * Example Value: 
     */
    private $sourceId;

    /**
     * @param Number[] $sourceId
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
     * @param Number[] $subwayId
     * 来源地铁主键
     * Required: true
     * Example Value: 
     */
    private $subwayId;

    /**
     * @param Number[] $subwayId
     * 来源地铁主键
     * Example Value: 
     */
    public function setSubwayId($subwayId)
    {
        $this->subwayId             = $subwayId;
        $this->apiParas["subwayId"]  = $subwayId;
    }

    public function getSubwayId()
    {
        return $this->subwayId;
    }

    /**
     * @param String[] $subwayName
     * 地铁名称
     * Required: true
     * Example Value: 
     */
    private $subwayName;

    /**
     * @param String[] $subwayName
     * 地铁名称
     * Example Value: 
     */
    public function setSubwayName($subwayName)
    {
        $this->subwayName             = $subwayName;
        $this->apiParas["subwayName"]  = $subwayName;
    }

    public function getSubwayName()
    {
        return $this->subwayName;
    }

    /**
     * @param Number[] $stationId
     * 来源站点主键
     * Required: true
     * Example Value: 
     */
    private $stationId;

    /**
     * @param Number[] $stationId
     * 来源站点主键
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
     * @param String[] $stationName
     * 站点名称
     * Required: true
     * Example Value: 
     */
    private $stationName;

    /**
     * @param String[] $stationName
     * 站点名称
     * Example Value: 
     */
    public function setStationName($stationName)
    {
        $this->stationName             = $stationName;
        $this->apiParas["stationName"]  = $stationName;
    }

    public function getStationName()
    {
        return $this->stationName;
    }

    /**
     * @param Number[] $serialNo
     * 站点序号
     * Required: false
     * Example Value: 
     */
    private $serialNo;

    /**
     * @param Number[] $serialNo
     * 站点序号
     * Example Value: 
     */
    public function setSerialNo($serialNo)
    {
        $this->serialNo             = $serialNo;
        $this->apiParas["serialNo"]  = $serialNo;
    }

    public function getSerialNo()
    {
        return $this->serialNo;
    }

    /**
     * @param Number[] $open
     * 是否启用(‘0''未开通 ‘1’已开通)
     * Required: true
     * Example Value: 
     */
    private $open;

    /**
     * @param Number[] $open
     * 是否启用(‘0''未开通 ‘1’已开通)
     * Example Value: 
     */
    public function setOpen($open)
    {
        $this->open             = $open;
        $this->apiParas["open"]  = $open;
    }

    public function getOpen()
    {
        return $this->open;
    }

}