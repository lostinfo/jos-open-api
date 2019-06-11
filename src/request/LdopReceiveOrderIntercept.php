<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 运单拦截
 * 京东快递API-提供获取青龙运单号、向京东物流系统提交运单信息、跟踪查询物流信息等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=64&apiId=1435&apiName=jingdong.ldop.receive.order.intercept
 * Class LdopReceiveOrderIntercept
 * @package Jd\request
 */
class LdopReceiveOrderIntercept
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ldop.receive.order.intercept";
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
     * @param string $vendorCode
     * 商家编码
     * Required: true
     * Example Value: 
     */
    private $vendorCode;

    /**
     * @param string $vendorCode
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
     * @param string $deliveryId
     * 运单号
     * Required: true
     * Example Value: 
     */
    private $deliveryId;

    /**
     * @param string $deliveryId
     * 运单号
     * Example Value: 
     */
    public function setDeliveryId($deliveryId)
    {
        $this->deliveryId             = $deliveryId;
        $this->apiParas["deliveryId"]  = $deliveryId;
    }

    public function getDeliveryId()
    {
        return $this->deliveryId;
    }

    /**
     * @param string $interceptReason
     * 拦截原因
     * Required: true
     * Example Value: 
     */
    private $interceptReason;

    /**
     * @param string $interceptReason
     * 拦截原因
     * Example Value: 
     */
    public function setInterceptReason($interceptReason)
    {
        $this->interceptReason             = $interceptReason;
        $this->apiParas["interceptReason"]  = $interceptReason;
    }

    public function getInterceptReason()
    {
        return $this->interceptReason;
    }

}