<?php

namespace JD\request;

/**
 * 取件单查询接口
 * 京东快递API-提供获取青龙运单号、向京东物流系统提交运单信息、跟踪查询物流信息等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=64&apiId=2349&apiName=jingdong.ldop.middle.waybill.WaybillPickupApi
 * Class LdopMiddleWaybillWaybillPickupApi
 * @package Jd\request
 */
class LdopMiddleWaybillWaybillPickupApi
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ldop.middle.waybill.WaybillPickupApi";
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
     * @param String $vendorCode
     * 商家编码
     * Required: true
     * Example Value: 
     */
    private $vendorCode;

    /**
     * @param String $vendorCode
     * 商家编码
     * Example Value: 
     */
    public function setVendorCode($vendorCode)
    {
        $this->vendorCode             = $vendorCode;
        $this->apiParas["vendorCode"]  = $vendorCode;
    }

    public function getVendorCode()
    {
        return $this->vendorCode;
    }

    /**
     * @param String $pickupCode
     * 取件单号
     * Required: true
     * Example Value: 
     */
    private $pickupCode;

    /**
     * @param String $pickupCode
     * 取件单号
     * Example Value: 
     */
    public function setPickupCode($pickupCode)
    {
        $this->pickupCode             = $pickupCode;
        $this->apiParas["pickupCode"]  = $pickupCode;
    }

    public function getPickupCode()
    {
        return $this->pickupCode;
    }

}