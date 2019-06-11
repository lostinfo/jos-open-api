<?php

namespca Lostinfo\JosOpenApi;

/**
 * 运单申报
 * 京东快递API-提供获取青龙运单号、向京东物流系统提交运单信息、跟踪查询物流信息等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=64&apiId=1960&apiName=jingdong.ldop.center.api.eportdeclare
 * Class LdopCenterApiEportdeclare
 * @package Jd\request
 */
class LdopCenterApiEportdeclare
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ldop.center.api.eportdeclare";
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
     * 平台标识
     * Required: true
     * Example Value: 
     */
    private $platformId;

    /**
     * @param string $platformId
     * 平台标识
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
     * 平台名称
     * Required: true
     * Example Value: 
     */
    private $platformName;

    /**
     * @param string $platformName
     * 平台名称
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
     * 申报类型
     * Required: true
     * Example Value: 
     */
    private $appType;

    /**
     * @param string $appType
     * 申报类型
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
     * 物流企业的运单包裹面单号
     * Required: true
     * Example Value: 
     */
    private $logisticsNo;

    /**
     * @param string $logisticsNo
     * 物流企业的运单包裹面单号
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
     * Required: true
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
     * 直购进口为海运提单或空运总单
     * Required: false
     * Example Value: 
     */
    private $billNo;

    /**
     * @param string $billNo
     * 直购进口为海运提单或空运总单
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
     * 货物运输费用
     * Required: true
     * Example Value: 
     */
    private $freight;

    /**
     * @param int $freight
     * 货物运输费用
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
     * 货物保险费用
     * Required: true
     * Example Value: 
     */
    private $insuredFee;

    /**
     * @param int $insuredFee
     * 货物保险费用
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
     * 净重(kg)
     * Required: true
     * Example Value: 
     */
    private $netWeight;

    /**
     * @param int $netWeight
     * 净重(kg)
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
     * 毛重(kg)
     * Required: true
     * Example Value: 
     */
    private $weight;

    /**
     * @param int $weight
     * 毛重(kg)
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
     * 单个运单下包裹数
     * Required: true
     * Example Value: 
     */
    private $packNo;

    /**
     * @param int $packNo
     * 单个运单下包裹数
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
     * 价值(kg)
     * Required: true
     * Example Value: 
     */
    private $worth;

    /**
     * @param int $worth
     * 价值(kg)
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
     * 主要商品名称
     * Required: true
     * Example Value: 
     */
    private $goodsName;

    /**
     * @param string $goodsName
     * 主要商品名称
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
     * 外单订单号
     * Required: true
     * Example Value: 
     */
    private $orderNo;

    /**
     * @param string $orderNo
     * 外单订单号
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
     * 发货人信息
     * Required: true
     * Example Value: 
     */
    private $shipper;

    /**
     * @param string $shipper
     * 发货人信息
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
     * 发货人地址
     * Required: true
     * Example Value: 
     */
    private $shipperAddress;

    /**
     * @param string $shipperAddress
     * 发货人地址
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
     * 发货人电话
     * Required: true
     * Example Value: 
     */
    private $shipperTelephone;

    /**
     * @param string $shipperTelephone
     * 发货人电话
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
     * 发货人所在国国别代码
     * Required: true
     * Example Value: 
     */
    private $shipperCountry;

    /**
     * @param string $shipperCountry
     * 发货人所在国国别代码
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
     * 收货人所在国
     * Required: true
     * Example Value: 
     */
    private $consigneeCountry;

    /**
     * @param string $consigneeCountry
     * 收货人所在国
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
     * 收货人地址（省）
     * Required: true
     * Example Value: 
     */
    private $consigneeProvince;

    /**
     * @param string $consigneeProvince
     * 收货人地址（省）
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
     * 收货人地址（市）
     * Required: true
     * Example Value: 
     */
    private $consigneeCity;

    /**
     * @param string $consigneeCity
     * 收货人地址（市）
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
     * 收货人地址（区）
     * Required: true
     * Example Value: 
     */
    private $consigneeDistrict;

    /**
     * @param string $consigneeDistrict
     * 收货人地址（区）
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
     * 收货人姓名
     * Required: true
     * Example Value: 
     */
    private $consingee;

    /**
     * @param string $consingee
     * 收货人姓名
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
     * 收货人地址
     * Required: true
     * Example Value: 
     */
    private $consigneeAddress;

    /**
     * @param string $consigneeAddress
     * 收货人地址
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
     * 收货人电话
     * Required: true
     * Example Value: 
     */
    private $consigneeTelephone;

    /**
     * @param string $consigneeTelephone
     * 收货人电话
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
     * 收货人证件类型，1-身份证,2-其它
     * Required: true
     * Example Value: 
     */
    private $buyerIdType;

    /**
     * @param string $buyerIdType
     * 收货人证件类型，1-身份证,2-其它
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
     * 收货人的身份证件号码
     * Required: true
     * Example Value: 
     */
    private $buyerIdNumber;

    /**
     * @param string $buyerIdNumber
     * 收货人的身份证件号码
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
     * 申报口岸编码
     * Required: true
     * Example Value: 
     */
    private $customsId;

    /**
     * @param string $customsId
     * 申报口岸编码
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
     * 关区编码
     * Required: false
     * Example Value: 
     */
    private $customsCode;

    /**
     * @param string $customsCode
     * 关区编码
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

}