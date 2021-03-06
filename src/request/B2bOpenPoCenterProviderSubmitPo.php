<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 统一提交采购单服务
 * B2B开放API-B2B开放
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=391&apiId=3228&apiName=jingdong.b2b.open.PoCenterProvider.submitPo
 * Class B2bOpenPoCenterProviderSubmitPo
 * @package Jd\request
 */
class B2bOpenPoCenterProviderSubmitPo
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.b2b.open.PoCenterProvider.submitPo";
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
     * @param string $operator
     * 操作人账号
     * Required: true
     * Example Value: 
     */
    private $operator;

    /**
     * @param string $operator
     * 操作人账号
     * Example Value: 
     */
    public function setOperator($operator)
    {
        $this->operator             = $operator;
        $this->apiParas["op"]  = $operator;
    }

    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * @param string $systemSource
     * 系统来源
     * Required: true
     * Example Value: 
     */
    private $systemSource;

    /**
     * @param string $systemSource
     * 系统来源
     * Example Value: 
     */
    public function setSystemSource($systemSource)
    {
        $this->systemSource             = $systemSource;
        $this->apiParas["systemSource"]  = $systemSource;
    }

    public function getSystemSource()
    {
        return $this->systemSource;
    }

    /**
     * @param com.jd.b2b.po.sdk.dto.req.PoReq $poReq
     * 采购单信息
     * Required: true
     * Example Value: 
     */
    private $poReq;

    /**
     * @param com.jd.b2b.po.sdk.dto.req.PoReq $poReq
     * 采购单信息
     * Example Value: 
     */
    public function setPoReq($poReq)
    {
        $this->poReq             = $poReq;
        $this->apiParas["poReq"]  = $poReq;
    }

    public function getPoReq()
    {
        return $this->poReq;
    }

    /**
     * @param string $thirdOrderId
     * 接入平台采购单号 
     * Required: true
     * Example Value: 
     */
    private $thirdOrderId;

    /**
     * @param string $thirdOrderId
     * 接入平台采购单号 
     * Example Value: 
     */
    public function setThirdOrderId($thirdOrderId)
    {
        $this->thirdOrderId             = $thirdOrderId;
        $this->apiParas["thirdOrderId"]  = $thirdOrderId;
    }

    public function getThirdOrderId()
    {
        return $this->thirdOrderId;
    }

    /**
     * @param string $remark
     * 备注
     * Required: true
     * Example Value: 
     */
    private $remark;

    /**
     * @param string $remark
     * 备注
     * Example Value: 
     */
    public function setRemark($remark)
    {
        $this->remark             = $remark;
        $this->apiParas["remark"]  = $remark;
    }

    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * @param com.jd.b2b.po.sdk.dto.req.PaymentReq $payment
     * 支付信息
     * Required: true
     * Example Value: 
     */
    private $payment;

    /**
     * @param com.jd.b2b.po.sdk.dto.req.PaymentReq $payment
     * 支付信息
     * Example Value: 
     */
    public function setPayment($payment)
    {
        $this->payment             = $payment;
        $this->apiParas["payment"]  = $payment;
    }

    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * @param int $paymentType
     * 支付方式
     * Required: true
     * Example Value: 5-公司转账
     */
    private $paymentType;

    /**
     * @param int $paymentType
     * 支付方式
     * Example Value: 5-公司转账
     */
    public function setPaymentType($paymentType)
    {
        $this->paymentType             = $paymentType;
        $this->apiParas["paymentType"]  = $paymentType;
    }

    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * @param int $delayPay
     * 延迟支付
     * Required: true
     * Example Value: 1-延迟支付 0-非延迟支付
     */
    private $delayPay;

    /**
     * @param int $delayPay
     * 延迟支付
     * Example Value: 1-延迟支付 0-非延迟支付
     */
    public function setDelayPay($delayPay)
    {
        $this->delayPay             = $delayPay;
        $this->apiParas["delayPay"]  = $delayPay;
    }

    public function getDelayPay()
    {
        return $this->delayPay;
    }

    /**
     * @param java.util.List $shipments
     * 配送信息
     * Required: true
     * Example Value: 
     */
    private $shipments;

    /**
     * @param java.util.List $shipments
     * 配送信息
     * Example Value: 
     */
    public function setShipments($shipments)
    {
        $this->shipments             = $shipments;
        $this->apiParas["shipments"]  = $shipments;
    }

    public function getShipments()
    {
        return $this->shipments;
    }

    /**
     * @param com.jd.b2b.po.sdk.dto.req.ShipmentReq $shipment
     * 配送信息
     * Required: true
     * Example Value: 
     */
    private $shipment;

    /**
     * @param com.jd.b2b.po.sdk.dto.req.ShipmentReq $shipment
     * 配送信息
     * Example Value: 
     */
    public function setShipment($shipment)
    {
        $this->shipment             = $shipment;
        $this->apiParas["shipment"]  = $shipment;
    }

    public function getShipment()
    {
        return $this->shipment;
    }

    /**
     * @param string $shipmentDate
     * 配送日期
     * Required: true
     * Example Value: 
     */
    private $shipmentDate;

    /**
     * @param string $shipmentDate
     * 配送日期
     * Example Value: 
     */
    public function setShipmentDate($shipmentDate)
    {
        $this->shipmentDate             = $shipmentDate;
        $this->apiParas["shipmentDate"]  = $shipmentDate;
    }

    public function getShipmentDate()
    {
        return $this->shipmentDate;
    }

    /**
     * @param int $shipmentType
     * 配送方式
     * Required: true
     * Example Value: 64-自提 65-京东配送 66-三方配送 67-sop第三方配送
     */
    private $shipmentType;

    /**
     * @param int $shipmentType
     * 配送方式
     * Example Value: 64-自提 65-京东配送 66-三方配送 67-sop第三方配送
     */
    public function setShipmentType($shipmentType)
    {
        $this->shipmentType             = $shipmentType;
        $this->apiParas["shipmentType"]  = $shipmentType;
    }

    public function getShipmentType()
    {
        return $this->shipmentType;
    }

    /**
     * @param com.jd.b2b.po.sdk.dto.req.FreightReq $freight
     * 运费信息
     * Required: true
     * Example Value: 
     */
    private $freight;

    /**
     * @param com.jd.b2b.po.sdk.dto.req.FreightReq $freight
     * 运费信息
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
     * @param int $freight
     * 订单总运费
     * Required: true
     * Example Value: 
     */
    private $freight;

    /**
     * @param int $freight
     * 订单总运费
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
     * @param int $jdFreight
     * 订单京东运费
     * Required: true
     * Example Value: 
     */
    private $jdFreight;

    /**
     * @param int $jdFreight
     * 订单京东运费
     * Example Value: 
     */
    public function setJdFreight($jdFreight)
    {
        $this->jdFreight             = $jdFreight;
        $this->apiParas["jdFreight"]  = $jdFreight;
    }

    public function getJdFreight()
    {
        return $this->jdFreight;
    }

    /**
     * @param bool $needValidate
     * 是否需要校验运费
     * Required: true
     * Example Value: 
     */
    private $needValidate;

    /**
     * @param bool $needValidate
     * 是否需要校验运费
     * Example Value: 
     */
    public function setNeedValidate($needValidate)
    {
        $this->needValidate             = $needValidate;
        $this->apiParas["needValidate"]  = $needValidate;
    }

    public function getNeedValidate()
    {
        return $this->needValidate;
    }

    /**
     * @param com.jd.b2b.po.sdk.dto.req.InvoiceReq $invoice
     * 发票信息
     * Required: true
     * Example Value: 
     */
    private $invoice;

    /**
     * @param com.jd.b2b.po.sdk.dto.req.InvoiceReq $invoice
     * 发票信息
     * Example Value: 
     */
    public function setInvoice($invoice)
    {
        $this->invoice             = $invoice;
        $this->apiParas["invoice"]  = $invoice;
    }

    public function getInvoice()
    {
        return $this->invoice;
    }

    /**
     * @param int $invoiceType
     * 发票类型
     * Required: true
     * Example Value: 2-增票 3-电子发票
     */
    private $invoiceType;

    /**
     * @param int $invoiceType
     * 发票类型
     * Example Value: 2-增票 3-电子发票
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
     * @param int $putType
     * 开票方式,增票只支持集中开票
     * Required: true
     * Example Value: 1-随货开票 2-集中开票 3-不开发票
     */
    private $putType;

    /**
     * @param int $putType
     * 开票方式,增票只支持集中开票
     * Example Value: 1-随货开票 2-集中开票 3-不开发票
     */
    public function setPutType($putType)
    {
        $this->putType             = $putType;
        $this->apiParas["putType"]  = $putType;
    }

    public function getPutType()
    {
        return $this->putType;
    }

    /**
     * @param com.jd.b2b.po.sdk.dto.req.invoice.VatInvoiceReq $vatInvoice
     * 增票信息(invoiceType=2时必填)
     * Required: true
     * Example Value: 
     */
    private $vatInvoice;

    /**
     * @param com.jd.b2b.po.sdk.dto.req.invoice.VatInvoiceReq $vatInvoice
     * 增票信息(invoiceType=2时必填)
     * Example Value: 
     */
    public function setVatInvoice($vatInvoice)
    {
        $this->vatInvoice             = $vatInvoice;
        $this->apiParas["vatInvoice"]  = $vatInvoice;
    }

    public function getVatInvoice()
    {
        return $this->vatInvoice;
    }

    /**
     * @param string $companyName
     * 公司名称
     * Required: true
     * Example Value: 
     */
    private $companyName;

    /**
     * @param string $companyName
     * 公司名称
     * Example Value: 
     */
    public function setCompanyName($companyName)
    {
        $this->companyName             = $companyName;
        $this->apiParas["companyName"]  = $companyName;
    }

    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @param string $taxpayerIdentity
     * 纳税人识别号
     * Required: true
     * Example Value: 
     */
    private $taxpayerIdentity;

    /**
     * @param string $taxpayerIdentity
     * 纳税人识别号
     * Example Value: 
     */
    public function setTaxpayerIdentity($taxpayerIdentity)
    {
        $this->taxpayerIdentity             = $taxpayerIdentity;
        $this->apiParas["taxpayerIdentity"]  = $taxpayerIdentity;
    }

    public function getTaxpayerIdentity()
    {
        return $this->taxpayerIdentity;
    }

    /**
     * @param string $registeredAddress
     * 注册地址
     * Required: true
     * Example Value: 
     */
    private $registeredAddress;

    /**
     * @param string $registeredAddress
     * 注册地址
     * Example Value: 
     */
    public function setRegisteredAddress($registeredAddress)
    {
        $this->registeredAddress             = $registeredAddress;
        $this->apiParas["registeredAddress"]  = $registeredAddress;
    }

    public function getRegisteredAddress()
    {
        return $this->registeredAddress;
    }

    /**
     * @param string $registeredBank
     * 注册银行名称
     * Required: true
     * Example Value: 
     */
    private $registeredBank;

    /**
     * @param string $registeredBank
     * 注册银行名称
     * Example Value: 
     */
    public function setRegisteredBank($registeredBank)
    {
        $this->registeredBank             = $registeredBank;
        $this->apiParas["registeredBank"]  = $registeredBank;
    }

    public function getRegisteredBank()
    {
        return $this->registeredBank;
    }

    /**
     * @param string $registeredBankAccount
     * 注册银行账户
     * Required: true
     * Example Value: 
     */
    private $registeredBankAccount;

    /**
     * @param string $registeredBankAccount
     * 注册银行账户
     * Example Value: 
     */
    public function setRegisteredBankAccount($registeredBankAccount)
    {
        $this->registeredBankAccount             = $registeredBankAccount;
        $this->apiParas["registeredBankAccount"]  = $registeredBankAccount;
    }

    public function getRegisteredBankAccount()
    {
        return $this->registeredBankAccount;
    }

    /**
     * @param string $registeredPhone
     * 注册手机号
     * Required: true
     * Example Value: 
     */
    private $registeredPhone;

    /**
     * @param string $registeredPhone
     * 注册手机号
     * Example Value: 
     */
    public function setRegisteredPhone($registeredPhone)
    {
        $this->registeredPhone             = $registeredPhone;
        $this->apiParas["registeredPhone"]  = $registeredPhone;
    }

    public function getRegisteredPhone()
    {
        return $this->registeredPhone;
    }

    /**
     * @param com.jd.b2b.po.sdk.dto.req.invoice.InvoiceConsigneeReq $invoiceConsignee
     * 收票地址
     * Required: true
     * Example Value: 
     */
    private $invoiceConsignee;

    /**
     * @param com.jd.b2b.po.sdk.dto.req.invoice.InvoiceConsigneeReq $invoiceConsignee
     * 收票地址
     * Example Value: 
     */
    public function setInvoiceConsignee($invoiceConsignee)
    {
        $this->invoiceConsignee             = $invoiceConsignee;
        $this->apiParas["invoiceConsignee"]  = $invoiceConsignee;
    }

    public function getInvoiceConsignee()
    {
        return $this->invoiceConsignee;
    }

    /**
     * @param string $name
     * 收票人姓名
     * Required: true
     * Example Value: 
     */
    private $name;

    /**
     * @param string $name
     * 收票人姓名
     * Example Value: 
     */
    public function setName($name)
    {
        $this->name             = $name;
        $this->apiParas["name"]  = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $mobile
     * 收票人电话
     * Required: true
     * Example Value: 
     */
    private $mobile;

    /**
     * @param string $mobile
     * 收票人电话
     * Example Value: 
     */
    public function setMobile($mobile)
    {
        $this->mobile             = $mobile;
        $this->apiParas["mobile"]  = $mobile;
    }

    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @param int $regAddressId
     * 注册的地址ID
     * Required: true
     * Example Value: 
     */
    private $regAddressId;

    /**
     * @param int $regAddressId
     * 注册的地址ID
     * Example Value: 
     */
    public function setRegAddressId($regAddressId)
    {
        $this->regAddressId             = $regAddressId;
        $this->apiParas["regAddressId"]  = $regAddressId;
    }

    public function getRegAddressId()
    {
        return $this->regAddressId;
    }

    /**
     * @param int $provinceId
     * 省编号
     * Required: true
     * Example Value: 
     */
    private $provinceId;

    /**
     * @param int $provinceId
     * 省编号
     * Example Value: 
     */
    public function setProvinceId($provinceId)
    {
        $this->provinceId             = $provinceId;
        $this->apiParas["provinceId"]  = $provinceId;
    }

    public function getProvinceId()
    {
        return $this->provinceId;
    }

    /**
     * @param string $provinceName
     * 省名称
     * Required: true
     * Example Value: 
     */
    private $provinceName;

    /**
     * @param string $provinceName
     * 省名称
     * Example Value: 
     */
    public function setProvinceName($provinceName)
    {
        $this->provinceName             = $provinceName;
        $this->apiParas["provinceName"]  = $provinceName;
    }

    public function getProvinceName()
    {
        return $this->provinceName;
    }

    /**
     * @param int $cityId
     * 市编号
     * Required: true
     * Example Value: 
     */
    private $cityId;

    /**
     * @param int $cityId
     * 市编号
     * Example Value: 
     */
    public function setCityId($cityId)
    {
        $this->cityId             = $cityId;
        $this->apiParas["cityId"]  = $cityId;
    }

    public function getCityId()
    {
        return $this->cityId;
    }

    /**
     * @param string $cityName
     * 市名称
     * Required: true
     * Example Value: 
     */
    private $cityName;

    /**
     * @param string $cityName
     * 市名称
     * Example Value: 
     */
    public function setCityName($cityName)
    {
        $this->cityName             = $cityName;
        $this->apiParas["cityName"]  = $cityName;
    }

    public function getCityName()
    {
        return $this->cityName;
    }

    /**
     * @param int $countyId
     * 区编号
     * Required: true
     * Example Value: 
     */
    private $countyId;

    /**
     * @param int $countyId
     * 区编号
     * Example Value: 
     */
    public function setCountyId($countyId)
    {
        $this->countyId             = $countyId;
        $this->apiParas["countyId"]  = $countyId;
    }

    public function getCountyId()
    {
        return $this->countyId;
    }

    /**
     * @param string $countyName
     * 区名称
     * Required: true
     * Example Value: 
     */
    private $countyName;

    /**
     * @param string $countyName
     * 区名称
     * Example Value: 
     */
    public function setCountyName($countyName)
    {
        $this->countyName             = $countyName;
        $this->apiParas["countyName"]  = $countyName;
    }

    public function getCountyName()
    {
        return $this->countyName;
    }

    /**
     * @param int $townId
     * 县编号
     * Required: true
     * Example Value: 
     */
    private $townId;

    /**
     * @param int $townId
     * 县编号
     * Example Value: 
     */
    public function setTownId($townId)
    {
        $this->townId             = $townId;
        $this->apiParas["townId"]  = $townId;
    }

    public function getTownId()
    {
        return $this->townId;
    }

    /**
     * @param string $townName
     * 县名称
     * Required: true
     * Example Value: 
     */
    private $townName;

    /**
     * @param string $townName
     * 县名称
     * Example Value: 
     */
    public function setTownName($townName)
    {
        $this->townName             = $townName;
        $this->apiParas["townName"]  = $townName;
    }

    public function getTownName()
    {
        return $this->townName;
    }

    /**
     * @param string $address
     * 详细地址
     * Required: true
     * Example Value: 
     */
    private $address;

    /**
     * @param string $address
     * 详细地址
     * Example Value: 
     */
    public function setAddress($address)
    {
        $this->address             = $address;
        $this->apiParas["address"]  = $address;
    }

    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param com.jd.b2b.po.sdk.dto.req.invoice.ElectricInvoiceReq $electricInvoice
     * 电子票信息(invoiceType=3时必填)
     * Required: true
     * Example Value: 
     */
    private $electricInvoice;

    /**
     * @param com.jd.b2b.po.sdk.dto.req.invoice.ElectricInvoiceReq $electricInvoice
     * 电子票信息(invoiceType=3时必填)
     * Example Value: 
     */
    public function setElectricInvoice($electricInvoice)
    {
        $this->electricInvoice             = $electricInvoice;
        $this->apiParas["electricInvoice"]  = $electricInvoice;
    }

    public function getElectricInvoice()
    {
        return $this->electricInvoice;
    }

    /**
     * @param int $title
     * 抬头
     * Required: true
     * Example Value: 1-政府 2-企业 4-个人 5-单位
     */
    private $title;

    /**
     * @param int $title
     * 抬头
     * Example Value: 1-政府 2-企业 4-个人 5-单位
     */
    public function setTitle($title)
    {
        $this->title             = $title;
        $this->apiParas["title"]  = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $taxpayerIdentity
     * 纳税人识别号
     * Required: true
     * Example Value: 
     */
    private $taxpayerIdentity;

    /**
     * @param string $taxpayerIdentity
     * 纳税人识别号
     * Example Value: 
     */
    public function setTaxpayerIdentity($taxpayerIdentity)
    {
        $this->taxpayerIdentity             = $taxpayerIdentity;
        $this->apiParas["taxpayerIdentity"]  = $taxpayerIdentity;
    }

    public function getTaxpayerIdentity()
    {
        return $this->taxpayerIdentity;
    }

    /**
     * @param string $companyName
     * 公司名称(title=2时必填)
     * Required: true
     * Example Value: 
     */
    private $companyName;

    /**
     * @param string $companyName
     * 公司名称(title=2时必填)
     * Example Value: 
     */
    public function setCompanyName($companyName)
    {
        $this->companyName             = $companyName;
        $this->apiParas["companyName"]  = $companyName;
    }

    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @param int $bookInvoiceContent
     *  图书类电子票实体(值同invoiceContent)
     * Required: true
     * Example Value: 
     */
    private $bookInvoiceContent;

    /**
     * @param int $bookInvoiceContent
     *  图书类电子票实体(值同invoiceContent)
     * Example Value: 
     */
    public function setBookInvoiceContent($bookInvoiceContent)
    {
        $this->bookInvoiceContent             = $bookInvoiceContent;
        $this->apiParas["bookInvoiceContent"]  = $bookInvoiceContent;
    }

    public function getBookInvoiceContent()
    {
        return $this->bookInvoiceContent;
    }

    /**
     * @param int $invoiceContent
     *  非图书类电子票实体
     * Required: true
     * Example Value: 0-无发票内容 -1-不开发票 -2-不开图书发票 1-明细 2-办公用品 3-电脑配件 4-图书 5-音像 6-教材 7-资料 8-家用电器、汽车用品 9-服饰鞋帽 10-礼品箱包、钟表首饰 11-母婴玩具、乐器 12-手机数码 13-家具厨具、家装 14-个护化妆品 15-运动健康 16-食品饮料、保健品 17-劳保用品 18-箱包饰品 19-耗材 20-礼品 21-商品大类
     */
    private $invoiceContent;

    /**
     * @param int $invoiceContent
     *  非图书类电子票实体
     * Example Value: 0-无发票内容 -1-不开发票 -2-不开图书发票 1-明细 2-办公用品 3-电脑配件 4-图书 5-音像 6-教材 7-资料 8-家用电器、汽车用品 9-服饰鞋帽 10-礼品箱包、钟表首饰 11-母婴玩具、乐器 12-手机数码 13-家具厨具、家装 14-个护化妆品 15-运动健康 16-食品饮料、保健品 17-劳保用品 18-箱包饰品 19-耗材 20-礼品 21-商品大类
     */
    public function setInvoiceContent($invoiceContent)
    {
        $this->invoiceContent             = $invoiceContent;
        $this->apiParas["invoiceContent"]  = $invoiceContent;
    }

    public function getInvoiceContent()
    {
        return $this->invoiceContent;
    }

    /**
     * @param string $phone
     *  收票人电话
     * Required: true
     * Example Value: 
     */
    private $phone;

    /**
     * @param string $phone
     *  收票人电话
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
     * @param string $email
     *  收票人电子邮件
     * Required: true
     * Example Value: 
     */
    private $email;

    /**
     * @param string $email
     *  收票人电子邮件
     * Example Value: 
     */
    public function setEmail($email)
    {
        $this->email             = $email;
        $this->apiParas["email"]  = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param com.jd.b2b.po.sdk.dto.req.ConsigneeReq $consignee
     * 收货人信息
     * Required: true
     * Example Value: 
     */
    private $consignee;

    /**
     * @param com.jd.b2b.po.sdk.dto.req.ConsigneeReq $consignee
     * 收货人信息
     * Example Value: 
     */
    public function setConsignee($consignee)
    {
        $this->consignee             = $consignee;
        $this->apiParas["consignee"]  = $consignee;
    }

    public function getConsignee()
    {
        return $this->consignee;
    }

    /**
     * @param string $name
     * 收货人姓名
     * Required: true
     * Example Value: 
     */
    private $name;

    /**
     * @param string $name
     * 收货人姓名
     * Example Value: 
     */
    public function setName($name)
    {
        $this->name             = $name;
        $this->apiParas["name"]  = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $mobile
     * 收货人手机号
     * Required: true
     * Example Value: 
     */
    private $mobile;

    /**
     * @param string $mobile
     * 收货人手机号
     * Example Value: 
     */
    public function setMobile($mobile)
    {
        $this->mobile             = $mobile;
        $this->apiParas["mobile"]  = $mobile;
    }

    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @param int $regAddressId
     * 注册的地址ID
     * Required: true
     * Example Value: 
     */
    private $regAddressId;

    /**
     * @param int $regAddressId
     * 注册的地址ID
     * Example Value: 
     */
    public function setRegAddressId($regAddressId)
    {
        $this->regAddressId             = $regAddressId;
        $this->apiParas["regAddressId"]  = $regAddressId;
    }

    public function getRegAddressId()
    {
        return $this->regAddressId;
    }

    /**
     * @param int $provinceId
     * 省编号
     * Required: true
     * Example Value: 
     */
    private $provinceId;

    /**
     * @param int $provinceId
     * 省编号
     * Example Value: 
     */
    public function setProvinceId($provinceId)
    {
        $this->provinceId             = $provinceId;
        $this->apiParas["provinceId"]  = $provinceId;
    }

    public function getProvinceId()
    {
        return $this->provinceId;
    }

    /**
     * @param string $provinceName
     * 省名称
     * Required: true
     * Example Value: 
     */
    private $provinceName;

    /**
     * @param string $provinceName
     * 省名称
     * Example Value: 
     */
    public function setProvinceName($provinceName)
    {
        $this->provinceName             = $provinceName;
        $this->apiParas["provinceName"]  = $provinceName;
    }

    public function getProvinceName()
    {
        return $this->provinceName;
    }

    /**
     * @param int $cityId
     * 市编号
     * Required: true
     * Example Value: 
     */
    private $cityId;

    /**
     * @param int $cityId
     * 市编号
     * Example Value: 
     */
    public function setCityId($cityId)
    {
        $this->cityId             = $cityId;
        $this->apiParas["cityId"]  = $cityId;
    }

    public function getCityId()
    {
        return $this->cityId;
    }

    /**
     * @param string $cityName
     * 市名称
     * Required: true
     * Example Value: 
     */
    private $cityName;

    /**
     * @param string $cityName
     * 市名称
     * Example Value: 
     */
    public function setCityName($cityName)
    {
        $this->cityName             = $cityName;
        $this->apiParas["cityName"]  = $cityName;
    }

    public function getCityName()
    {
        return $this->cityName;
    }

    /**
     * @param int $countyId
     * 区编号
     * Required: true
     * Example Value: 
     */
    private $countyId;

    /**
     * @param int $countyId
     * 区编号
     * Example Value: 
     */
    public function setCountyId($countyId)
    {
        $this->countyId             = $countyId;
        $this->apiParas["countyId"]  = $countyId;
    }

    public function getCountyId()
    {
        return $this->countyId;
    }

    /**
     * @param string $countyName
     * 区名称
     * Required: true
     * Example Value: 
     */
    private $countyName;

    /**
     * @param string $countyName
     * 区名称
     * Example Value: 
     */
    public function setCountyName($countyName)
    {
        $this->countyName             = $countyName;
        $this->apiParas["countyName"]  = $countyName;
    }

    public function getCountyName()
    {
        return $this->countyName;
    }

    /**
     * @param int $townId
     * 县编号
     * Required: true
     * Example Value: 
     */
    private $townId;

    /**
     * @param int $townId
     * 县编号
     * Example Value: 
     */
    public function setTownId($townId)
    {
        $this->townId             = $townId;
        $this->apiParas["townId"]  = $townId;
    }

    public function getTownId()
    {
        return $this->townId;
    }

    /**
     * @param string $townName
     * 县名称
     * Required: true
     * Example Value: 
     */
    private $townName;

    /**
     * @param string $townName
     * 县名称
     * Example Value: 
     */
    public function setTownName($townName)
    {
        $this->townName             = $townName;
        $this->apiParas["townName"]  = $townName;
    }

    public function getTownName()
    {
        return $this->townName;
    }

    /**
     * @param string $address
     * 详细地址
     * Required: true
     * Example Value: 
     */
    private $address;

    /**
     * @param string $address
     * 详细地址
     * Example Value: 
     */
    public function setAddress($address)
    {
        $this->address             = $address;
        $this->apiParas["address"]  = $address;
    }

    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $email
     * 邮箱
     * Required: true
     * Example Value: 
     */
    private $email;

    /**
     * @param string $email
     * 邮箱
     * Example Value: 
     */
    public function setEmail($email)
    {
        $this->email             = $email;
        $this->apiParas["email"]  = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $idCard
     * 身份证号
     * Required: true
     * Example Value: 
     */
    private $idCard;

    /**
     * @param string $idCard
     * 身份证号
     * Example Value: 
     */
    public function setIdCard($idCard)
    {
        $this->idCard             = $idCard;
        $this->apiParas["idCard"]  = $idCard;
    }

    public function getIdCard()
    {
        return $this->idCard;
    }

    /**
     * @param com.jd.b2b.po.sdk.dto.req.PreOccupyReq $preOccupyRep
     * 预占订单参数
     * Required: true
     * Example Value: 
     */
    private $preOccupyRep;

    /**
     * @param com.jd.b2b.po.sdk.dto.req.PreOccupyReq $preOccupyRep
     * 预占订单参数
     * Example Value: 
     */
    public function setPreOccupyRep($preOccupyRep)
    {
        $this->preOccupyRep             = $preOccupyRep;
        $this->apiParas["preOccupyRep"]  = $preOccupyRep;
    }

    public function getPreOccupyRep()
    {
        return $this->preOccupyRep;
    }

    /**
     * @param bool $preOccupy
     * 预占标识(预占/非预占)
     * Required: true
     * Example Value: 
     */
    private $preOccupy;

    /**
     * @param bool $preOccupy
     * 预占标识(预占/非预占)
     * Example Value: 
     */
    public function setPreOccupy($preOccupy)
    {
        $this->preOccupy             = $preOccupy;
        $this->apiParas["preOccupy"]  = $preOccupy;
    }

    public function getPreOccupy()
    {
        return $this->preOccupy;
    }

    /**
     * @param com.jd.b2b.po.sdk.dto.req.CartReq $cartReq
     * 购物车（商品信息）
     * Required: true
     * Example Value: 
     */
    private $cartReq;

    /**
     * @param com.jd.b2b.po.sdk.dto.req.CartReq $cartReq
     * 购物车（商品信息）
     * Example Value: 
     */
    public function setCartReq($cartReq)
    {
        $this->cartReq             = $cartReq;
        $this->apiParas["cartReq"]  = $cartReq;
    }

    public function getCartReq()
    {
        return $this->cartReq;
    }

    /**
     * @param int $totalAmount
     * 商品总原价
     * Required: true
     * Example Value: 
     */
    private $totalAmount;

    /**
     * @param int $totalAmount
     * 商品总原价
     * Example Value: 
     */
    public function setTotalAmount($totalAmount)
    {
        $this->totalAmount             = $totalAmount;
        $this->apiParas["totalAmount"]  = $totalAmount;
    }

    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * @param int $totalPurchaseAmount
     * 商品总采购价
     * Required: true
     * Example Value: 
     */
    private $totalPurchaseAmount;

    /**
     * @param int $totalPurchaseAmount
     * 商品总采购价
     * Example Value: 
     */
    public function setTotalPurchaseAmount($totalPurchaseAmount)
    {
        $this->totalPurchaseAmount             = $totalPurchaseAmount;
        $this->apiParas["totalPurchaseAmount"]  = $totalPurchaseAmount;
    }

    public function getTotalPurchaseAmount()
    {
        return $this->totalPurchaseAmount;
    }

    /**
     * @param java.util.List $skuItems
     * 单品列表，单品列表和套装列表必须存在一项
     * Required: true
     * Example Value: 
     */
    private $skuItems;

    /**
     * @param java.util.List $skuItems
     * 单品列表，单品列表和套装列表必须存在一项
     * Example Value: 
     */
    public function setSkuItems($skuItems)
    {
        $this->skuItems             = $skuItems;
        $this->apiParas["skuItems"]  = $skuItems;
    }

    public function getSkuItems()
    {
        return $this->skuItems;
    }

    /**
     * @param com.jd.b2b.po.sdk.dto.req.cart.SkuReq $skuReq
     * 商品信息
     * Required: true
     * Example Value: 
     */
    private $skuReq;

    /**
     * @param com.jd.b2b.po.sdk.dto.req.cart.SkuReq $skuReq
     * 商品信息
     * Example Value: 
     */
    public function setSkuReq($skuReq)
    {
        $this->skuReq             = $skuReq;
        $this->apiParas["skuReq"]  = $skuReq;
    }

    public function getSkuReq()
    {
        return $this->skuReq;
    }

    /**
     * @param int $skuId
     * 京东商品编号
     * Required: true
     * Example Value: 
     */
    private $skuId;

    /**
     * @param int $skuId
     * 京东商品编号
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
     * @param int $num
     * 购买数量
     * Required: true
     * Example Value: 
     */
    private $num;

    /**
     * @param int $num
     * 购买数量
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
     * @param int $jdPrice
     * 商品原价
     * Required: true
     * Example Value: 
     */
    private $jdPrice;

    /**
     * @param int $jdPrice
     * 商品原价
     * Example Value: 
     */
    public function setJdPrice($jdPrice)
    {
        $this->jdPrice             = $jdPrice;
        $this->apiParas["jdPrice"]  = $jdPrice;
    }

    public function getJdPrice()
    {
        return $this->jdPrice;
    }

    /**
     * @param int $price
     * 采购价
     * Required: true
     * Example Value: 
     */
    private $price;

    /**
     * @param int $price
     * 采购价
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
     * @param int $skuType
     * 商品类型
     * Required: true
     * Example Value: 0单品/1附件/2赠品/3延保/4套装
     */
    private $skuType;

    /**
     * @param int $skuType
     * 商品类型
     * Example Value: 0单品/1附件/2赠品/3延保/4套装
     */
    public function setSkuType($skuType)
    {
        $this->skuType             = $skuType;
        $this->apiParas["skuType"]  = $skuType;
    }

    public function getSkuType()
    {
        return $this->skuType;
    }

    /**
     * @param com.jd.b2b.po.sdk.dto.req.cart.PromotionReq $promotion
     * 促销信息
     * Required: true
     * Example Value: 
     */
    private $promotion;

    /**
     * @param com.jd.b2b.po.sdk.dto.req.cart.PromotionReq $promotion
     * 促销信息
     * Example Value: 
     */
    public function setPromotion($promotion)
    {
        $this->promotion             = $promotion;
        $this->apiParas["promotion"]  = $promotion;
    }

    public function getPromotion()
    {
        return $this->promotion;
    }

    /**
     * @param int $promotionId
     * 促销ID
     * Required: true
     * Example Value: 
     */
    private $promotionId;

    /**
     * @param int $promotionId
     * 促销ID
     * Example Value: 
     */
    public function setPromotionId($promotionId)
    {
        $this->promotionId             = $promotionId;
        $this->apiParas["promotionId"]  = $promotionId;
    }

    public function getPromotionId()
    {
        return $this->promotionId;
    }

    /**
     * @param int $promotionType
     * 促销类型
     * Required: true
     * Example Value: 1-赠品促销 2-附件促销 3-直降促销 4-满减促销 5-满赠促销 6-新用户 7-秒杀 8-阶梯价 9-每满赠 10-套装 11-加价购 12-每满减 13-阶梯满减 14-一口价
     */
    private $promotionType;

    /**
     * @param int $promotionType
     * 促销类型
     * Example Value: 1-赠品促销 2-附件促销 3-直降促销 4-满减促销 5-满赠促销 6-新用户 7-秒杀 8-阶梯价 9-每满赠 10-套装 11-加价购 12-每满减 13-阶梯满减 14-一口价
     */
    public function setPromotionType($promotionType)
    {
        $this->promotionType             = $promotionType;
        $this->apiParas["promotionType"]  = $promotionType;
    }

    public function getPromotionType()
    {
        return $this->promotionType;
    }

    /**
     * @param java.util.Map $extParam
     * 需保存到采购单商品的扩展信息
     * Required: true
     * Example Value: 
     */
    private $extParam;

    /**
     * @param java.util.Map $extParam
     * 需保存到采购单商品的扩展信息
     * Example Value: 
     */
    public function setExtParam($extParam)
    {
        $this->extParam             = $extParam;
        $this->apiParas["extParam"]  = $extParam;
    }

    public function getExtParam()
    {
        return $this->extParam;
    }

    /**
     * @param string $value1
     * 参数描述
     * Required: true
     * Example Value: 
     */
    private $value1;

    /**
     * @param string $value1
     * 参数描述
     * Example Value: 
     */
    public function setValue1($value1)
    {
        $this->value1             = $value1;
        $this->apiParas["value1"]  = $value1;
    }

    public function getValue1()
    {
        return $this->value1;
    }

    /**
     * @param java.util.List $giftItems
     * 赠品/附件列表
     * Required: true
     * Example Value: 
     */
    private $giftItems;

    /**
     * @param java.util.List $giftItems
     * 赠品/附件列表
     * Example Value: 
     */
    public function setGiftItems($giftItems)
    {
        $this->giftItems             = $giftItems;
        $this->apiParas["giftItems"]  = $giftItems;
    }

    public function getGiftItems()
    {
        return $this->giftItems;
    }

    /**
     * @param  $skuReq
     * 赠品/附件商品信息
     * Required: true
     * Example Value: 
     */
    private $skuReq;

    /**
     * @param  $skuReq
     * 赠品/附件商品信息
     * Example Value: 
     */
    public function setSkuReq($skuReq)
    {
        $this->skuReq             = $skuReq;
        $this->apiParas["skuReq"]  = $skuReq;
    }

    public function getSkuReq()
    {
        return $this->skuReq;
    }

    /**
     * @param java.util.List $suiteItems
     * 套装列表,单品列表和套装列表必须存在一项
     * Required: true
     * Example Value: 
     */
    private $suiteItems;

    /**
     * @param java.util.List $suiteItems
     * 套装列表,单品列表和套装列表必须存在一项
     * Example Value: 
     */
    public function setSuiteItems($suiteItems)
    {
        $this->suiteItems             = $suiteItems;
        $this->apiParas["suiteItems"]  = $suiteItems;
    }

    public function getSuiteItems()
    {
        return $this->suiteItems;
    }

    /**
     * @param com.jd.b2b.po.sdk.dto.req.cart.SuiteReq $suiteReq
     * 套装
     * Required: true
     * Example Value: 
     */
    private $suiteReq;

    /**
     * @param com.jd.b2b.po.sdk.dto.req.cart.SuiteReq $suiteReq
     * 套装
     * Example Value: 
     */
    public function setSuiteReq($suiteReq)
    {
        $this->suiteReq             = $suiteReq;
        $this->apiParas["suiteReq"]  = $suiteReq;
    }

    public function getSuiteReq()
    {
        return $this->suiteReq;
    }

    /**
     * @param int $suiteId
     * 组套id(虚拟组套id)
     * Required: true
     * Example Value: 
     */
    private $suiteId;

    /**
     * @param int $suiteId
     * 组套id(虚拟组套id)
     * Example Value: 
     */
    public function setSuiteId($suiteId)
    {
        $this->suiteId             = $suiteId;
        $this->apiParas["suiteId"]  = $suiteId;
    }

    public function getSuiteId()
    {
        return $this->suiteId;
    }

    /**
     * @param int $type
     * 组套类型
     * Required: true
     * Example Value: 
     */
    private $type;

    /**
     * @param int $type
     * 组套类型
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

    /**
     * @param string $name
     * 组套名称
     * Required: true
     * Example Value: 
     */
    private $name;

    /**
     * @param string $name
     * 组套名称
     * Example Value: 
     */
    public function setName($name)
    {
        $this->name             = $name;
        $this->apiParas["name"]  = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * @param int $num
     * 购买的组套数量
     * Required: true
     * Example Value: 
     */
    private $num;

    /**
     * @param int $num
     * 购买的组套数量
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
     * @param com.jd.b2b.po.sdk.dto.req.cart.PromotionReq $promotion
     * 促销信息
     * Required: true
     * Example Value: 
     */
    private $promotion;

    /**
     * @param com.jd.b2b.po.sdk.dto.req.cart.PromotionReq $promotion
     * 促销信息
     * Example Value: 
     */
    public function setPromotion($promotion)
    {
        $this->promotion             = $promotion;
        $this->apiParas["promotion"]  = $promotion;
    }

    public function getPromotion()
    {
        return $this->promotion;
    }

    /**
     * @param int $promotionId
     * 促销ID
     * Required: true
     * Example Value: 
     */
    private $promotionId;

    /**
     * @param int $promotionId
     * 促销ID
     * Example Value: 
     */
    public function setPromotionId($promotionId)
    {
        $this->promotionId             = $promotionId;
        $this->apiParas["promotionId"]  = $promotionId;
    }

    public function getPromotionId()
    {
        return $this->promotionId;
    }

    /**
     * @param int $promotionType
     * 促销类型
     * Required: true
     * Example Value: 1-赠品促销 2-附件促销 3-直降促销 4-满减促销 5-满赠促销 6-新用户 7-秒杀 8-阶梯价 9-每满赠 10-套装 11-加价购 12-每满减 13-阶梯满减 14-一口价
     */
    private $promotionType;

    /**
     * @param int $promotionType
     * 促销类型
     * Example Value: 1-赠品促销 2-附件促销 3-直降促销 4-满减促销 5-满赠促销 6-新用户 7-秒杀 8-阶梯价 9-每满赠 10-套装 11-加价购 12-每满减 13-阶梯满减 14-一口价
     */
    public function setPromotionType($promotionType)
    {
        $this->promotionType             = $promotionType;
        $this->apiParas["promotionType"]  = $promotionType;
    }

    public function getPromotionType()
    {
        return $this->promotionType;
    }

    /**
     * @param java.util.List $skuItems
     * 套装主商品列表
     * Required: true
     * Example Value: 
     */
    private $skuItems;

    /**
     * @param java.util.List $skuItems
     * 套装主商品列表
     * Example Value: 
     */
    public function setSkuItems($skuItems)
    {
        $this->skuItems             = $skuItems;
        $this->apiParas["skuItems"]  = $skuItems;
    }

    public function getSkuItems()
    {
        return $this->skuItems;
    }

    /**
     * @param int $skuId
     * 京东商品编号
     * Required: true
     * Example Value: 
     */
    private $skuId;

    /**
     * @param int $skuId
     * 京东商品编号
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
     * @param int $num
     * 购买数量
     * Required: true
     * Example Value: 
     */
    private $num;

    /**
     * @param int $num
     * 购买数量
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
     * @param int $jdPrice
     * 商品原价
     * Required: true
     * Example Value: 
     */
    private $jdPrice;

    /**
     * @param int $jdPrice
     * 商品原价
     * Example Value: 
     */
    public function setJdPrice($jdPrice)
    {
        $this->jdPrice             = $jdPrice;
        $this->apiParas["jdPrice"]  = $jdPrice;
    }

    public function getJdPrice()
    {
        return $this->jdPrice;
    }

    /**
     * @param int $price
     * 采购价
     * Required: true
     * Example Value: 
     */
    private $price;

    /**
     * @param int $price
     * 采购价
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
     * @param int $skuType
     * 商品类型
     * Required: true
     * Example Value: 0单品/1附件/2赠品/3延保/4套装
     */
    private $skuType;

    /**
     * @param int $skuType
     * 商品类型
     * Example Value: 0单品/1附件/2赠品/3延保/4套装
     */
    public function setSkuType($skuType)
    {
        $this->skuType             = $skuType;
        $this->apiParas["skuType"]  = $skuType;
    }

    public function getSkuType()
    {
        return $this->skuType;
    }

    /**
     * @param com.jd.b2b.po.sdk.dto.req.cart.PromotionReq $promotion
     * 促销信息
     * Required: true
     * Example Value: 
     */
    private $promotion;

    /**
     * @param com.jd.b2b.po.sdk.dto.req.cart.PromotionReq $promotion
     * 促销信息
     * Example Value: 
     */
    public function setPromotion($promotion)
    {
        $this->promotion             = $promotion;
        $this->apiParas["promotion"]  = $promotion;
    }

    public function getPromotion()
    {
        return $this->promotion;
    }

    /**
     * @param int $promotionId
     * 促销ID
     * Required: true
     * Example Value: 
     */
    private $promotionId;

    /**
     * @param int $promotionId
     * 促销ID
     * Example Value: 
     */
    public function setPromotionId($promotionId)
    {
        $this->promotionId             = $promotionId;
        $this->apiParas["promotionId"]  = $promotionId;
    }

    public function getPromotionId()
    {
        return $this->promotionId;
    }

    /**
     * @param int $promotionType
     * 促销类型
     * Required: true
     * Example Value: 1-赠品促销 2-附件促销 3-直降促销 4-满减促销 5-满赠促销 6-新用户 7-秒杀 8-阶梯价 9-每满赠 10-套装 11-加价购 12-每满减 13-阶梯满减 14-一口价
     */
    private $promotionType;

    /**
     * @param int $promotionType
     * 促销类型
     * Example Value: 1-赠品促销 2-附件促销 3-直降促销 4-满减促销 5-满赠促销 6-新用户 7-秒杀 8-阶梯价 9-每满赠 10-套装 11-加价购 12-每满减 13-阶梯满减 14-一口价
     */
    public function setPromotionType($promotionType)
    {
        $this->promotionType             = $promotionType;
        $this->apiParas["promotionType"]  = $promotionType;
    }

    public function getPromotionType()
    {
        return $this->promotionType;
    }

    /**
     * @param java.util.Map $extParam
     * 需保存到采购单商品的扩展信息
     * Required: true
     * Example Value: 
     */
    private $extParam;

    /**
     * @param java.util.Map $extParam
     * 需保存到采购单商品的扩展信息
     * Example Value: 
     */
    public function setExtParam($extParam)
    {
        $this->extParam             = $extParam;
        $this->apiParas["extParam"]  = $extParam;
    }

    public function getExtParam()
    {
        return $this->extParam;
    }

    /**
     * @param string $value1
     * 参数描述
     * Required: true
     * Example Value: 
     */
    private $value1;

    /**
     * @param string $value1
     * 参数描述
     * Example Value: 
     */
    public function setValue1($value1)
    {
        $this->value1             = $value1;
        $this->apiParas["value1"]  = $value1;
    }

    public function getValue1()
    {
        return $this->value1;
    }

    /**
     * @param java.util.List $giftItems
     * 赠品/附件列表
     * Required: true
     * Example Value: 
     */
    private $giftItems;

    /**
     * @param java.util.List $giftItems
     * 赠品/附件列表
     * Example Value: 
     */
    public function setGiftItems($giftItems)
    {
        $this->giftItems             = $giftItems;
        $this->apiParas["giftItems"]  = $giftItems;
    }

    public function getGiftItems()
    {
        return $this->giftItems;
    }

    /**
     * @param  $skuReq
     * 赠品/附件商品信息
     * Required: true
     * Example Value: 
     */
    private $skuReq;

    /**
     * @param  $skuReq
     * 赠品/附件商品信息
     * Example Value: 
     */
    public function setSkuReq($skuReq)
    {
        $this->skuReq             = $skuReq;
        $this->apiParas["skuReq"]  = $skuReq;
    }

    public function getSkuReq()
    {
        return $this->skuReq;
    }

    /**
     * @param java.util.List $giftItems
     * 套装已选赠品列表
     * Required: true
     * Example Value: 
     */
    private $giftItems;

    /**
     * @param java.util.List $giftItems
     * 套装已选赠品列表
     * Example Value: 
     */
    public function setGiftItems($giftItems)
    {
        $this->giftItems             = $giftItems;
        $this->apiParas["giftItems"]  = $giftItems;
    }

    public function getGiftItems()
    {
        return $this->giftItems;
    }

    /**
     * @param com.jd.b2b.po.sdk.dto.req.cart.SkuReq $skuReq
     * 赠品信息
     * Required: true
     * Example Value: 
     */
    private $skuReq;

    /**
     * @param com.jd.b2b.po.sdk.dto.req.cart.SkuReq $skuReq
     * 赠品信息
     * Example Value: 
     */
    public function setSkuReq($skuReq)
    {
        $this->skuReq             = $skuReq;
        $this->apiParas["skuReq"]  = $skuReq;
    }

    public function getSkuReq()
    {
        return $this->skuReq;
    }

    /**
     * @param int $skuId
     * 京东商品编号
     * Required: true
     * Example Value: 
     */
    private $skuId;

    /**
     * @param int $skuId
     * 京东商品编号
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
     * @param int $num
     * 购买数量
     * Required: true
     * Example Value: 
     */
    private $num;

    /**
     * @param int $num
     * 购买数量
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
     * @param int $jdPrice
     * 商品原价
     * Required: true
     * Example Value: 
     */
    private $jdPrice;

    /**
     * @param int $jdPrice
     * 商品原价
     * Example Value: 
     */
    public function setJdPrice($jdPrice)
    {
        $this->jdPrice             = $jdPrice;
        $this->apiParas["jdPrice"]  = $jdPrice;
    }

    public function getJdPrice()
    {
        return $this->jdPrice;
    }

    /**
     * @param int $price
     * 采购价
     * Required: true
     * Example Value: 
     */
    private $price;

    /**
     * @param int $price
     * 采购价
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
     * @param int $skuType
     * 商品类型
     * Required: true
     * Example Value: 0单品/1附件/2赠品/3延保/4套装
     */
    private $skuType;

    /**
     * @param int $skuType
     * 商品类型
     * Example Value: 0单品/1附件/2赠品/3延保/4套装
     */
    public function setSkuType($skuType)
    {
        $this->skuType             = $skuType;
        $this->apiParas["skuType"]  = $skuType;
    }

    public function getSkuType()
    {
        return $this->skuType;
    }

    /**
     * @param com.jd.b2b.po.sdk.dto.req.cart.PromotionReq $promotion
     * 促销信息
     * Required: true
     * Example Value: 
     */
    private $promotion;

    /**
     * @param com.jd.b2b.po.sdk.dto.req.cart.PromotionReq $promotion
     * 促销信息
     * Example Value: 
     */
    public function setPromotion($promotion)
    {
        $this->promotion             = $promotion;
        $this->apiParas["promotion"]  = $promotion;
    }

    public function getPromotion()
    {
        return $this->promotion;
    }

    /**
     * @param int $promotionId
     * 促销ID
     * Required: true
     * Example Value: 
     */
    private $promotionId;

    /**
     * @param int $promotionId
     * 促销ID
     * Example Value: 
     */
    public function setPromotionId($promotionId)
    {
        $this->promotionId             = $promotionId;
        $this->apiParas["promotionId"]  = $promotionId;
    }

    public function getPromotionId()
    {
        return $this->promotionId;
    }

    /**
     * @param int $promotionType
     * 促销类型
     * Required: true
     * Example Value: 1-赠品促销 2-附件促销 3-直降促销 4-满减促销 5-满赠促销 6-新用户 7-秒杀 8-阶梯价 9-每满赠 10-套装 11-加价购 12-每满减 13-阶梯满减 14-一口价
     */
    private $promotionType;

    /**
     * @param int $promotionType
     * 促销类型
     * Example Value: 1-赠品促销 2-附件促销 3-直降促销 4-满减促销 5-满赠促销 6-新用户 7-秒杀 8-阶梯价 9-每满赠 10-套装 11-加价购 12-每满减 13-阶梯满减 14-一口价
     */
    public function setPromotionType($promotionType)
    {
        $this->promotionType             = $promotionType;
        $this->apiParas["promotionType"]  = $promotionType;
    }

    public function getPromotionType()
    {
        return $this->promotionType;
    }

    /**
     * @param java.util.Map $extParam
     * 需保存到采购单商品的扩展信息
     * Required: true
     * Example Value: 
     */
    private $extParam;

    /**
     * @param java.util.Map $extParam
     * 需保存到采购单商品的扩展信息
     * Example Value: 
     */
    public function setExtParam($extParam)
    {
        $this->extParam             = $extParam;
        $this->apiParas["extParam"]  = $extParam;
    }

    public function getExtParam()
    {
        return $this->extParam;
    }

    /**
     * @param string $value1
     * 参数描述
     * Required: true
     * Example Value: 
     */
    private $value1;

    /**
     * @param string $value1
     * 参数描述
     * Example Value: 
     */
    public function setValue1($value1)
    {
        $this->value1             = $value1;
        $this->apiParas["value1"]  = $value1;
    }

    public function getValue1()
    {
        return $this->value1;
    }

    /**
     * @param java.util.List $giftItems
     * 赠品/附件列表
     * Required: true
     * Example Value: 
     */
    private $giftItems;

    /**
     * @param java.util.List $giftItems
     * 赠品/附件列表
     * Example Value: 
     */
    public function setGiftItems($giftItems)
    {
        $this->giftItems             = $giftItems;
        $this->apiParas["giftItems"]  = $giftItems;
    }

    public function getGiftItems()
    {
        return $this->giftItems;
    }

    /**
     * @param  $skuReq
     * 赠品/附件商品信息
     * Required: true
     * Example Value: 
     */
    private $skuReq;

    /**
     * @param  $skuReq
     * 赠品/附件商品信息
     * Example Value: 
     */
    public function setSkuReq($skuReq)
    {
        $this->skuReq             = $skuReq;
        $this->apiParas["skuReq"]  = $skuReq;
    }

    public function getSkuReq()
    {
        return $this->skuReq;
    }

}