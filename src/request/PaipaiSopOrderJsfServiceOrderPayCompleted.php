<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 修改商家业务订单状态为已支付
 * 拍拍业务-拍拍业务相关接口
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=382&apiId=3277&apiName=jingdong.paipai.sopOrderJsfService.orderPayCompleted
 * Class PaipaiSopOrderJsfServiceOrderPayCompleted
 * @package Jd\request
 */
class PaipaiSopOrderJsfServiceOrderPayCompleted
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.paipai.sopOrderJsfService.orderPayCompleted";
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
     * @param string $appKey
     * 商家AppKey
     * Required: true
     * Example Value: 3391A957E4A9EEC68B64BCFB7DD55C86
     */
    private $appKey;

    /**
     * @param string $appKey
     * 商家AppKey
     * Example Value: 3391A957E4A9EEC68B64BCFB7DD55C86
     */
    public function setAppKey($appKey)
    {
        $this->appKey             = $appKey;
        $this->apiParas["appKey"]  = $appKey;
    }

    public function getAppKey()
    {
        return $this->appKey;
    }

    /**
     * @param int $orderId
     * 业务订单号
     * Required: true
     * Example Value: 1111111111
     */
    private $orderId;

    /**
     * @param int $orderId
     * 业务订单号
     * Example Value: 1111111111
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