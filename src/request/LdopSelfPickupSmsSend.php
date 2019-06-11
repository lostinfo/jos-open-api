<?php

namespca Lostinfo\JosOpenApi;

/**
 * 重发自提码接口
 * 京东快递API-提供获取青龙运单号、向京东物流系统提交运单信息、跟踪查询物流信息等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=64&apiId=2160&apiName=jingdong.ldop.self.pickup.sms.send
 * Class LdopSelfPickupSmsSend
 * @package Jd\request
 */
class LdopSelfPickupSmsSend
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ldop.self.pickup.sms.send";
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
     * @param string $waybillCode
     * waybillCode
     * Required: true
     * Example Value: 
     */
    private $waybillCode;

    /**
     * @param string $waybillCode
     * waybillCode
     * Example Value: 
     */
    public function setWaybillCode($waybillCode)
    {
        $this->waybillCode             = $waybillCode;
        $this->apiParas["waybillCode"]  = $waybillCode;
    }

    public function getWaybillCode()
    {
        return $this->waybillCode;
    }

    /**
     * @param string $customerCode
     * customerCode
     * Required: true
     * Example Value: 
     */
    private $customerCode;

    /**
     * @param string $customerCode
     * customerCode
     * Example Value: 
     */
    public function setCustomerCode($customerCode)
    {
        $this->customerCode             = $customerCode;
        $this->apiParas["customerCode"]  = $customerCode;
    }

    public function getCustomerCode()
    {
        return $this->customerCode;
    }

}