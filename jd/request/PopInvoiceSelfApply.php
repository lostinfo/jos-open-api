<?php

namespace JD\request;

/**
 * 自开电子发票蓝票上传接口
 * 金算盘API-pop商家计费结算
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=195&apiId=1646&apiName=jingdong.pop.invoice.self.apply
 * Class PopInvoiceSelfApply
 * @package Jd\request
 */
class PopInvoiceSelfApply
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.invoice.self.apply";
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
     * @param String[] $productId
     * SKU编号
     * Required: false
     * Example Value: 
     */
    private $productId;

    /**
     * @param String[] $productId
     * SKU编号
     * Example Value: 
     */
    public function setProductId($productId)
    {
        $this->productId             = $productId;
        $this->apiParas["productId"]  = $productId;
    }

    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @param String[] $productName
     * SKU名称
     * Required: false
     * Example Value: 
     */
    private $productName;

    /**
     * @param String[] $productName
     * SKU名称
     * Example Value: 
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
     * @param Number[] $num
     * 数量
     * Required: false
     * Example Value: 
     */
    private $num;

    /**
     * @param Number[] $num
     * 数量
     * Example Value: 
     */
    public function setNum($num)
    {
        $this->num             = $num;
        $this->apiParas["num"]  = $num;
    }

    public function getNum()
    {
        return $this->num;
    }

    /**
     * @param String[] $price
     * 单价
     * Required: false
     * Example Value: 
     */
    private $price;

    /**
     * @param String[] $price
     * 单价
     * Example Value: 
     */
    public function setPrice($price)
    {
        $this->price             = $price;
        $this->apiParas["price"]  = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param String[] $spec
     * 规格
     * Required: false
     * Example Value: 
     */
    private $spec;

    /**
     * @param String[] $spec
     * 规格
     * Example Value: 
     */
    public function setSpec($spec)
    {
        $this->spec             = $spec;
        $this->apiParas["spec"]  = $spec;
    }

    public function getSpec()
    {
        return $this->spec;
    }

    /**
     * @param String[] $unit
     * 单位
     * Required: false
     * Example Value: 
     */
    private $unit;

    /**
     * @param String[] $unit
     * 单位
     * Example Value: 
     */
    public function setUnit($unit)
    {
        $this->unit             = $unit;
        $this->apiParas["unit"]  = $unit;
    }

    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * @param String[] $taxRate
     * 税率 两位小数
     * Required: false
     * Example Value: 
     */
    private $taxRate;

    /**
     * @param String[] $taxRate
     * 税率 两位小数
     * Example Value: 
     */
    public function setTaxRate($taxRate)
    {
        $this->taxRate             = $taxRate;
        $this->apiParas["taxRate"]  = $taxRate;
    }

    public function getTaxRate()
    {
        return $this->taxRate;
    }

    /**
     * @param String[] $taxCategroyCode
     * 税收分类编码
     * Required: false
     * Example Value: 
     */
    private $taxCategroyCode;

    /**
     * @param String[] $taxCategroyCode
     * 税收分类编码
     * Example Value: 
     */
    public function setTaxCategroyCode($taxCategroyCode)
    {
        $this->taxCategroyCode             = $taxCategroyCode;
        $this->apiParas["taxCategroyCode"]  = $taxCategroyCode;
    }

    public function getTaxCategroyCode()
    {
        return $this->taxCategroyCode;
    }

    /**
     * @param Number[] $isTaxDiscount
     * 优惠政策标识 0-不使用 1-使用
     * Required: false
     * Example Value: 
     */
    private $isTaxDiscount;

    /**
     * @param Number[] $isTaxDiscount
     * 优惠政策标识 0-不使用 1-使用
     * Example Value: 
     */
    public function setIsTaxDiscount($isTaxDiscount)
    {
        $this->isTaxDiscount             = $isTaxDiscount;
        $this->apiParas["isTaxDiscount"]  = $isTaxDiscount;
    }

    public function getIsTaxDiscount()
    {
        return $this->isTaxDiscount;
    }

    /**
     * @param String[] $taxDiscountContent
     * 增值税特殊管理 当优惠政策标识为1时填写
     * Required: false
     * Example Value: 
     */
    private $taxDiscountContent;

    /**
     * @param String[] $taxDiscountContent
     * 增值税特殊管理 当优惠政策标识为1时填写
     * Example Value: 
     */
    public function setTaxDiscountContent($taxDiscountContent)
    {
        $this->taxDiscountContent             = $taxDiscountContent;
        $this->apiParas["taxDiscountContent"]  = $taxDiscountContent;
    }

    public function getTaxDiscountContent()
    {
        return $this->taxDiscountContent;
    }

    /**
     * @param String[] $zeroTax
     * 零税率标识 空-非零税率 0-出口退税 1-免税 2-不征收 3-普通零税率
     * Required: false
     * Example Value: 
     */
    private $zeroTax;

    /**
     * @param String[] $zeroTax
     * 零税率标识 空-非零税率 0-出口退税 1-免税 2-不征收 3-普通零税率
     * Example Value: 
     */
    public function setZeroTax($zeroTax)
    {
        $this->zeroTax             = $zeroTax;
        $this->apiParas["zeroTax"]  = $zeroTax;
    }

    public function getZeroTax()
    {
        return $this->zeroTax;
    }

    /**
     * @param String[] $deductions
     * 扣除额 两位小数
     * Required: false
     * Example Value: 
     */
    private $deductions;

    /**
     * @param String[] $deductions
     * 扣除额 两位小数
     * Example Value: 
     */
    public function setDeductions($deductions)
    {
        $this->deductions             = $deductions;
        $this->apiParas["deductions"]  = $deductions;
    }

    public function getDeductions()
    {
        return $this->deductions;
    }

    /**
     * @param String[] $imei
     * 商品IMEI码
     * Required: false
     * Example Value: 
     */
    private $imei;

    /**
     * @param String[] $imei
     * 商品IMEI码
     * Example Value: 
     */
    public function setImei($imei)
    {
        $this->imei             = $imei;
        $this->apiParas["imei"]  = $imei;
    }

    public function getImei()
    {
        return $this->imei;
    }

    /**
     * @param String[] $discount
     * 折扣
     * Required: false
     * Example Value: 
     */
    private $discount;

    /**
     * @param String[] $discount
     * 折扣
     * Example Value: 
     */
    public function setDiscount($discount)
    {
        $this->discount             = $discount;
        $this->apiParas["discount"]  = $discount;
    }

    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @param String[] $freight
     * 运费
     * Required: false
     * Example Value: 
     */
    private $freight;

    /**
     * @param String[] $freight
     * 运费
     * Example Value: 
     */
    public function setFreight($freight)
    {
        $this->freight             = $freight;
        $this->apiParas["freight"]  = $freight;
    }

    public function getFreight()
    {
        return $this->freight;
    }

    /**
     * @param String $orderId
     * 订单编号
     * Required: true
     * Example Value: 
     */
    private $orderId;

    /**
     * @param String $orderId
     * 订单编号
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
     * @param String $receiverTaxNo
     * 销货方识别号（税号）
     * Required: true
     * Example Value: 
     */
    private $receiverTaxNo;

    /**
     * @param String $receiverTaxNo
     * 销货方识别号（税号）
     * Example Value: 
     */
    public function setReceiverTaxNo($receiverTaxNo)
    {
        $this->receiverTaxNo             = $receiverTaxNo;
        $this->apiParas["receiverTaxNo"]  = $receiverTaxNo;
    }

    public function getReceiverTaxNo()
    {
        return $this->receiverTaxNo;
    }

    /**
     * @param String $receiverName
     * 销货方公司名称
     * Required: true
     * Example Value: 
     */
    private $receiverName;

    /**
     * @param String $receiverName
     * 销货方公司名称
     * Example Value: 
     */
    public function setReceiverName($receiverName)
    {
        $this->receiverName             = $receiverName;
        $this->apiParas["receiverName"]  = $receiverName;
    }

    public function getReceiverName()
    {
        return $this->receiverName;
    }

    /**
     * @param String $invoiceCode
     * 发票代码
     * Required: true
     * Example Value: 
     */
    private $invoiceCode;

    /**
     * @param String $invoiceCode
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
     * @param Number $invoiceNo
     * 发票号码
     * Required: true
     * Example Value: 
     */
    private $invoiceNo;

    /**
     * @param Number $invoiceNo
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
     * @param String $ivcTitle
     * 发票抬头
     * Required: true
     * Example Value: 
     */
    private $ivcTitle;

    /**
     * @param String $ivcTitle
     * 发票抬头
     * Example Value: 
     */
    public function setIvcTitle($ivcTitle)
    {
        $this->ivcTitle             = $ivcTitle;
        $this->apiParas["ivcTitle"]  = $ivcTitle;
    }

    public function getIvcTitle()
    {
        return $this->ivcTitle;
    }

    /**
     * @param String $totalPrice
     * 开票金额 两位小数
     * Required: false
     * Example Value: 
     */
    private $totalPrice;

    /**
     * @param String $totalPrice
     * 开票金额 两位小数
     * Example Value: 
     */
    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice             = $totalPrice;
        $this->apiParas["totalPrice"]  = $totalPrice;
    }

    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * @param String $invoiceTime
     * 开票时间 yyyy-MM-dd
     * Required: true
     * Example Value: 
     */
    private $invoiceTime;

    /**
     * @param String $invoiceTime
     * 开票时间 yyyy-MM-dd
     * Example Value: 
     */
    public function setInvoiceTime($invoiceTime)
    {
        $this->invoiceTime             = $invoiceTime;
        $this->apiParas["invoiceTime"]  = $invoiceTime;
    }

    public function getInvoiceTime()
    {
        return $this->invoiceTime;
    }

    /**
     * @param String $pdfInfo
     * 发票PDF文件二进制流base64
     * Required: true
     * Example Value: 
     */
    private $pdfInfo;

    /**
     * @param String $pdfInfo
     * 发票PDF文件二进制流base64
     * Example Value: 
     */
    public function setPdfInfo($pdfInfo)
    {
        $this->pdfInfo             = $pdfInfo;
        $this->apiParas["pdfInfo"]  = $pdfInfo;
    }

    public function getPdfInfo()
    {
        return $this->pdfInfo;
    }

    /**
     * @param Number $orderType
     * 订单类型
     * Required: false
     * Example Value: 
     */
    private $orderType;

    /**
     * @param Number $orderType
     * 订单类型
     * Example Value: 
     */
    public function setOrderType($orderType)
    {
        $this->orderType             = $orderType;
        $this->apiParas["orderType"]  = $orderType;
    }

    public function getOrderType()
    {
        return $this->orderType;
    }

    /**
     * @param Number $ivcContentType
     * 开票内容编号
     * Required: false
     * Example Value: 
     */
    private $ivcContentType;

    /**
     * @param Number $ivcContentType
     * 开票内容编号
     * Example Value: 
     */
    public function setIvcContentType($ivcContentType)
    {
        $this->ivcContentType             = $ivcContentType;
        $this->apiParas["ivcContentType"]  = $ivcContentType;
    }

    public function getIvcContentType()
    {
        return $this->ivcContentType;
    }

    /**
     * @param String $ivcContentName
     * 开票内容名称
     * Required: false
     * Example Value: 
     */
    private $ivcContentName;

    /**
     * @param String $ivcContentName
     * 开票内容名称
     * Example Value: 
     */
    public function setIvcContentName($ivcContentName)
    {
        $this->ivcContentName             = $ivcContentName;
        $this->apiParas["ivcContentName"]  = $ivcContentName;
    }

    public function getIvcContentName()
    {
        return $this->ivcContentName;
    }

    /**
     * @param String $eiRemark
     * 发票备注
     * Required: false
     * Example Value: 
     */
    private $eiRemark;

    /**
     * @param String $eiRemark
     * 发票备注
     * Example Value: 
     */
    public function setEiRemark($eiRemark)
    {
        $this->eiRemark             = $eiRemark;
        $this->apiParas["eiRemark"]  = $eiRemark;
    }

    public function getEiRemark()
    {
        return $this->eiRemark;
    }

    /**
     * @param String $receiverAddress
     * 销货方公司地址
     * Required: false
     * Example Value: 
     */
    private $receiverAddress;

    /**
     * @param String $receiverAddress
     * 销货方公司地址
     * Example Value: 
     */
    public function setReceiverAddress($receiverAddress)
    {
        $this->receiverAddress             = $receiverAddress;
        $this->apiParas["receiverAddress"]  = $receiverAddress;
    }

    public function getReceiverAddress()
    {
        return $this->receiverAddress;
    }

    /**
     * @param String $receiverPhone
     * 销货方电话
     * Required: false
     * Example Value: 
     */
    private $receiverPhone;

    /**
     * @param String $receiverPhone
     * 销货方电话
     * Example Value: 
     */
    public function setReceiverPhone($receiverPhone)
    {
        $this->receiverPhone             = $receiverPhone;
        $this->apiParas["receiverPhone"]  = $receiverPhone;
    }

    public function getReceiverPhone()
    {
        return $this->receiverPhone;
    }

    /**
     * @param String $receiverBankName
     * 销货方公司开户行
     * Required: false
     * Example Value: 
     */
    private $receiverBankName;

    /**
     * @param String $receiverBankName
     * 销货方公司开户行
     * Example Value: 
     */
    public function setReceiverBankName($receiverBankName)
    {
        $this->receiverBankName             = $receiverBankName;
        $this->apiParas["receiverBankName"]  = $receiverBankName;
    }

    public function getReceiverBankName()
    {
        return $this->receiverBankName;
    }

    /**
     * @param String $receiverBankAccount
     * 销货方公司银行账户
     * Required: false
     * Example Value: 
     */
    private $receiverBankAccount;

    /**
     * @param String $receiverBankAccount
     * 销货方公司银行账户
     * Example Value: 
     */
    public function setReceiverBankAccount($receiverBankAccount)
    {
        $this->receiverBankAccount             = $receiverBankAccount;
        $this->apiParas["receiverBankAccount"]  = $receiverBankAccount;
    }

    public function getReceiverBankAccount()
    {
        return $this->receiverBankAccount;
    }

    /**
     * @param String $drawer
     * 开票人
     * Required: false
     * Example Value: 
     */
    private $drawer;

    /**
     * @param String $drawer
     * 开票人
     * Example Value: 
     */
    public function setDrawer($drawer)
    {
        $this->drawer             = $drawer;
        $this->apiParas["drawer"]  = $drawer;
    }

    public function getDrawer()
    {
        return $this->drawer;
    }

    /**
     * @param String $payee
     * 收款人
     * Required: false
     * Example Value: 
     */
    private $payee;

    /**
     * @param String $payee
     * 收款人
     * Example Value: 
     */
    public function setPayee($payee)
    {
        $this->payee             = $payee;
        $this->apiParas["payee"]  = $payee;
    }

    public function getPayee()
    {
        return $this->payee;
    }

}