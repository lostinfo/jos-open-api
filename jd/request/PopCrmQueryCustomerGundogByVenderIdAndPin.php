<?php

namespace JD\request;

/**
 * 查询用户信息
 * 用户API -用户信息及操作
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=106&apiId=2521&apiName=jingdong.pop.crm.queryCustomerGundogByVenderIdAndPin
 * Class PopCrmQueryCustomerGundogByVenderIdAndPin
 * @package Jd\request
 */
class PopCrmQueryCustomerGundogByVenderIdAndPin
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.crm.queryCustomerGundogByVenderIdAndPin";
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
     * @param Number $venderId
     * 商家id
     * Required: true
     * Example Value: 
     */
    private $venderId;

    /**
     * @param Number $venderId
     * 商家id
     * Example Value: 
     */
    public function setVenderId($venderId)
    {
        $this->venderId             = $venderId;
        $this->apiParas["venderId"]  = $venderId;
    }

    public function getVenderId()
    {
        return $this->venderId;
    }

    /**
     * @param String $pin
     * 用户pin
     * Required: true
     * Example Value: 
     */
    private $pin;

    /**
     * @param String $pin
     * 用户pin
     * Example Value: 
     */
    public function setPin($pin)
    {
        $this->pin             = $pin;
        $this->apiParas["pin"]  = $pin;
    }

    public function getPin()
    {
        return $this->pin;
    }

}