<?php

namespca Lostinfo\JosOpenApi;

/**
 * 异步下发客户订单
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=2067&apiName=jingdong.eclp.order.asynAddOrder
 * Class EclpOrderAsynAddOrder
 * @package Jd\request
 */
class EclpOrderAsynAddOrder
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.order.asynAddOrder";
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
     * isv出库单号，作为isv出库的唯一性校验码,长度不能超过125
     * Required: true
     * Example Value: 
     */
    private $isvUUID;

    /**
     * @param string $isvUUID
     * isv出库单号，作为isv出库的唯一性校验码,长度不能超过125
     * Example Value: 
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
     * 仓库编号，参考库存查询接口返回结果，事业部开启寻源拆分服务可不填；否则必填；
     * Required: false
     * Example Value: 
     */
    private $warehouseNo;

    /**
     * @param string $warehouseNo
     * 仓库编号，参考库存查询接口返回结果，事业部开启寻源拆分服务可不填；否则必填；
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
     * Required: true
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
     * 销售平台下单时间，格式为：yyyy-mm-dd HH:mm:ss，默认京东接单时间
     * Required: false
     * Example Value: 
     */
    private $salesPlatformCreateTime;

    /**
     * @param string $salesPlatformCreateTime
     * 销售平台下单时间，格式为：yyyy-mm-dd HH:mm:ss，默认京东接单时间
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
     * 订单类型（1:B2C订单, 2:B2B订单，默认1）
     * Required: false
     * Example Value: 
     */
    private $soType;

    /**
     * @param string $soType
     * 订单类型（1:B2C订单, 2:B2B订单，默认1）
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
     * 收货人手机，长度不能超30
     * Required: false
     * Example Value: 
     */
    private $consigneeMobile;

    /**
     * @param string $consigneeMobile
     * 收货人手机，长度不能超30
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
     * 收货人电话邮箱，长度不能超100
     * Required: false
     * Example Value: 
     */
    private $consigneeEmail;

    /**
     * @param string $consigneeEmail
     * 收货人电话邮箱，长度不能超100
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
     * 期望发货时间,格式为：yyyy-mm-dd HH:mm:ss，默认京东接单时间
     * Required: false
     * Example Value: 
     */
    private $expectDate;

    /**
     * @param string $expectDate
     * 期望发货时间,格式为：yyyy-mm-dd HH:mm:ss，默认京东接单时间
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
     * 如果货到付款订单（orderMark），则该字段不能为空。订单应收金额,京东平台订单，此字段请通过360buy.order.print.data.get接口should_pay字段获取
     * Required: false
     * Example Value: 88.88
     */
    private $receivable;

    /**
     * @param int $receivable
     * 如果货到付款订单（orderMark），则该字段不能为空。订单应收金额,京东平台订单，此字段请通过360buy.order.print.data.get接口should_pay字段获取
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
     * @param int $insuredFee
     * 保价费用，长度不能超14（包括2位小数）
     * Required: false
     * Example Value: 88.88
     */
    private $insuredFee;

    /**
     * @param int $insuredFee
     * 保价费用，长度不能超14（包括2位小数）
     * Example Value: 88.88
     */
    public function setInsuredFee($insuredFee)
    {
        $this->insuredFee             = $insuredFee;
        $this->apiParas["insuredFee"]  = $insuredFee;
    }

    public function getInsuredFee()
    {
        return $this->insuredFee;
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
     * @param string $customsStatus
     * 通关状态(1：放行 2：查检)
     * Required: false
     * Example Value: 
     */
    private $customsStatus;

    /**
     * @param string $customsStatus
     * 通关状态(1：放行 2：查检)
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
     * 商品类型（1.普通、2.套装）
     * Required: false
     * Example Value: 
     */
    private $goodsType;

    /**
     * @param string $goodsType
     * 商品类型（1.普通、2.套装）
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
     * @param string $orderBatchNo
     * 批量号(同批订单生产编号)
     * Required: false
     * Example Value: 
     */
    private $orderBatchNo;

    /**
     * @param string $orderBatchNo
     * 批量号(同批订单生产编号)
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
     * 批量订单数,长度不能超过11
     * Required: false
     * Example Value: 
     */
    private $orderBatchQty;

    /**
     * @param int $orderBatchQty
     * 批量订单数,长度不能超过11
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
     * @param  $transactionSource
     * 业务来源(1.面对面,2.KA商户/服务商,3.微信买单,10.海外业务),长度不能超过4
     * Required: false
     * Example Value: 
     */
    private $transactionSource;

    /**
     * @param  $transactionSource
     * 业务来源(1.面对面,2.KA商户/服务商,3.微信买单,10.海外业务),长度不能超过4
     * Example Value: 
     */
    public function setTransactionSource($transactionSource)
    {
        $this->transactionSource             = $transactionSource;
        $this->apiParas["transactionSource"]  = $transactionSource;
    }

    public function getTransactionSource()
    {
        return $this->transactionSource;
    }

    /**
     * @param string $countryCode
     * 国家编码(长度50)
     * Required: false
     * Example Value: 
     */
    private $countryCode;

    /**
     * @param string $countryCode
     * 国家编码(长度50)
     * Example Value: 
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode             = $countryCode;
        $this->apiParas["countrycode"]  = $countryCode;
    }

    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @param string[] $goodsNo
     * 商品编号，通过事业部商品接口获取
     * Required: true
     * Example Value: 
     */
    private $goodsNo;

    /**
     * @param string[] $goodsNo
     * 商品编号，通过事业部商品接口获取
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
     * 商品的出库数量
     * Required: true
     * Example Value: 10
     */
    private $quantity;

    /**
     * @param int[] $quantity
     * 商品的出库数量
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
     * @param string[] $serialNo
     * 序列号,序列号的个数必须和商品数量一致。同一sku的多个序列号用逗号分隔
     * Required: false
     * Example Value: 
     */
    private $serialNo;

    /**
     * @param string[] $serialNo
     * 序列号,序列号的个数必须和商品数量一致。同一sku的多个序列号用逗号分隔
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
     * @param string[] $printName
     * 打印名称,长度不能超500
     * Required: false
     * Example Value: 
     */
    private $printName;

    /**
     * @param string[] $printName
     * 打印名称,长度不能超500
     * Example Value: 
     */
    public function setPrintName($printName)
    {
        $this->printName             = $printName;
        $this->apiParas["printName"]  = $printName;
    }

    public function getPrintName()
    {
        return $this->printName;
    }

}