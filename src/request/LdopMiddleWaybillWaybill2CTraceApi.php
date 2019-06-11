<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 2C全程物流跟踪接口
 * 京东快递API-提供获取青龙运单号、向京东物流系统提交运单信息、跟踪查询物流信息等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=64&apiId=2394&apiName=jingdong.ldop.middle.waybill.Waybill2CTraceApi
 * Class LdopMiddleWaybillWaybill2CTraceApi
 * @package Jd\request
 */
class LdopMiddleWaybillWaybill2CTraceApi
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ldop.middle.waybill.Waybill2CTraceApi";
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
     * @param string $tradeCode
     * 商家编码
     * Required: true
     * Example Value: 
     */
    private $tradeCode;

    /**
     * @param string $tradeCode
     * 商家编码
     * Example Value: 
     */
    public function setTradeCode($tradeCode)
    {
        $this->tradeCode             = $tradeCode;
        $this->apiParas["tradeCode"]  = $tradeCode;
    }

    public function getTradeCode()
    {
        return $this->tradeCode;
    }

    /**
     * @param string $waybillCode
     * 运单号
     * Required: true
     * Example Value: 
     */
    private $waybillCode;

    /**
     * @param string $waybillCode
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

}