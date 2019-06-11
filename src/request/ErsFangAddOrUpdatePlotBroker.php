<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 修改或新增小区经纪人关系数据
 * 京东房产-京东房产
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=253&apiId=2755&apiName=jingdong.ers.fang.addOrUpdatePlotBroker
 * Class ErsFangAddOrUpdatePlotBroker
 * @package Jd\request
 */
class ErsFangAddOrUpdatePlotBroker
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ers.fang.addOrUpdatePlotBroker";
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
     * @param int $brokerId
     * 来源经纪人id
     * Required: true
     * Example Value: 
     */
    private $brokerId;

    /**
     * @param int $brokerId
     * 来源经纪人id
     * Example Value: 
     */
    public function setBrokerId($brokerId)
    {
        $this->brokerId             = $brokerId;
        $this->apiParas["brokerId"]  = $brokerId;
    }

    public function getBrokerId()
    {
        return $this->brokerId;
    }

    /**
     * @param int $plotId
     * 来源小区id
     * Required: true
     * Example Value: 
     */
    private $plotId;

    /**
     * @param int $plotId
     * 来源小区id
     * Example Value: 
     */
    public function setPlotId($plotId)
    {
        $this->plotId             = $plotId;
        $this->apiParas["plotId"]  = $plotId;
    }

    public function getPlotId()
    {
        return $this->plotId;
    }

    /**
     * @param  $recommend
     * 推荐经纪人（0 否， 1 是）
     * Required: true
     * Example Value: 
     */
    private $recommend;

    /**
     * @param  $recommend
     * 推荐经纪人（0 否， 1 是）
     * Example Value: 
     */
    public function setRecommend($recommend)
    {
        $this->recommend             = $recommend;
        $this->apiParas["recommend"]  = $recommend;
    }

    public function getRecommend()
    {
        return $this->recommend;
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
     * 来源主键
     * Required: true
     * Example Value: 
     */
    private $sourceId;

    /**
     * @param int $sourceId
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