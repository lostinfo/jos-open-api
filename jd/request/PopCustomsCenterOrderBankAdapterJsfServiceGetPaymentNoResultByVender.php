<?php

namespace JD\request;

/**
 * 获取台账信息(商家维度)
 * 商品API-提供网站商品信息更新、查询API,该组下所有接口均不支持自营店铺业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=48&apiId=1370&apiName=jingdong.pop.customs.center.OrderBankAdapterJsfService.getPaymentNoResultByVender
 * Class PopCustomsCenterOrderBankAdapterJsfServiceGetPaymentNoResultByVender
 * @package Jd\request
 */
class PopCustomsCenterOrderBankAdapterJsfServiceGetPaymentNoResultByVender
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.customs.center.OrderBankAdapterJsfService.getPaymentNoResultByVender";
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
     * @param Number $orderId
     * 订单id
     * Required: true
     * Example Value: 
     */
    private $orderId;

    /**
     * @param Number $orderId
     * 订单id
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