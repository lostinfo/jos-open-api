<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 仅运单申报或重推接口
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=2920&apiName=jingdong.eclp.order.addDeclareOrderCustoms
 * Class EclpOrderAddDeclareOrderCustoms
 * @package Jd\request
 */
class EclpOrderAddDeclareOrderCustoms
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.order.addDeclareOrderCustoms";
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
     * @param string $platformId
     * 三方平台编号(商家编号),长度不超过20
     * Required: true
     * Example Value: 
     */
    private $platformId;

    /**
     * @param string $platformId
     * 三方平台编号(商家编号),长度不超过20
     * Example Value: 
     */
    public function setPlatformId($platformId)
    {
        $this->platformId             = $platformId;
        $this->apiParas["platformId"]  = $platformId;
    }

    public function getPlatformId()
    {
        return $this->platformId;
    }

    /**
     * @param string $platformName
     * 三方平台名称(商家名称),长度不超过100
     * Required: true
     * Example Value: 
     */
    private $platformName;

    /**
     * @param string $platformName
     * 三方平台名称(商家名称),长度不超过100
     * Example Value: 
     */
    public function setPlatformName($platformName)
    {
        $this->platformName             = $platformName;
        $this->apiParas["platformName"]  = $platformName;
    }

    public function getPlatformName()
    {
        return $this->platformName;
    }

    /**
     * @param string $appType
     * 申报类型，1-新增; 2-变更并重推;3-重推
     * Required: true
     * Example Value: 
     */
    private $appType;

    /**
     * @param string $appType
     * 申报类型，1-新增; 2-变更并重推;3-重推
     * Example Value: 
     */
    public function setAppType($appType)
    {
        $this->appType             = $appType;
        $this->apiParas["appType"]  = $appType;
    }

    public function getAppType()
    {
        return $this->appType;
    }

    /**
     * @param string $logisticsNo
     * 物流运单编号,长度不超过50
     * Required: false
     * Example Value: 
     */
    private $logisticsNo;

    /**
     * @param string $logisticsNo
     * 物流运单编号,长度不超过50
     * Example Value: 
     */
    public function setLogisticsNo($logisticsNo)
    {
        $this->logisticsNo             = $logisticsNo;
        $this->apiParas["logisticsNo"]  = $logisticsNo;
    }

    public function getLogisticsNo()
    {
        return $this->logisticsNo;
    }

    /**
     * @param string $billSerialNo
     * 运单流水号
     * Required: false
     * Example Value: 
     */
    private $billSerialNo;

    /**
     * @param string $billSerialNo
     * 运单流水号
     * Example Value: 
     */
    public function setBillSerialNo($billSerialNo)
    {
        $this->billSerialNo             = $billSerialNo;
        $this->apiParas["billSerialNo"]  = $billSerialNo;
    }

    public function getBillSerialNo()
    {
        return $this->billSerialNo;
    }

    /**
     * @param string $billNo
     * 直购进口为海运提单或空运总单,长度不超过200
     * Required: false
     * Example Value: 
     */
    private $billNo;

    /**
     * @param string $billNo
     * 直购进口为海运提单或空运总单,长度不超过200
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
     * @param int $freight
     * 运费(货物运输费用)
     * Required: true
     * Example Value: 
     */
    private $freight;

    /**
     * @param int $freight
     * 运费(货物运输费用)
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
     * @param int $insuredFee
     * 保价费用
     * Required: true
     * Example Value: 
     */
    private $insuredFee;

    /**
     * @param int $insuredFee
     * 保价费用
     * Example Value: 
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
     * @param int $netWeight
     * 净重(单位为千克)
     * Required: true
     * Example Value: 
     */
    private $netWeight;

    /**
     * @param int $netWeight
     * 净重(单位为千克)
     * Example Value: 
     */
    public function setNetWeight($netWeight)
    {
        $this->netWeight             = $netWeight;
        $this->apiParas["netWeight"]  = $netWeight;
    }

    public function getNetWeight()
    {
        return $this->netWeight;
    }

    /**
     * @param int $weight
     * 毛重(单位为千克)
     * Required: true
     * Example Value: 
     */
    private $weight;

    /**
     * @param int $weight
     * 毛重(单位为千克)
     * Example Value: 
     */
    public function setWeight($weight)
    {
        $this->weight             = $weight;
        $this->apiParas["weight"]  = $weight;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param int $packNo
     * 件数(包裹数,固定传1)
     * Required: true
     * Example Value: 
     */
    private $packNo;

    /**
     * @param int $packNo
     * 件数(包裹数,固定传1)
     * Example Value: 
     */
    public function setPackNo($packNo)
    {
        $this->packNo             = $packNo;
        $this->apiParas["packNo"]  = $packNo;
    }

    public function getPackNo()
    {
        return $this->packNo;
    }

    /**
     * @param int $worth
     * 价值
     * Required: true
     * Example Value: 
     */
    private $worth;

    /**
     * @param int $worth
     * 价值
     * Example Value: 
     */
    public function setWorth($worth)
    {
        $this->worth             = $worth;
        $this->apiParas["worth"]  = $worth;
    }

    public function getWorth()
    {
        return $this->worth;
    }

    /**
     * @param string $goodsName
     * 主要商品名称(赤道需要,必填),长度不超过500
     * Required: true
     * Example Value: 
     */
    private $goodsName;

    /**
     * @param string $goodsName
     * 主要商品名称(赤道需要,必填),长度不超过500
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
     * @param string $orderNo
     * 外单订单号,长度不超过200
     * Required: true
     * Example Value: 
     */
    private $orderNo;

    /**
     * @param string $orderNo
     * 外单订单号,长度不超过200
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
     * @param string $shipper
     * 发货人信息,长度不超过30
     * Required: true
     * Example Value: 
     */
    private $shipper;

    /**
     * @param string $shipper
     * 发货人信息,长度不超过30
     * Example Value: 
     */
    public function setShipper($shipper)
    {
        $this->shipper             = $shipper;
        $this->apiParas["shipper"]  = $shipper;
    }

    public function getShipper()
    {
        return $this->shipper;
    }

    /**
     * @param string $shipperAddress
     * 发货人地址,长度不超过150
     * Required: true
     * Example Value: 
     */
    private $shipperAddress;

    /**
     * @param string $shipperAddress
     * 发货人地址,长度不超过150
     * Example Value: 
     */
    public function setShipperAddress($shipperAddress)
    {
        $this->shipperAddress             = $shipperAddress;
        $this->apiParas["shipperAddress"]  = $shipperAddress;
    }

    public function getShipperAddress()
    {
        return $this->shipperAddress;
    }

    /**
     * @param string $shipperTelephone
     * 发货人电话,长度不超过32
     * Required: true
     * Example Value: 
     */
    private $shipperTelephone;

    /**
     * @param string $shipperTelephone
     * 发货人电话,长度不超过32
     * Example Value: 
     */
    public function setShipperTelephone($shipperTelephone)
    {
        $this->shipperTelephone             = $shipperTelephone;
        $this->apiParas["shipperTelephone"]  = $shipperTelephone;
    }

    public function getShipperTelephone()
    {
        return $this->shipperTelephone;
    }

    /**
     * @param string $shipperCountry
     *   发货人所在国国别代码,长度不超过3
     * Required: true
     * Example Value: 
     */
    private $shipperCountry;

    /**
     * @param string $shipperCountry
     *   发货人所在国国别代码,长度不超过3
     * Example Value: 
     */
    public function setShipperCountry($shipperCountry)
    {
        $this->shipperCountry             = $shipperCountry;
        $this->apiParas["shipperCountry"]  = $shipperCountry;
    }

    public function getShipperCountry()
    {
        return $this->shipperCountry;
    }

    /**
     * @param string $consigneeCountry
     * 收货人所在国家(地区)代码,长度不超过10
     * Required: true
     * Example Value: 
     */
    private $consigneeCountry;

    /**
     * @param string $consigneeCountry
     * 收货人所在国家(地区)代码,长度不超过10
     * Example Value: 
     */
    public function setConsigneeCountry($consigneeCountry)
    {
        $this->consigneeCountry             = $consigneeCountry;
        $this->apiParas["consigneeCountry"]  = $consigneeCountry;
    }

    public function getConsigneeCountry()
    {
        return $this->consigneeCountry;
    }

    /**
     * @param string $consigneeProvince
     * 收货地址-省,长度不超过100
     * Required: true
     * Example Value: 
     */
    private $consigneeProvince;

    /**
     * @param string $consigneeProvince
     * 收货地址-省,长度不超过100
     * Example Value: 
     */
    public function setConsigneeProvince($consigneeProvince)
    {
        $this->consigneeProvince             = $consigneeProvince;
        $this->apiParas["consigneeProvince"]  = $consigneeProvince;
    }

    public function getConsigneeProvince()
    {
        return $this->consigneeProvince;
    }

    /**
     * @param string $consigneeCity
     * 收货地址-市,长度不超过100
     * Required: true
     * Example Value: 
     */
    private $consigneeCity;

    /**
     * @param string $consigneeCity
     * 收货地址-市,长度不超过100
     * Example Value: 
     */
    public function setConsigneeCity($consigneeCity)
    {
        $this->consigneeCity             = $consigneeCity;
        $this->apiParas["consigneeCity"]  = $consigneeCity;
    }

    public function getConsigneeCity()
    {
        return $this->consigneeCity;
    }

    /**
     * @param string $consigneeDistrict
     * 收货地址-县,长度不超过100
     * Required: true
     * Example Value: 
     */
    private $consigneeDistrict;

    /**
     * @param string $consigneeDistrict
     * 收货地址-县,长度不超过100
     * Example Value: 
     */
    public function setConsigneeDistrict($consigneeDistrict)
    {
        $this->consigneeDistrict             = $consigneeDistrict;
        $this->apiParas["consigneeDistrict"]  = $consigneeDistrict;
    }

    public function getConsigneeDistrict()
    {
        return $this->consigneeDistrict;
    }

    /**
     * @param string $consingee
     * 收货人姓名,长度不超过50
     * Required: true
     * Example Value: 
     */
    private $consingee;

    /**
     * @param string $consingee
     * 收货人姓名,长度不超过50
     * Example Value: 
     */
    public function setConsingee($consingee)
    {
        $this->consingee             = $consingee;
        $this->apiParas["consingee"]  = $consingee;
    }

    public function getConsingee()
    {
        return $this->consingee;
    }

    /**
     * @param string $consigneeAddress
     * 收货人地址,长度不超过100
     * Required: true
     * Example Value: 
     */
    private $consigneeAddress;

    /**
     * @param string $consigneeAddress
     * 收货人地址,长度不超过100
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
     * @param string $consigneeTelephone
     * 收货人电话名,长度不超过50
     * Required: true
     * Example Value: 
     */
    private $consigneeTelephone;

    /**
     * @param string $consigneeTelephone
     * 收货人电话名,长度不超过50
     * Example Value: 
     */
    public function setConsigneeTelephone($consigneeTelephone)
    {
        $this->consigneeTelephone             = $consigneeTelephone;
        $this->apiParas["consigneeTelephone"]  = $consigneeTelephone;
    }

    public function getConsigneeTelephone()
    {
        return $this->consigneeTelephone;
    }

    /**
     * @param string $buyerIdType
     * 收货人证件类型，1-身份证;2-其它
     * Required: false
     * Example Value: 
     */
    private $buyerIdType;

    /**
     * @param string $buyerIdType
     * 收货人证件类型，1-身份证;2-其它
     * Example Value: 
     */
    public function setBuyerIdType($buyerIdType)
    {
        $this->buyerIdType             = $buyerIdType;
        $this->apiParas["buyerIdType"]  = $buyerIdType;
    }

    public function getBuyerIdType()
    {
        return $this->buyerIdType;
    }

    /**
     * @param string $buyerIdNumber
     * 订购人证件号码,长度不超过60
     * Required: false
     * Example Value: 
     */
    private $buyerIdNumber;

    /**
     * @param string $buyerIdNumber
     * 订购人证件号码,长度不超过60
     * Example Value: 
     */
    public function setBuyerIdNumber($buyerIdNumber)
    {
        $this->buyerIdNumber             = $buyerIdNumber;
        $this->apiParas["buyerIdNumber"]  = $buyerIdNumber;
    }

    public function getBuyerIdNumber()
    {
        return $this->buyerIdNumber;
    }

    /**
     * @param string $customsId
     * 申报口岸编码,长度不超过50
     * Required: true
     * Example Value: 
     */
    private $customsId;

    /**
     * @param string $customsId
     * 申报口岸编码,长度不超过50
     * Example Value: 
     */
    public function setCustomsId($customsId)
    {
        $this->customsId             = $customsId;
        $this->apiParas["customsId"]  = $customsId;
    }

    public function getCustomsId()
    {
        return $this->customsId;
    }

    /**
     * @param string $customsCode
     * 关区编码,长度不超过20
     * Required: true
     * Example Value: 
     */
    private $customsCode;

    /**
     * @param string $customsCode
     * 关区编码,长度不超过20
     * Example Value: 
     */
    public function setCustomsCode($customsCode)
    {
        $this->customsCode             = $customsCode;
        $this->apiParas["customsCode"]  = $customsCode;
    }

    public function getCustomsCode()
    {
        return $this->customsCode;
    }

    /**
     * @param string $deptNo
     * 事业部编码,长度不超过50
     * Required: true
     * Example Value: 
     */
    private $deptNo;

    /**
     * @param string $deptNo
     * 事业部编码,长度不超过50
     * Example Value: 
     */
    public function setDeptNo($deptNo)
    {
        $this->deptNo             = $deptNo;
        $this->apiParas["deptNo"]  = $deptNo;
    }

    public function getDeptNo()
    {
        return $this->deptNo;
    }

    /**
     * @param string $isvSource
     * ISV来源编号,长度不超过50
     * Required: true
     * Example Value: 
     */
    private $isvSource;

    /**
     * @param string $isvSource
     * ISV来源编号,长度不超过50
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
     * @param string $pattern
     * 跨境业务模式,长度不超过30
     * Required: true
     * Example Value: 
     */
    private $pattern;

    /**
     * @param string $pattern
     * 跨境业务模式,长度不超过30
     * Example Value: 
     */
    public function setPattern($pattern)
    {
        $this->pattern             = $pattern;
        $this->apiParas["pattern"]  = $pattern;
    }

    public function getPattern()
    {
        return $this->pattern;
    }

    /**
     * @param string $isvUUID
     * isv出库单号,作为isv出库的唯一性校验码,长度不超过200
     * Required: true
     * Example Value: 
     */
    private $isvUUID;

    /**
     * @param string $isvUUID
     * isv出库单号,作为isv出库的唯一性校验码,长度不超过200
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
     * @param int $platformType
     * 销售平台类型，1.电商平台-独立站；2.商家系统-多渠道
     * Required: true
     * Example Value: 
     */
    private $platformType;

    /**
     * @param int $platformType
     * 销售平台类型，1.电商平台-独立站；2.商家系统-多渠道
     * Example Value: 
     */
    public function setPlatformType($platformType)
    {
        $this->platformType             = $platformType;
        $this->apiParas["platformType"]  = $platformType;
    }

    public function getPlatformType()
    {
        return $this->platformType;
    }

    /**
     * @param string $salesPlatformCreateTime
     * 订单创建时间(yyyy-MM-dd HH:mm:ss),必须是消费者真实下单时间
     * Required: true
     * Example Value: 2018-06-18 16:18:38
     */
    private $salesPlatformCreateTime;

    /**
     * @param string $salesPlatformCreateTime
     * 订单创建时间(yyyy-MM-dd HH:mm:ss),必须是消费者真实下单时间
     * Example Value: 2018-06-18 16:18:38
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
     * @param string $postType
     * 申报订单类型，I-进口商品订单；E-出口商品订单,长度不超过1
     * Required: true
     * Example Value: 
     */
    private $postType;

    /**
     * @param string $postType
     * 申报订单类型，I-进口商品订单；E-出口商品订单,长度不超过1
     * Example Value: 
     */
    public function setPostType($postType)
    {
        $this->postType             = $postType;
        $this->apiParas["postType"]  = $postType;
    }

    public function getPostType()
    {
        return $this->postType;
    }

    /**
     * @param int $istax
     * 是否包税，0-包税；1-不包税
     * Required: true
     * Example Value: 
     */
    private $istax;

    /**
     * @param int $istax
     * 是否包税，0-包税；1-不包税
     * Example Value: 
     */
    public function setIstax($istax)
    {
        $this->istax             = $istax;
        $this->apiParas["istax"]  = $istax;
    }

    public function getIstax()
    {
        return $this->istax;
    }

    /**
     * @param string $logisticsCode
     * 物流企业代码,长度不超过20
     * Required: true
     * Example Value: 
     */
    private $logisticsCode;

    /**
     * @param string $logisticsCode
     * 物流企业代码,长度不超过20
     * Example Value: 
     */
    public function setLogisticsCode($logisticsCode)
    {
        $this->logisticsCode             = $logisticsCode;
        $this->apiParas["logisticsCode"]  = $logisticsCode;
    }

    public function getLogisticsCode()
    {
        return $this->logisticsCode;
    }

    /**
     * @param string $logisticsName
     * 物流企业名称,长度不超过100
     * Required: true
     * Example Value: 
     */
    private $logisticsName;

    /**
     * @param string $logisticsName
     * 物流企业名称,长度不超过100
     * Example Value: 
     */
    public function setLogisticsName($logisticsName)
    {
        $this->logisticsName             = $logisticsName;
        $this->apiParas["logisticsName"]  = $logisticsName;
    }

    public function getLogisticsName()
    {
        return $this->logisticsName;
    }

    /**
     * @param int $isDelivery
     * 是否货到付款，1-是；0-否
     * Required: true
     * Example Value: 
     */
    private $isDelivery;

    /**
     * @param int $isDelivery
     * 是否货到付款，1-是；0-否
     * Example Value: 
     */
    public function setIsDelivery($isDelivery)
    {
        $this->isDelivery             = $isDelivery;
        $this->apiParas["isDelivery"]  = $isDelivery;
    }

    public function getIsDelivery()
    {
        return $this->isDelivery;
    }

    /**
     * @param string $ebpCode
     * 电商平台编码,长度不超过10
     * Required: false
     * Example Value: 
     */
    private $ebpCode;

    /**
     * @param string $ebpCode
     * 电商平台编码,长度不超过10
     * Example Value: 
     */
    public function setEbpCode($ebpCode)
    {
        $this->ebpCode             = $ebpCode;
        $this->apiParas["ebpCode"]  = $ebpCode;
    }

    public function getEbpCode()
    {
        return $this->ebpCode;
    }

    /**
     * @param string $ebpName
     * 电商平台名称,长度不超过100
     * Required: false
     * Example Value: 
     */
    private $ebpName;

    /**
     * @param string $ebpName
     * 电商平台名称,长度不超过100
     * Example Value: 
     */
    public function setEbpName($ebpName)
    {
        $this->ebpName             = $ebpName;
        $this->apiParas["ebpName"]  = $ebpName;
    }

    public function getEbpName()
    {
        return $this->ebpName;
    }

    /**
     * @param string $ebcCode
     * 电商企业编码,长度不超过10
     * Required: false
     * Example Value: 
     */
    private $ebcCode;

    /**
     * @param string $ebcCode
     * 电商企业编码,长度不超过10
     * Example Value: 
     */
    public function setEbcCode($ebcCode)
    {
        $this->ebcCode             = $ebcCode;
        $this->apiParas["ebcCode"]  = $ebcCode;
    }

    public function getEbcCode()
    {
        return $this->ebcCode;
    }

    /**
     * @param string $ebcName
     * 电商企业名称,长度不超过100
     * Required: false
     * Example Value: 
     */
    private $ebcName;

    /**
     * @param string $ebcName
     * 电商企业名称,长度不超过100
     * Example Value: 
     */
    public function setEbcName($ebcName)
    {
        $this->ebcName             = $ebcName;
        $this->apiParas["ebcName"]  = $ebcName;
    }

    public function getEbcName()
    {
        return $this->ebcName;
    }

    /**
     * @param string $ebpCiqCode
     * 电商平台国检编码,长度不超过100
     * Required: false
     * Example Value: 
     */
    private $ebpCiqCode;

    /**
     * @param string $ebpCiqCode
     * 电商平台国检编码,长度不超过100
     * Example Value: 
     */
    public function setEbpCiqCode($ebpCiqCode)
    {
        $this->ebpCiqCode             = $ebpCiqCode;
        $this->apiParas["ebpCiqCode"]  = $ebpCiqCode;
    }

    public function getEbpCiqCode()
    {
        return $this->ebpCiqCode;
    }

    /**
     * @param string $ebpCiqName
     * 电商平台国检名称,长度不超过100
     * Required: false
     * Example Value: 
     */
    private $ebpCiqName;

    /**
     * @param string $ebpCiqName
     * 电商平台国检名称,长度不超过100
     * Example Value: 
     */
    public function setEbpCiqName($ebpCiqName)
    {
        $this->ebpCiqName             = $ebpCiqName;
        $this->apiParas["ebpCiqName"]  = $ebpCiqName;
    }

    public function getEbpCiqName()
    {
        return $this->ebpCiqName;
    }

    /**
     * @param string $ebcCiqCode
     * 电商企业国检档案编号,长度不超过50
     * Required: false
     * Example Value: 
     */
    private $ebcCiqCode;

    /**
     * @param string $ebcCiqCode
     * 电商企业国检档案编号,长度不超过50
     * Example Value: 
     */
    public function setEbcCiqCode($ebcCiqCode)
    {
        $this->ebcCiqCode             = $ebcCiqCode;
        $this->apiParas["ebcCiqCode"]  = $ebcCiqCode;
    }

    public function getEbcCiqCode()
    {
        return $this->ebcCiqCode;
    }

    /**
     * @param string $ebcCiqName
     * 电商企业国检档案名称,长度不超过100
     * Required: false
     * Example Value: 
     */
    private $ebcCiqName;

    /**
     * @param string $ebcCiqName
     * 电商企业国检档案名称,长度不超过100
     * Example Value: 
     */
    public function setEbcCiqName($ebcCiqName)
    {
        $this->ebcCiqName             = $ebcCiqName;
        $this->apiParas["ebcCiqName"]  = $ebcCiqName;
    }

    public function getEbcCiqName()
    {
        return $this->ebcCiqName;
    }

}