<?php

namespca Lostinfo\JosOpenApi;

/**
 * 查询物流跟踪消息
 * 京东快递API-提供获取青龙运单号、向京东物流系统提交运单信息、跟踪查询物流信息等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=64&apiId=1539&apiName=jingdong.ldop.receive.trace.get
 * Class LdopReceiveTraceGet
 * @package Jd\request
 */
class LdopReceiveTraceGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ldop.receive.trace.get";
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
     * @param string $customerCode
     * 商家编码
     * Required: true
     * Example Value: 
     */
    private $customerCode;

    /**
     * @param string $customerCode
     * 商家编码
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

    /**
     * @param string $waybillCode
     * 运单号
     * Required: true
     * Example Value: 
     */
    private $waybillCode;

    /**
     * @param string $waybillCode
     * 运单号
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

}