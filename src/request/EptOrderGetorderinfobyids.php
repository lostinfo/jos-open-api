<?php

namespca Lostinfo\JosOpenApi;

/**
 * 根据订单号列表获取订单详情列表
 * EPT全球售API-EPT全球售业务，开放订单查询、发货、商品查询、新增商品、修改商品等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=137&apiId=911&apiName=jingdong.ept.order.getorderinfobyids
 * Class EptOrderGetorderinfobyids
 * @package Jd\request
 */
class EptOrderGetorderinfobyids
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ept.order.getorderinfobyids";
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
     * @param int[] $orderId
     * 订单号
     * Required: true
     * Example Value: 
     */
    private $orderId;

    /**
     * @param int[] $orderId
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

}