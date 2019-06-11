<?php

namespace JD\request;

/**
 * 返回用户在某个商家下的会员信息
 * 用户API -用户信息及操作
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=106&apiId=2516&apiName=jingdong.pop.crm.getMemberInVender
 * Class PopCrmGetMemberInVender
 * @package Jd\request
 */
class PopCrmGetMemberInVender
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.crm.getMemberInVender";
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
     * 用户pin（加密pin）
     * Required: true
     * Example Value: 
     */
    private $customerPin;

    /**
     * @param String $customerPin
     * 用户pin（加密pin）
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