<?php

namespace JD\request;

/**
 * 订单与证书存储列表
 * 商城API-面向用户类商城系统商品相关信息获取
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=49&apiId=3043&apiName=jingdong.ofc.trace.traceJewelryJsfService.orderForCertificateStoreForJOS
 * Class OfcTraceTraceJewelryJsfServiceOrderForCertificateStoreForJOS
 * @package Jd\request
 */
class OfcTraceTraceJewelryJsfServiceOrderForCertificateStoreForJOS
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ofc.trace.traceJewelryJsfService.orderForCertificateStoreForJOS";
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
     * @param String[] $certificateTypeCode
     * 证书类型编号
     * Required: true
     * Example Value: 
     */
    private $certificateTypeCode;

    /**
     * @param String[] $certificateTypeCode
     * 证书类型编号
     * Example Value: 
     */
    public function setCertificateTypeCode($certificateTypeCode)
    {
        $this->certificateTypeCode             = $certificateTypeCode;
        $this->apiParas["certificateTypeCode"]  = $certificateTypeCode;
    }

    public function getCertificateTypeCode()
    {
        return $this->certificateTypeCode;
    }

    /**
     * @param String[] $orderId
     * 订单号
     * Required: true
     * Example Value: 
     */
    private $orderId;

    /**
     * @param String[] $orderId
     * 订单号
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
     * @param String[] $institutionCode
     * 机构编号
     * Required: true
     * Example Value: 
     */
    private $institutionCode;

    /**
     * @param String[] $institutionCode
     * 机构编号
     * Example Value: 
     */
    public function setInstitutionCode($institutionCode)
    {
        $this->institutionCode             = $institutionCode;
        $this->apiParas["institutionCode"]  = $institutionCode;
    }

    public function getInstitutionCode()
    {
        return $this->institutionCode;
    }

    /**
     * @param String[] $groupId
     * 分组，默认填写“1”,  传入的个数对应证书个数.
     * Required: true
     * Example Value: 
     */
    private $groupId;

    /**
     * @param String[] $groupId
     * 分组，默认填写“1”,  传入的个数对应证书个数.
     * Example Value: 
     */
    public function setGroupId($groupId)
    {
        $this->groupId             = $groupId;
        $this->apiParas["groupId"]  = $groupId;
    }

    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * @param String[] $securityCode
     * 防伪码
     * Required: true
     * Example Value: 
     */
    private $securityCode;

    /**
     * @param String[] $securityCode
     * 防伪码
     * Example Value: 
     */
    public function setSecurityCode($securityCode)
    {
        $this->securityCode             = $securityCode;
        $this->apiParas["securityCode"]  = $securityCode;
    }

    public function getSecurityCode()
    {
        return $this->securityCode;
    }

    /**
     * @param String[] $certificateNo
     * 证书编号
     * Required: true
     * Example Value: 
     */
    private $certificateNo;

    /**
     * @param String[] $certificateNo
     * 证书编号
     * Example Value: 
     */
    public function setCertificateNo($certificateNo)
    {
        $this->certificateNo             = $certificateNo;
        $this->apiParas["certificateNo"]  = $certificateNo;
    }

    public function getCertificateNo()
    {
        return $this->certificateNo;
    }

    /**
     * @param String[] $skuId
     * sku编码
     * Required: true
     * Example Value: 
     */
    private $skuId;

    /**
     * @param String[] $skuId
     * sku编码
     * Example Value: 
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
     * @param String[] $certificateType
     * 证书类型
     * Required: true
     * Example Value: 
     */
    private $certificateType;

    /**
     * @param String[] $certificateType
     * 证书类型
     * Example Value: 
     */
    public function setCertificateType($certificateType)
    {
        $this->certificateType             = $certificateType;
        $this->apiParas["certificateType"]  = $certificateType;
    }

    public function getCertificateType()
    {
        return $this->certificateType;
    }

}