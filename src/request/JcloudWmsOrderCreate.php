<?php

namespace JD\request;

/**
 * 出库订单下传
 * 物流云-WMS-API-物流云仓储
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=192&apiId=1628&apiName=jingdong.jcloud.wms.order.create
 * Class JcloudWmsOrderCreate
 * @package Jd\request
 */
class JcloudWmsOrderCreate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.jcloud.wms.order.create";
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
     * @param String $orderNo
     * 出库单单号
     * Required: true
     * Example Value: 
     */
    private $orderNo;

    /**
     * @param String $orderNo
     * 出库单单号
     * Example Value: 
     */
    public function setOrderNo($orderNo)
    {
        $this->orderNo             = $orderNo;
        $this->apiParas["orderNo"]  = $orderNo;
    }

    public function getOrderNo()
    {
        return $this->orderNo;
    }

    /**
     * @param String $ownerNo
     * 货主编号
     * Required: true
     * Example Value: 
     */
    private $ownerNo;

    /**
     * @param String $ownerNo
     * 货主编号
     * Example Value: 
     */
    public function setOwnerNo($ownerNo)
    {
        $this->ownerNo             = $ownerNo;
        $this->apiParas["ownerNo"]  = $ownerNo;
    }

    public function getOwnerNo()
    {
        return $this->ownerNo;
    }

    /**
     * @param String $billType
     * 订单类型
     * Required: true
     * Example Value: 
     */
    private $billType;

    /**
     * @param String $billType
     * 订单类型
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
     * @param String $carrierNo
     * 承运商编号
     * Required: true
     * Example Value: 
     */
    private $carrierNo;

    /**
     * @param String $carrierNo
     * 承运商编号
     * Example Value: 
     */
    public function setCarrierNo($carrierNo)
    {
        $this->carrierNo             = $carrierNo;
        $this->apiParas["carrierNo"]  = $carrierNo;
    }

    public function getCarrierNo()
    {
        return $this->carrierNo;
    }

    /**
     * @param String $waybillNo
     * 运单号
     * Required: false
     * Example Value: 
     */
    private $waybillNo;

    /**
     * @param String $waybillNo
     * 运单号
     * Example Value: 
     */
    public function setWaybillNo($waybillNo)
    {
        $this->waybillNo             = $waybillNo;
        $this->apiParas["waybillNo"]  = $waybillNo;
    }

    public function getWaybillNo()
    {
        return $this->waybillNo;
    }

    /**
     * @param Number $costTotal
     * 实际运费
     * Required: false
     * Example Value: 
     */
    private $costTotal;

    /**
     * @param Number $costTotal
     * 实际运费
     * Example Value: 
     */
    public function setCostTotal($costTotal)
    {
        $this->costTotal             = $costTotal;
        $this->apiParas["costTotal"]  = $costTotal;
    }

    public function getCostTotal()
    {
        return $this->costTotal;
    }

    /**
     * @param Number $costPaid
     * 买家所付费用
     * Required: false
     * Example Value: 
     */
    private $costPaid;

    /**
     * @param Number $costPaid
     * 买家所付费用
     * Example Value: 
     */
    public function setCostPaid($costPaid)
    {
        $this->costPaid             = $costPaid;
        $this->apiParas["costPaid"]  = $costPaid;
    }

    public function getCostPaid()
    {
        return $this->costPaid;
    }

    /**
     * @param String $packageCenterCode
     * 集包地编码
     * Required: false
     * Example Value: 
     */
    private $packageCenterCode;

    /**
     * @param String $packageCenterCode
     * 集包地编码
     * Example Value: 
     */
    public function setPackageCenterCode($packageCenterCode)
    {
        $this->packageCenterCode             = $packageCenterCode;
        $this->apiParas["packageCenterCode"]  = $packageCenterCode;
    }

    public function getPackageCenterCode()
    {
        return $this->packageCenterCode;
    }

    /**
     * @param String $packageCenterName
     * 集包地
     * Required: false
     * Example Value: 
     */
    private $packageCenterName;

    /**
     * @param String $packageCenterName
     * 集包地
     * Example Value: 
     */
    public function setPackageCenterName($packageCenterName)
    {
        $this->packageCenterName             = $packageCenterName;
        $this->apiParas["packageCenterName"]  = $packageCenterName;
    }

    public function getPackageCenterName()
    {
        return $this->packageCenterName;
    }

    /**
     * @param String $shipBranchCode
     * 始发网点
     * Required: false
     * Example Value: 
     */
    private $shipBranchCode;

    /**
     * @param String $shipBranchCode
     * 始发网点
     * Example Value: 
     */
    public function setShipBranchCode($shipBranchCode)
    {
        $this->shipBranchCode             = $shipBranchCode;
        $this->apiParas["shipBranchCode"]  = $shipBranchCode;
    }

    public function getShipBranchCode()
    {
        return $this->shipBranchCode;
    }

    /**
     * @param String $shortAddress
     * 大头笔（地址简称）
     * Required: false
     * Example Value: 
     */
    private $shortAddress;

    /**
     * @param String $shortAddress
     * 大头笔（地址简称）
     * Example Value: 
     */
    public function setShortAddress($shortAddress)
    {
        $this->shortAddress             = $shortAddress;
        $this->apiParas["shortAddress"]  = $shortAddress;
    }

    public function getShortAddress()
    {
        return $this->shortAddress;
    }

    /**
     * @param String $distributeCode
     * 分拣码
     * Required: false
     * Example Value: 
     */
    private $distributeCode;

    /**
     * @param String $distributeCode
     * 分拣码
     * Example Value: 
     */
    public function setDistributeCode($distributeCode)
    {
        $this->distributeCode             = $distributeCode;
        $this->apiParas["distributeCode"]  = $distributeCode;
    }

    public function getDistributeCode()
    {
        return $this->distributeCode;
    }

    /**
     * @param Number $orderPrice
     * 订单金额
     * Required: false
     * Example Value: 
     */
    private $orderPrice;

    /**
     * @param Number $orderPrice
     * 订单金额
     * Example Value: 
     */
    public function setOrderPrice($orderPrice)
    {
        $this->orderPrice             = $orderPrice;
        $this->apiParas["orderPrice"]  = $orderPrice;
    }

    public function getOrderPrice()
    {
        return $this->orderPrice;
    }

    /**
     * @param Number $discountPrice
     * 优惠金额
     * Required: false
     * Example Value: 
     */
    private $discountPrice;

    /**
     * @param Number $discountPrice
     * 优惠金额
     * Example Value: 
     */
    public function setDiscountPrice($discountPrice)
    {
        $this->discountPrice             = $discountPrice;
        $this->apiParas["discountPrice"]  = $discountPrice;
    }

    public function getDiscountPrice()
    {
        return $this->discountPrice;
    }

    /**
     * @param Number $codFlag
     * 是否货到付款（0:否；1:是）
     * Required: false
     * Example Value: 
     */
    private $codFlag;

    /**
     * @param Number $codFlag
     * 是否货到付款（0:否；1:是）
     * Example Value: 
     */
    public function setCodFlag($codFlag)
    {
        $this->codFlag             = $codFlag;
        $this->apiParas["codFlag"]  = $codFlag;
    }

    public function getCodFlag()
    {
        return $this->codFlag;
    }

    /**
     * @param Number $receivable
     * 应收金额(非货到付款传0，货到付款则传相应金额即可)
     * Required: true
     * Example Value: 
     */
    private $receivable;

    /**
     * @param Number $receivable
     * 应收金额(非货到付款传0，货到付款则传相应金额即可)
     * Example Value: 
     */
    public function setReceivable($receivable)
    {
        $this->receivable             = $receivable;
        $this->apiParas["receivable"]  = $receivable;
    }

    public function getReceivable()
    {
        return $this->receivable;
    }

    /**
     * @param String $notes
     * 买家备注
     * Required: false
     * Example Value: 
     */
    private $notes;

    /**
     * @param String $notes
     * 买家备注
     * Example Value: 
     */
    public function setNotes($notes)
    {
        $this->notes             = $notes;
        $this->apiParas["notes"]  = $notes;
    }

    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @param String $sellerNotes
     * 卖家备注
     * Required: false
     * Example Value: 
     */
    private $sellerNotes;

    /**
     * @param String $sellerNotes
     * 卖家备注
     * Example Value: 
     */
    public function setSellerNotes($sellerNotes)
    {
        $this->sellerNotes             = $sellerNotes;
        $this->apiParas["sellerNotes"]  = $sellerNotes;
    }

    public function getSellerNotes()
    {
        return $this->sellerNotes;
    }

    /**
     * @param String $province
     * 收件人所在省
     * Required: true
     * Example Value: 
     */
    private $province;

    /**
     * @param String $province
     * 收件人所在省
     * Example Value: 
     */
    public function setProvince($province)
    {
        $this->province             = $province;
        $this->apiParas["province"]  = $province;
    }

    public function getProvince()
    {
        return $this->province;
    }

    /**
     * @param String $city
     * 收件人所在市
     * Required: true
     * Example Value: 
     */
    private $city;

    /**
     * @param String $city
     * 收件人所在市
     * Example Value: 
     */
    public function setCity($city)
    {
        $this->city             = $city;
        $this->apiParas["city"]  = $city;
    }

    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param String $county
     * 收件人所在县
     * Required: false
     * Example Value: 
     */
    private $county;

    /**
     * @param String $county
     * 收件人所在县
     * Example Value: 
     */
    public function setCounty($county)
    {
        $this->county             = $county;
        $this->apiParas["county"]  = $county;
    }

    public function getCounty()
    {
        return $this->county;
    }

    /**
     * @param String $zipcode
     * 邮政编码
     * Required: false
     * Example Value: 
     */
    private $zipcode;

    /**
     * @param String $zipcode
     * 邮政编码
     * Example Value: 
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode             = $zipcode;
        $this->apiParas["zipcode"]  = $zipcode;
    }

    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * @param String $contact
     * 收件人姓名
     * Required: true
     * Example Value: 
     */
    private $contact;

    /**
     * @param String $contact
     * 收件人姓名
     * Example Value: 
     */
    public function setContact($contact)
    {
        $this->contact             = $contact;
        $this->apiParas["contact"]  = $contact;
    }

    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param String $tel
     * 收件人联系电话
     * Required: false
     * Example Value: 
     */
    private $tel;

    /**
     * @param String $tel
     * 收件人联系电话
     * Example Value: 
     */
    public function setTel($tel)
    {
        $this->tel             = $tel;
        $this->apiParas["tel"]  = $tel;
    }

    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param String $phone
     * 收件人手机
     * Required: false
     * Example Value: 
     */
    private $phone;

    /**
     * @param String $phone
     * 收件人手机
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
     * @param String $address
     * 收件人地址
     * Required: true
     * Example Value: 
     */
    private $address;

    /**
     * @param String $address
     * 收件人地址
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
     * @param Date $orderTime
     * 下单时间(格式为：yyyy-mm-dd HH:mm:ss)
     * Required: true
     * Example Value: 
     */
    private $orderTime;

    /**
     * @param Date $orderTime
     * 下单时间(格式为：yyyy-mm-dd HH:mm:ss)
     * Example Value: 
     */
    public function setOrderTime($orderTime)
    {
        $this->orderTime             = $orderTime;
        $this->apiParas["orderTime"]  = $orderTime;
    }

    public function getOrderTime()
    {
        return $this->orderTime;
    }

    /**
     * @param Date $paymentTime
     * 付款时间(格式为：yyyy-mm-dd HH:mm:ss)
     * Required: false
     * Example Value: 
     */
    private $paymentTime;

    /**
     * @param Date $paymentTime
     * 付款时间(格式为：yyyy-mm-dd HH:mm:ss)
     * Example Value: 
     */
    public function setPaymentTime($paymentTime)
    {
        $this->paymentTime             = $paymentTime;
        $this->apiParas["paymentTime"]  = $paymentTime;
    }

    public function getPaymentTime()
    {
        return $this->paymentTime;
    }

    /**
     * @param Date $planDeliveryTime
     * 计划出库时间(格式为：yyyy-mm-dd HH:mm:ss)
     * Required: false
     * Example Value: 
     */
    private $planDeliveryTime;

    /**
     * @param Date $planDeliveryTime
     * 计划出库时间(格式为：yyyy-mm-dd HH:mm:ss)
     * Example Value: 
     */
    public function setPlanDeliveryTime($planDeliveryTime)
    {
        $this->planDeliveryTime             = $planDeliveryTime;
        $this->apiParas["planDeliveryTime"]  = $planDeliveryTime;
    }

    public function getPlanDeliveryTime()
    {
        return $this->planDeliveryTime;
    }

    /**
     * @param String $deliverType
     * 产品类型
     * Required: false
     * Example Value: 
     */
    private $deliverType;

    /**
     * @param String $deliverType
     * 产品类型
     * Example Value: 
     */
    public function setDeliverType($deliverType)
    {
        $this->deliverType             = $deliverType;
        $this->apiParas["deliverType"]  = $deliverType;
    }

    public function getDeliverType()
    {
        return $this->deliverType;
    }

    /**
     * @param String $sendCode
     * 原寄地
     * Required: false
     * Example Value: 
     */
    private $sendCode;

    /**
     * @param String $sendCode
     * 原寄地
     * Example Value: 
     */
    public function setSendCode($sendCode)
    {
        $this->sendCode             = $sendCode;
        $this->apiParas["sendCode"]  = $sendCode;
    }

    public function getSendCode()
    {
        return $this->sendCode;
    }

    /**
     * @param String $arriveCode
     * 目的地
     * Required: false
     * Example Value: 
     */
    private $arriveCode;

    /**
     * @param String $arriveCode
     * 目的地
     * Example Value: 
     */
    public function setArriveCode($arriveCode)
    {
        $this->arriveCode             = $arriveCode;
        $this->apiParas["arriveCode"]  = $arriveCode;
    }

    public function getArriveCode()
    {
        return $this->arriveCode;
    }

    /**
     * @param String $paymentType
     * 付款方式
     * Required: false
     * Example Value: 
     */
    private $paymentType;

    /**
     * @param String $paymentType
     * 付款方式
     * Example Value: 
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
     * @param Number $invoiceFlag
     * 是否有发票(0:否；1:是)
     * Required: false
     * Example Value: 
     */
    private $invoiceFlag;

    /**
     * @param Number $invoiceFlag
     * 是否有发票(0:否；1:是)
     * Example Value: 
     */
    public function setInvoiceFlag($invoiceFlag)
    {
        $this->invoiceFlag             = $invoiceFlag;
        $this->apiParas["invoiceFlag"]  = $invoiceFlag;
    }

    public function getInvoiceFlag()
    {
        return $this->invoiceFlag;
    }

    /**
     * @param String $invoiceIdentification
     * 纳税人识别码
     * Required: false
     * Example Value: 
     */
    private $invoiceIdentification;

    /**
     * @param String $invoiceIdentification
     * 纳税人识别码
     * Example Value: 
     */
    public function setInvoiceIdentification($invoiceIdentification)
    {
        $this->invoiceIdentification             = $invoiceIdentification;
        $this->apiParas["invoiceIdentification"]  = $invoiceIdentification;
    }

    public function getInvoiceIdentification()
    {
        return $this->invoiceIdentification;
    }

    /**
     * @param String $invoiceTitle
     * 发票抬头
     * Required: false
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
     * @param String $invoiceContent
     * 发票内容
     * Required: false
     * Example Value: 
     */
    private $invoiceContent;

    /**
     * @param String $invoiceContent
     * 发票内容
     * Example Value: 
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
     * @param String $shopNo
     * 店铺编号
     * Required: false
     * Example Value: 
     */
    private $shopNo;

    /**
     * @param String $shopNo
     * 店铺编号
     * Example Value: 
     */
    public function setShopNo($shopNo)
    {
        $this->shopNo             = $shopNo;
        $this->apiParas["shopNo"]  = $shopNo;
    }

    public function getShopNo()
    {
        return $this->shopNo;
    }

    /**
     * @param String $shop
     * 店铺名称
     * Required: false
     * Example Value: 
     */
    private $shop;

    /**
     * @param String $shop
     * 店铺名称
     * Example Value: 
     */
    public function setShop($shop)
    {
        $this->shop             = $shop;
        $this->apiParas["shop"]  = $shop;
    }

    public function getShop()
    {
        return $this->shop;
    }

    /**
     * @param String[] $skuNo
     * 商品编码
     * Required: true
     * Example Value: 
     */
    private $skuNo;

    /**
     * @param String[] $skuNo
     * 商品编码
     * Example Value: 
     */
    public function setSkuNo($skuNo)
    {
        $this->skuNo             = $skuNo;
        $this->apiParas["skuNo"]  = $skuNo;
    }

    public function getSkuNo()
    {
        return $this->skuNo;
    }

    /**
     * @param String[] $skuName
     * 商品名称
     * Required: true
     * Example Value: 
     */
    private $skuName;

    /**
     * @param String[] $skuName
     * 商品名称
     * Example Value: 
     */
    public function setSkuName($skuName)
    {
        $this->skuName             = $skuName;
        $this->apiParas["skuName"]  = $skuName;
    }

    public function getSkuName()
    {
        return $this->skuName;
    }

    /**
     * @param Number[] $expectedQty
     * 订货数量
     * Required: true
     * Example Value: 
     */
    private $expectedQty;

    /**
     * @param Number[] $expectedQty
     * 订货数量
     * Example Value: 
     */
    public function setExpectedQty($expectedQty)
    {
        $this->expectedQty             = $expectedQty;
        $this->apiParas["expectedQty"]  = $expectedQty;
    }

    public function getExpectedQty()
    {
        return $this->expectedQty;
    }

    /**
     * @param Number[] $price
     * 商品金额
     * Required: false
     * Example Value: 
     */
    private $price;

    /**
     * @param Number[] $price
     * 商品金额
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
     * @param String $warehouseNo
     * 库房
     * Required: true
     * Example Value: 
     */
    private $warehouseNo;

    /**
     * @param String $warehouseNo
     * 库房
     * Example Value: 
     */
    public function setWarehouseNo($warehouseNo)
    {
        $this->warehouseNo             = $warehouseNo;
        $this->apiParas["warehouseNo"]  = $warehouseNo;
    }

    public function getWarehouseNo()
    {
        return $this->warehouseNo;
    }

    /**
     * @param String $tenantId
     * 租户
     * Required: true
     * Example Value: 
     */
    private $tenantId;

    /**
     * @param String $tenantId
     * 租户
     * Example Value: 
     */
    public function setTenantId($tenantId)
    {
        $this->tenantId             = $tenantId;
        $this->apiParas["tenantId"]  = $tenantId;
    }

    public function getTenantId()
    {
        return $this->tenantId;
    }

}