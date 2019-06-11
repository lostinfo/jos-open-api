<?php

namespace JD\request;

/**
 * 查询商家备注
 * 订单API-订单API组(该组下所有接口均不支持自营店铺业务)
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=55&apiId=549&apiName=jingdong.order.venderRemark.queryByOrderId
 * Class OrderVenderRemarkQueryByOrderId
 * @package Jd\request
 */
class OrderVenderRemarkQueryByOrderId
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.order.venderRemark.queryByOrderId";
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
     * 订单编号
     * Required: true
     * Example Value: 6000300009
     */
    private $orderId;

    /**
     * @param Number $orderId
     * 订单编号
     * Example Value: 6000300009
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