<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 发送发票核销申请
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=3761&apiName=jingdong.edi.va.send
 * Class EdiVaSend
 * @package Jd\request
 */
class EdiVaSend
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.edi.va.send";
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
     * @param string $billNo
     * 本批次核销申请单号
     * Required: true
     * Example Value: 
     */
    private $billNo;

    /**
     * @param string $billNo
     * 本批次核销申请单号
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
     * @param string $businessType
     * 业务类型
     * Required: true
     * Example Value: 
     */
    private $businessType;

    /**
     * @param string $businessType
     * 业务类型
     * Example Value: 
     */
    public function setBusinessType($businessType)
    {
        $this->businessType             = $businessType;
        $this->apiParas["businessType"]  = $businessType;
    }

    public function getBusinessType()
    {
        return $this->businessType;
    }

    /**
     * @param int $amount
     * 总金额
     * Required: true
     * Example Value: 
     */
    private $amount;

    /**
     * @param int $amount
     * 总金额
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
     * 供应商编码
     * Required: true
     * Example Value: 
     */
    private $vendorCode;

    /**
     * @param string $vendorCode
     * 供应商编码
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

    /**
     * @param string[] $settleNo
     * 结算单号
     * Required: false
     * Example Value: 
     */
    private $settleNo;

    /**
     * @param string[] $settleNo
     * 结算单号
     * Example Value: 
     */
    public function setSettleNo($settleNo)
    {
        $this->settleNo             = $settleNo;
        $this->apiParas["settleNo"]  = $settleNo;
    }

    public function getSettleNo()
    {
        return $this->settleNo;
    }

    /**
     * @param string[] $payableAccountId
     * 应付帐ID
     * Required: false
     * Example Value: 
     */
    private $payableAccountId;

    /**
     * @param string[] $payableAccountId
     * 应付帐ID
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
     * @param string[] $billType
     * 单据类型
     * Required: false
     * Example Value: 
     */
    private $billType;

    /**
     * @param string[] $billType
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
     * @param string[] $billNo
     * 单据编码
     * Required: false
     * Example Value: 
     */
    private $billNo;

    /**
     * @param string[] $billNo
     * 单据编码
     * Example Value: 
     */
    public function setBillNo($billNo)
    {
        $this->billNo             = $billNo;
        $this->apiParas["verificationBillNo"]  = $billNo;
    }

    public function getBillNo()
    {
        return $this->billNo;
    }

    /**
     * @param string[] $billDate
     * 单据日期
     * Required: false
     * Example Value: 
     */
    private $billDate;

    /**
     * @param string[] $billDate
     * 单据日期
     * Example Value: 
     */
    public function setBillDate($billDate)
    {
        $this->billDate             = $billDate;
        $this->apiParas["billDate"]  = $billDate;
    }

    public function getBillDate()
    {
        return $this->billDate;
    }

    /**
     * @param string[] $poNo
     * 采购单号
     * Required: false
     * Example Value: 
     */
    private $poNo;

    /**
     * @param string[] $poNo
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
     * @param string[] $soNo
     * 供应商SO编号
     * Required: false
     * Example Value: 
     */
    private $soNo;

    /**
     * @param string[] $soNo
     * 供应商SO编号
     * Example Value: 
     */
    public function setSoNo($soNo)
    {
        $this->soNo             = $soNo;
        $this->apiParas["soNo"]  = $soNo;
    }

    public function getSoNo()
    {
        return $this->soNo;
    }

    /**
     * @param int[] $amount
     * 金额
     * Required: true
     * Example Value: 
     */
    private $amount;

    /**
     * @param int[] $amount
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
     * @param string[] $memo
     * 备注
     * Required: false
     * Example Value: 
     */
    private $memo;

    /**
     * @param string[] $memo
     * 备注
     * Example Value: 
     */
    public function setMemo($memo)
    {
        $this->memo             = $memo;
        $this->apiParas["memo"]  = $memo;
    }

    public function getMemo()
    {
        return $this->memo;
    }

    /**
     * @param string[] $invoiceNo
     * 发票号码
     * Required: true
     * Example Value: 
     */
    private $invoiceNo;

    /**
     * @param string[] $invoiceNo
     * 发票号码
     * Example Value: 
     */
    public function setInvoiceNo($invoiceNo)
    {
        $this->invoiceNo             = $invoiceNo;
        $this->apiParas["invoiceNo"]  = $invoiceNo;
    }

    public function getInvoiceNo()
    {
        return $this->invoiceNo;
    }

    /**
     * @param string[] $invoiceCode
     * 发票代码
     * Required: true
     * Example Value: 
     */
    private $invoiceCode;

    /**
     * @param string[] $invoiceCode
     * 发票代码
     * Example Value: 
     */
    public function setInvoiceCode($invoiceCode)
    {
        $this->invoiceCode             = $invoiceCode;
        $this->apiParas["invoiceCode"]  = $invoiceCode;
    }

    public function getInvoiceCode()
    {
        return $this->invoiceCode;
    }

    /**
     * @param int[] $amount
     * 价税合计
     * Required: true
     * Example Value: 
     */
    private $amount;

    /**
     * @param int[] $amount
     * 价税合计
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

}