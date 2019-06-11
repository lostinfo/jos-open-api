<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 查询sam订单详情
 * 订单API-订单API组(该组下所有接口均不支持自营店铺业务)
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=55&apiId=3171&apiName=jingdong.sam.order.detail.querynew
 * Class SamOrderDetailQuerynew
 * @package Jd\request
 */
class SamOrderDetailQuerynew
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.sam.order.detail.querynew";
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
     * 京东订单号
     * Required: true
     * Example Value: 
     */
    private $orderId;

    /**
     * @param int[] $orderId
     * 京东订单号
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