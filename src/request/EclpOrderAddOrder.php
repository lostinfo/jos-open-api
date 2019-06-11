<?php

namespca Lostinfo\JosOpenApi;

/**
 * 销售出库单下发
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=928&apiName=jingdong.eclp.order.addOrder
 * Class EclpOrderAddOrder
 * @package Jd\request
 */
class EclpOrderAddOrder
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.order.addOrder";
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
     * @param string $isvUUID
     * isv出库单号（商家出库单号），作为isv出库的唯一性校验码：长度不能超125
     * Required: true
     * Example Value: ISVNO0000001
     */
    private $isvUUID;

    /**
     * @param string $isvUUID
     * isv出库单号（商家出库单号），作为isv出库的唯一性校验码：长度不能超125
     * Example Value: ISVNO0000001
     */
    public function setIsvUUID($isvUUID)
    {
        $this->isvUUID             = $isvUUID;
        $this->apiParas["isvUUID"]  = $isvUUID;
    }

    public function getIsvUUID()
    {
        return $this->isvUUID;
    }

    /**
     * @param string $isvSource
     * ISV来源编号
     * Required: true
     * Example Value: 
     */
    private $isvSource;

    /**
     * @param string $isvSource
     * ISV来源编号
     * Example Value: 
     */
    public function setIsvSource($isvSource)
    {
        $this->isvSource             = $isvSource;
        $this->apiParas["isvSource"]  = $isvSource;
    }

    public function getIsvSource()
    {
        return $this->isvSource;
    }

    /**
     * @param string $shopNo
     * 店铺编号(B2C订单必填，B2B（soType=2）订单非必填) 
     * Required: true
     * Example Value: 
     */
    private $shopNo;

    /**
     * @param string $shopNo
     * 店铺编号(B2C订单必填，B2B（soType=2）订单非必填) 
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
     * @param string $bdOwnerNo
     * 青龙业主号,长度不能超50 
     * Required: false
     * Example Value: 
     */
    private $bdOwnerNo;

    /**
     * @param string $bdOwnerNo
     * 青龙业主号,长度不能超50 
     * Example Value: 
     */
    public function setBdOwnerNo($bdOwnerNo)
    {
        $this->bdOwnerNo             = $bdOwnerNo;
        $this->apiParas["bdOwnerNo"]  = $bdOwnerNo;
    }

    public function getBdOwnerNo()
    {
        return $this->bdOwnerNo;
    }

    /**
     * @param string $departmentNo
     * 事业部编号，且与pin匹配 
     * Required: true
     * Example Value: 
     */
    private $departmentNo;

    /**
     * @param string $departmentNo
     * 事业部编号，且与pin匹配 
     * Example Value: 
     */
    public function setDepartmentNo($departmentNo)
    {
        $this->departmentNo             = $departmentNo;
        $this->apiParas["departmentNo"]  = $departmentNo;
    }

    public function getDepartmentNo()
    {
        return $this->departmentNo;
    }

    /**
     * @param string $warehouseNo
     * 库房编号，事业部开启寻源拆分服务可不填；否则必填； 
     * Required: false
     * Example Value: 
     */
    private $warehouseNo;

    /**
     * @param string $warehouseNo
     * 库房编号，事业部开启寻源拆分服务可不填；否则必填； 
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
     * @param string $shipperNo
     * 承运商编号，默认为京东快递，CYS0000010
     * Required: false
     * Example Value: 
     */
    private $shipperNo;

    /**
     * @param string $shipperNo
     * 承运商编号，默认为京东快递，CYS0000010
     * Example Value: 
     */
    public function setShipperNo($shipperNo)
    {
        $this->shipperNo             = $shipperNo;
        $this->apiParas["shipperNo"]  = $shipperNo;
    }

    public function getShipperNo()
    {
        return $this->shipperNo;
    }

    /**
     * @param string $salesPlatformOrderNo
     * 销售平台订单号，如果销售平台来源为京东平台，则该字段不能为空，长度不超过200 
     * Required: false
     * Example Value: 
     */
    private $salesPlatformOrderNo;

    /**
     * @param string $salesPlatformOrderNo
     * 销售平台订单号，如果销售平台来源为京东平台，则该字段不能为空，长度不超过200 
     * Example Value: 
     */
    public function setSalesPlatformOrderNo($salesPlatformOrderNo)
    {
        $this->salesPlatformOrderNo             = $salesPlatformOrderNo;
        $this->apiParas["salesPlatformOrderNo"]  = $salesPlatformOrderNo;
    }

    public function getSalesPlatformOrderNo()
    {
        return $this->salesPlatformOrderNo;
    }

    /**
     * @param string $salePlatformSource
     * 销售平台来源，参考销售平台来源查询接口的值
     * Required: true
     * Example Value: 
     */
    private $salePlatformSource;

    /**
     * @param string $salePlatformSource
     * 销售平台来源，参考销售平台来源查询接口的值
     * Example Value: 
     */
    public function setSalePlatformSource($salePlatformSource)
    {
        $this->salePlatformSource             = $salePlatformSource;
        $this->apiParas["salePlatformSource"]  = $salePlatformSource;
    }

    public function getSalePlatformSource()
    {
        return $this->salePlatformSource;
    }

    /**
     * @param string $salesPlatformCreateTime
     * 销售平台下单时间，格式为：yyyy-mm-dd HH:mm:ss，未指定默认京东接单时间 
     * Required: false
     * Example Value: 
     */
    private $salesPlatformCreateTime;

    /**
     * @param string $salesPlatformCreateTime
     * 销售平台下单时间，格式为：yyyy-mm-dd HH:mm:ss，未指定默认京东接单时间 
     * Example Value: 
     */
    public function setSalesPlatformCreateTime($salesPlatformCreateTime)
    {
        $this->salesPlatformCreateTime             = $salesPlatformCreateTime;
        $this->apiParas["salesPlatformCreateTime"]  = $salesPlatformCreateTime;
    }

    public function getSalesPlatformCreateTime()
    {
        return $this->salesPlatformCreateTime;
    }

    /**
     * @param string $soType
     * 订单类型（1:B2C订单, 2:B2B订单，不指定默认1）
     * Required: false
     * Example Value: 
     */
    private $soType;

    /**
     * @param string $soType
     * 订单类型（1:B2C订单, 2:B2B订单，不指定默认1）
     * Example Value: 
     */
    public function setSoType($soType)
    {
        $this->soType             = $soType;
        $this->apiParas["soType"]  = $soType;
    }

    public function getSoType()
    {
        return $this->soType;
    }

    /**
     * @param string $consigneeName
     * 收货人姓名，长度不能超20 
     * Required: true
     * Example Value: 
     */
    private $consigneeName;

    /**
     * @param string $consigneeName
     * 收货人姓名，长度不能超20 
     * Example Value: 
     */
    public function setConsigneeName($consigneeName)
    {
        $this->consigneeName             = $consigneeName;
        $this->apiParas["consigneeName"]  = $consigneeName;
    }

    public function getConsigneeName()
    {
        return $this->consigneeName;
    }

    /**
     * @param string $consigneeMobile
     * 收货人手机（收货人电话、手机至少有一个不为空），长度不能超30 
     * Required: false
     * Example Value: 
     */
    private $consigneeMobile;

    /**
     * @param string $consigneeMobile
     * 收货人手机（收货人电话、手机至少有一个不为空），长度不能超30 
     * Example Value: 
     */
    public function setConsigneeMobile($consigneeMobile)
    {
        $this->consigneeMobile             = $consigneeMobile;
        $this->apiParas["consigneeMobile"]  = $consigneeMobile;
    }

    public function getConsigneeMobile()
    {
        return $this->consigneeMobile;
    }

    /**
     * @param string $consigneePhone
     * 收货人电话（收货人电话、手机至少有一个不为空），长度不能超30 
     * Required: false
     * Example Value: 
     */
    private $consigneePhone;

    /**
     * @param string $consigneePhone
     * 收货人电话（收货人电话、手机至少有一个不为空），长度不能超30 
     * Example Value: 
     */
    public function setConsigneePhone($consigneePhone)
    {
        $this->consigneePhone             = $consigneePhone;
        $this->apiParas["consigneePhone"]  = $consigneePhone;
    }

    public function getConsigneePhone()
    {
        return $this->consigneePhone;
    }

    /**
     * @param string $consigneeEmail
     * 收货人邮箱，长度不能超100 
     * Required: false
     * Example Value: 
     */
    private $consigneeEmail;

    /**
     * @param string $consigneeEmail
     * 收货人邮箱，长度不能超100 
     * Example Value: 
     */
    public function setConsigneeEmail($consigneeEmail)
    {
        $this->consigneeEmail             = $consigneeEmail;
        $this->apiParas["consigneeEmail"]  = $consigneeEmail;
    }

    public function getConsigneeEmail()
    {
        return $this->consigneeEmail;
    }

    /**
     * @param string $expectDate
     * 期望发货时间,格式为：yyyy-mm-dd HH:mm:ss，未指定默认京东接单时间 
     * Required: false
     * Example Value: 
     */
    private $expectDate;

    /**
     * @param string $expectDate
     * 期望发货时间,格式为：yyyy-mm-dd HH:mm:ss，未指定默认京东接单时间 
     * Example Value: 
     */
    public function setExpectDate($expectDate)
    {
        $this->expectDate             = $expectDate;
        $this->apiParas["expectDate"]  = $expectDate;
    }

    public function getExpectDate()
    {
        return $this->expectDate;
    }

    /**
     * @param string $addressProvince
     * 收货人省，参考京东地址库API，长度不能超100 
     * Required: false
     * Example Value: 
     */
    private $addressProvince;

    /**
     * @param string $addressProvince
     * 收货人省，参考京东地址库API，长度不能超100 
     * Example Value: 
     */
    public function setAddressProvince($addressProvince)
    {
        $this->addressProvince             = $addressProvince;
        $this->apiParas["addressProvince"]  = $addressProvince;
    }

    public function getAddressProvince()
    {
        return $this->addressProvince;
    }

    /**
     * @param string $addressCity
     * 收货人市，参考京东地址库API，长度不能超100 
     * Required: false
     * Example Value: 
     */
    private $addressCity;

    /**
     * @param string $addressCity
     * 收货人市，参考京东地址库API，长度不能超100 
     * Example Value: 
     */
    public function setAddressCity($addressCity)
    {
        $this->addressCity             = $addressCity;
        $this->apiParas["addressCity"]  = $addressCity;
    }

    public function getAddressCity()
    {
        return $this->addressCity;
    }

    /**
     * @param string $addressCounty
     * 收货人县，参考京东地址库API，长度不能超100 
     * Required: false
     * Example Value: 
     */
    private $addressCounty;

    /**
     * @param string $addressCounty
     * 收货人县，参考京东地址库API，长度不能超100 
     * Example Value: 
     */
    public function setAddressCounty($addressCounty)
    {
        $this->addressCounty             = $addressCounty;
        $this->apiParas["addressCounty"]  = $addressCounty;
    }

    public function getAddressCounty()
    {
        return $this->addressCounty;
    }

    /**
     * @param string $addressTown
     * 收货人镇,参考京东地址库API，长度不能超100 
     * Required: false
     * Example Value: 
     */
    private $addressTown;

    /**
     * @param string $addressTown
     * 收货人镇,参考京东地址库API，长度不能超100 
     * Example Value: 
     */
    public function setAddressTown($addressTown)
    {
        $this->addressTown             = $addressTown;
        $this->apiParas["addressTown"]  = $addressTown;
    }

    public function getAddressTown()
    {
        return $this->addressTown;
    }

    /**
     * @param string $consigneeAddress
     * 收货人地址 ，长度不能超100 
     * Required: true
     * Example Value: 
     */
    private $consigneeAddress;

    /**
     * @param string $consigneeAddress
     * 收货人地址 ，长度不能超100 
     * Example Value: 
     */
    public function setConsigneeAddress($consigneeAddress)
    {
        $this->consigneeAddress             = $consigneeAddress;
        $this->apiParas["consigneeAddress"]  = $consigneeAddress;
    }

    public function getConsigneeAddress()
    {
        return $this->consigneeAddress;
    }

    /**
     * @param string $consigneePostcode
     * 收货人邮编 
     * Required: false
     * Example Value: 
     */
    private $consigneePostcode;

    /**
     * @param string $consigneePostcode
     * 收货人邮编 
     * Example Value: 
     */
    public function setConsigneePostcode($consigneePostcode)
    {
        $this->consigneePostcode             = $consigneePostcode;
        $this->apiParas["consigneePostcode"]  = $consigneePostcode;
    }

    public function getConsigneePostcode()
    {
        return $this->consigneePostcode;
    }

    /**
     * @param int $receivable
     * 如果货到付款订单，则该字段值必须大于0，如果是非货到付款订单，该字段值请赋值空或0；订单应收金额,京东平台订单，此字段请通过360buy.order.print.data.get接口should_pay字段获取
     * Required: false
     * Example Value: 88.88
     */
    private $receivable;

    /**
     * @param int $receivable
     * 如果货到付款订单，则该字段值必须大于0，如果是非货到付款订单，该字段值请赋值空或0；订单应收金额,京东平台订单，此字段请通过360buy.order.print.data.get接口should_pay字段获取
     * Example Value: 88.88
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
     * @param string $consigneeRemark
     * 客户留言
     * Required: false
     * Example Value: 
     */
    private $consigneeRemark;

    /**
     * @param string $consigneeRemark
     * 客户留言
     * Example Value: 
     */
    public function setConsigneeRemark($consigneeRemark)
    {
        $this->consigneeRemark             = $consigneeRemark;
        $this->apiParas["consigneeRemark"]  = $consigneeRemark;
    }

    public function getConsigneeRemark()
    {
        return $this->consigneeRemark;
    }

    /**
     * @param string $orderMark
     * 订单标记位，首位为1代表货到付款
     * Required: true
     * Example Value: 00000000000000000000000000000000000000000000000000
     */
    private $orderMark;

    /**
     * @param string $orderMark
     * 订单标记位，首位为1代表货到付款
     * Example Value: 00000000000000000000000000000000000000000000000000
     */
    public function setOrderMark($orderMark)
    {
        $this->orderMark             = $orderMark;
        $this->apiParas["orderMark"]  = $orderMark;
    }

    public function getOrderMark()
    {
        return $this->orderMark;
    }

    /**
     * @param string $thirdWayBill
     * 三方运单号，长度不能超200 
     * Required: false
     * Example Value: 
     */
    private $thirdWayBill;

    /**
     * @param string $thirdWayBill
     * 三方运单号，长度不能超200 
     * Example Value: 
     */
    public function setThirdWayBill($thirdWayBill)
    {
        $this->thirdWayBill             = $thirdWayBill;
        $this->apiParas["thirdWayBill"]  = $thirdWayBill;
    }

    public function getThirdWayBill()
    {
        return $this->thirdWayBill;
    }

    /**
     * @param string $packageMark
     * 顺丰E标，长度不能超50 
     * Required: false
     * Example Value: 
     */
    private $packageMark;

    /**
     * @param string $packageMark
     * 顺丰E标，长度不能超50 
     * Example Value: 
     */
    public function setPackageMark($packageMark)
    {
        $this->packageMark             = $packageMark;
        $this->apiParas["packageMark"]  = $packageMark;
    }

    public function getPackageMark()
    {
        return $this->packageMark;
    }

    /**
     * @param string $businessType
     * 业务类型，长度不能超50 
     * Required: false
     * Example Value: 
     */
    private $businessType;

    /**
     * @param string $businessType
     * 业务类型，长度不能超50 
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
     * @param string $destinationCode
     * 目的地代码，长度不能超50 
     * Required: false
     * Example Value: 
     */
    private $destinationCode;

    /**
     * @param string $destinationCode
     * 目的地代码，长度不能超50 
     * Example Value: 
     */
    public function setDestinationCode($destinationCode)
    {
        $this->destinationCode             = $destinationCode;
        $this->apiParas["destinationCode"]  = $destinationCode;
    }

    public function getDestinationCode()
    {
        return $this->destinationCode;
    }

    /**
     * @param string $destinationName
     * 目的地名称，长度不能超200 
     * Required: false
     * Example Value: 
     */
    private $destinationName;

    /**
     * @param string $destinationName
     * 目的地名称，长度不能超200 
     * Example Value: 
     */
    public function setDestinationName($destinationName)
    {
        $this->destinationName             = $destinationName;
        $this->apiParas["destinationName"]  = $destinationName;
    }

    public function getDestinationName()
    {
        return $this->destinationName;
    }

    /**
     * @param string $sendWebsiteCode
     * 发件网点代码，长度不能超50 
     * Required: false
     * Example Value: 
     */
    private $sendWebsiteCode;

    /**
     * @param string $sendWebsiteCode
     * 发件网点代码，长度不能超50 
     * Example Value: 
     */
    public function setSendWebsiteCode($sendWebsiteCode)
    {
        $this->sendWebsiteCode             = $sendWebsiteCode;
        $this->apiParas["sendWebsiteCode"]  = $sendWebsiteCode;
    }

    public function getSendWebsiteCode()
    {
        return $this->sendWebsiteCode;
    }

    /**
     * @param string $sendWebsiteName
     * 发件网点名称，长度不能超200
     * Required: false
     * Example Value: 
     */
    private $sendWebsiteName;

    /**
     * @param string $sendWebsiteName
     * 发件网点名称，长度不能超200
     * Example Value: 
     */
    public function setSendWebsiteName($sendWebsiteName)
    {
        $this->sendWebsiteName             = $sendWebsiteName;
        $this->apiParas["sendWebsiteName"]  = $sendWebsiteName;
    }

    public function getSendWebsiteName()
    {
        return $this->sendWebsiteName;
    }

    /**
     * @param  $sendMode
     * 寄件方式，长度不能超4
     * Required: false
     * Example Value: 
     */
    private $sendMode;

    /**
     * @param  $sendMode
     * 寄件方式，长度不能超4
     * Example Value: 
     */
    public function setSendMode($sendMode)
    {
        $this->sendMode             = $sendMode;
        $this->apiParas["sendMode"]  = $sendMode;
    }

    public function getSendMode()
    {
        return $this->sendMode;
    }

    /**
     * @param  $receiveMode
     * 收件方式，长度不能超4
     * Required: false
     * Example Value: 
     */
    private $receiveMode;

    /**
     * @param  $receiveMode
     * 收件方式，长度不能超4
     * Example Value: 
     */
    public function setReceiveMode($receiveMode)
    {
        $this->receiveMode             = $receiveMode;
        $this->apiParas["receiveMode"]  = $receiveMode;
    }

    public function getReceiveMode()
    {
        return $this->receiveMode;
    }

    /**
     * @param string $appointDeliveryTime
     * 预约配送时间，长度不能超50
     * Required: false
     * Example Value: 
     */
    private $appointDeliveryTime;

    /**
     * @param string $appointDeliveryTime
     * 预约配送时间，长度不能超50
     * Example Value: 
     */
    public function setAppointDeliveryTime($appointDeliveryTime)
    {
        $this->appointDeliveryTime             = $appointDeliveryTime;
        $this->apiParas["appointDeliveryTime"]  = $appointDeliveryTime;
    }

    public function getAppointDeliveryTime()
    {
        return $this->appointDeliveryTime;
    }

    /**
     * @param  $insuredPriceFlag
     * 是否保价（1：是，0：否）
     * Required: false
     * Example Value: 
     */
    private $insuredPriceFlag;

    /**
     * @param  $insuredPriceFlag
     * 是否保价（1：是，0：否）
     * Example Value: 
     */
    public function setInsuredPriceFlag($insuredPriceFlag)
    {
        $this->insuredPriceFlag             = $insuredPriceFlag;
        $this->apiParas["insuredPriceFlag"]  = $insuredPriceFlag;
    }

    public function getInsuredPriceFlag()
    {
        return $this->insuredPriceFlag;
    }

    /**
     * @param int $insuredValue
     * 保价声明价值，长度不能超14（包括2位小数） 
     * Required: false
     * Example Value: 88.88
     */
    private $insuredValue;

    /**
     * @param int $insuredValue
     * 保价声明价值，长度不能超14（包括2位小数） 
     * Example Value: 88.88
     */
    public function setInsuredValue($insuredValue)
    {
        $this->insuredValue             = $insuredValue;
        $this->apiParas["insuredValue"]  = $insuredValue;
    }

    public function getInsuredValue()
    {
        return $this->insuredValue;
    }

    /**
     * @param  $thirdPayment
     * 运费支付方式，长度不能超4 
     * Required: false
     * Example Value: 
     */
    private $thirdPayment;

    /**
     * @param  $thirdPayment
     * 运费支付方式，长度不能超4 
     * Example Value: 
     */
    public function setThirdPayment($thirdPayment)
    {
        $this->thirdPayment             = $thirdPayment;
        $this->apiParas["thirdPayment"]  = $thirdPayment;
    }

    public function getThirdPayment()
    {
        return $this->thirdPayment;
    }

    /**
     * @param string $monthlyAccount
     * 月结账号，长度不能超50 
     * Required: false
     * Example Value: 
     */
    private $monthlyAccount;

    /**
     * @param string $monthlyAccount
     * 月结账号，长度不能超50 
     * Example Value: 
     */
    public function setMonthlyAccount($monthlyAccount)
    {
        $this->monthlyAccount             = $monthlyAccount;
        $this->apiParas["monthlyAccount"]  = $monthlyAccount;
    }

    public function getMonthlyAccount()
    {
        return $this->monthlyAccount;
    }

    /**
     * @param string $shipment
     * 寄托物，长度不能超100 
     * Required: false
     * Example Value: 
     */
    private $shipment;

    /**
     * @param string $shipment
     * 寄托物，长度不能超100 
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
     * @param string $sellerRemark
     * 模板备注，长度不能超500 
     * Required: false
     * Example Value: 
     */
    private $sellerRemark;

    /**
     * @param string $sellerRemark
     * 模板备注，长度不能超500 
     * Example Value: 
     */
    public function setSellerRemark($sellerRemark)
    {
        $this->sellerRemark             = $sellerRemark;
        $this->apiParas["sellerRemark"]  = $sellerRemark;
    }

    public function getSellerRemark()
    {
        return $this->sellerRemark;
    }

    /**
     * @param string $thirdSite
     * 大头笔，长度不能超500 
     * Required: false
     * Example Value: 
     */
    private $thirdSite;

    /**
     * @param string $thirdSite
     * 大头笔，长度不能超500 
     * Example Value: 
     */
    public function setThirdSite($thirdSite)
    {
        $this->thirdSite             = $thirdSite;
        $this->apiParas["thirdSite"]  = $thirdSite;
    }

    public function getThirdSite()
    {
        return $this->thirdSite;
    }

    /**
     * @param string $gatherCenterName
     * 集包地名称
     * Required: false
     * Example Value: 
     */
    private $gatherCenterName;

    /**
     * @param string $gatherCenterName
     * 集包地名称
     * Example Value: 
     */
    public function setGatherCenterName($gatherCenterName)
    {
        $this->gatherCenterName             = $gatherCenterName;
        $this->apiParas["gatherCenterName"]  = $gatherCenterName;
    }

    public function getGatherCenterName()
    {
        return $this->gatherCenterName;
    }

    /**
     * @param string $customsStatus
     * 通关状态
     * Required: false
     * Example Value: 
     */
    private $customsStatus;

    /**
     * @param string $customsStatus
     * 通关状态
     * Example Value: 
     */
    public function setCustomsStatus($customsStatus)
    {
        $this->customsStatus             = $customsStatus;
        $this->apiParas["customsStatus"]  = $customsStatus;
    }

    public function getCustomsStatus()
    {
        return $this->customsStatus;
    }

    /**
     * @param string $customerName
     * 网名/昵称
     * Required: false
     * Example Value: 
     */
    private $customerName;

    /**
     * @param string $customerName
     * 网名/昵称
     * Example Value: 
     */
    public function setCustomerName($customerName)
    {
        $this->customerName             = $customerName;
        $this->apiParas["customerName"]  = $customerName;
    }

    public function getCustomerName()
    {
        return $this->customerName;
    }

    /**
     * @param string $invoiceTitle
     * 发票抬头
     * Required: false
     * Example Value: 
     */
    private $invoiceTitle;

    /**
     * @param string $invoiceTitle
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
     * @param string $invoiceContent
     * 发票内容
     * Required: false
     * Example Value: 
     */
    private $invoiceContent;

    /**
     * @param string $invoiceContent
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
     * @param string $goodsType
     * 商品类型
     * Required: false
     * Example Value: 
     */
    private $goodsType;

    /**
     * @param string $goodsType
     * 商品类型
     * Example Value: 
     */
    public function setGoodsType($goodsType)
    {
        $this->goodsType             = $goodsType;
        $this->apiParas["goodsType"]  = $goodsType;
    }

    public function getGoodsType()
    {
        return $this->goodsType;
    }

    /**
     * @param string $goodsLevel
     * 商品等级
     * Required: false
     * Example Value: 
     */
    private $goodsLevel;

    /**
     * @param string $goodsLevel
     * 商品等级
     * Example Value: 
     */
    public function setGoodsLevel($goodsLevel)
    {
        $this->goodsLevel             = $goodsLevel;
        $this->apiParas["goodsLevel"]  = $goodsLevel;
    }

    public function getGoodsLevel()
    {
        return $this->goodsLevel;
    }

    /**
     * @param string $customsPort
     * 清关口岸信息
     * Required: false
     * Example Value: 
     */
    private $customsPort;

    /**
     * @param string $customsPort
     * 清关口岸信息
     * Example Value: 
     */
    public function setCustomsPort($customsPort)
    {
        $this->customsPort             = $customsPort;
        $this->apiParas["customsPort"]  = $customsPort;
    }

    public function getCustomsPort()
    {
        return $this->customsPort;
    }

    /**
     * @param string $billType
     * 出库单类型（物流云专用）
     * Required: false
     * Example Value: 
     */
    private $billType;

    /**
     * @param string $billType
     * 出库单类型（物流云专用）
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
     * @param int $orderPrice
     * 订单金额（物流云专用）
     * Required: false
     * Example Value: 
     */
    private $orderPrice;

    /**
     * @param int $orderPrice
     * 订单金额（物流云专用）
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
     * @param string $wlyInfo
     * 上游JSON报文(物流云专用),示例:wlyInfo:poNo:单号;receiptNo:入库单号;arrivalTime:要求到货时间;brand:品牌 
     * Required: false
     * Example Value: 
     */
    private $wlyInfo;

    /**
     * @param string $wlyInfo
     * 上游JSON报文(物流云专用),示例:wlyInfo:poNo:单号;receiptNo:入库单号;arrivalTime:要求到货时间;brand:品牌 
     * Example Value: 
     */
    public function setWlyInfo($wlyInfo)
    {
        $this->wlyInfo             = $wlyInfo;
        $this->apiParas["wlyInfo"]  = $wlyInfo;
    }

    public function getWlyInfo()
    {
        return $this->wlyInfo;
    }

    /**
     * @param string $customerId
     * 收货客户编号（物流云专用）
     * Required: false
     * Example Value: 
     */
    private $customerId;

    /**
     * @param string $customerId
     * 收货客户编号（物流云专用）
     * Example Value: 
     */
    public function setCustomerId($customerId)
    {
        $this->customerId             = $customerId;
        $this->apiParas["customerId"]  = $customerId;
    }

    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * @param int $urgency
     * 是否加急(运输方式)（1：加急；其他值不加急）
     * Required: false
     * Example Value: 
     */
    private $urgency;

    /**
     * @param int $urgency
     * 是否加急(运输方式)（1：加急；其他值不加急）
     * Example Value: 
     */
    public function setUrgency($urgency)
    {
        $this->urgency             = $urgency;
        $this->apiParas["urgency"]  = $urgency;
    }

    public function getUrgency()
    {
        return $this->urgency;
    }

    /**
     * @param string $customerNo
     * 客户门店编码,开启地址预解析时（addrAnalysis=1）必填
     * Required: false
     * Example Value: 
     */
    private $customerNo;

    /**
     * @param string $customerNo
     * 客户门店编码,开启地址预解析时（addrAnalysis=1）必填
     * Example Value: 
     */
    public function setCustomerNo($customerNo)
    {
        $this->customerNo             = $customerNo;
        $this->apiParas["customerNo"]  = $customerNo;
    }

    public function getCustomerNo()
    {
        return $this->customerNo;
    }

    /**
     * @param string $storeName
     * 创维门店名称：长度不能超100
     * Required: false
     * Example Value: 
     */
    private $storeName;

    /**
     * @param string $storeName
     * 创维门店名称：长度不能超100
     * Example Value: 
     */
    public function setStoreName($storeName)
    {
        $this->storeName             = $storeName;
        $this->apiParas["storeName"]  = $storeName;
    }

    public function getStoreName()
    {
        return $this->storeName;
    }

    /**
     * @param string $invoiceState
     * 发票标识，是否需要开具发票(0,1为需要开发票，2,3不需要开发票)
     * Required: false
     * Example Value: 
     */
    private $invoiceState;

    /**
     * @param string $invoiceState
     * 发票标识，是否需要开具发票(0,1为需要开发票，2,3不需要开发票)
     * Example Value: 
     */
    public function setInvoiceState($invoiceState)
    {
        $this->invoiceState             = $invoiceState;
        $this->apiParas["invoiceState"]  = $invoiceState;
    }

    public function getInvoiceState()
    {
        return $this->invoiceState;
    }

    /**
     * @param string $invoiceType
     * 发票类型 （1 普通发票 2 电子发票 3 增值税发票）
     * Required: false
     * Example Value: 
     */
    private $invoiceType;

    /**
     * @param string $invoiceType
     * 发票类型 （1 普通发票 2 电子发票 3 增值税发票）
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
     * @param string $invoiceNo
     * 发票号
     * Required: false
     * Example Value: 
     */
    private $invoiceNo;

    /**
     * @param string $invoiceNo
     * 发票号
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
     * @param string $invoiceTax
     * 购方税号(税务识别号)
     * Required: false
     * Example Value: 
     */
    private $invoiceTax;

    /**
     * @param string $invoiceTax
     * 购方税号(税务识别号)
     * Example Value: 
     */
    public function setInvoiceTax($invoiceTax)
    {
        $this->invoiceTax             = $invoiceTax;
        $this->apiParas["invoiceTax"]  = $invoiceTax;
    }

    public function getInvoiceTax()
    {
        return $this->invoiceTax;
    }

    /**
     * @param string $bankName
     * 开户银行名称
     * Required: false
     * Example Value: 
     */
    private $bankName;

    /**
     * @param string $bankName
     * 开户银行名称
     * Example Value: 
     */
    public function setBankName($bankName)
    {
        $this->bankName             = $bankName;
        $this->apiParas["bankName"]  = $bankName;
    }

    public function getBankName()
    {
        return $this->bankName;
    }

    /**
     * @param string $bankAccount
     * 开户银行账户
     * Required: false
     * Example Value: 
     */
    private $bankAccount;

    /**
     * @param string $bankAccount
     * 开户银行账户
     * Example Value: 
     */
    public function setBankAccount($bankAccount)
    {
        $this->bankAccount             = $bankAccount;
        $this->apiParas["bankAccount"]  = $bankAccount;
    }

    public function getBankAccount()
    {
        return $this->bankAccount;
    }

    /**
     * @param string $address
     * 购货单位地址
     * Required: false
     * Example Value: 
     */
    private $address;

    /**
     * @param string $address
     * 购货单位地址
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
     * @param string $phoneNumber
     * 购货单位电话
     * Required: false
     * Example Value: 
     */
    private $phoneNumber;

    /**
     * @param string $phoneNumber
     * 购货单位电话
     * Example Value: 
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber             = $phoneNumber;
        $this->apiParas["phoneNumber"]  = $phoneNumber;
    }

    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param  $signType
     * 是否特殊签收(0:不需要此服务 2:短信验证 3:指定验证码 )
     * Required: false
     * Example Value: 0
     */
    private $signType;

    /**
     * @param  $signType
     * 是否特殊签收(0:不需要此服务 2:短信验证 3:指定验证码 )
     * Example Value: 0
     */
    public function setSignType($signType)
    {
        $this->signType             = $signType;
        $this->apiParas["signType"]  = $signType;
    }

    public function getSignType()
    {
        return $this->signType;
    }

    /**
     * @param string $signIDCode
     *  指定验证码(signType为3时必填项,6位的数字字母 超过6位只保留最后6位,不足则校验不通过)
     * Required: false
     * Example Value: 
     */
    private $signIDCode;

    /**
     * @param string $signIDCode
     *  指定验证码(signType为3时必填项,6位的数字字母 超过6位只保留最后6位,不足则校验不通过)
     * Example Value: 
     */
    public function setSignIDCode($signIDCode)
    {
        $this->signIDCode             = $signIDCode;
        $this->apiParas["signIDCode"]  = $signIDCode;
    }

    public function getSignIDCode()
    {
        return $this->signIDCode;
    }

    /**
     * @param string $supplierNo
     *  供应商编号(最大长度50)
     * Required: false
     * Example Value: 
     */
    private $supplierNo;

    /**
     * @param string $supplierNo
     *  供应商编号(最大长度50)
     * Example Value: 
     */
    public function setSupplierNo($supplierNo)
    {
        $this->supplierNo             = $supplierNo;
        $this->apiParas["supplierNo"]  = $supplierNo;
    }

    public function getSupplierNo()
    {
        return $this->supplierNo;
    }

    /**
     * @param string $agingType
     *  时效类型(varchar4)
     * Required: false
     * Example Value: 
     */
    private $agingType;

    /**
     * @param string $agingType
     *  时效类型(varchar4)
     * Example Value: 
     */
    public function setAgingType($agingType)
    {
        $this->agingType             = $agingType;
        $this->apiParas["agingType"]  = $agingType;
    }

    public function getAgingType()
    {
        return $this->agingType;
    }

    /**
     * @param string $sellerNote
     *  商家备注(最大长度200，超出会截取前200位)
     * Required: false
     * Example Value: 
     */
    private $sellerNote;

    /**
     * @param string $sellerNote
     *  商家备注(最大长度200，超出会截取前200位)
     * Example Value: 
     */
    public function setSellerNote($sellerNote)
    {
        $this->sellerNote             = $sellerNote;
        $this->apiParas["sellerNote"]  = $sellerNote;
    }

    public function getSellerNote()
    {
        return $this->sellerNote;
    }

    /**
     * @param string $supervisionCode
     *  (医药)流通监管码(可空，最大长度：50)
     * Required: false
     * Example Value: 
     */
    private $supervisionCode;

    /**
     * @param string $supervisionCode
     *  (医药)流通监管码(可空，最大长度：50)
     * Example Value: 
     */
    public function setSupervisionCode($supervisionCode)
    {
        $this->supervisionCode             = $supervisionCode;
        $this->apiParas["supervisionCode"]  = $supervisionCode;
    }

    public function getSupervisionCode()
    {
        return $this->supervisionCode;
    }

    /**
     * @param string $invoiceChecker
     *  (医药)开票员(可空，最大长度：50)
     * Required: false
     * Example Value: 
     */
    private $invoiceChecker;

    /**
     * @param string $invoiceChecker
     *  (医药)开票员(可空，最大长度：50)
     * Example Value: 
     */
    public function setInvoiceChecker($invoiceChecker)
    {
        $this->invoiceChecker             = $invoiceChecker;
        $this->apiParas["invoiceChecker"]  = $invoiceChecker;
    }

    public function getInvoiceChecker()
    {
        return $this->invoiceChecker;
    }

    /**
     * @param string $paymentType
     *  (医药)付款方式(可空，最大长度：20)
     * Required: false
     * Example Value: 
     */
    private $paymentType;

    /**
     * @param string $paymentType
     *  (医药)付款方式(可空，最大长度：20)
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
     * @param string $saleType
     *  (医药)销售类型(可空，最大长度：10)
     * Required: false
     * Example Value: 
     */
    private $saleType;

    /**
     * @param string $saleType
     *  (医药)销售类型(可空，最大长度：10)
     * Example Value: 
     */
    public function setSaleType($saleType)
    {
        $this->saleType             = $saleType;
        $this->apiParas["saleType"]  = $saleType;
    }

    public function getSaleType()
    {
        return $this->saleType;
    }

    /**
     * @param string $inStorageNo
     *  进仓预约号(最大长度30)
     * Required: false
     * Example Value: 
     */
    private $inStorageNo;

    /**
     * @param string $inStorageNo
     *  进仓预约号(最大长度30)
     * Example Value: 
     */
    public function setInStorageNo($inStorageNo)
    {
        $this->inStorageNo             = $inStorageNo;
        $this->apiParas["inStorageNo"]  = $inStorageNo;
    }

    public function getInStorageNo()
    {
        return $this->inStorageNo;
    }

    /**
     * @param string $inStorageTime
     *  进仓时间(格式为：yyyy-MM-dd HH:mm:ss)
     * Required: false
     * Example Value: 
     */
    private $inStorageTime;

    /**
     * @param string $inStorageTime
     *  进仓时间(格式为：yyyy-MM-dd HH:mm:ss)
     * Example Value: 
     */
    public function setInStorageTime($inStorageTime)
    {
        $this->inStorageTime             = $inStorageTime;
        $this->apiParas["inStorageTime"]  = $inStorageTime;
    }

    public function getInStorageTime()
    {
        return $this->inStorageTime;
    }

    /**
     * @param string $inStorageRemark
     *  进仓备注(最大长度100)
     * Required: false
     * Example Value: 
     */
    private $inStorageRemark;

    /**
     * @param string $inStorageRemark
     *  进仓备注(最大长度100)
     * Example Value: 
     */
    public function setInStorageRemark($inStorageRemark)
    {
        $this->inStorageRemark             = $inStorageRemark;
        $this->apiParas["inStorageRemark"]  = $inStorageRemark;
    }

    public function getInStorageRemark()
    {
        return $this->inStorageRemark;
    }

    /**
     * @param string $grossReturnName
     *  签单返还收件人名称(大件订单纸质签单必填，最大长度20)
     * Required: false
     * Example Value: 
     */
    private $grossReturnName;

    /**
     * @param string $grossReturnName
     *  签单返还收件人名称(大件订单纸质签单必填，最大长度20)
     * Example Value: 
     */
    public function setGrossReturnName($grossReturnName)
    {
        $this->grossReturnName             = $grossReturnName;
        $this->apiParas["grossReturnName"]  = $grossReturnName;
    }

    public function getGrossReturnName()
    {
        return $this->grossReturnName;
    }

    /**
     * @param string $grossReturnPhone
     *  签单返还收件人电话(最大长度15)
     * Required: false
     * Example Value: 
     */
    private $grossReturnPhone;

    /**
     * @param string $grossReturnPhone
     *  签单返还收件人电话(最大长度15)
     * Example Value: 
     */
    public function setGrossReturnPhone($grossReturnPhone)
    {
        $this->grossReturnPhone             = $grossReturnPhone;
        $this->apiParas["grossReturnPhone"]  = $grossReturnPhone;
    }

    public function getGrossReturnPhone()
    {
        return $this->grossReturnPhone;
    }

    /**
     * @param string $grossReturnMobile
     *  签单返还收件人手机(大件订单纸质签单必填，长度11-15)
     * Required: false
     * Example Value: 
     */
    private $grossReturnMobile;

    /**
     * @param string $grossReturnMobile
     *  签单返还收件人手机(大件订单纸质签单必填，长度11-15)
     * Example Value: 
     */
    public function setGrossReturnMobile($grossReturnMobile)
    {
        $this->grossReturnMobile             = $grossReturnMobile;
        $this->apiParas["grossReturnMobile"]  = $grossReturnMobile;
    }

    public function getGrossReturnMobile()
    {
        return $this->grossReturnMobile;
    }

    /**
     * @param string $grossReturnAddress
     *  签单返还收件人地址(大件订单纸质签单必填，最大长度200)
     * Required: false
     * Example Value: 
     */
    private $grossReturnAddress;

    /**
     * @param string $grossReturnAddress
     *  签单返还收件人地址(大件订单纸质签单必填，最大长度200)
     * Example Value: 
     */
    public function setGrossReturnAddress($grossReturnAddress)
    {
        $this->grossReturnAddress             = $grossReturnAddress;
        $this->apiParas["grossReturnAddress"]  = $grossReturnAddress;
    }

    public function getGrossReturnAddress()
    {
        return $this->grossReturnAddress;
    }

    /**
     * @param string $isvPackTypeNo
     * 商家包装类型编码(最大长度30, 事业部开启指定耗材类型服务时必填)
     * Required: false
     * Example Value: 
     */
    private $isvPackTypeNo;

    /**
     * @param string $isvPackTypeNo
     * 商家包装类型编码(最大长度30, 事业部开启指定耗材类型服务时必填)
     * Example Value: 
     */
    public function setIsvPackTypeNo($isvPackTypeNo)
    {
        $this->isvPackTypeNo             = $isvPackTypeNo;
        $this->apiParas["isvPackTypeNo"]  = $isvPackTypeNo;
    }

    public function getIsvPackTypeNo()
    {
        return $this->isvPackTypeNo;
    }

    /**
     * @param  $addrAnalysis
     * 是否地址解析0-不解析 1-解析
     * Required: false
     * Example Value: 
     */
    private $addrAnalysis;

    /**
     * @param  $addrAnalysis
     * 是否地址解析0-不解析 1-解析
     * Example Value: 
     */
    public function setAddrAnalysis($addrAnalysis)
    {
        $this->addrAnalysis             = $addrAnalysis;
        $this->apiParas["addrAnalysis"]  = $addrAnalysis;
    }

    public function getAddrAnalysis()
    {
        return $this->addrAnalysis;
    }

    /**
     * @param string $printExtendInfo
     *  打印报文明细,JSON字符串格式
     * Required: false
     * Example Value: 
     */
    private $printExtendInfo;

    /**
     * @param string $printExtendInfo
     *  打印报文明细,JSON字符串格式
     * Example Value: 
     */
    public function setPrintExtendInfo($printExtendInfo)
    {
        $this->printExtendInfo             = $printExtendInfo;
        $this->apiParas["printExtendInfo"]  = $printExtendInfo;
    }

    public function getPrintExtendInfo()
    {
        return $this->printExtendInfo;
    }

    /**
     * @param string $logicParam
     * 逻辑仓（账套,仓别）
     * Required: false
     * Example Value: 
     */
    private $logicParam;

    /**
     * @param string $logicParam
     * 逻辑仓（账套,仓别）
     * Example Value: 
     */
    public function setLogicParam($logicParam)
    {
        $this->logicParam             = $logicParam;
        $this->apiParas["logicParam"]  = $logicParam;
    }

    public function getLogicParam()
    {
        return $this->logicParam;
    }

    /**
     * @param string $combineNo
     * 手工单号
     * Required: false
     * Example Value: 
     */
    private $combineNo;

    /**
     * @param string $combineNo
     * 手工单号
     * Example Value: 
     */
    public function setCombineNo($combineNo)
    {
        $this->combineNo             = $combineNo;
        $this->apiParas["combineNo"]  = $combineNo;
    }

    public function getCombineNo()
    {
        return $this->combineNo;
    }

    /**
     * @param string $activationCardService
     * 激活卡业务(0否1是)
     * Required: false
     * Example Value: 
     */
    private $activationCardService;

    /**
     * @param string $activationCardService
     * 激活卡业务(0否1是)
     * Example Value: 
     */
    public function setActivationCardService($activationCardService)
    {
        $this->activationCardService             = $activationCardService;
        $this->apiParas["activationService"]  = $activationCardService;
    }

    public function getActivationCardService()
    {
        return $this->activationCardService;
    }

    /**
     * @param int $randomInspection
     * 是否抽检单(0否1是)
     * Required: false
     * Example Value: 
     */
    private $randomInspection;

    /**
     * @param int $randomInspection
     * 是否抽检单(0否1是)
     * Example Value: 
     */
    public function setRandomInspection($randomInspection)
    {
        $this->randomInspection             = $randomInspection;
        $this->apiParas["randomInspection"]  = $randomInspection;
    }

    public function getRandomInspection()
    {
        return $this->randomInspection;
    }

    /**
     * @param string $VIPDeliWarehouse
     * 唯品会送货仓库
     * Required: false
     * Example Value: 
     */
    private $VIPDeliWarehouse;

    /**
     * @param string $VIPDeliWarehouse
     * 唯品会送货仓库
     * Example Value: 
     */
    public function setVIPDeliWarehouse($VIPDeliWarehouse)
    {
        $this->VIPDeliWarehouse             = $VIPDeliWarehouse;
        $this->apiParas["VIPDeliWarehouse"]  = $VIPDeliWarehouse;
    }

    public function getVIPDeliWarehouse()
    {
        return $this->VIPDeliWarehouse;
    }

    /**
     * @param string $customField
     * 个性化字段, JSON字符串格式
     * Required: false
     * Example Value: 
     */
    private $customField;

    /**
     * @param string $customField
     * 个性化字段, JSON字符串格式
     * Example Value: 
     */
    public function setCustomField($customField)
    {
        $this->customField             = $customField;
        $this->apiParas["customField"]  = $customField;
    }

    public function getCustomField()
    {
        return $this->customField;
    }

    /**
     * @param int $longitude
     * 经度
     * Required: false
     * Example Value: 
     */
    private $longitude;

    /**
     * @param int $longitude
     * 经度
     * Example Value: 
     */
    public function setLongitude($longitude)
    {
        $this->longitude             = $longitude;
        $this->apiParas["longitude"]  = $longitude;
    }

    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param int $latitude
     * 纬度
     * Required: false
     * Example Value: 
     */
    private $latitude;

    /**
     * @param int $latitude
     * 纬度
     * Example Value: 
     */
    public function setLatitude($latitude)
    {
        $this->latitude             = $latitude;
        $this->apiParas["latitude"]  = $latitude;
    }

    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param int $agingProductType
     * 时效产品类型
     * Required: false
     * Example Value: 
     */
    private $agingProductType;

    /**
     * @param int $agingProductType
     * 时效产品类型
     * Example Value: 
     */
    public function setAgingProductType($agingProductType)
    {
        $this->agingProductType             = $agingProductType;
        $this->apiParas["agingProductType"]  = $agingProductType;
    }

    public function getAgingProductType()
    {
        return $this->agingProductType;
    }

    /**
     * @param string $crossDockPriority
     * 越库优先级
     * Required: false
     * Example Value: 
     */
    private $crossDockPriority;

    /**
     * @param string $crossDockPriority
     * 越库优先级
     * Example Value: 
     */
    public function setCrossDockPriority($crossDockPriority)
    {
        $this->crossDockPriority             = $crossDockPriority;
        $this->apiParas["crossDockPriority"]  = $crossDockPriority;
    }

    public function getCrossDockPriority()
    {
        return $this->crossDockPriority;
    }

    /**
     * @param string $isvCompanyNo
     * 商家子公司编码
     * Required: false
     * Example Value: 
     */
    private $isvCompanyNo;

    /**
     * @param string $isvCompanyNo
     * 商家子公司编码
     * Example Value: 
     */
    public function setIsvCompanyNo($isvCompanyNo)
    {
        $this->isvCompanyNo             = $isvCompanyNo;
        $this->apiParas["isvCompanyNo"]  = $isvCompanyNo;
    }

    public function getIsvCompanyNo()
    {
        return $this->isvCompanyNo;
    }

    /**
     * @param string $orderPriority
     * 订单优先级
     * Required: false
     * Example Value: 
     */
    private $orderPriority;

    /**
     * @param string $orderPriority
     * 订单优先级
     * Example Value: 
     */
    public function setOrderPriority($orderPriority)
    {
        $this->orderPriority             = $orderPriority;
        $this->apiParas["orderPriority"]  = $orderPriority;
    }

    public function getOrderPriority()
    {
        return $this->orderPriority;
    }

    /**
     * @param string $orderBatchNo
     * 集单批量号
     * Required: false
     * Example Value: 
     */
    private $orderBatchNo;

    /**
     * @param string $orderBatchNo
     * 集单批量号
     * Example Value: 
     */
    public function setOrderBatchNo($orderBatchNo)
    {
        $this->orderBatchNo             = $orderBatchNo;
        $this->apiParas["orderBatchNo"]  = $orderBatchNo;
    }

    public function getOrderBatchNo()
    {
        return $this->orderBatchNo;
    }

    /**
     * @param int $orderBatchQty
     * 集单总单数
     * Required: false
     * Example Value: 
     */
    private $orderBatchQty;

    /**
     * @param int $orderBatchQty
     * 集单总单数
     * Example Value: 
     */
    public function setOrderBatchQty($orderBatchQty)
    {
        $this->orderBatchQty             = $orderBatchQty;
        $this->apiParas["orderBatchQty"]  = $orderBatchQty;
    }

    public function getOrderBatchQty()
    {
        return $this->orderBatchQty;
    }

    /**
     * @param string $productCode
     * 产品编码
     * Required: false
     * Example Value: 
     */
    private $productCode;

    /**
     * @param string $productCode
     * 产品编码
     * Example Value: 
     */
    public function setProductCode($productCode)
    {
        $this->productCode             = $productCode;
        $this->apiParas["productCode"]  = $productCode;
    }

    public function getProductCode()
    {
        return $this->productCode;
    }

    /**
     * @param string $vehicleType
     * 车型(只能传数字),3(依维柯),14(4.2米冷藏厢式车), 15(5.2米冷藏厢式车),16(7.6米冷藏厢式车),17(9.6米冷藏厢式车),24(6.8米冷藏厢式货车),25(12.5米冷藏厢式货车),26(17.5米冷藏厢式货车),27(7.2米冷藏箱式货车),28(15米冷藏厢式货车),42(13.5米冷藏厢式货车)
     * Required: false
     * Example Value: 16
     */
    private $vehicleType;

    /**
     * @param string $vehicleType
     * 车型(只能传数字),3(依维柯),14(4.2米冷藏厢式车), 15(5.2米冷藏厢式车),16(7.6米冷藏厢式车),17(9.6米冷藏厢式车),24(6.8米冷藏厢式货车),25(12.5米冷藏厢式货车),26(17.5米冷藏厢式货车),27(7.2米冷藏箱式货车),28(15米冷藏厢式货车),42(13.5米冷藏厢式货车)
     * Example Value: 16
     */
    public function setVehicleType($vehicleType)
    {
        $this->vehicleType             = $vehicleType;
        $this->apiParas["vehicleType"]  = $vehicleType;
    }

    public function getVehicleType()
    {
        return $this->vehicleType;
    }

    /**
     * @param string $isvSoType
     * 外部订单类型
     * Required: false
     * Example Value: 
     */
    private $isvSoType;

    /**
     * @param string $isvSoType
     * 外部订单类型
     * Example Value: 
     */
    public function setIsvSoType($isvSoType)
    {
        $this->isvSoType             = $isvSoType;
        $this->apiParas["isvSoType"]  = $isvSoType;
    }

    public function getIsvSoType()
    {
        return $this->isvSoType;
    }

    /**
     * @param string $checkDelivery
     * 青龙超区检查（1：需要青龙超区检查； 其他值：不需要青龙超区检查）
     * Required: false
     * Example Value: 
     */
    private $checkDelivery;

    /**
     * @param string $checkDelivery
     * 青龙超区检查（1：需要青龙超区检查； 其他值：不需要青龙超区检查）
     * Example Value: 
     */
    public function setCheckDelivery($checkDelivery)
    {
        $this->checkDelivery             = $checkDelivery;
        $this->apiParas["checkDelivery"]  = $checkDelivery;
    }

    public function getCheckDelivery()
    {
        return $this->checkDelivery;
    }

    /**
     * @param string[] $goodsNo
     * ECLP商品编号，与商家商品编号二选一必填（两者都指定，以goodsNo为准）
     * Required: false
     * Example Value: 
     */
    private $goodsNo;

    /**
     * @param string[] $goodsNo
     * ECLP商品编号，与商家商品编号二选一必填（两者都指定，以goodsNo为准）
     * Example Value: 
     */
    public function setGoodsNo($goodsNo)
    {
        $this->goodsNo             = $goodsNo;
        $this->apiParas["goodsNo"]  = $goodsNo;
    }

    public function getGoodsNo()
    {
        return $this->goodsNo;
    }

    /**
     * @param string[] $goodsLevel
     * 明细商品等级，不指定默认良品出库
     * Required: false
     * Example Value: 
     */
    private $goodsLevel;

    /**
     * @param string[] $goodsLevel
     * 明细商品等级，不指定默认良品出库
     * Example Value: 
     */
    public function setGoodsLevel($goodsLevel)
    {
        $this->goodsLevel             = $goodsLevel;
        $this->apiParas["skuGoodsLevel"]  = $goodsLevel;
    }

    public function getGoodsLevel()
    {
        return $this->goodsLevel;
    }

    /**
     * @param string[] $goodsName
     * 商品名称
     * Required: false
     * Example Value: 
     */
    private $goodsName;

    /**
     * @param string[] $goodsName
     * 商品名称
     * Example Value: 
     */
    public function setGoodsName($goodsName)
    {
        $this->goodsName             = $goodsName;
        $this->apiParas["goodsName"]  = $goodsName;
    }

    public function getGoodsName()
    {
        return $this->goodsName;
    }

    /**
     * @param string[] $type
     * 规格型号
     * Required: false
     * Example Value: 
     */
    private $type;

    /**
     * @param string[] $type
     * 规格型号
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
     * @param string[] $unit
     * 计量单位
     * Required: false
     * Example Value: 
     */
    private $unit;

    /**
     * @param string[] $unit
     * 计量单位
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
     * @param string[] $remark
     * 备注
     * Required: false
     * Example Value: 
     */
    private $remark;

    /**
     * @param string[] $remark
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
     * @param string[] $rate
     * 税率
     * Required: false
     * Example Value: 
     */
    private $rate;

    /**
     * @param string[] $rate
     * 税率
     * Example Value: 
     */
    public function setRate($rate)
    {
        $this->rate             = $rate;
        $this->apiParas["rate"]  = $rate;
    }

    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @param string[] $amount
     * 金额
     * Required: false
     * Example Value: 
     */
    private $amount;

    /**
     * @param string[] $amount
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
     * @param int[] $price
     * 商品金额，会在订单面单上线上商品单价
     * Required: false
     * Example Value: 88.88
     */
    private $price;

    /**
     * @param int[] $price
     * 商品金额，会在订单面单上线上商品单价
     * Example Value: 88.88
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
     * @param int[] $quantity
     * 商品的出库数量，必须>0
     * Required: true
     * Example Value: 10
     */
    private $quantity;

    /**
     * @param int[] $quantity
     * 商品的出库数量，必须>0
     * Example Value: 10
     */
    public function setQuantity($quantity)
    {
        $this->quantity             = $quantity;
        $this->apiParas["quantity"]  = $quantity;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param string[] $pAttributes
     * 批属性(物流云专用)
     * Required: false
     * Example Value: 
     */
    private $pAttributes;

    /**
     * @param string[] $pAttributes
     * 批属性(物流云专用)
     * Example Value: 
     */
    public function setPAttributes($pAttributes)
    {
        $this->pAttributes             = $pAttributes;
        $this->apiParas["pAttributes"]  = $pAttributes;
    }

    public function getPAttributes()
    {
        return $this->pAttributes;
    }

    /**
     * @param string[] $isvLotattrs
     * 批属性(物流云专用)
     * Required: false
     * Example Value: 
     */
    private $isvLotattrs;

    /**
     * @param string[] $isvLotattrs
     * 批属性(物流云专用)
     * Example Value: 
     */
    public function setIsvLotattrs($isvLotattrs)
    {
        $this->isvLotattrs             = $isvLotattrs;
        $this->apiParas["isvLotattrs"]  = $isvLotattrs;
    }

    public function getIsvLotattrs()
    {
        return $this->isvLotattrs;
    }

    /**
     * @param string[] $isvGoodsNo
     * 商家商品编号长度50,与ECLP商品编号二选一必填（两者都指定，以goodsNo为准）
     * Required: false
     * Example Value: 
     */
    private $isvGoodsNo;

    /**
     * @param string[] $isvGoodsNo
     * 商家商品编号长度50,与ECLP商品编号二选一必填（两者都指定，以goodsNo为准）
     * Example Value: 
     */
    public function setIsvGoodsNo($isvGoodsNo)
    {
        $this->isvGoodsNo             = $isvGoodsNo;
        $this->apiParas["isvGoodsNo"]  = $isvGoodsNo;
    }

    public function getIsvGoodsNo()
    {
        return $this->isvGoodsNo;
    }

    /**
     * @param string[] $installVenderId
     * 安维标识，0 不需要安装 1 京东安装 2 厂家安装
     * Required: false
     * Example Value: 
     */
    private $installVenderId;

    /**
     * @param string[] $installVenderId
     * 安维标识，0 不需要安装 1 京东安装 2 厂家安装
     * Example Value: 
     */
    public function setInstallVenderId($installVenderId)
    {
        $this->installVenderId             = $installVenderId;
        $this->apiParas["installVenderId"]  = $installVenderId;
    }

    public function getInstallVenderId()
    {
        return $this->installVenderId;
    }

    /**
     * @param string[] $orderLine
     * 行ID(varchar50)
     * Required: false
     * Example Value: 
     */
    private $orderLine;

    /**
     * @param string[] $orderLine
     * 行ID(varchar50)
     * Example Value: 
     */
    public function setOrderLine($orderLine)
    {
        $this->orderLine             = $orderLine;
        $this->apiParas["orderLine"]  = $orderLine;
    }

    public function getOrderLine()
    {
        return $this->orderLine;
    }

    /**
     * @param string[] $batAttrs
     * (医药)批属性json
     * Required: false
     * Example Value: [{batchKey:isSupplier,batchValue:value},{batchKey:isLot,batchValue:2018-01-01},{batchKey:production_date_lot,batchValue:2018-01-01},{batchKey:expiration_date_lot,batchValue:2018-01-01}]
     */
    private $batAttrs;

    /**
     * @param string[] $batAttrs
     * (医药)批属性json
     * Example Value: [{batchKey:isSupplier,batchValue:value},{batchKey:isLot,batchValue:2018-01-01},{batchKey:production_date_lot,batchValue:2018-01-01},{batchKey:expiration_date_lot,batchValue:2018-01-01}]
     */
    public function setBatAttrs($batAttrs)
    {
        $this->batAttrs             = $batAttrs;
        $this->apiParas["batAttrs"]  = $batAttrs;
    }

    public function getBatAttrs()
    {
        return $this->batAttrs;
    }

    /**
     * @param string[] $productionDate
     * 生产日期(格式：yyyy-MM-dd，商品批次信息)
     * Required: false
     * Example Value: 
     */
    private $productionDate;

    /**
     * @param string[] $productionDate
     * 生产日期(格式：yyyy-MM-dd，商品批次信息)
     * Example Value: 
     */
    public function setProductionDate($productionDate)
    {
        $this->productionDate             = $productionDate;
        $this->apiParas["productionDate"]  = $productionDate;
    }

    public function getProductionDate()
    {
        return $this->productionDate;
    }

    /**
     * @param string[] $expirationDate
     * 到期日期(格式：yyyy-MM-dd，商品批次信息)
     * Required: false
     * Example Value: 
     */
    private $expirationDate;

    /**
     * @param string[] $expirationDate
     * 到期日期(格式：yyyy-MM-dd，商品批次信息)
     * Example Value: 
     */
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate             = $expirationDate;
        $this->apiParas["expirationDate"]  = $expirationDate;
    }

    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * @param string[] $packBatchNo
     * 包装批号(最多50个字符，商品批次信息)
     * Required: false
     * Example Value: 
     */
    private $packBatchNo;

    /**
     * @param string[] $packBatchNo
     * 包装批号(最多50个字符，商品批次信息)
     * Example Value: 
     */
    public function setPackBatchNo($packBatchNo)
    {
        $this->packBatchNo             = $packBatchNo;
        $this->apiParas["packBatchNo"]  = $packBatchNo;
    }

    public function getPackBatchNo()
    {
        return $this->packBatchNo;
    }

    /**
     * @param string[] $poNo
     * 采购单号(支持商家采购单号或eclp采购单号，最多50个字符，商品批次信息)
     * Required: false
     * Example Value: 
     */
    private $poNo;

    /**
     * @param string[] $poNo
     * 采购单号(支持商家采购单号或eclp采购单号，最多50个字符，商品批次信息)
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
     * @param string[] $lot
     * 生产批号
     * Required: false
     * Example Value: 
     */
    private $lot;

    /**
     * @param string[] $lot
     * 生产批号
     * Example Value: 
     */
    public function setLot($lot)
    {
        $this->lot             = $lot;
        $this->apiParas["lot"]  = $lot;
    }

    public function getLot()
    {
        return $this->lot;
    }

    /**
     * @param string[] $serialNo
     * 序列号编码
     * Required: false
     * Example Value: 
     */
    private $serialNo;

    /**
     * @param string[] $serialNo
     * 序列号编码
     * Example Value: 
     */
    public function setSerialNo($serialNo)
    {
        $this->serialNo             = $serialNo;
        $this->apiParas["serialNo"]  = $serialNo;
    }

    public function getSerialNo()
    {
        return $this->serialNo;
    }

    /**
     * @param string[] $jdPackageType
     * 包装类型
     * Required: false
     * Example Value: 
     */
    private $jdPackageType;

    /**
     * @param string[] $jdPackageType
     * 包装类型
     * Example Value: 
     */
    public function setJdPackageType($jdPackageType)
    {
        $this->jdPackageType             = $jdPackageType;
        $this->apiParas["jdPackageType"]  = $jdPackageType;
    }

    public function getJdPackageType()
    {
        return $this->jdPackageType;
    }

    /**
     * @param string[] $serviceProductJson
     * 服务项编码
     * Required: false
     * Example Value: [{servCode:code1},{servCode:code2}]
     */
    private $serviceProductJson;

    /**
     * @param string[] $serviceProductJson
     * 服务项编码
     * Example Value: [{servCode:code1},{servCode:code2}]
     */
    public function setServiceProductJson($serviceProductJson)
    {
        $this->serviceProductJson             = $serviceProductJson;
        $this->apiParas["serviceProductJson"]  = $serviceProductJson;
    }

    public function getServiceProductJson()
    {
        return $this->serviceProductJson;
    }

}