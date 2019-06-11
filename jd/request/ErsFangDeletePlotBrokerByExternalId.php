<?php

namespace JD\request;

/**
 * 跟据来源主键删除小区经纪人数据
 * 京东房产-京东房产
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=253&apiId=2940&apiName=jingdong.ers.fang.deletePlotBrokerByExternalId
 * Class ErsFangDeletePlotBrokerByExternalId
 * @package Jd\request
 */
class ErsFangDeletePlotBrokerByExternalId
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ers.fang.deletePlotBrokerByExternalId";
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
     * @param Number $cityCode
     * 城市code
     * Required: true
     * Example Value: 
     */
    private $cityCode;

    /**
     * @param Number $cityCode
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
     * @param Number $sourceId
     * 来源主键
     * Required: true
     * Example Value: 
     */
    private $sourceId;

    /**
     * @param Number $sourceId
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

}