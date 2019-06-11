<?php

namespace JD\request;

/**
 * 新增或修改地铁数据
 * 京东房产-京东房产
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=253&apiId=2620&apiName=jingdong.ers.fang.addOrUpdateSubway
 * Class ErsFangAddOrUpdateSubway
 * @package Jd\request
 */
class ErsFangAddOrUpdateSubway
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ers.fang.addOrUpdateSubway";
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
     * @param Number $sourceId
     * 来源id
     * Required: true
     * Example Value: 
     */
    private $sourceId;

    /**
     * @param Number $sourceId
     * 来源id
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
     * @param String $cityName
     * 城市名称
     * Required: true
     * Example Value: 
     */
    private $cityName;

    /**
     * @param String $cityName
     * 城市名称
     * Example Value: 
     */
    public function setCityName($cityName)
    {
        $this->cityName             = $cityName;
        $this->apiParas["cityName"]  = $cityName;
    }

    public function getCityName()
    {
        return $this->cityName;
    }

    /**
     * @param String $subwayName
     * 地铁名称
     * Required: true
     * Example Value: 
     */
    private $subwayName;

    /**
     * @param String $subwayName
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

}