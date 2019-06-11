<?php

namespace JD\request;

/**
 * 查询订单的应开发票金额
 * 金算盘API-pop商家计费结算
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=195&apiId=2934&apiName=jingdong.pop.invoice.self.amount
 * Class PopInvoiceSelfAmount
 * @package Jd\request
 */
class PopInvoiceSelfAmount
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.invoice.self.amount";
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
     * @param String $orderId
     * 订单编号
     * Required: true
     * Example Value: 
     */
    private $orderId;

    /**
     * @param String $orderId
     * 订单编号
     * Example Value: 
     */
    public function setOrderId($orderId)
    {
        $this->orderId             = $orderId;
        $this->apiParas["orderId"]  = $orderId;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

}