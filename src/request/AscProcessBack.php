<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 创建原返申请
 * 商家售后服务开放API-商家售后服务开放
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=241&apiId=2126&apiName=jingdong.asc.process.back
 * Class AscProcessBack
 * @package Jd\request
 */
class AscProcessBack
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.asc.process.back";
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
     * @param string $buId
     * 商家ID
     * Required: true
     * Example Value: 
     */
    private $buId;

    /**
     * @param string $buId
     * 商家ID
     * Example Value: 
     */
    public function setBuId($buId)
    {
        $this->buId             = $buId;
        $this->apiParas["buId"]  = $buId;
    }

    public function getBuId()
    {
        return $this->buId;
    }

    /**
     * @param string $operatePin
     * 操作人账号
     * Required: true
     * Example Value: 
     */
    private $operatePin;

    /**
     * @param string $operatePin
     * 操作人账号
     * Example Value: 
     */
    public function setOperatePin($operatePin)
    {
        $this->operatePin             = $operatePin;
        $this->apiParas["operatePin"]  = $operatePin;
    }

    public function getOperatePin()
    {
        return $this->operatePin;
    }

    /**
     * @param string $operateNick
     * 操作人姓名
     * Required: true
     * Example Value: 
     */
    private $operateNick;

    /**
     * @param string $operateNick
     * 操作人姓名
     * Example Value: 
     */
    public function setOperateNick($operateNick)
    {
        $this->operateNick             = $operateNick;
        $this->apiParas["operateNick"]  = $operateNick;
    }

    public function getOperateNick()
    {
        return $this->operateNick;
    }

    /**
     * @param string $operateRemark
     * 操作备注
     * Required: false
     * Example Value: 
     */
    private $operateRemark;

    /**
     * @param string $operateRemark
     * 操作备注
     * Example Value: 
     */
    public function setOperateRemark($operateRemark)
    {
        $this->operateRemark             = $operateRemark;
        $this->apiParas["operateRemark"]  = $operateRemark;
    }

    public function getOperateRemark()
    {
        return $this->operateRemark;
    }

    /**
     * @param int $serviceId
     * 服务单号
     * Required: true
     * Example Value: 
     */
    private $serviceId;

    /**
     * @param int $serviceId
     * 服务单号
     * Example Value: 
     */
    public function setServiceId($serviceId)
    {
        $this->serviceId             = $serviceId;
        $this->apiParas["serviceId"]  = $serviceId;
    }

    public function getServiceId()
    {
        return $this->serviceId;
    }

    /**
     * @param int $orderId
     * 订单号
     * Required: true
     * Example Value: 
     */
    private $orderId;

    /**
     * @param int $orderId
     * 订单号
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
     * @param int $sysVersion
     * 服务单版本号
     * Required: true
     * Example Value: 
     */
    private $sysVersion;

    /**
     * @param int $sysVersion
     * 服务单版本号
     * Example Value: 
     */
    public function setSysVersion($sysVersion)
    {
        $this->sysVersion             = $sysVersion;
        $this->apiParas["sysVersion"]  = $sysVersion;
    }

    public function getSysVersion()
    {
        return $this->sysVersion;
    }

    /**
     * @param string $consigneeName
     * 收货人姓名
     * Required: true
     * Example Value: 
     */
    private $consigneeName;

    /**
     * @param string $consigneeName
     * 收货人姓名
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
     * @param string $consigneeTel
     * 联系人电话
     * Required: true
     * Example Value: 
     */
    private $consigneeTel;

    /**
     * @param string $consigneeTel
     * 联系人电话
     * Example Value: 
     */
    public function setConsigneeTel($consigneeTel)
    {
        $this->consigneeTel             = $consigneeTel;
        $this->apiParas["consigneeTel"]  = $consigneeTel;
    }

    public function getConsigneeTel()
    {
        return $this->consigneeTel;
    }

    /**
     * @param int $provinceCode
     * 收货地址省
     * Required: true
     * Example Value: 
     */
    private $provinceCode;

    /**
     * @param int $provinceCode
     * 收货地址省
     * Example Value: 
     */
    public function setProvinceCode($provinceCode)
    {
        $this->provinceCode             = $provinceCode;
        $this->apiParas["provinceCode"]  = $provinceCode;
    }

    public function getProvinceCode()
    {
        return $this->provinceCode;
    }

    /**
     * @param int $cityCode
     * 收货地址市
     * Required: true
     * Example Value: 
     */
    private $cityCode;

    /**
     * @param int $cityCode
     * 收货地址市
     * Example Value: 
     */
    public function setCityCode($cityCode)
    {
        $this->cityCode             = $cityCode;
        $this->apiParas["cityCode"]  = $cityCode;
    }

    public function getCityCode()
    {
        return $this->cityCode;
    }

    /**
     * @param int $countyCode
     * 收货地址县
     * Required: true
     * Example Value: 
     */
    private $countyCode;

    /**
     * @param int $countyCode
     * 收货地址县
     * Example Value: 
     */
    public function setCountyCode($countyCode)
    {
        $this->countyCode             = $countyCode;
        $this->apiParas["countyCode"]  = $countyCode;
    }

    public function getCountyCode()
    {
        return $this->countyCode;
    }

    /**
     * @param int $villageCode
     * 收货地址镇
     * Required: false
     * Example Value: 
     */
    private $villageCode;

    /**
     * @param int $villageCode
     * 收货地址镇
     * Example Value: 
     */
    public function setVillageCode($villageCode)
    {
        $this->villageCode             = $villageCode;
        $this->apiParas["villageCode"]  = $villageCode;
    }

    public function getVillageCode()
    {
        return $this->villageCode;
    }

    /**
     * @param string $detailAddress
     * 收货地址
     * Required: true
     * Example Value: 
     */
    private $detailAddress;

    /**
     * @param string $detailAddress
     * 收货地址
     * Example Value: 
     */
    public function setDetailAddress($detailAddress)
    {
        $this->detailAddress             = $detailAddress;
        $this->apiParas["detailAddress"]  = $detailAddress;
    }

    public function getDetailAddress()
    {
        return $this->detailAddress;
    }

    /**
     * @param int $repairState
     * 是否已维修
     * Required: false
     * Example Value: 
     */
    private $repairState;

    /**
     * @param int $repairState
     * 是否已维修
     * Example Value: 
     */
    public function setRepairState($repairState)
    {
        $this->repairState             = $repairState;
        $this->apiParas["repairState"]  = $repairState;
    }

    public function getRepairState()
    {
        return $this->repairState;
    }

    /**
     * @param string $applyRemark
     * 申请说明
     * Required: false
     * Example Value: 
     */
    private $applyRemark;

    /**
     * @param string $applyRemark
     * 申请说明
     * Example Value: 
     */
    public function setApplyRemark($applyRemark)
    {
        $this->applyRemark             = $applyRemark;
        $this->apiParas["applyRemark"]  = $applyRemark;
    }

    public function getApplyRemark()
    {
        return $this->applyRemark;
    }

    /**
     * @param int $shipWayId
     * 承运商
     * Required: true
     * Example Value: 
     */
    private $shipWayId;

    /**
     * @param int $shipWayId
     * 承运商
     * Example Value: 
     */
    public function setShipWayId($shipWayId)
    {
        $this->shipWayId             = $shipWayId;
        $this->apiParas["shipWayId"]  = $shipWayId;
    }

    public function getShipWayId()
    {
        return $this->shipWayId;
    }

    /**
     * @param string $shipWayName
     * 货运方式说明
     * Required: true
     * Example Value: 
     */
    private $shipWayName;

    /**
     * @param string $shipWayName
     * 货运方式说明
     * Example Value: 
     */
    public function setShipWayName($shipWayName)
    {
        $this->shipWayName             = $shipWayName;
        $this->apiParas["shipWayName"]  = $shipWayName;
    }

    public function getShipWayName()
    {
        return $this->shipWayName;
    }

    /**
     * @param string $expressCode
     * 运单号
     * Required: false
     * Example Value: 
     */
    private $expressCode;

    /**
     * @param string $expressCode
     * 运单号
     * Example Value: 
     */
    public function setExpressCode($expressCode)
    {
        $this->expressCode             = $expressCode;
        $this->apiParas["expressCode"]  = $expressCode;
    }

    public function getExpressCode()
    {
        return $this->expressCode;
    }

    /**
     * @param string $partCodes
     * 备件条码
     * Required: false
     * Example Value: 
     */
    private $partCodes;

    /**
     * @param string $partCodes
     * 备件条码
     * Example Value: 
     */
    public function setPartCodes($partCodes)
    {
        $this->partCodes             = $partCodes;
        $this->apiParas["partCodes"]  = $partCodes;
    }

    public function getPartCodes()
    {
        return $this->partCodes;
    }

    /**
     * @param string $extJsonStr
     * 扩展条件
     * Required: false
     * Example Value: 
     */
    private $extJsonStr;

    /**
     * @param string $extJsonStr
     * 扩展条件
     * Example Value: 
     */
    public function setExtJsonStr($extJsonStr)
    {
        $this->extJsonStr             = $extJsonStr;
        $this->apiParas["extJsonStr"]  = $extJsonStr;
    }

    public function getExtJsonStr()
    {
        return $this->extJsonStr;
    }

}