<?php

namespace JD\request;

/**
 * 商家业务订单完成
 * 拍拍业务-拍拍业务相关接口
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=382&apiId=3272&apiName=jingdong.paipai.sopOrderJsfService.orderCompleted
 * Class PaipaiSopOrderJsfServiceOrderCompleted
 * @package Jd\request
 */
class PaipaiSopOrderJsfServiceOrderCompleted
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.paipai.sopOrderJsfService.orderCompleted";
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
     * @param String $notifyUrl
     * 结算回调URL
     * Required: false
     * Example Value: www.paipai.com
     */
    private $notifyUrl;

    /**
     * @param String $notifyUrl
     * 结算回调URL
     * Example Value: www.paipai.com
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl             = $notifyUrl;
        $this->apiParas["notifyUrl"]  = $notifyUrl;
    }

    public function getNotifyUrl()
    {
        return $this->notifyUrl;
    }

    /**
     * @param Number $settlementAmount
     * 订单结算金额 单位（：分）
     * Required: false
     * Example Value: 10000
     */
    private $settlementAmount;

    /**
     * @param Number $settlementAmount
     * 订单结算金额 单位（：分）
     * Example Value: 10000
     */
    public function setSettlementAmount($settlementAmount)
    {
        $this->settlementAmount             = $settlementAmount;
        $this->apiParas["settlementAmount"]  = $settlementAmount;
    }

    public function getSettlementAmount()
    {
        return $this->settlementAmount;
    }

}