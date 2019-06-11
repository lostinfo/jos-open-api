<?php

namespace JD\request;

/**
 * 根据venderId和用户pin获取用户积分值
 * 用户API -用户信息及操作
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=106&apiId=2520&apiName=jingdong.pop.crm.getCustomerPoints
 * Class PopCrmGetCustomerPoints
 * @package Jd\request
 */
class PopCrmGetCustomerPoints
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.crm.getCustomerPoints";
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
     * @param String $customerPin
     * 用户pin
     * Required: true
     * Example Value: 
     */
    private $customerPin;

    /**
     * @param String $customerPin
     * 用户pin
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

}