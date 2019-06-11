<?php

namespace JD\request;

/**
 * 充值状态查询(用于精准营销短信)
 * 数据API-数据开放API已下线，如有数据需求请进入云海数据开放平台（http://data.jd.com）进行申请。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=69&apiId=2976&apiName=jingdong.data.vender.sms.recharge.status
 * Class DataVenderSmsRechargeStatus
 * @package Jd\request
 */
class DataVenderSmsRechargeStatus
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.data.vender.sms.recharge.status";
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
     * @param String $startDate
     * 开始日期
     * Required: true
     * Example Value: 
     */
    private $startDate;

    /**
     * @param String $startDate
     * 开始日期
     * Example Value: 
     */
    public function setStartDate($startDate)
    {
        $this->startDate             = $startDate;
        $this->apiParas["start_date"]  = $startDate;
    }

    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param String $endDate
     * 结束日期
     * Required: true
     * Example Value: 
     */
    private $endDate;

    /**
     * @param String $endDate
     * 结束日期
     * Example Value: 
     */
    public function setEndDate($endDate)
    {
        $this->endDate             = $endDate;
        $this->apiParas["end_date"]  = $endDate;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }

}