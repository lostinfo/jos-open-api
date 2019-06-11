<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 取消删单申请
 * 订单API-订单API组(该组下所有接口均不支持自营店铺业务)
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=55&apiId=546&apiName=jingdong.order.orderDelete.cancelApply
 * Class OrderOrderDeleteCancelApply
 * @package Jd\request
 */
class OrderOrderDeleteCancelApply
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.order.orderDelete.cancelApply";
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
     * @param int $orderId
     * 京东订单编号，必须有效订单
     * Required: true
     * Example Value: 251171962
     */
    private $orderId;

    /**
     * @param int $orderId
     * 京东订单编号，必须有效订单
     * Example Value: 251171962
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