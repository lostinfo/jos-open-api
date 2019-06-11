<?php

namespace JD\request;

/**
 * 商家业务订单取消
 * 拍拍业务-拍拍业务相关接口
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=382&apiId=3259&apiName=jingdong.paipai.sopOrderJsfService.orderCancel
 * Class PaipaiSopOrderJsfServiceOrderCancel
 * @package Jd\request
 */
class PaipaiSopOrderJsfServiceOrderCancel
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.paipai.sopOrderJsfService.orderCancel";
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
     * @param String $appKey
     * 商家AppKey
     * Required: true
     * Example Value: 3391A957E4A9EEC68B64BCFB7DD55C86
     */
    private $appKey;

    /**
     * @param String $appKey
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
     * @param Number $orderId
     * 业务订单号
     * Required: true
     * Example Value: 1111111111
     */
    private $orderId;

    /**
     * @param Number $orderId
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

    /**
     * @param String $userId
     * 商家系统内用户id
     * Required: true
     * Example Value: 4798
     */
    private $userId;

    /**
     * @param String $userId
     * 商家系统内用户id
     * Example Value: 4798
     */
    public function setUserId($userId)
    {
        $this->userId             = $userId;
        $this->apiParas["userId"]  = $userId;
    }

    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param String $orderCancelReason
     * 订单取消原因
     * Required: true
     * Example Value: 订单取消
     */
    private $orderCancelReason;

    /**
     * @param String $orderCancelReason
     * 订单取消原因
     * Example Value: 订单取消
     */
    public function setOrderCancelReason($orderCancelReason)
    {
        $this->orderCancelReason             = $orderCancelReason;
        $this->apiParas["orderCancelReason"]  = $orderCancelReason;
    }

    public function getOrderCancelReason()
    {
        return $this->orderCancelReason;
    }

}