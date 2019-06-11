<?php

namespace JD\request;

/**
 * 检索单个订单信息
 * 订单API-订单API组(该组下所有接口均不支持自营店铺业务)
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=55&apiId=2389&apiName=jingdong.pop.order.enGet
 * Class PopOrderEnGet
 * @package Jd\request
 */
class PopOrderEnGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.order.enGet";
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
     * @param String $orderState
     * 多订单状态可以用英文逗号隔开 请用英文逗号拼接英文状态传递给jos，而不是数字。1）WAIT_SELLER_STOCK_OUT 等待出库 2）WAIT_GOODS_RECEIVE_CONFIRM 等待确认收货  3）WAIT_SELLER_DELIVERY等待发货（只适用于海外购商家，含义为'等待境内发货'标签下的订单,非海外购商家无需使用） 4) PAUSE 暂停（loc订单可通过此状态获取） 5）FINISHED_L 完成 6）TRADE_CANCELED 取消 7）LOCKED 已锁定 8）POP_ORDER_PAUSE pop业务暂停，如3c号卡/履约/黄金的业务，可传此状态。
     * Required: false
     * Example Value: 
     */
    private $orderState;

    /**
     * @param String $orderState
     * 多订单状态可以用英文逗号隔开 请用英文逗号拼接英文状态传递给jos，而不是数字。1）WAIT_SELLER_STOCK_OUT 等待出库 2）WAIT_GOODS_RECEIVE_CONFIRM 等待确认收货  3）WAIT_SELLER_DELIVERY等待发货（只适用于海外购商家，含义为'等待境内发货'标签下的订单,非海外购商家无需使用） 4) PAUSE 暂停（loc订单可通过此状态获取） 5）FINISHED_L 完成 6）TRADE_CANCELED 取消 7）LOCKED 已锁定 8）POP_ORDER_PAUSE pop业务暂停，如3c号卡/履约/黄金的业务，可传此状态。
     * Example Value: 
     */
    public function setOrderState($orderState)
    {
        $this->orderState             = $orderState;
        $this->apiParas["order_state"]  = $orderState;
    }

    public function getOrderState()
    {
        return $this->orderState;
    }

    /**
     * @param String $optionalFields
     * 需返回的字段列表。可选值：orderInfo结构体中的所有字段；字段之间用,分隔 
     * Required: true
     * Example Value: 
     */
    private $optionalFields;

    /**
     * @param String $optionalFields
     * 需返回的字段列表。可选值：orderInfo结构体中的所有字段；字段之间用,分隔 
     * Example Value: 
     */
    public function setOptionalFields($optionalFields)
    {
        $this->optionalFields             = $optionalFields;
        $this->apiParas["optional_fields"]  = $optionalFields;
    }

    public function getOptionalFields()
    {
        return $this->optionalFields;
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
        $this->apiParas["order_id"]  = $orderId;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

}