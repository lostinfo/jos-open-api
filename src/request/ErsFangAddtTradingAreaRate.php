<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 添加商圈价格记录
 * 京东房产-京东房产
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=253&apiId=2649&apiName=jingdong.ers.fang.addtTradingAreaRate
 * Class ErsFangAddtTradingAreaRate
 * @package Jd\request
 */
class ErsFangAddtTradingAreaRate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ers.fang.addtTradingAreaRate";
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
     * @param int $pSourceId
     * 来源商圈主键
     * Required: true
     * Example Value: 
     */
    private $pSourceId;

    /**
     * @param int $pSourceId
     * 来源商圈主键
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
     * @param int $tradingAreaRate
     * 商圈均价（元）
     * Required: true
     * Example Value: 
     */
    private $tradingAreaRate;

    /**
     * @param int $tradingAreaRate
     * 商圈均价（元）
     * Example Value: 
     */
    public function setTradingAreaRate($tradingAreaRate)
    {
        $this->tradingAreaRate             = $tradingAreaRate;
        $this->apiParas["tradingAreaRate"]  = $tradingAreaRate;
    }

    public function getTradingAreaRate()
    {
        return $this->tradingAreaRate;
    }

    /**
     * @param int $linkRelativeRate
     * 环比上月比例（保留四位小数）
     * Required: true
     * Example Value: 
     */
    private $linkRelativeRate;

    /**
     * @param int $linkRelativeRate
     * 环比上月比例（保留四位小数）
     * Example Value: 
     */
    public function setLinkRelativeRate($linkRelativeRate)
    {
        $this->linkRelativeRate             = $linkRelativeRate;
        $this->apiParas["linkRelativeRate"]  = $linkRelativeRate;
    }

    public function getLinkRelativeRate()
    {
        return $this->linkRelativeRate;
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