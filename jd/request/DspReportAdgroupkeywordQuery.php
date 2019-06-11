<?php

namespace JD\request;

/**
 * 查询.快车.指定单元下关键词及对应效果数据
 * 京准通-快车API-京准通快车相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=151&apiId=1305&apiName=jingdong.dsp.report.adgroupkeyword.query
 * Class DspReportAdgroupkeywordQuery
 * @package Jd\request
 */
class DspReportAdgroupkeywordQuery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.report.adgroupkeyword.query";
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
     * 开始日期
     * Required: true
     * Example Value: 
     */
    private $startDay;

    /**
     * @param Date $startDay
     * 开始日期
     * Example Value: 
     */
    public function setStartDay($startDay)
    {
        $this->startDay             = $startDay;
        $this->apiParas["startDate"]  = $startDay;
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
        $this->apiParas["endDate"]  = $endDay;
    }

    public function getEndDay()
    {
        return $this->endDay;
    }

    /**
     * @param Number $groupId
     * 单元ID
     * Required: true
     * Example Value: 
     */
    private $groupId;

    /**
     * @param Number $groupId
     * 单元ID
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
     * @param String $platform
     * 投放设备 全部 all 计算机pc 移动设备 mobile
     * Required: false
     * Example Value: 
     */
    private $platform;

    /**
     * @param String $platform
     * 投放设备 全部 all 计算机pc 移动设备 mobile
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
     * @param String $valType
     * 购买类型exact精确匹配,term短语匹配,segment切词匹配
     * Required: false
     * Example Value: 
     */
    private $valType;

    /**
     * @param String $valType
     * 购买类型exact精确匹配,term短语匹配,segment切词匹配
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
     * @param String $val
     * 关键词
     * Required: false
     * Example Value: 
     */
    private $val;

    /**
     * @param String $val
     * 关键词
     * Example Value: 
     */
    public function setVal($val)
    {
        $this->val             = $val;
        $this->apiParas["val"]  = $val;
    }

    public function getVal()
    {
        return $this->val;
    }

    /**
     * @param Number $clickOrOrderDay
     * 当天/1天/15天  当天：0,1天：1， 15天：15
     * Required: true
     * Example Value: 
     */
    private $clickOrOrderDay;

    /**
     * @param Number $clickOrOrderDay
     * 当天/1天/15天  当天：0,1天：1， 15天：15
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
     * @param Boolean $isOrderOrClick
     * 选择口径  下单口径：true 点击口径：false
     * Required: true
     * Example Value: 
     */
    private $isOrderOrClick;

    /**
     * @param Boolean $isOrderOrClick
     * 选择口径  下单口径：true 点击口径：false
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
     * @param Number $orderStatusCategory
     * GMV订单类型(空:全部;1:成交订单)
     * Required: false
     * Example Value: 
     */
    private $orderStatusCategory;

    /**
     * @param Number $orderStatusCategory
     * GMV订单类型(空:全部;1:成交订单)
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
     * @param Number $pageIndex
     * 页码
     * Required: true
     * Example Value: 
     */
    private $pageIndex;

    /**
     * @param Number $pageIndex
     * 页码
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
     * 条数
     * Required: true
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 条数
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