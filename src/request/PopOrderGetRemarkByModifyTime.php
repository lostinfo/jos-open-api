<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 根据修改时间段获取订单备注
 * 订单API-订单API组(该组下所有接口均不支持自营店铺业务)
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=55&apiId=743&apiName=jingdong.pop.order.getRemarkByModifyTime
 * Class PopOrderGetRemarkByModifyTime
 * @package Jd\request
 */
class PopOrderGetRemarkByModifyTime
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.order.getRemarkByModifyTime";
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
     * @param string $startTime
     * 查询时间段起始点（起始时间与结束时间相差不超过一个月）
     * Required: true
     * Example Value: 2019-01-01 12:00:00
     */
    private $startTime;

    /**
     * @param string $startTime
     * 查询时间段起始点（起始时间与结束时间相差不超过一个月）
     * Example Value: 2019-01-01 12:00:00
     */
    public function setStartTime($startTime)
    {
        $this->startTime             = $startTime;
        $this->apiParas["startTime"]  = $startTime;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param string $endTime
     * 查询时间段结束点（起始时间与结束时间相差不超过一个月）
     * Required: true
     * Example Value: 2019-01-30 12:00:00
     */
    private $endTime;

    /**
     * @param string $endTime
     * 查询时间段结束点（起始时间与结束时间相差不超过一个月）
     * Example Value: 2019-01-30 12:00:00
     */
    public function setEndTime($endTime)
    {
        $this->endTime             = $endTime;
        $this->apiParas["endTime"]  = $endTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param int $page
     * 页码。（只返回第一页的数据，请使用时间滚动的方式获取数据；pageSize=100)
     * Required: true
     * Example Value: 1
     */
    private $page;

    /**
     * @param int $page
     * 页码。（只返回第一页的数据，请使用时间滚动的方式获取数据；pageSize=100)
     * Example Value: 1
     */
    public function setPage($page)
    {
        $this->page             = $page;
        $this->apiParas["page"]  = $page;
    }

    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param int $sortTime
     * 1 正序 -1 倒序
     * Required: true
     * Example Value: 1
     */
    private $sortTime;

    /**
     * @param int $sortTime
     * 1 正序 -1 倒序
     * Example Value: 1
     */
    public function setSortTime($sortTime)
    {
        $this->sortTime             = $sortTime;
        $this->apiParas["sortTime"]  = $sortTime;
    }

    public function getSortTime()
    {
        return $this->sortTime;
    }

}