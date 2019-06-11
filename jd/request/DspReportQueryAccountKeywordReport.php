<?php

namespace JD\request;

/**
 * 查询.快车.关键词报表数据（仅返回有数据的关键词，含已删除）
 * 京准通-快车API-京准通快车相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=151&apiId=3459&apiName=jingdong.dsp.report.queryAccountKeywordReport
 * Class DspReportQueryAccountKeywordReport
 * @package Jd\request
 */
class DspReportQueryAccountKeywordReport
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.report.queryAccountKeywordReport";
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
     * @param Boolean $isDaily
     * 是否分日
     * Required: true
     * Example Value: 
     */
    private $isDaily;

    /**
     * @param Boolean $isDaily
     * 是否分日
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
     * @param String $platform
     * 设备(all: 全部，pc: PC，mobile:无线)
     * Required: true
     * Example Value: 
     */
    private $platform;

    /**
     * @param String $platform
     * 设备(all: 全部，pc: PC，mobile:无线)
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
     * @param Number $clickOrOrderDay
     * 口径(0:当天，1:1天，3:3天，7:7天，15:15天)
     * Required: true
     * Example Value: 
     */
    private $clickOrOrderDay;

    /**
     * @param Number $clickOrOrderDay
     * 口径(0:当天，1:1天，3:3天，7:7天，15:15天)
     * Example Value: 
     */
    public function setClickOrOrderDay($clickOrOrderDay)
    {
        $this->clickOrOrderDay             = $clickOrOrderDay;
        $this->apiParas["clickOrOrderDay"]  = $clickOrOrderDay;
    }

    public function getClickOrOrderDay()
    {
        return $this->clickOrOrderDay;
    }

    /**
     * @param Number $clickOrOrderCaliber
     * 点击口径/下单口径(0-点击口径，1-下单口径)
     * Required: true
     * Example Value: 
     */
    private $clickOrOrderCaliber;

    /**
     * @param Number $clickOrOrderCaliber
     * 点击口径/下单口径(0-点击口径，1-下单口径)
     * Example Value: 
     */
    public function setClickOrOrderCaliber($clickOrOrderCaliber)
    {
        $this->clickOrOrderCaliber             = $clickOrOrderCaliber;
        $this->apiParas["clickOrOrderCaliber"]  = $clickOrOrderCaliber;
    }

    public function getClickOrOrderCaliber()
    {
        return $this->clickOrOrderCaliber;
    }

    /**
     * @param Number $orderStatusCategory
     * 全部订单/成交订单(null:全部订单，1: 成交订单)
     * Required: false
     * Example Value: 
     */
    private $orderStatusCategory;

    /**
     * @param Number $orderStatusCategory
     * 全部订单/成交订单(null:全部订单，1: 成交订单)
     * Example Value: 
     */
    public function setOrderStatusCategory($orderStatusCategory)
    {
        $this->orderStatusCategory             = $orderStatusCategory;
        $this->apiParas["orderStatusCategory"]  = $orderStatusCategory;
    }

    public function getOrderStatusCategory()
    {
        return $this->orderStatusCategory;
    }

    /**
     * @param Number $campaignId
     * 计划id
     * Required: false
     * Example Value: 
     */
    private $campaignId;

    /**
     * @param Number $campaignId
     * 计划id
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
     * @param Number $groupId
     * 单元id
     * Required: false
     * Example Value: 
     */
    private $groupId;

    /**
     * @param Number $groupId
     * 单元id
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
     * @param String $valType
     * 购买类型(null: 全部, exact: 精确匹配, term: 短语匹配, segment: 切词匹配)
     * Required: false
     * Example Value: 
     */
    private $valType;

    /**
     * @param String $valType
     * 购买类型(null: 全部, exact: 精确匹配, term: 短语匹配, segment: 切词匹配)
     * Example Value: 
     */
    public function setValType($valType)
    {
        $this->valType             = $valType;
        $this->apiParas["valType"]  = $valType;
    }

    public function getValType()
    {
        return $this->valType;
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