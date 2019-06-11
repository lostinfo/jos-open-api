<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 新增或修改站点数据
 * 京东房产-京东房产
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=253&apiId=2619&apiName=jingdong.ers.fang.addOrUpdateStation
 * Class ErsFangAddOrUpdateStation
 * @package Jd\request
 */
class ErsFangAddOrUpdateStation
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ers.fang.addOrUpdateStation";
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
     * @param int $cityCode
     * 城市code
     * Required: true
     * Example Value: 
     */
    private $cityCode;

    /**
     * @param int $cityCode
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
     * @param int $sourceId
     * 来源id
     * Required: true
     * Example Value: 
     */
    private $sourceId;

    /**
     * @param int $sourceId
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
     * @param string $stationName
     * 站点名称
     * Required: true
     * Example Value: 
     */
    private $stationName;

    /**
     * @param string $stationName
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
     * @param string $addressLon
     * 经度
     * Required: true
     * Example Value: 
     */
    private $addressLon;

    /**
     * @param string $addressLon
     * 经度
     * Example Value: 
     */
    public function setAddressLon($addressLon)
    {
        $this->addressLon             = $addressLon;
        $this->apiParas["addressLon"]  = $addressLon;
    }

    public function getAddressLon()
    {
        return $this->addressLon;
    }

    /**
     * @param string $addressLat
     * 纬度
     * Required: true
     * Example Value: 
     */
    private $addressLat;

    /**
     * @param string $addressLat
     * 纬度
     * Example Value: 
     */
    public function setAddressLat($addressLat)
    {
        $this->addressLat             = $addressLat;
        $this->apiParas["addressLat"]  = $addressLat;
    }

    public function getAddressLat()
    {
        return $this->addressLat;
    }

    /**
     * @param int $latLonType
     * 经纬度类型（0 腾讯，1 百度， 2 高德）
     * Required: true
     * Example Value: 
     */
    private $latLonType;

    /**
     * @param int $latLonType
     * 经纬度类型（0 腾讯，1 百度， 2 高德）
     * Example Value: 
     */
    public function setLatLonType($latLonType)
    {
        $this->latLonType             = $latLonType;
        $this->apiParas["latLonType"]  = $latLonType;
    }

    public function getLatLonType()
    {
        return $this->latLonType;
    }

}