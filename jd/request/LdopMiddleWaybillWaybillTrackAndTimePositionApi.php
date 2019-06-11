<?php

namespace JD\request;

/**
 * 获取订单实时位置接口
 * 京东快递API-提供获取青龙运单号、向京东物流系统提交运单信息、跟踪查询物流信息等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=64&apiId=2592&apiName=jingdong.ldop.middle.waybill.WaybillTrackAndTimePositionApi
 * Class LdopMiddleWaybillWaybillTrackAndTimePositionApi
 * @package Jd\request
 */
class LdopMiddleWaybillWaybillTrackAndTimePositionApi
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ldop.middle.waybill.WaybillTrackAndTimePositionApi";
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
     * @param String $waybillCode
     * 运单号
     * Required: true
     * Example Value: 
     */
    private $waybillCode;

    /**
     * @param String $waybillCode
     * 运单号
     * Example Value: 
     */
    public function setWaybillCode($waybillCode)
    {
        $this->waybillCode             = $waybillCode;
        $this->apiParas["waybillCode"]  = $waybillCode;
    }

    public function getWaybillCode()
    {
        return $this->waybillCode;
    }

    /**
     * @param Date $gpsTime
     * gps定位时间
     * Required: false
     * Example Value: 
     */
    private $gpsTime;

    /**
     * @param Date $gpsTime
     * gps定位时间
     * Example Value: 
     */
    public function setGpsTime($gpsTime)
    {
        $this->gpsTime             = $gpsTime;
        $this->apiParas["gpsTime"]  = $gpsTime;
    }

    public function getGpsTime()
    {
        return $this->gpsTime;
    }

    /**
     * @param String $customerCode
     * 商家编码
     * Required: true
     * Example Value: 
     */
    private $customerCode;

    /**
     * @param String $customerCode
     * 商家编码
     * Example Value: 
     */
    public function setCustomerCode($customerCode)
    {
        $this->customerCode             = $customerCode;
        $this->apiParas["customerCode"]  = $customerCode;
    }

    public function getCustomerCode()
    {
        return $this->customerCode;
    }

}