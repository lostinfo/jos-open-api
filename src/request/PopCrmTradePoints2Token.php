<?php

namespace JD\request;

/**
 * 积分兑换商家店铺商品
 * 用户API -用户信息及操作
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=106&apiId=2526&apiName=jingdong.pop.crm.tradePoints2Token
 * Class PopCrmTradePoints2Token
 * @package Jd\request
 */
class PopCrmTradePoints2Token
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.crm.tradePoints2Token";
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
     * @param java.lang.String $businessId
     * 防重唯一号
     * Required: true
     * Example Value: 
     */
    private $businessId;

    /**
     * @param java.lang.String $businessId
     * 防重唯一号
     * Example Value: 
     */
    public function setBusinessId($businessId)
    {
        $this->businessId             = $businessId;
        $this->apiParas["businessId"]  = $businessId;
    }

    public function getBusinessId()
    {
        return $this->businessId;
    }

    /**
     * @param java.lang.String $customerPin
     * 客户唯一号
     * Required: true
     * Example Value: 
     */
    private $customerPin;

    /**
     * @param java.lang.String $customerPin
     * 客户唯一号
     * Example Value: 
     */
    public function setCustomerPin($customerPin)
    {
        $this->customerPin             = $customerPin;
        $this->apiParas["customerPin"]  = $customerPin;
    }

    public function getCustomerPin()
    {
        return $this->customerPin;
    }

    /**
     * @param long $exchangeId
     * 兑换id
     * Required: true
     * Example Value: 
     */
    private $exchangeId;

    /**
     * @param long $exchangeId
     * 兑换id
     * Example Value: 
     */
    public function setExchangeId($exchangeId)
    {
        $this->exchangeId             = $exchangeId;
        $this->apiParas["exchangeId"]  = $exchangeId;
    }

    public function getExchangeId()
    {
        return $this->exchangeId;
    }

}