<?php

namespace JD\request;

/**
 * 新增或更新商圈
 * 京东房产-京东房产
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=253&apiId=2605&apiName=jingdong.ers.fang.saveTradingArea
 * Class ErsFangSaveTradingArea
 * @package Jd\request
 */
class ErsFangSaveTradingArea
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ers.fang.saveTradingArea";
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

    /**
     * @param String $tradingAreaName
     * 商圈名称
     * Required: true
     * Example Value: 
     */
    private $tradingAreaName;

    /**
     * @param String $tradingAreaName
     * 商圈名称
     * Example Value: 
     */
    public function setTradingAreaName($tradingAreaName)
    {
        $this->tradingAreaName             = $tradingAreaName;
        $this->apiParas["tradingAreaName"]  = $tradingAreaName;
    }

    public function getTradingAreaName()
    {
        return $this->tradingAreaName;
    }

    /**
     * @param String $addressLat
     * 商圈纬度
     * Required: true
     * Example Value: 
     */
    private $addressLat;

    /**
     * @param String $addressLat
     * 商圈纬度
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
     * @param String $addressLon
     * 商圈经度
     * Required: true
     * Example Value: 
     */
    private $addressLon;

    /**
     * @param String $addressLon
     * 商圈经度
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
     * @param Number $latLonType
     * 经纬度类型：1 百度经纬度， 2 高德经纬度， 3 腾讯经纬度
     * Required: true
     * Example Value: 
     */
    private $latLonType;

    /**
     * @param Number $latLonType
     * 经纬度类型：1 百度经纬度， 2 高德经纬度， 3 腾讯经纬度
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