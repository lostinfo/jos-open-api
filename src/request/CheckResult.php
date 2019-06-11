<?php

namespca Lostinfo\JosOpenApi;

/**
 * desc
 * 商城API-面向用户类商城系统商品相关信息获取
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=49&apiId=1642&apiName=jingdong.checkResult
 * Class CheckResult
 * @package Jd\request
 */
class CheckResult
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.checkResult";
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
     * @param int $orderId
     * jd_ofw_pfm
     * Required: true
     * Example Value: 
     */
    private $orderId;

    /**
     * @param int $orderId
     * jd_ofw_pfm
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

    /**
     * @param bool $isSuccess
     * jd_ofw_pfm
     * Required: true
     * Example Value: 
     */
    private $isSuccess;

    /**
     * @param bool $isSuccess
     * jd_ofw_pfm
     * Example Value: 
     */
    public function setIsSuccess($isSuccess)
    {
        $this->isSuccess             = $isSuccess;
        $this->apiParas["isSuccess"]  = $isSuccess;
    }

    public function getIsSuccess()
    {
        return $this->isSuccess;
    }

    /**
     * @param int $failedCode
     * jd_ofw_pfm
     * Required: true
     * Example Value: 
     */
    private $failedCode;

    /**
     * @param int $failedCode
     * jd_ofw_pfm
     * Example Value: 
     */
    public function setFailedCode($failedCode)
    {
        $this->failedCode             = $failedCode;
        $this->apiParas["failedCode"]  = $failedCode;
    }

    public function getFailedCode()
    {
        return $this->failedCode;
    }

    /**
     * @param string $failedMsg
     * jd_ofw_pfm
     * Required: true
     * Example Value: 
     */
    private $failedMsg;

    /**
     * @param string $failedMsg
     * jd_ofw_pfm
     * Example Value: 
     */
    public function setFailedMsg($failedMsg)
    {
        $this->failedMsg             = $failedMsg;
        $this->apiParas["failedMsg"]  = $failedMsg;
    }

    public function getFailedMsg()
    {
        return $this->failedMsg;
    }

}