<?php

namespca Lostinfo\JosOpenApi;

/**
 * 生成汇款识别码
 * B2B开放API-B2B开放
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=391&apiId=3136&apiName=jingdong.b2b.payment.B2bPayClient.b2bPayReq
 * Class B2bPaymentB2bPayClientB2bPayReq
 * @package Jd\request
 */
class B2bPaymentB2bPayClientB2bPayReq
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.b2b.payment.B2bPayClient.b2bPayReq";
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
     * @param int $payMethod
     * 支付方式
     * Required: true
     * Example Value: 1：线上支付 2：企业转账 3：邮局汇款
     */
    private $payMethod;

    /**
     * @param int $payMethod
     * 支付方式
     * Example Value: 1：线上支付 2：企业转账 3：邮局汇款
     */
    public function setPayMethod($payMethod)
    {
        $this->payMethod             = $payMethod;
        $this->apiParas["payMethod"]  = $payMethod;
    }

    public function getPayMethod()
    {
        return $this->payMethod;
    }

    /**
     * @param int $cardType
     * 卡类型
     * Required: true
     * Example Value: 0：平台支付 1：借记卡 2：贷记卡
     */
    private $cardType;

    /**
     * @param int $cardType
     * 卡类型
     * Example Value: 0：平台支付 1：借记卡 2：贷记卡
     */
    public function setCardType($cardType)
    {
        $this->cardType             = $cardType;
        $this->apiParas["cardType"]  = $cardType;
    }

    public function getCardType()
    {
        return $this->cardType;
    }

    /**
     * @param string $businessId
     * 业务订单号
     * Required: true
     * Example Value: 
     */
    private $businessId;

    /**
     * @param string $businessId
     * 业务订单号
     * Example Value: 
     */
    public function setBusinessId($businessId)
    {
        $this->businessId             = $businessId;
        $this->apiParas["businessId"]  = $businessId;
    }

    public function getBusinessId()
    {
        return $this->businessId;
    }

    /**
     * @param int $mergeType
     * 标记是businessId是否为合单号
     * Required: true
     * Example Value: 0：订单号 1：合单号
     */
    private $mergeType;

    /**
     * @param int $mergeType
     * 标记是businessId是否为合单号
     * Example Value: 0：订单号 1：合单号
     */
    public function setMergeType($mergeType)
    {
        $this->mergeType             = $mergeType;
        $this->apiParas["mergeType"]  = $mergeType;
    }

    public function getMergeType()
    {
        return $this->mergeType;
    }

    /**
     * @param int $amount
     * 支付金额
     * Required: true
     * Example Value: 
     */
    private $amount;

    /**
     * @param int $amount
     * 支付金额
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
     * @param string $phone
     * 手机号码
     * Required: true
     * Example Value: 
     */
    private $phone;

    /**
     * @param string $phone
     * 手机号码
     * Example Value: 
     */
    public function setPhone($phone)
    {
        $this->phone             = $phone;
        $this->apiParas["phone"]  = $phone;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param int $virtualType
     * 虚拟商品标识
     * Required: true
     * Example Value: 0：实物 1：虚拟
     */
    private $virtualType;

    /**
     * @param int $virtualType
     * 虚拟商品标识
     * Example Value: 0：实物 1：虚拟
     */
    public function setVirtualType($virtualType)
    {
        $this->virtualType             = $virtualType;
        $this->apiParas["virtualType"]  = $virtualType;
    }

    public function getVirtualType()
    {
        return $this->virtualType;
    }

    /**
     * @param int $payChannelType
     * 支付渠道类型
     * Required: true
     * Example Value: 0：线上支付-由支付机构跳转到银行页面；1：企业转账；2：邮局汇款；3：企业网银；4：线上支付-支付机构；5：线上支付-直连银行
     */
    private $payChannelType;

    /**
     * @param int $payChannelType
     * 支付渠道类型
     * Example Value: 0：线上支付-由支付机构跳转到银行页面；1：企业转账；2：邮局汇款；3：企业网银；4：线上支付-支付机构；5：线上支付-直连银行
     */
    public function setPayChannelType($payChannelType)
    {
        $this->payChannelType             = $payChannelType;
        $this->apiParas["payChannelType"]  = $payChannelType;
    }

    public function getPayChannelType()
    {
        return $this->payChannelType;
    }

    /**
     * @param int $payOrderType
     * 支付类型
     * Required: true
     * Example Value: 
     */
    private $payOrderType;

    /**
     * @param int $payOrderType
     * 支付类型
     * Example Value: 
     */
    public function setPayOrderType($payOrderType)
    {
        $this->payOrderType             = $payOrderType;
        $this->apiParas["payOrderType"]  = $payOrderType;
    }

    public function getPayOrderType()
    {
        return $this->payOrderType;
    }

    /**
     * @param string $bankCode
     * 银行编码
     * Required: true
     * Example Value: 
     */
    private $bankCode;

    /**
     * @param string $bankCode
     * 银行编码
     * Example Value: 
     */
    public function setBankCode($bankCode)
    {
        $this->bankCode             = $bankCode;
        $this->apiParas["bankCode"]  = $bankCode;
    }

    public function getBankCode()
    {
        return $this->bankCode;
    }

    /**
     * @param int $agencyCode
     * 支付机构编码
     * Required: true
     * Example Value: 
     */
    private $agencyCode;

    /**
     * @param int $agencyCode
     * 支付机构编码
     * Example Value: 
     */
    public function setAgencyCode($agencyCode)
    {
        $this->agencyCode             = $agencyCode;
        $this->apiParas["agencyCode"]  = $agencyCode;
    }

    public function getAgencyCode()
    {
        return $this->agencyCode;
    }

    /**
     * @param string $ipAddress
     * 用户IP
     * Required: true
     * Example Value: 
     */
    private $ipAddress;

    /**
     * @param string $ipAddress
     * 用户IP
     * Example Value: 
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress             = $ipAddress;
        $this->apiParas["ipAddress"]  = $ipAddress;
    }

    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * @param string $orderAgencyCode
     * 订单机构号
     * Required: true
     * Example Value: 
     */
    private $orderAgencyCode;

    /**
     * @param string $orderAgencyCode
     * 订单机构号
     * Example Value: 
     */
    public function setOrderAgencyCode($orderAgencyCode)
    {
        $this->orderAgencyCode             = $orderAgencyCode;
        $this->apiParas["orderAgencyCode"]  = $orderAgencyCode;
    }

    public function getOrderAgencyCode()
    {
        return $this->orderAgencyCode;
    }

    /**
     * @param int $sourceType
     * 支付来源类型
     * Required: true
     * Example Value: 1：PC端 2：移动端
     */
    private $sourceType;

    /**
     * @param int $sourceType
     * 支付来源类型
     * Example Value: 1：PC端 2：移动端
     */
    public function setSourceType($sourceType)
    {
        $this->sourceType             = $sourceType;
        $this->apiParas["sourceType"]  = $sourceType;
    }

    public function getSourceType()
    {
        return $this->sourceType;
    }

    /**
     * @param int $platformSource
     * 系统来源
     * Required: true
     * Example Value: VSP_PLATFORM(2,vsp),SMB_PLATFORM(1,smb),YAO_PLATFORM(8, 医药平台),医药城XINTONGLU_PLATFORM(3, 新通路);
     */
    private $platformSource;

    /**
     * @param int $platformSource
     * 系统来源
     * Example Value: VSP_PLATFORM(2,vsp),SMB_PLATFORM(1,smb),YAO_PLATFORM(8, 医药平台),医药城XINTONGLU_PLATFORM(3, 新通路);
     */
    public function setPlatformSource($platformSource)
    {
        $this->platformSource             = $platformSource;
        $this->apiParas["platformSource"]  = $platformSource;
    }

    public function getPlatformSource()
    {
        return $this->platformSource;
    }

    /**
     * @param int $appId
     * 应用Id
     * Required: true
     * Example Value: 1
     */
    private $appId;

    /**
     * @param int $appId
     * 应用Id
     * Example Value: 1
     */
    public function setAppId($appId)
    {
        $this->appId             = $appId;
        $this->apiParas["appId"]  = $appId;
    }

    public function getAppId()
    {
        return $this->appId;
    }

}