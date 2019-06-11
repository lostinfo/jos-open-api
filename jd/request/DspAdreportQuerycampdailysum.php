<?php

namespace JD\request;

/**
 * 查询.聚效.计划报表数据
 * 京准通-品牌聚效API（展位）-京准通展位相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=341&apiId=1909&apiName=jingdong.dsp.adreport.querycampdailysum
 * Class DspAdreportQuerycampdailysum
 * @package Jd\request
 */
class DspAdreportQuerycampdailysum
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.adreport.querycampdailysum";
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
     * @param Number $campaignId
     * 推广计划
     * Required: false
     * Example Value: 
     */
    private $campaignId;

    /**
     * @param Number $campaignId
     * 推广计划
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
     * @param String $platform
     * 推广设备(全部:all;PC:pc;无线:mobile)
     * Required: true
     * Example Value: 
     */
    private $platform;

    /**
     * @param String $platform
     * 推广设备(全部:all;PC:pc;无线:mobile)
     * Example Value: 
     */
    public function setPlatform($platform)
    {
        $this->platform             = $platform;
        $this->apiParas["platform"]  = $platform;
    }

    public function getPlatform()
    {
        return $this->platform;
    }

    /**
     * @param Date $startDay
     * 起始日期
     * Required: true
     * Example Value: 
     */
    private $startDay;

    /**
     * @param Date $startDay
     * 起始日期
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
     * @param Date $endDay
     * 结束日期
     * Required: true
     * Example Value: 
     */
    private $endDay;

    /**
     * @param Date $endDay
     * 结束日期
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
     * @param Number $OrderStatusCategory
     * GMV订单类型(空:全部;1:成交订单)
     * Required: false
     * Example Value: 
     */
    private $OrderStatusCategory;

    /**
     * @param Number $OrderStatusCategory
     * GMV订单类型(空:全部;1:成交订单)
     * Example Value: 
     */
    public function setOrderStatusCategory($OrderStatusCategory)
    {
        $this->OrderStatusCategory             = $OrderStatusCategory;
        $this->apiParas["OrderStatusCategory"]  = $OrderStatusCategory;
    }

    public function getOrderStatusCategory()
    {
        return $this->OrderStatusCategory;
    }

    /**
     * @param Boolean $isTodayOr15Days
     * 是当天15天口径(true:15天;flase:当天)
     * Required: true
     * Example Value: 
     */
    private $isTodayOr15Days;

    /**
     * @param Boolean $isTodayOr15Days
     * 是当天15天口径(true:15天;flase:当天)
     * Example Value: 
     */
    public function setIsTodayOr15Days($isTodayOr15Days)
    {
        $this->isTodayOr15Days             = $isTodayOr15Days;
        $this->apiParas["isTodayOr15Days"]  = $isTodayOr15Days;
    }

    public function getIsTodayOr15Days()
    {
        return $this->isTodayOr15Days;
    }

    /**
     * @param Boolean $isOrderOrClick
     * 下单点击口径(true:下单口径;flase:点击口径)
     * Required: true
     * Example Value: 
     */
    private $isOrderOrClick;

    /**
     * @param Boolean $isOrderOrClick
     * 下单点击口径(true:下单口径;flase:点击口径)
     * Example Value: 
     */
    public function setIsOrderOrClick($isOrderOrClick)
    {
        $this->isOrderOrClick             = $isOrderOrClick;
        $this->apiParas["isOrderOrClick"]  = $isOrderOrClick;
    }

    public function getIsOrderOrClick()
    {
        return $this->isOrderOrClick;
    }

    /**
     * @param Boolean $isDaily
     * 分日报告
     * Required: true
     * Example Value: 
     */
    private $isDaily;

    /**
     * @param Boolean $isDaily
     * 分日报告
     * Example Value: 
     */
    public function setIsDaily($isDaily)
    {
        $this->isDaily             = $isDaily;
        $this->apiParas["isDaily"]  = $isDaily;
    }

    public function getIsDaily()
    {
        return $this->isDaily;
    }

    /**
     * @param Number $pageIndex
     * 当前页码
     * Required: true
     * Example Value: 
     */
    private $pageIndex;

    /**
     * @param Number $pageIndex
     * 当前页码
     * Example Value: 
     */
    public function setPageIndex($pageIndex)
    {
        $this->pageIndex             = $pageIndex;
        $this->apiParas["pageIndex"]  = $pageIndex;
    }

    public function getPageIndex()
    {
        return $this->pageIndex;
    }

    /**
     * @param Number $pageSize
     * 每页数量(最大值100)
     * Required: true
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 每页数量(最大值100)
     * Example Value: 
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize             = $pageSize;
        $this->apiParas["pageSize"]  = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

}