<?php

namespca Lostinfo\JosOpenApi;

/**
 * 查询.通用.查询指定计划/单元/创意小时粒度效果数据
 * 京准通-品牌聚效API（展位）-京准通展位相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=341&apiId=2958&apiName=jingdong.dsp.adreport.trendChart.get
 * Class DspAdreportTrendChartGet
 * @package Jd\request
 */
class DspAdreportTrendChartGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.adreport.trendChart.get";
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
     * @param string $startDay
     * 开始时间 yyyy-MM-dd
     * Required: true
     * Example Value: 
     */
    private $startDay;

    /**
     * @param string $startDay
     * 开始时间 yyyy-MM-dd
     * Example Value: 
     */
    public function setStartDay($startDay)
    {
        $this->startDay             = $startDay;
        $this->apiParas["startDay"]  = $startDay;
    }

    public function getStartDay()
    {
        return $this->startDay;
    }

    /**
     * @param string $endDay
     * 截止时间 yyyy-MM-dd
     * Required: true
     * Example Value: 
     */
    private $endDay;

    /**
     * @param string $endDay
     * 截止时间 yyyy-MM-dd
     * Example Value: 
     */
    public function setEndDay($endDay)
    {
        $this->endDay             = $endDay;
        $this->apiParas["endDay"]  = $endDay;
    }

    public function getEndDay()
    {
        return $this->endDay;
    }

    /**
     * @param int $businessType
     * 业务线1:聚效，2:快车
     * Required: true
     * Example Value: 
     */
    private $businessType;

    /**
     * @param int $businessType
     * 业务线1:聚效，2:快车
     * Example Value: 
     */
    public function setBusinessType($businessType)
    {
        $this->businessType             = $businessType;
        $this->apiParas["businessType"]  = $businessType;
    }

    public function getBusinessType()
    {
        return $this->businessType;
    }

    /**
     * @param int $granularity
     * 数据聚合粒度 {天: 1, 小时: 4, 30分钟: 5, 10分钟: 10, 1分钟:7}
     * Required: true
     * Example Value: 
     */
    private $granularity;

    /**
     * @param int $granularity
     * 数据聚合粒度 {天: 1, 小时: 4, 30分钟: 5, 10分钟: 10, 1分钟:7}
     * Example Value: 
     */
    public function setGranularity($granularity)
    {
        $this->granularity             = $granularity;
        $this->apiParas["granularity"]  = $granularity;
    }

    public function getGranularity()
    {
        return $this->granularity;
    }

    /**
     * @param int $campaignId
     * campaignId
     * Required: false
     * Example Value: 
     */
    private $campaignId;

    /**
     * @param int $campaignId
     * campaignId
     * Example Value: 
     */
    public function setCampaignId($campaignId)
    {
        $this->campaignId             = $campaignId;
        $this->apiParas["campaignId"]  = $campaignId;
    }

    public function getCampaignId()
    {
        return $this->campaignId;
    }

    /**
     * @param int $groupId
     * groupId
     * Required: false
     * Example Value: 
     */
    private $groupId;

    /**
     * @param int $groupId
     * groupId
     * Example Value: 
     */
    public function setGroupId($groupId)
    {
        $this->groupId             = $groupId;
        $this->apiParas["groupId"]  = $groupId;
    }

    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * @param int $adId
     * adId
     * Required: false
     * Example Value: 
     */
    private $adId;

    /**
     * @param int $adId
     * adId
     * Example Value: 
     */
    public function setAdId($adId)
    {
        $this->adId             = $adId;
        $this->apiParas["adId"]  = $adId;
    }

    public function getAdId()
    {
        return $this->adId;
    }

}