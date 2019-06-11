<?php

namespace JD\request;

/**
 * 取消运单
 * 配送API-提供获取物流公司信息的功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=75&apiId=3482&apiName=jingdong.ldop.delivery.provider.cancelWayBill
 * Class LdopDeliveryProviderCancelWayBill
 * @package Jd\request
 */
class LdopDeliveryProviderCancelWayBill
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ldop.delivery.provider.cancelWayBill";
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
     * @param String $userPin
     * 用户唯一标识
     * Required: true
     * Example Value: pin
     */
    private $userPin;

    /**
     * @param String $userPin
     * 用户唯一标识
     * Example Value: pin
     */
    public function setUserPin($userPin)
    {
        $this->userPin             = $userPin;
        $this->apiParas["userPin"]  = $userPin;
    }

    public function getUserPin()
    {
        return $this->userPin;
    }

    /**
     * @param String $waybillCode
     * 运单号
     * Required: true
     * Example Value: VA12345678
     */
    private $waybillCode;

    /**
     * @param String $waybillCode
     * 运单号
     * Example Value: VA12345678
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
     * @param String $customerCode
     * 商家编码
     * Required: true
     * Example Value: 010K00000
     */
    private $customerCode;

    /**
     * @param String $customerCode
     * 商家编码
     * Example Value: 010K00000
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
     * @param String $source
     * 来源
     * Required: true
     * Example Value: JOS
     */
    private $source;

    /**
     * @param String $source
     * 来源
     * Example Value: JOS
     */
    public function setSource($source)
    {
        $this->source             = $source;
        $this->apiParas["source"]  = $source;
    }

    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param String $cancelReason
     * 取消原因
     * Required: true
     * Example Value: 客户取消
     */
    private $cancelReason;

    /**
     * @param String $cancelReason
     * 取消原因
     * Example Value: 客户取消
     */
    public function setCancelReason($cancelReason)
    {
        $this->cancelReason             = $cancelReason;
        $this->apiParas["cancelReason"]  = $cancelReason;
    }

    public function getCancelReason()
    {
        return $this->cancelReason;
    }

    /**
     * @param String $operator
     * 操作人
     * Required: true
     * Example Value: 张三
     */
    private $operator;

    /**
     * @param String $operator
     * 操作人
     * Example Value: 张三
     */
    public function setOperator($operator)
    {
        $this->operator             = $operator;
        $this->apiParas["operatorName"]  = $operator;
    }

    public function getOperator()
    {
        return $this->operator;
    }

}