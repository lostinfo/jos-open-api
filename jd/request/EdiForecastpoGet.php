<?php

namespace JD\request;

/**
 * 获取预测订单总目
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1965&apiName=jingdong.edi.forecastpo.get
 * Class EdiForecastpoGet
 * @package Jd\request
 */
class EdiForecastpoGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.edi.forecastpo.get";
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
     * @param Number $status
     * 预测订单状态: 1. 未发送; 2. 待确认; 3. 已确认 ; 4. 已取消
     * Required: true
     * Example Value: 
     */
    private $status;

    /**
     * @param Number $status
     * 预测订单状态: 1. 未发送; 2. 待确认; 3. 已确认 ; 4. 已取消
     * Example Value: 
     */
    public function setStatus($status)
    {
        $this->status             = $status;
        $this->apiParas["status"]  = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param Date $forecastTimeStart
     * 预测订单产生时间开始
     * Required: true
     * Example Value: 
     */
    private $forecastTimeStart;

    /**
     * @param Date $forecastTimeStart
     * 预测订单产生时间开始
     * Example Value: 
     */
    public function setForecastTimeStart($forecastTimeStart)
    {
        $this->forecastTimeStart             = $forecastTimeStart;
        $this->apiParas["forecastTimeStart"]  = $forecastTimeStart;
    }

    public function getForecastTimeStart()
    {
        return $this->forecastTimeStart;
    }

    /**
     * @param Date $forecastTimeEnd
     * 预测订单产生时间结束
     * Required: true
     * Example Value: 
     */
    private $forecastTimeEnd;

    /**
     * @param Date $forecastTimeEnd
     * 预测订单产生时间结束
     * Example Value: 
     */
    public function setForecastTimeEnd($forecastTimeEnd)
    {
        $this->forecastTimeEnd             = $forecastTimeEnd;
        $this->apiParas["forecastTimeEnd"]  = $forecastTimeEnd;
    }

    public function getForecastTimeEnd()
    {
        return $this->forecastTimeEnd;
    }

    /**
     * @param Number $pageNum
     * 当前页数，从1开始
     * Required: false
     * Example Value: 
     */
    private $pageNum;

    /**
     * @param Number $pageNum
     * 当前页数，从1开始
     * Example Value: 
     */
    public function setPageNum($pageNum)
    {
        $this->pageNum             = $pageNum;
        $this->apiParas["pageNum"]  = $pageNum;
    }

    public function getPageNum()
    {
        return $this->pageNum;
    }

    /**
     * @param Number $pageSize
     * 一页记录数目
     * Required: false
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 一页记录数目
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