<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 检索单个SOP订单信息
 * 订单API-订单API组(该组下所有接口均不支持自营店铺业务)
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=55&apiId=1565&apiName=jingdong.pop.order.get
 * Class PopOrderGet
 * @package Jd\request
 */
class PopOrderGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.order.get";
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
     * @param string $orderState
     * 多订单状态可以用英文逗号隔开 请用英文逗号拼接英文状态传递给jos，而不是数字。1）WAIT_SELLER_STOCK_OUT 等待出库 2）WAIT_GOODS_RECEIVE_CONFIRM 等待确认收货  3）WAIT_SELLER_DELIVERY等待发货（只适用于海外购商家，含义为“等待境内发货”标签下的订单,非海外购商家无需使用） 4) PAUSE 暂停（loc订单可通过此状态获取） 5）FINISHED_L 完成 6）TRADE_CANCELED 取消 7）LOCKED 已锁定 8）POP_ORDER_PAUSE pop业务暂停，如3c号卡/履约/黄金的业务，可传此状态。
     * Required: false
     * Example Value: WAIT_SELLER_DELIVERY
     */
    private $orderState;

    /**
     * @param string $orderState
     * 多订单状态可以用英文逗号隔开 请用英文逗号拼接英文状态传递给jos，而不是数字。1）WAIT_SELLER_STOCK_OUT 等待出库 2）WAIT_GOODS_RECEIVE_CONFIRM 等待确认收货  3）WAIT_SELLER_DELIVERY等待发货（只适用于海外购商家，含义为“等待境内发货”标签下的订单,非海外购商家无需使用） 4) PAUSE 暂停（loc订单可通过此状态获取） 5）FINISHED_L 完成 6）TRADE_CANCELED 取消 7）LOCKED 已锁定 8）POP_ORDER_PAUSE pop业务暂停，如3c号卡/履约/黄金的业务，可传此状态。
     * Example Value: WAIT_SELLER_DELIVERY
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
     * @param string $optionalFields
     * 需返回的字段列表。可选值：orderInfo结构体中的所有字段；字段之间用,分隔 
     * Required: true
     * Example Value: venderId,orderType,payType
     */
    private $optionalFields;

    /**
     * @param string $optionalFields
     * 需返回的字段列表。可选值：orderInfo结构体中的所有字段；字段之间用,分隔 
     * Example Value: venderId,orderType,payType
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
     * @param int $orderId
     * 订单号,并且有效的订单号
     * Required: true
     * Example Value: 67834311
     */
    private $orderId;

    /**
     * @param int $orderId
     * 订单号,并且有效的订单号
     * Example Value: 67834311
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