<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 换新申请
 * 商家售后服务开放API-商家售后服务开放
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=241&apiId=2128&apiName=jingdong.asc.process.renew
 * Class AscProcessRenew
 * @package Jd\request
 */
class AscProcessRenew
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.asc.process.renew";
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
     * 商家编号
     * Required: true
     * Example Value: 
     */
    private $buId;

    /**
     * @param string $buId
     * 商家编号
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
     * Required: true
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
     * @param string $consigneeTel
     * 收货人联系电话
     * Required: true
     * Example Value: 
     */
    private $consigneeTel;

    /**
     * @param string $consigneeTel
     * 收货人联系电话
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
     * @param string $applyDescription
     * 申请说明
     * Required: true
     * Example Value: 
     */
    private $applyDescription;

    /**
     * @param string $applyDescription
     * 申请说明
     * Example Value: 
     */
    public function setApplyDescription($applyDescription)
    {
        $this->applyDescription             = $applyDescription;
        $this->apiParas["applyDescription"]  = $applyDescription;
    }

    public function getApplyDescription()
    {
        return $this->applyDescription;
    }

    /**
     * @param int $deliveryCenterId
     * 配送中心ID
     * Required: true
     * Example Value: 
     */
    private $deliveryCenterId;

    /**
     * @param int $deliveryCenterId
     * 配送中心ID
     * Example Value: 
     */
    public function setDeliveryCenterId($deliveryCenterId)
    {
        $this->deliveryCenterId             = $deliveryCenterId;
        $this->apiParas["deliveryCenterId"]  = $deliveryCenterId;
    }

    public function getDeliveryCenterId()
    {
        return $this->deliveryCenterId;
    }

    /**
     * @param string $deliveryCenterName
     * 配送中心名字
     * Required: true
     * Example Value: 
     */
    private $deliveryCenterName;

    /**
     * @param string $deliveryCenterName
     * 配送中心名字
     * Example Value: 
     */
    public function setDeliveryCenterName($deliveryCenterName)
    {
        $this->deliveryCenterName             = $deliveryCenterName;
        $this->apiParas["deliveryCenterName"]  = $deliveryCenterName;
    }

    public function getDeliveryCenterName()
    {
        return $this->deliveryCenterName;
    }

    /**
     * @param int $storeId
     * 库房ID
     * Required: true
     * Example Value: 
     */
    private $storeId;

    /**
     * @param int $storeId
     * 库房ID
     * Example Value: 
     */
    public function setStoreId($storeId)
    {
        $this->storeId             = $storeId;
        $this->apiParas["storeId"]  = $storeId;
    }

    public function getStoreId()
    {
        return $this->storeId;
    }

    /**
     * @param bool $collectFreightFlag
     * 是否收取运费
     * Required: true
     * Example Value: 
     */
    private $collectFreightFlag;

    /**
     * @param bool $collectFreightFlag
     * 是否收取运费
     * Example Value: 
     */
    public function setCollectFreightFlag($collectFreightFlag)
    {
        $this->collectFreightFlag             = $collectFreightFlag;
        $this->apiParas["collectFreightFlag"]  = $collectFreightFlag;
    }

    public function getCollectFreightFlag()
    {
        return $this->collectFreightFlag;
    }

    /**
     * @param string $freightAmount
     * 运费金额
     * Required: false
     * Example Value: 
     */
    private $freightAmount;

    /**
     * @param string $freightAmount
     * 运费金额
     * Example Value: 
     */
    public function setFreightAmount($freightAmount)
    {
        $this->freightAmount             = $freightAmount;
        $this->apiParas["freightAmount"]  = $freightAmount;
    }

    public function getFreightAmount()
    {
        return $this->freightAmount;
    }

    /**
     * @param int[] $skuId
     * 商品编号（数组，与名称、数量、关联商品编号，关联商品类型一一对应）
     * Required: false
     * Example Value: 
     */
    private $skuId;

    /**
     * @param int[] $skuId
     * 商品编号（数组，与名称、数量、关联商品编号，关联商品类型一一对应）
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
     * @param string[] $wareName
     * 商品名称（数组，与编号、数量、关联商品编号，关联商品类型一一对应）
     * Required: false
     * Example Value: 
     */
    private $wareName;

    /**
     * @param string[] $wareName
     * 商品名称（数组，与编号、数量、关联商品编号，关联商品类型一一对应）
     * Example Value: 
     */
    public function setWareName($wareName)
    {
        $this->wareName             = $wareName;
        $this->apiParas["wareName"]  = $wareName;
    }

    public function getWareName()
    {
        return $this->wareName;
    }

    /**
     * @param int[] $wareNum
     * 商品数量（数组，与编号、名称、关联商品编号，关联商品类型一一对应）
     * Required: false
     * Example Value: 
     */
    private $wareNum;

    /**
     * @param int[] $wareNum
     * 商品数量（数组，与编号、名称、关联商品编号，关联商品类型一一对应）
     * Example Value: 
     */
    public function setWareNum($wareNum)
    {
        $this->wareNum             = $wareNum;
        $this->apiParas["wareNum"]  = $wareNum;
    }

    public function getWareNum()
    {
        return $this->wareNum;
    }

    /**
     * @param int[] $relationSkuId
     * 关联商品编号（数组，与编号、名称、数量、关联商品类型一一对应）
     * Required: false
     * Example Value: 
     */
    private $relationSkuId;

    /**
     * @param int[] $relationSkuId
     * 关联商品编号（数组，与编号、名称、数量、关联商品类型一一对应）
     * Example Value: 
     */
    public function setRelationSkuId($relationSkuId)
    {
        $this->relationSkuId             = $relationSkuId;
        $this->apiParas["relationSkuId"]  = $relationSkuId;
    }

    public function getRelationSkuId()
    {
        return $this->relationSkuId;
    }

    /**
     * @param int[] $relationWareType
     * 关联商品类型（数组，与编号、名称、数量、关联商品编号一一对应）
     * Required: false
     * Example Value: 
     */
    private $relationWareType;

    /**
     * @param int[] $relationWareType
     * 关联商品类型（数组，与编号、名称、数量、关联商品编号一一对应）
     * Example Value: 
     */
    public function setRelationWareType($relationWareType)
    {
        $this->relationWareType             = $relationWareType;
        $this->apiParas["relationWareType"]  = $relationWareType;
    }

    public function getRelationWareType()
    {
        return $this->relationWareType;
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