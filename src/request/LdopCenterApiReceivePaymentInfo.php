<?php

namespace JD\request;

/**
 * 收到支付信息接口
 * 京东快递API-提供获取青龙运单号、向京东物流系统提交运单信息、跟踪查询物流信息等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=64&apiId=2242&apiName=jingdong.ldop.center.api.receivePaymentInfo
 * Class LdopCenterApiReceivePaymentInfo
 * @package Jd\request
 */
class LdopCenterApiReceivePaymentInfo
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ldop.center.api.receivePaymentInfo";
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
     * @param String $deliveryId
     * 运单号
     * Required: true
     * Example Value: 
     */
    private $deliveryId;

    /**
     * @param String $deliveryId
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

    /**
     * @param Number $recMoney
     * 应收款
     * Required: true
     * Example Value: 
     */
    private $recMoney;

    /**
     * @param Number $recMoney
     * 应收款
     * Example Value: 
     */
    public function setRecMoney($recMoney)
    {
        $this->recMoney             = $recMoney;
        $this->apiParas["recMoney"]  = $recMoney;
    }

    public function getRecMoney()
    {
        return $this->recMoney;
    }

    /**
     * @param Number $receivedMoney
     * 实际收款
     * Required: true
     * Example Value: 
     */
    private $receivedMoney;

    /**
     * @param Number $receivedMoney
     * 实际收款
     * Example Value: 
     */
    public function setReceivedMoney($receivedMoney)
    {
        $this->receivedMoney             = $receivedMoney;
        $this->apiParas["receivedMoney"]  = $receivedMoney;
    }

    public function getReceivedMoney()
    {
        return $this->receivedMoney;
    }

    /**
     * @param Number $paymentState
     * 付款状态 1:未支付 2：支付失败3：支付成功
     * Required: true
     * Example Value: 
     */
    private $paymentState;

    /**
     * @param Number $paymentState
     * 付款状态 1:未支付 2：支付失败3：支付成功
     * Example Value: 
     */
    public function setPaymentState($paymentState)
    {
        $this->paymentState             = $paymentState;
        $this->apiParas["paymentState"]  = $paymentState;
    }

    public function getPaymentState()
    {
        return $this->paymentState;
    }

    /**
     * @param Date $paymentTime
     * 支付时间
     * Required: true
     * Example Value: 
     */
    private $paymentTime;

    /**
     * @param Date $paymentTime
     * 支付时间
     * Example Value: 
     */
    public function setPaymentTime($paymentTime)
    {
        $this->paymentTime             = $paymentTime;
        $this->apiParas["paymentTime"]  = $paymentTime;
    }

    public function getPaymentTime()
    {
        return $this->paymentTime;
    }

    /**
     * @param String $payer
     * 支付人
     * Required: true
     * Example Value: 
     */
    private $payer;

    /**
     * @param String $payer
     * 支付人
     * Example Value: 
     */
    public function setPayer($payer)
    {
        $this->payer             = $payer;
        $this->apiParas["payer"]  = $payer;
    }

    public function getPayer()
    {
        return $this->payer;
    }

}