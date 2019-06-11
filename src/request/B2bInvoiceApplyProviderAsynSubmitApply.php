<?php

namespace JD\request;

/**
 * 异步提交开票申请
 * B2B开放API-B2B开放
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=391&apiId=3141&apiName=jingdong.b2b.invoice.ApplyProvider.asynSubmitApply
 * Class B2bInvoiceApplyProviderAsynSubmitApply
 * @package Jd\request
 */
class B2bInvoiceApplyProviderAsynSubmitApply
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.b2b.invoice.ApplyProvider.asynSubmitApply";
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
     * @param String $bId
     * 由bLine(3为数字)+bChannel(5位数字)组成的string
     * Required: false
     * Example Value: 
     */
    private $bId;

    /**
     * @param String $bId
     * 由bLine(3为数字)+bChannel(5位数字)组成的string
     * Example Value: 
     */
    public function setBId($bId)
    {
        $this->bId             = $bId;
        $this->apiParas["bId"]  = $bId;
    }

    public function getBId()
    {
        return $this->bId;
    }

    /**
     * @param Boolean $encryptedTag
     * 是否加密标识
     * Required: false
     * Example Value: 
     */
    private $encryptedTag;

    /**
     * @param Boolean $encryptedTag
     * 是否加密标识
     * Example Value: 
     */
    public function setEncryptedTag($encryptedTag)
    {
        $this->encryptedTag             = $encryptedTag;
        $this->apiParas["encryptedTag"]  = $encryptedTag;
    }

    public function getEncryptedTag()
    {
        return $this->encryptedTag;
    }

    /**
     * @param String $encryptedKey
     * 加密key
     * Required: false
     * Example Value: 
     */
    private $encryptedKey;

    /**
     * @param String $encryptedKey
     * 加密key
     * Example Value: 
     */
    public function setEncryptedKey($encryptedKey)
    {
        $this->encryptedKey             = $encryptedKey;
        $this->apiParas["encryptedKey"]  = $encryptedKey;
    }

    public function getEncryptedKey()
    {
        return $this->encryptedKey;
    }

    /**
     * @param Number $requestSource
     * 业务来源
     * Required: false
     * Example Value: 
     */
    private $requestSource;

    /**
     * @param Number $requestSource
     * 业务来源
     * Example Value: 
     */
    public function setRequestSource($requestSource)
    {
        $this->requestSource             = $requestSource;
        $this->apiParas["requestSource"]  = $requestSource;
    }

    public function getRequestSource()
    {
        return $this->requestSource;
    }

    /**
     * @param String $invoiceOrgName
     * 开票机构名称
     * Required: false
     * Example Value: 
     */
    private $invoiceOrgName;

    /**
     * @param String $invoiceOrgName
     * 开票机构名称
     * Example Value: 
     */
    public function setInvoiceOrgName($invoiceOrgName)
    {
        $this->invoiceOrgName             = $invoiceOrgName;
        $this->apiParas["invoiceOrgName"]  = $invoiceOrgName;
    }

    public function getInvoiceOrgName()
    {
        return $this->invoiceOrgName;
    }

    /**
     * @param String $receiverTel
     * 收票人电话
     * Required: false
     * Example Value: 
     */
    private $receiverTel;

    /**
     * @param String $receiverTel
     * 收票人电话
     * Example Value: 
     */
    public function setReceiverTel($receiverTel)
    {
        $this->receiverTel             = $receiverTel;
        $this->apiParas["receiverTel"]  = $receiverTel;
    }

    public function getReceiverTel()
    {
        return $this->receiverTel;
    }

    /**
     * @param Number $invoiceOrgId
     * 开票机构编号
     * Required: true
     * Example Value: 
     */
    private $invoiceOrgId;

    /**
     * @param Number $invoiceOrgId
     * 开票机构编号
     * Example Value: 
     */
    public function setInvoiceOrgId($invoiceOrgId)
    {
        $this->invoiceOrgId             = $invoiceOrgId;
        $this->apiParas["invoiceOrgId"]  = $invoiceOrgId;
    }

    public function getInvoiceOrgId()
    {
        return $this->invoiceOrgId;
    }

    /**
     * @param String $receiverAddrCode
     * 收票人四级地址code
     * Required: false
     * Example Value: 
     */
    private $receiverAddrCode;

    /**
     * @param String $receiverAddrCode
     * 收票人四级地址code
     * Example Value: 
     */
    public function setReceiverAddrCode($receiverAddrCode)
    {
        $this->receiverAddrCode             = $receiverAddrCode;
        $this->apiParas["receiverAddrCode"]  = $receiverAddrCode;
    }

    public function getReceiverAddrCode()
    {
        return $this->receiverAddrCode;
    }

    /**
     * @param Number[] $attribute1
     * 订单号
     * Required: true
     * Example Value: 
     */
    private $attribute1;

    /**
     * @param Number[] $attribute1
     * 订单号
     * Example Value: 
     */
    public function setAttribute1($attribute1)
    {
        $this->attribute1             = $attribute1;
        $this->apiParas["attribute1"]  = $attribute1;
    }

    public function getAttribute1()
    {
        return $this->attribute1;
    }

    /**
     * @param Number $invoiceFormat
     * 开票形式
     * Required: true
     * Example Value: 
     */
    private $invoiceFormat;

    /**
     * @param Number $invoiceFormat
     * 开票形式
     * Example Value: 
     */
    public function setInvoiceFormat($invoiceFormat)
    {
        $this->invoiceFormat             = $invoiceFormat;
        $this->apiParas["invoiceFormat"]  = $invoiceFormat;
    }

    public function getInvoiceFormat()
    {
        return $this->invoiceFormat;
    }

    /**
     * @param Number $industryId
     * 行业id
     * Required: false
     * Example Value: 
     */
    private $industryId;

    /**
     * @param Number $industryId
     * 行业id
     * Example Value: 
     */
    public function setIndustryId($industryId)
    {
        $this->industryId             = $industryId;
        $this->apiParas["industryId"]  = $industryId;
    }

    public function getIndustryId()
    {
        return $this->industryId;
    }

    /**
     * @param String $enterpriseBankName
     * 企业注册开户行名称
     * Required: false
     * Example Value: 
     */
    private $enterpriseBankName;

    /**
     * @param String $enterpriseBankName
     * 企业注册开户行名称
     * Example Value: 
     */
    public function setEnterpriseBankName($enterpriseBankName)
    {
        $this->enterpriseBankName             = $enterpriseBankName;
        $this->apiParas["enterpriseBankName"]  = $enterpriseBankName;
    }

    public function getEnterpriseBankName()
    {
        return $this->enterpriseBankName;
    }

    /**
     * @param String $poNo
     * po单号
     * Required: false
     * Example Value: 
     */
    private $poNo;

    /**
     * @param String $poNo
     * po单号
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
     * @param String $invoiceContentName
     * 开票内容
     * Required: true
     * Example Value: 
     */
    private $invoiceContentName;

    /**
     * @param String $invoiceContentName
     * 开票内容
     * Example Value: 
     */
    public function setInvoiceContentName($invoiceContentName)
    {
        $this->invoiceContentName             = $invoiceContentName;
        $this->apiParas["invoiceContentName"]  = $invoiceContentName;
    }

    public function getInvoiceContentName()
    {
        return $this->invoiceContentName;
    }

    /**
     * @param Number $invoiceType
     * 发票类型
     * Required: true
     * Example Value: 
     */
    private $invoiceType;

    /**
     * @param Number $invoiceType
     * 发票类型
     * Example Value: 
     */
    public function setInvoiceType($invoiceType)
    {
        $this->invoiceType             = $invoiceType;
        $this->apiParas["invoiceType"]  = $invoiceType;
    }

    public function getInvoiceType()
    {
        return $this->invoiceType;
    }

    /**
     * @param String $enterpriseRegAddress
     * 企业注册地址
     * Required: false
     * Example Value: 
     */
    private $enterpriseRegAddress;

    /**
     * @param String $enterpriseRegAddress
     * 企业注册地址
     * Example Value: 
     */
    public function setEnterpriseRegAddress($enterpriseRegAddress)
    {
        $this->enterpriseRegAddress             = $enterpriseRegAddress;
        $this->apiParas["enterpriseRegAddress"]  = $enterpriseRegAddress;
    }

    public function getEnterpriseRegAddress()
    {
        return $this->enterpriseRegAddress;
    }

    /**
     * @param String $taxNo
     * 纳税人识别号
     * Required: false
     * Example Value: 
     */
    private $taxNo;

    /**
     * @param String $taxNo
     * 纳税人识别号
     * Example Value: 
     */
    public function setTaxNo($taxNo)
    {
        $this->taxNo             = $taxNo;
        $this->apiParas["taxNo"]  = $taxNo;
    }

    public function getTaxNo()
    {
        return $this->taxNo;
    }

    /**
     * @param String $enterpriseName
     * 企业名称
     * Required: false
     * Example Value: 
     */
    private $enterpriseName;

    /**
     * @param String $enterpriseName
     * 企业名称
     * Example Value: 
     */
    public function setEnterpriseName($enterpriseName)
    {
        $this->enterpriseName             = $enterpriseName;
        $this->apiParas["enterpriseName"]  = $enterpriseName;
    }

    public function getEnterpriseName()
    {
        return $this->enterpriseName;
    }

    /**
     * @param String $invoiceTitle
     * 发票抬头
     * Required: true
     * Example Value: 
     */
    private $invoiceTitle;

    /**
     * @param String $invoiceTitle
     * 发票抬头
     * Example Value: 
     */
    public function setInvoiceTitle($invoiceTitle)
    {
        $this->invoiceTitle             = $invoiceTitle;
        $this->apiParas["invoiceTitle"]  = $invoiceTitle;
    }

    public function getInvoiceTitle()
    {
        return $this->invoiceTitle;
    }

    /**
     * @param Number $channelId
     * 渠道id
     * Required: false
     * Example Value: 
     */
    private $channelId;

    /**
     * @param Number $channelId
     * 渠道id
     * Example Value: 
     */
    public function setChannelId($channelId)
    {
        $this->channelId             = $channelId;
        $this->apiParas["channelId"]  = $channelId;
    }

    public function getChannelId()
    {
        return $this->channelId;
    }

    /**
     * @param String $receiver
     * 收票人
     * Required: false
     * Example Value: 
     */
    private $receiver;

    /**
     * @param String $receiver
     * 收票人
     * Example Value: 
     */
    public function setReceiver($receiver)
    {
        $this->receiver             = $receiver;
        $this->apiParas["receiver"]  = $receiver;
    }

    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * @param String $enterpriseBankAccount
     * 企业注册银行账户
     * Required: false
     * Example Value: 
     */
    private $enterpriseBankAccount;

    /**
     * @param String $enterpriseBankAccount
     * 企业注册银行账户
     * Example Value: 
     */
    public function setEnterpriseBankAccount($enterpriseBankAccount)
    {
        $this->enterpriseBankAccount             = $enterpriseBankAccount;
        $this->apiParas["enterpriseBankAccount"]  = $enterpriseBankAccount;
    }

    public function getEnterpriseBankAccount()
    {
        return $this->enterpriseBankAccount;
    }

    /**
     * @param Number $deliveryType
     * 邮寄类型
     * Required: true
     * Example Value: 
     */
    private $deliveryType;

    /**
     * @param Number $deliveryType
     * 邮寄类型
     * Example Value: 
     */
    public function setDeliveryType($deliveryType)
    {
        $this->deliveryType             = $deliveryType;
        $this->apiParas["deliveryType"]  = $deliveryType;
    }

    public function getDeliveryType()
    {
        return $this->deliveryType;
    }

    /**
     * @param Number $applySource
     * 申请单来源
     * Required: true
     * Example Value: 
     */
    private $applySource;

    /**
     * @param Number $applySource
     * 申请单来源
     * Example Value: 
     */
    public function setApplySource($applySource)
    {
        $this->applySource             = $applySource;
        $this->apiParas["applySource"]  = $applySource;
    }

    public function getApplySource()
    {
        return $this->applySource;
    }

    /**
     * @param String $receiverAddr
     * 收票人详细地址
     * Required: false
     * Example Value: 
     */
    private $receiverAddr;

    /**
     * @param String $receiverAddr
     * 收票人详细地址
     * Example Value: 
     */
    public function setReceiverAddr($receiverAddr)
    {
        $this->receiverAddr             = $receiverAddr;
        $this->apiParas["receiverAddr"]  = $receiverAddr;
    }

    public function getReceiverAddr()
    {
        return $this->receiverAddr;
    }

    /**
     * @param String $enterpriseRegPhone
     * 企业注册电话
     * Required: false
     * Example Value: 
     */
    private $enterpriseRegPhone;

    /**
     * @param String $enterpriseRegPhone
     * 企业注册电话
     * Example Value: 
     */
    public function setEnterpriseRegPhone($enterpriseRegPhone)
    {
        $this->enterpriseRegPhone             = $enterpriseRegPhone;
        $this->apiParas["enterpriseRegPhone"]  = $enterpriseRegPhone;
    }

    public function getEnterpriseRegPhone()
    {
        return $this->enterpriseRegPhone;
    }

    /**
     * @param String $thrApplyNo
     * 第三方申请单号
     * Required: false
     * Example Value: 
     */
    private $thrApplyNo;

    /**
     * @param String $thrApplyNo
     * 第三方申请单号
     * Example Value: 
     */
    public function setThrApplyNo($thrApplyNo)
    {
        $this->thrApplyNo             = $thrApplyNo;
        $this->apiParas["thrApplyNo"]  = $thrApplyNo;
    }

    public function getThrApplyNo()
    {
        return $this->thrApplyNo;
    }

    /**
     * @param Boolean $mergePinApply
     * 是否是跨账号开票
     * Required: true
     * Example Value: 
     */
    private $mergePinApply;

    /**
     * @param Boolean $mergePinApply
     * 是否是跨账号开票
     * Example Value: 
     */
    public function setMergePinApply($mergePinApply)
    {
        $this->mergePinApply             = $mergePinApply;
        $this->apiParas["mergePinApply"]  = $mergePinApply;
    }

    public function getMergePinApply()
    {
        return $this->mergePinApply;
    }

    /**
     * @param String $invoicePostEmail
     * 发票邮寄邮箱
     * Required: false
     * Example Value: 
     */
    private $invoicePostEmail;

    /**
     * @param String $invoicePostEmail
     * 发票邮寄邮箱
     * Example Value: 
     */
    public function setInvoicePostEmail($invoicePostEmail)
    {
        $this->invoicePostEmail             = $invoicePostEmail;
        $this->apiParas["invoicePostEmail"]  = $invoicePostEmail;
    }

    public function getInvoicePostEmail()
    {
        return $this->invoicePostEmail;
    }

}