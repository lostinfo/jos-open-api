<?php

namespace JD\request;

/**
 * 查询质检报告列表
 * 品控质检API-品控质检API为您提供新增质检报告、获得质检报告、获取订购关系、查询质检报告列表、删除质检报告、更新质检报告六个品控质检API.
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=65&apiId=250&apiName=jingdong.market.service.qt.report.list.get
 * Class MarketServiceQtReportListGet
 * @package Jd\request
 */
class MarketServiceQtReportListGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.market.service.qt.report.list.get";
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
     * @param String $serviceItemCode
     * 服务收费项目code
     * Required: true
     * Example Value: FW_GOODS-10000-1
     */
    private $serviceItemCode;

    /**
     * @param String $serviceItemCode
     * 服务收费项目code
     * Example Value: FW_GOODS-10000-1
     */
    public function setServiceItemCode($serviceItemCode)
    {
        $this->serviceItemCode             = $serviceItemCode;
        $this->apiParas["service_item_code"]  = $serviceItemCode;
    }

    public function getServiceItemCode()
    {
        return $this->serviceItemCode;
    }

    /**
     * @param Number $qtType
     * 质检活动类型   1：入驻京东、2：京东活动、3：质检打标、0：其他、4：品质优选、5：拼购验厂、6：食品验厂
     * Required: false
     * Example Value: 0
     */
    private $qtType;

    /**
     * @param Number $qtType
     * 质检活动类型   1：入驻京东、2：京东活动、3：质检打标、0：其他、4：品质优选、5：拼购验厂、6：食品验厂
     * Example Value: 0
     */
    public function setQtType($qtType)
    {
        $this->qtType             = $qtType;
        $this->apiParas["qt_type"]  = $qtType;
    }

    public function getQtType()
    {
        return $this->qtType;
    }

    /**
     * @param String $spName
     * 质检服务商名称
     * Required: true
     * Example Value: SGS质检服务商
     */
    private $spName;

    /**
     * @param String $spName
     * 质检服务商名称
     * Example Value: SGS质检服务商
     */
    public function setSpName($spName)
    {
        $this->spName             = $spName;
        $this->apiParas["sp_name"]  = $spName;
    }

    public function getSpName()
    {
        return $this->spName;
    }

    /**
     * @param String $startTime
     * 查询时间段的开始时间，格式：yyyy-MM-dd HH:mm:ss
     * Required: false
     * Example Value: 2013-03-18 15:14:01
     */
    private $startTime;

    /**
     * @param String $startTime
     * 查询时间段的开始时间，格式：yyyy-MM-dd HH:mm:ss
     * Example Value: 2013-03-18 15:14:01
     */
    public function setStartTime($startTime)
    {
        $this->startTime             = $startTime;
        $this->apiParas["start_time"]  = $startTime;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param String $endTime
     * 查询时间段的结束时间，格式：yyyy-MM-dd HH:mm:ss
     * Required: false
     * Example Value: 2013-03-18 15:14:01
     */
    private $endTime;

    /**
     * @param String $endTime
     * 查询时间段的结束时间，格式：yyyy-MM-dd HH:mm:ss
     * Example Value: 2013-03-18 15:14:01
     */
    public function setEndTime($endTime)
    {
        $this->endTime             = $endTime;
        $this->apiParas["end_time"]  = $endTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param String $pin
     * 送检人京东pin
     * Required: true
     * Example Value: jd_pin
     */
    private $pin;

    /**
     * @param String $pin
     * 送检人京东pin
     * Example Value: jd_pin
     */
    public function setPin($pin)
    {
        $this->pin             = $pin;
        $this->apiParas["pin"]  = $pin;
    }

    public function getPin()
    {
        return $this->pin;
    }

}