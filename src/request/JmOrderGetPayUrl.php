<?php

namespace JD\request;

/**
 * 获取下单确认页url
 * 服务市场API-服务市场API包括发布服务市场中订购关系查询API、服务操作API、获取服务列表、获取和服务相对应的收费项目列表等API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=66&apiId=3316&apiName=jingdong.jm.order.getPayUrl
 * Class JmOrderGetPayUrl
 * @package Jd\request
 */
class JmOrderGetPayUrl
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.jm.order.getPayUrl";
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
     * @param String $serviceCode
     * 服务编码
     * Required: true
     * Example Value: FW_GOODS-1
     */
    private $serviceCode;

    /**
     * @param String $serviceCode
     * 服务编码
     * Example Value: FW_GOODS-1
     */
    public function setServiceCode($serviceCode)
    {
        $this->serviceCode             = $serviceCode;
        $this->apiParas["serviceCode"]  = $serviceCode;
    }

    public function getServiceCode()
    {
        return $this->serviceCode;
    }

    /**
     * @param String $accessCode
     * 接入方标识
     * Required: true
     * Example Value: test
     */
    private $accessCode;

    /**
     * @param String $accessCode
     * 接入方标识
     * Example Value: test
     */
    public function setAccessCode($accessCode)
    {
        $this->accessCode             = $accessCode;
        $this->apiParas["accessCode"]  = $accessCode;
    }

    public function getAccessCode()
    {
        return $this->accessCode;
    }

    /**
     * @param Number $orderNum
     * 购买sku的数量
     * Required: true
     * Example Value: 1
     */
    private $orderNum;

    /**
     * @param Number $orderNum
     * 购买sku的数量
     * Example Value: 1
     */
    public function setOrderNum($orderNum)
    {
        $this->orderNum             = $orderNum;
        $this->apiParas["orderNum"]  = $orderNum;
    }

    public function getOrderNum()
    {
        return $this->orderNum;
    }

    /**
     * @param Number $skuId
     * 服务市场skuId（服务商工作台，查看服务页可获取）
     * Required: true
     * Example Value: 1
     */
    private $skuId;

    /**
     * @param Number $skuId
     * 服务市场skuId（服务商工作台，查看服务页可获取）
     * Example Value: 1
     */
    public function setSkuId($skuId)
    {
        $this->skuId             = $skuId;
        $this->apiParas["skuId"]  = $skuId;
    }

    public function getSkuId()
    {
        return $this->skuId;
    }

    /**
     * @param String $clientIp
     * 购买者ip
     * Required: true
     * Example Value: 114.114.114.114
     */
    private $clientIp;

    /**
     * @param String $clientIp
     * 购买者ip
     * Example Value: 114.114.114.114
     */
    public function setClientIp($clientIp)
    {
        $this->clientIp             = $clientIp;
        $this->apiParas["clientIp"]  = $clientIp;
    }

    public function getClientIp()
    {
        return $this->clientIp;
    }

}