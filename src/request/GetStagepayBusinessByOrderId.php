<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 根据门店帮订单号查询业务单信息
 * 订单API-订单API组(该组下所有接口均不支持自营店铺业务)
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=55&apiId=2256&apiName=jingdong.getStagepayBusinessByOrderId
 * Class GetStagepayBusinessByOrderId
 * @package Jd\request
 */
class GetStagepayBusinessByOrderId
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.getStagepayBusinessByOrderId";
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
     * 订单ID
     * Required: true
     * Example Value: 
     */
    private $orderId;

    /**
     * @param int $orderId
     * 订单ID
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