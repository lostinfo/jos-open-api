<?php

namespace JD\request;

/**
 * 订单发货
 * EPT全球售API-EPT全球售业务，开放订单查询、发货、商品查询、新增商品、修改商品等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=137&apiId=898&apiName=jingdong.ept.order.deliveryorder
 * Class EptOrderDeliveryorder
 * @package Jd\request
 */
class EptOrderDeliveryorder
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ept.order.deliveryorder";
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
     * 订单号
     * Required: true
     * Example Value: 
     */
    private $orderId;

    /**
     * @param Number $orderId
     * 订单号
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

    /**
     * @param String $expressNo
     * 运单号
     * Required: true
     * Example Value: 
     */
    private $expressNo;

    /**
     * @param String $expressNo
     * 运单号
     * Example Value: 
     */
    public function setExpressNo($expressNo)
    {
        $this->expressNo             = $expressNo;
        $this->apiParas["expressNo"]  = $expressNo;
    }

    public function getExpressNo()
    {
        return $this->expressNo;
    }

}