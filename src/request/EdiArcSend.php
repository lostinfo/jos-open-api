<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 发送供应商对账结果
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=3760&apiName=jingdong.edi.arc.send
 * Class EdiArcSend
 * @package Jd\request
 */
class EdiArcSend
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.edi.arc.send";
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
     * @param string $vendorName
     * 供应商名称
     * Required: false
     * Example Value: 
     */
    private $vendorName;

    /**
     * @param string $vendorName
     * 供应商名称
     * Example Value: 
     */
    public function setVendorName($vendorName)
    {
        $this->vendorName             = $vendorName;
        $this->apiParas["vendorName"]  = $vendorName;
    }

    public function getVendorName()
    {
        return $this->vendorName;
    }

    /**
     * @param string $payableAccountId
     * 应付账ID
     * Required: false
     * Example Value: 
     */
    private $payableAccountId;

    /**
     * @param string $payableAccountId
     * 应付账ID
     * Example Value: 
     */
    public function setPayableAccountId($payableAccountId)
    {
        $this->payableAccountId             = $payableAccountId;
        $this->apiParas["payableAccountId"]  = $payableAccountId;
    }

    public function getPayableAccountId()
    {
        return $this->payableAccountId;
    }

    /**
     * @param string $billType
     * 单据类型
     * Required: true
     * Example Value: 
     */
    private $billType;

    /**
     * @param string $billType
     * 单据类型
     * Example Value: 
     */
    public function setBillType($billType)
    {
        $this->billType             = $billType;
        $this->apiParas["billType"]  = $billType;
    }

    public function getBillType()
    {
        return $this->billType;
    }

    /**
     * @param string $billNo
     * 单据编号
     * Required: true
     * Example Value: 
     */
    private $billNo;

    /**
     * @param string $billNo
     * 单据编号
     * Example Value: 
     */
    public function setBillNo($billNo)
    {
        $this->billNo             = $billNo;
        $this->apiParas["billNo"]  = $billNo;
    }

    public function getBillNo()
    {
        return $this->billNo;
    }

    /**
     * @param string $poNo
     * 采购单号
     * Required: false
     * Example Value: 
     */
    private $poNo;

    /**
     * @param string $poNo
     * 采购单号
     * Example Value: 
     */
    public function setPoNo($poNo)
    {
        $this->poNo             = $poNo;
        $this->apiParas["poNo"]  = $poNo;
    }

    public function getPoNo()
    {
        return $this->poNo;
    }

    /**
     * @param string $respond
     * 确认结果
     * Required: true
     * Example Value: 
     */
    private $respond;

    /**
     * @param string $respond
     * 确认结果
     * Example Value: 
     */
    public function setRespond($respond)
    {
        $this->respond             = $respond;
        $this->apiParas["respond"]  = $respond;
    }

    public function getRespond()
    {
        return $this->respond;
    }

    /**
     * @param int $amount
     * 金额
     * Required: true
     * Example Value: 
     */
    private $amount;

    /**
     * @param int $amount
     * 金额
     * Example Value: 
     */
    public function setAmount($amount)
    {
        $this->amount             = $amount;
        $this->apiParas["amount"]  = $amount;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param string $vendorCode
     * 供应商简码
     * Required: true
     * Example Value: 
     */
    private $vendorCode;

    /**
     * @param string $vendorCode
     * 供应商简码
     * Example Value: 
     */
    public function setVendorCode($vendorCode)
    {
        $this->vendorCode             = $vendorCode;
        $this->apiParas["vendorCode"]  = $vendorCode;
    }

    public function getVendorCode()
    {
        return $this->vendorCode;
    }

}