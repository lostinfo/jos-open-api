<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 查询.快车.账户报表（含已删除数据）
 * 京准通-快车API-京准通快车相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=151&apiId=3425&apiName=jingdong.dsp.report.queryAccountReport
 * Class DspReportQueryAccountReport
 * @package Jd\request
 */
class DspReportQueryAccountReport
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.report.queryAccountReport";
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
     * @param bool $isDaily
     * 是否分日
     * Required: true
     * Example Value: 
     */
    private $isDaily;

    /**
     * @param bool $isDaily
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
     * @param string $platform
     * 设备(all: 全部，pc: PC，mobile:无线)
     * Required: true
     * Example Value: 
     */
    private $platform;

    /**
     * @param string $platform
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
     * @param int $clickOrOrderDay
     * 口径(0:当天，1:1天，3:3天，7:7天，15:15天)
     * Required: true
     * Example Value: 
     */
    private $clickOrOrderDay;

    /**
     * @param int $clickOrOrderDay
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
     * @param int $clickOrOrderCaliber
     * 点击口径/下单口径(0-点击口径，1-下单口径)
     * Required: true
     * Example Value: 
     */
    private $clickOrOrderCaliber;

    /**
     * @param int $clickOrOrderCaliber
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
     * @param int $orderStatusCategory
     * 全部订单/成交订单(null:全部订单，1: 成交订单)
     * Required: false
     * Example Value: 
     */
    private $orderStatusCategory;

    /**
     * @param int $orderStatusCategory
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