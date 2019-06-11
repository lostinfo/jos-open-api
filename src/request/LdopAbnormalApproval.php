<?php

namespace JD\request;

/**
 * 异常单审核
 * 京东快递API-提供获取青龙运单号、向京东物流系统提交运单信息、跟踪查询物流信息等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=64&apiId=2131&apiName=jingdong.ldop.abnormal.approval
 * Class LdopAbnormalApproval
 * @package Jd\request
 */
class LdopAbnormalApproval
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ldop.abnormal.approval";
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
     * @param String $customerCode
     * 商家编码
     * Required: true
     * Example Value: 
     */
    private $customerCode;

    /**
     * @param String $customerCode
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
     * @param String $deliveryId
     * 运单号
     * Required: true
     * Example Value: 
     */
    private $deliveryId;

    /**
     * @param String $deliveryId
     * 运单号
     * Example Value: 
     */
    public function setDeliveryId($deliveryId)
    {
        $this->deliveryId             = $deliveryId;
        $this->apiParas["deliveryId"]  = $deliveryId;
    }

    public function getDeliveryId()
    {
        return $this->deliveryId;
    }

    /**
     * @param String $responseComment
     * 返回描述
     * Required: true
     * Example Value: 
     */
    private $responseComment;

    /**
     * @param String $responseComment
     * 返回描述
     * Example Value: 
     */
    public function setResponseComment($responseComment)
    {
        $this->responseComment             = $responseComment;
        $this->apiParas["responseComment"]  = $responseComment;
    }

    public function getResponseComment()
    {
        return $this->responseComment;
    }

    /**
     * @param Number $type
     * 异常处理结果（1：再投，2：退回，3：站点报废）
     * Required: true
     * Example Value: 
     */
    private $type;

    /**
     * @param Number $type
     * 异常处理结果（1：再投，2：退回，3：站点报废）
     * Example Value: 
     */
    public function setType($type)
    {
        $this->type             = $type;
        $this->apiParas["type"]  = $type;
    }

    public function getType()
    {
        return $this->type;
    }

}