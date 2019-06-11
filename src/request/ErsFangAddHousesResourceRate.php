<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 添加房源价格记录
 * 京东房产-京东房产
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=253&apiId=2760&apiName=jingdong.ers.fang.addHousesResourceRate
 * Class ErsFangAddHousesResourceRate
 * @package Jd\request
 */
class ErsFangAddHousesResourceRate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ers.fang.addHousesResourceRate";
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
     * @param int $channelId
     * 来源渠道id
     * Required: true
     * Example Value: 
     */
    private $channelId;

    /**
     * @param int $channelId
     * 来源渠道id
     * Example Value: 
     */
    public function setChannelId($channelId)
    {
        $this->channelId             = $channelId;
        $this->apiParas["channelId"]  = $channelId;
    }

    public function getChannelId()
    {
        return $this->channelId;
    }

    /**
     * @param int $totalPrice
     * 总价(万元/套)
     * Required: true
     * Example Value: 
     */
    private $totalPrice;

    /**
     * @param int $totalPrice
     * 总价(万元/套)
     * Example Value: 
     */
    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice             = $totalPrice;
        $this->apiParas["totalPrice"]  = $totalPrice;
    }

    public function getTotalPrice()
    {
        return $this->totalPrice;
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
     * @param int $pSourceId
     * 来源房源id
     * Required: true
     * Example Value: 
     */
    private $pSourceId;

    /**
     * @param int $pSourceId
     * 来源房源id
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

    /**
     * @param string $rateDate
     * 日期
     * Required: true
     * Example Value: 
     */
    private $rateDate;

    /**
     * @param string $rateDate
     * 日期
     * Example Value: 
     */
    public function setRateDate($rateDate)
    {
        $this->rateDate             = $rateDate;
        $this->apiParas["rateDate"]  = $rateDate;
    }

    public function getRateDate()
    {
        return $this->rateDate;
    }

}