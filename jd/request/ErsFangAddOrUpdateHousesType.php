<?php

namespace JD\request;

/**
 * 修改或新增楼盘户型数据
 * 京东房产-京东房产
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=253&apiId=2638&apiName=jingdong.ers.fang.addOrUpdateHousesType
 * Class ErsFangAddOrUpdateHousesType
 * @package Jd\request
 */
class ErsFangAddOrUpdateHousesType
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ers.fang.addOrUpdateHousesType";
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
     * @param Number $pSourceId
     * 来源楼盘主键
     * Required: true
     * Example Value: 
     */
    private $pSourceId;

    /**
     * @param Number $pSourceId
     * 来源楼盘主键
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
     * @param  $room
     * 室
     * Required: true
     * Example Value: 
     */
    private $room;

    /**
     * @param  $room
     * 室
     * Example Value: 
     */
    public function setRoom($room)
    {
        $this->room             = $room;
        $this->apiParas["room"]  = $room;
    }

    public function getRoom()
    {
        return $this->room;
    }

    /**
     * @param  $hall
     * 厅
     * Required: true
     * Example Value: 
     */
    private $hall;

    /**
     * @param  $hall
     * 厅
     * Example Value: 
     */
    public function setHall($hall)
    {
        $this->hall             = $hall;
        $this->apiParas["hall"]  = $hall;
    }

    public function getHall()
    {
        return $this->hall;
    }

    /**
     * @param  $toilet
     * 卫
     * Required: false
     * Example Value: 
     */
    private $toilet;

    /**
     * @param  $toilet
     * 卫
     * Example Value: 
     */
    public function setToilet($toilet)
    {
        $this->toilet             = $toilet;
        $this->apiParas["toilet"]  = $toilet;
    }

    public function getToilet()
    {
        return $this->toilet;
    }

    /**
     * @param  $kitchen
     * 厨房
     * Required: false
     * Example Value: 
     */
    private $kitchen;

    /**
     * @param  $kitchen
     * 厨房
     * Example Value: 
     */
    public function setKitchen($kitchen)
    {
        $this->kitchen             = $kitchen;
        $this->apiParas["kitchen"]  = $kitchen;
    }

    public function getKitchen()
    {
        return $this->kitchen;
    }

    /**
     * @param String $housesTypeName
     * 户型名称
     * Required: true
     * Example Value: 
     */
    private $housesTypeName;

    /**
     * @param String $housesTypeName
     * 户型名称
     * Example Value: 
     */
    public function setHousesTypeName($housesTypeName)
    {
        $this->housesTypeName             = $housesTypeName;
        $this->apiParas["housesTypeName"]  = $housesTypeName;
    }

    public function getHousesTypeName()
    {
        return $this->housesTypeName;
    }

    /**
     * @param Number $minRate
     * 总价
     * Required: false
     * Example Value: 
     */
    private $minRate;

    /**
     * @param Number $minRate
     * 总价
     * Example Value: 
     */
    public function setMinRate($minRate)
    {
        $this->minRate             = $minRate;
        $this->apiParas["minRate"]  = $minRate;
    }

    public function getMinRate()
    {
        return $this->minRate;
    }

    /**
     * @param Number $buildArea
     * 建筑面积（单位 ㎡）
     * Required: false
     * Example Value: 
     */
    private $buildArea;

    /**
     * @param Number $buildArea
     * 建筑面积（单位 ㎡）
     * Example Value: 
     */
    public function setBuildArea($buildArea)
    {
        $this->buildArea             = $buildArea;
        $this->apiParas["buildArea"]  = $buildArea;
    }

    public function getBuildArea()
    {
        return $this->buildArea;
    }

    /**
     * @param Number $houseArea
     * 套内面积（单位 ㎡）
     * Required: false
     * Example Value: 
     */
    private $houseArea;

    /**
     * @param Number $houseArea
     * 套内面积（单位 ㎡）
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
     * @param Number $roomRate
     * 得房率（保留四位小数）
     * Required: false
     * Example Value: 
     */
    private $roomRate;

    /**
     * @param Number $roomRate
     * 得房率（保留四位小数）
     * Example Value: 
     */
    public function setRoomRate($roomRate)
    {
        $this->roomRate             = $roomRate;
        $this->apiParas["roomRate"]  = $roomRate;
    }

    public function getRoomRate()
    {
        return $this->roomRate;
    }

    /**
     * @param String $housesTypeImg
     * 户型图（经转换后的图片链接）
     * Required: false
     * Example Value: 
     */
    private $housesTypeImg;

    /**
     * @param String $housesTypeImg
     * 户型图（经转换后的图片链接）
     * Example Value: 
     */
    public function setHousesTypeImg($housesTypeImg)
    {
        $this->housesTypeImg             = $housesTypeImg;
        $this->apiParas["housesTypeImg"]  = $housesTypeImg;
    }

    public function getHousesTypeImg()
    {
        return $this->housesTypeImg;
    }

    /**
     * @param String $housesFeature
     * 户型特色
     * Required: false
     * Example Value: 
     */
    private $housesFeature;

    /**
     * @param String $housesFeature
     * 户型特色
     * Example Value: 
     */
    public function setHousesFeature($housesFeature)
    {
        $this->housesFeature             = $housesFeature;
        $this->apiParas["housesFeature"]  = $housesFeature;
    }

    public function getHousesFeature()
    {
        return $this->housesFeature;
    }

    /**
     * @param  $saleStatus
     * 销售状态(待售:1, 在售:2，售完: 3)
     * Required: false
     * Example Value: 
     */
    private $saleStatus;

    /**
     * @param  $saleStatus
     * 销售状态(待售:1, 在售:2，售完: 3)
     * Example Value: 
     */
    public function setSaleStatus($saleStatus)
    {
        $this->saleStatus             = $saleStatus;
        $this->apiParas["saleStatus"]  = $saleStatus;
    }

    public function getSaleStatus()
    {
        return $this->saleStatus;
    }

}