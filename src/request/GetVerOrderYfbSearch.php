<?php

namespca Lostinfo\JosOpenApi;

/**
 * 获取核销订单
 * 阿尔法API-阿尔法系统
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=191&apiId=1545&apiName=jingdong.getVerOrder.yfb.search
 * Class GetVerOrderYfbSearch
 * @package Jd\request
 */
class GetVerOrderYfbSearch
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.getVerOrder.yfb.search";
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
     * @param int $appType
     * 三方平台id
     * Required: true
     * Example Value: 
     */
    private $appType;

    /**
     * @param int $appType
     * 三方平台id
     * Example Value: 
     */
    public function setAppType($appType)
    {
        $this->appType             = $appType;
        $this->apiParas["appType"]  = $appType;
    }

    public function getAppType()
    {
        return $this->appType;
    }

    /**
     * @param string $secKey
     * 秘钥
     * Required: true
     * Example Value: 
     */
    private $secKey;

    /**
     * @param string $secKey
     * 秘钥
     * Example Value: 
     */
    public function setSecKey($secKey)
    {
        $this->secKey             = $secKey;
        $this->apiParas["secKey"]  = $secKey;
    }

    public function getSecKey()
    {
        return $this->secKey;
    }

    /**
     * @param int $orderId
     * 订单id
     * Required: true
     * Example Value: 
     */
    private $orderId;

    /**
     * @param int $orderId
     * 订单id
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