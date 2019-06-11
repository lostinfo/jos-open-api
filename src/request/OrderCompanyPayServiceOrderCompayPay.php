<?php

namespace JD\request;

/**
 * 企业回收订单支付方法
 * 拍拍业务-拍拍业务相关接口
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=382&apiId=3061&apiName=jingdong.orderCompanyPayService.orderCompayPay
 * Class OrderCompanyPayServiceOrderCompayPay
 * @package Jd\request
 */
class OrderCompanyPayServiceOrderCompayPay
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.orderCompanyPayService.orderCompayPay";
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
     * @param Number $payOrderType
     * 支付单业务类型:1-全款 2-订金 3-尾款 4-补款
     * Required: true
     * Example Value: 1
     */
    private $payOrderType;

    /**
     * @param Number $payOrderType
     * 支付单业务类型:1-全款 2-订金 3-尾款 4-补款
     * Example Value: 1
     */
    public function setPayOrderType($payOrderType)
    {
        $this->payOrderType             = $payOrderType;
        $this->apiParas["payOrderType"]  = $payOrderType;
    }

    public function getPayOrderType()
    {
        return $this->payOrderType;
    }

    /**
     * @param Number $payType
     * 支付方式:1-代付 2-代扣
     * Required: true
     * Example Value: 1
     */
    private $payType;

    /**
     * @param Number $payType
     * 支付方式:1-代付 2-代扣
     * Example Value: 1
     */
    public function setPayType($payType)
    {
        $this->payType             = $payType;
        $this->apiParas["payType"]  = $payType;
    }

    public function getPayType()
    {
        return $this->payType;
    }

    /**
     * @param Number $payAmount
     * 支付金额（分）
     * Required: true
     * Example Value: 100
     */
    private $payAmount;

    /**
     * @param Number $payAmount
     * 支付金额（分）
     * Example Value: 100
     */
    public function setPayAmount($payAmount)
    {
        $this->payAmount             = $payAmount;
        $this->apiParas["payAmount"]  = $payAmount;
    }

    public function getPayAmount()
    {
        return $this->payAmount;
    }

    /**
     * @param String $appOrderId
     * 商家订单id
     * Required: true
     * Example Value: 234asdf
     */
    private $appOrderId;

    /**
     * @param String $appOrderId
     * 商家订单id
     * Example Value: 234asdf
     */
    public function setAppOrderId($appOrderId)
    {
        $this->appOrderId             = $appOrderId;
        $this->apiParas["appOrderId"]  = $appOrderId;
    }

    public function getAppOrderId()
    {
        return $this->appOrderId;
    }

    /**
     * @param String $payTradeNo
     * 商家流水号
     * Required: true
     * Example Value: 3234234
     */
    private $payTradeNo;

    /**
     * @param String $payTradeNo
     * 商家流水号
     * Example Value: 3234234
     */
    public function setPayTradeNo($payTradeNo)
    {
        $this->payTradeNo             = $payTradeNo;
        $this->apiParas["payTradeNo"]  = $payTradeNo;
    }

    public function getPayTradeNo()
    {
        return $this->payTradeNo;
    }

}