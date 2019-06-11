<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 添加小区价格记录
 * 京东房产-京东房产
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=253&apiId=2636&apiName=jingdong.ers.fang.addPlotRate
 * Class ErsFangAddPlotRate
 * @package Jd\request
 */
class ErsFangAddPlotRate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ers.fang.addPlotRate";
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
     * 来源小区id
     * Required: true
     * Example Value: 
     */
    private $pSourceId;

    /**
     * @param int $pSourceId
     * 来源小区id
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
     * @param int $dealAverageRate
     * 成交均价(元)
     * Required: true
     * Example Value: 
     */
    private $dealAverageRate;

    /**
     * @param int $dealAverageRate
     * 成交均价(元)
     * Example Value: 
     */
    public function setDealAverageRate($dealAverageRate)
    {
        $this->dealAverageRate             = $dealAverageRate;
        $this->apiParas["dealAverageRate"]  = $dealAverageRate;
    }

    public function getDealAverageRate()
    {
        return $this->dealAverageRate;
    }

    /**
     * @param int $averageRate
     * 挂牌均价(元)
     * Required: true
     * Example Value: 
     */
    private $averageRate;

    /**
     * @param int $averageRate
     * 挂牌均价(元)
     * Example Value: 
     */
    public function setAverageRate($averageRate)
    {
        $this->averageRate             = $averageRate;
        $this->apiParas["averageRate"]  = $averageRate;
    }

    public function getAverageRate()
    {
        return $this->averageRate;
    }

    /**
     * @param int $linkRelativeRate
     * 环比上月比例(保留四位小数)
     * Required: true
     * Example Value: 
     */
    private $linkRelativeRate;

    /**
     * @param int $linkRelativeRate
     * 环比上月比例(保留四位小数)
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