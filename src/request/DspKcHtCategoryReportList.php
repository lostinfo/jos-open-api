<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 查询.海投.品类报表
 * 京准通-快车API-京准通快车相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=151&apiId=1915&apiName=jingdong.dsp.kc.ht.category.report.list
 * Class DspKcHtCategoryReportList
 * @package Jd\request
 */
class DspKcHtCategoryReportList
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.kc.ht.category.report.list";
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
     * 起始日期
     * Required: true
     * Example Value: 
     */
    private $startDay;

    /**
     * @param string $startDay
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
     * @param string $endDay
     * 结束日期
     * Required: true
     * Example Value: 
     */
    private $endDay;

    /**
     * @param string $endDay
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
     * @param bool $isOrderOrClick
     * 下单点击口径(true:下单口径;false:点击口径)
     * Required: true
     * Example Value: 
     */
    private $isOrderOrClick;

    /**
     * @param bool $isOrderOrClick
     * 下单点击口径(true:下单口径;false:点击口径)
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
     * @param bool $isTodayOr15Days
     * 是当天15天口径(true:15天;false:当天)
     * Required: true
     * Example Value: 
     */
    private $isTodayOr15Days;

    /**
     * @param bool $isTodayOr15Days
     * 是当天15天口径(true:15天;false:当天)
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
     * @param int $orderStatusCategory
     * GMV订单类型(空:全部;1:成交订单)
     * Required: false
     * Example Value: 
     */
    private $orderStatusCategory;

    /**
     * @param int $orderStatusCategory
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
     * @param string $platform
     * 推广设备(all:全部;pc:PC;mobile:移动)
     * Required: true
     * Example Value: 
     */
    private $platform;

    /**
     * @param string $platform
     * 推广设备(all:全部;pc:PC;mobile:移动)
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
     * @param string $val
     * 品类名称(支持模糊搜索)
     * Required: false
     * Example Value: 
     */
    private $val;

    /**
     * @param string $val
     * 品类名称(支持模糊搜索)
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
     * @param int $pageIndex
     * 当前页码
     * Required: true
     * Example Value: 
     */
    private $pageIndex;

    /**
     * @param int $pageIndex
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
     * @param int $pageSize
     * 每页数量(最大值100)
     * Required: true
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param int $pageSize
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