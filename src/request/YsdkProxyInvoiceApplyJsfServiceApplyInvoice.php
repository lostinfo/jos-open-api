<?php

namespace JD\request;

/**
 * 委托代征开票申请接口
 * 商事创新API-B端企业与自然人之间的劳务采买涉及发票开具、发票核销以及企业向自然人发佣等服务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=472&apiId=3627&apiName=jingdong.ysdk.ProxyInvoiceApplyJsfService.applyInvoice
 * Class YsdkProxyInvoiceApplyJsfServiceApplyInvoice
 * @package Jd\request
 */
class YsdkProxyInvoiceApplyJsfServiceApplyInvoice
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ysdk.ProxyInvoiceApplyJsfService.applyInvoice";
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
     * @param String $certType
     * 证件类型
     * Required: true
     * Example Value: 201
     */
    private $certType;

    /**
     * @param String $certType
     * 证件类型
     * Example Value: 201
     */
    public function setCertType($certType)
    {
        $this->certType             = $certType;
        $this->apiParas["certType"]  = $certType;
    }

    public function getCertType()
    {
        return $this->certType;
    }

    /**
     * @param String $bizCompDate
     * 交易完成时间
     * Required: true
     * Example Value: 2018-10-12 15:32:00
     */
    private $bizCompDate;

    /**
     * @param String $bizCompDate
     * 交易完成时间
     * Example Value: 2018-10-12 15:32:00
     */
    public function setBizCompDate($bizCompDate)
    {
        $this->bizCompDate             = $bizCompDate;
        $this->apiParas["bizCompDate"]  = $bizCompDate;
    }

    public function getBizCompDate()
    {
        return $this->bizCompDate;
    }

    /**
     * @param String $feeDeptCode
     * 费用承担部门编码
     * Required: false
     * Example Value: 外部客户不需填写
     */
    private $feeDeptCode;

    /**
     * @param String $feeDeptCode
     * 费用承担部门编码
     * Example Value: 外部客户不需填写
     */
    public function setFeeDeptCode($feeDeptCode)
    {
        $this->feeDeptCode             = $feeDeptCode;
        $this->apiParas["feeDeptCode"]  = $feeDeptCode;
    }

    public function getFeeDeptCode()
    {
        return $this->feeDeptCode;
    }

    /**
     * @param String $appCode
     * 平台编号
     * Required: true
     * Example Value: SHIGE
     */
    private $appCode;

    /**
     * @param String $appCode
     * 平台编号
     * Example Value: SHIGE
     */
    public function setAppCode($appCode)
    {
        $this->appCode             = $appCode;
        $this->apiParas["appCode"]  = $appCode;
    }

    public function getAppCode()
    {
        return $this->appCode;
    }

    /**
     * @param String $certNo
     * 自然人身份证号码
     * Required: true
     * Example Value: 140221199012122324
     */
    private $certNo;

    /**
     * @param String $certNo
     * 自然人身份证号码
     * Example Value: 140221199012122324
     */
    public function setCertNo($certNo)
    {
        $this->certNo             = $certNo;
        $this->apiParas["certNo"]  = $certNo;
    }

    public function getCertNo()
    {
        return $this->certNo;
    }

    /**
     * @param String $businessNo
     * 业务订单号
     * Required: true
     * Example Value: yw0001
     */
    private $businessNo;

    /**
     * @param String $businessNo
     * 业务订单号
     * Example Value: yw0001
     */
    public function setBusinessNo($businessNo)
    {
        $this->businessNo             = $businessNo;
        $this->apiParas["businessNo"]  = $businessNo;
    }

    public function getBusinessNo()
    {
        return $this->businessNo;
    }

    /**
     * @param String $requestId
     * 发票申请id
     * Required: true
     * Example Value: 150
     */
    private $requestId;

    /**
     * @param String $requestId
     * 发票申请id
     * Example Value: 150
     */
    public function setRequestId($requestId)
    {
        $this->requestId             = $requestId;
        $this->apiParas["requestId"]  = $requestId;
    }

    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * @param String $amountWay
     * 商品列表金额(amount)模式
     * Required: true
     * Example Value: 0
     */
    private $amountWay;

    /**
     * @param String $amountWay
     * 商品列表金额(amount)模式
     * Example Value: 0
     */
    public function setAmountWay($amountWay)
    {
        $this->amountWay             = $amountWay;
        $this->apiParas["amountWay"]  = $amountWay;
    }

    public function getAmountWay()
    {
        return $this->amountWay;
    }

    /**
     * @param String $feeItemCode
     * 费用科目编号
     * Required: false
     * Example Value: 外部客户不需填写
     */
    private $feeItemCode;

    /**
     * @param String $feeItemCode
     * 费用科目编号
     * Example Value: 外部客户不需填写
     */
    public function setFeeItemCode($feeItemCode)
    {
        $this->feeItemCode             = $feeItemCode;
        $this->apiParas["feeItemCode"]  = $feeItemCode;
    }

    public function getFeeItemCode()
    {
        return $this->feeItemCode;
    }

    /**
     * @param String $tradeType
     * 开票行业
     * Required: true
     * Example Value: 益世分配,填代码
     */
    private $tradeType;

    /**
     * @param String $tradeType
     * 开票行业
     * Example Value: 益世分配,填代码
     */
    public function setTradeType($tradeType)
    {
        $this->tradeType             = $tradeType;
        $this->apiParas["tradeType"]  = $tradeType;
    }

    public function getTradeType()
    {
        return $this->tradeType;
    }

    /**
     * @param String $productType
     * 开票品目
     * Required: true
     * Example Value: 益世分配，填代码
     */
    private $productType;

    /**
     * @param String $productType
     * 开票品目
     * Example Value: 益世分配，填代码
     */
    public function setProductType($productType)
    {
        $this->productType             = $productType;
        $this->apiParas["productType"]  = $productType;
    }

    public function getProductType()
    {
        return $this->productType;
    }

    /**
     * @param String[] $division
     * 单位
     * Required: true
     * Example Value: 个
     */
    private $division;

    /**
     * @param String[] $division
     * 单位
     * Example Value: 个
     */
    public function setDivision($division)
    {
        $this->division             = $division;
        $this->apiParas["division"]  = $division;
    }

    public function getDivision()
    {
        return $this->division;
    }

    /**
     * @param String[] $unitPrice
     * 单价
     * Required: true
     * Example Value: 10
     */
    private $unitPrice;

    /**
     * @param String[] $unitPrice
     * 单价
     * Example Value: 10
     */
    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice             = $unitPrice;
        $this->apiParas["unitPrice"]  = $unitPrice;
    }

    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * @param String[] $amount
     * 金额
     * Required: true
     * Example Value: 20
     */
    private $amount;

    /**
     * @param String[] $amount
     * 金额
     * Example Value: 20
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
     * @param String[] $specifications
     * 规格型号
     * Required: false
     * Example Value: 个
     */
    private $specifications;

    /**
     * @param String[] $specifications
     * 规格型号
     * Example Value: 个
     */
    public function setSpecifications($specifications)
    {
        $this->specifications             = $specifications;
        $this->apiParas["specifications"]  = $specifications;
    }

    public function getSpecifications()
    {
        return $this->specifications;
    }

    /**
     * @param String[] $productName
     * 商品名称
     * Required: true
     * Example Value: 水果
     */
    private $productName;

    /**
     * @param String[] $productName
     * 商品名称
     * Example Value: 水果
     */
    public function setProductName($productName)
    {
        $this->productName             = $productName;
        $this->apiParas["productName"]  = $productName;
    }

    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @param String[] $itemCount
     * 数量
     * Required: true
     * Example Value: 2
     */
    private $itemCount;

    /**
     * @param String[] $itemCount
     * 数量
     * Example Value: 2
     */
    public function setItemCount($itemCount)
    {
        $this->itemCount             = $itemCount;
        $this->apiParas["itemCount"]  = $itemCount;
    }

    public function getItemCount()
    {
        return $this->itemCount;
    }

    /**
     * @param String $bizCreatedDate
     * 交易创建时间
     * Required: true
     * Example Value: 2018-10-12 14:32:00
     */
    private $bizCreatedDate;

    /**
     * @param String $bizCreatedDate
     * 交易创建时间
     * Example Value: 2018-10-12 14:32:00
     */
    public function setBizCreatedDate($bizCreatedDate)
    {
        $this->bizCreatedDate             = $bizCreatedDate;
        $this->apiParas["bizCreatedDate"]  = $bizCreatedDate;
    }

    public function getBizCreatedDate()
    {
        return $this->bizCreatedDate;
    }

}