<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 创建线下换新处理
 * 商家售后服务开放API-商家售后服务开放
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=241&apiId=2127&apiName=jingdong.asc.process.offline.change
 * Class AscProcessOfflineChange
 * @package Jd\request
 */
class AscProcessOfflineChange
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.asc.process.offline.change";
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
     * @param int $opFlag
     * 操作类型
     * Required: true
     * Example Value: 
     */
    private $opFlag;

    /**
     * @param int $opFlag
     * 操作类型
     * Example Value: 
     */
    public function setOpFlag($opFlag)
    {
        $this->opFlag             = $opFlag;
        $this->apiParas["opFlag"]  = $opFlag;
    }

    public function getOpFlag()
    {
        return $this->opFlag;
    }

    /**
     * @param int $partExpressId
     * 运单Id
     * Required: false
     * Example Value: 
     */
    private $partExpressId;

    /**
     * @param int $partExpressId
     * 运单Id
     * Example Value: 
     */
    public function setPartExpressId($partExpressId)
    {
        $this->partExpressId             = $partExpressId;
        $this->apiParas["partExpressId"]  = $partExpressId;
    }

    public function getPartExpressId()
    {
        return $this->partExpressId;
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
     * 承运商名称
     * Required: true
     * Example Value: 
     */
    private $shipWayName;

    /**
     * @param string $shipWayName
     * 承运商名称
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
     * 货运单号
     * Required: true
     * Example Value: 
     */
    private $expressCode;

    /**
     * @param string $expressCode
     * 货运单号
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
     * @param string $relationBillId
     * 关联单号
     * Required: false
     * Example Value: 
     */
    private $relationBillId;

    /**
     * @param string $relationBillId
     * 关联单号
     * Example Value: 
     */
    public function setRelationBillId($relationBillId)
    {
        $this->relationBillId             = $relationBillId;
        $this->apiParas["relationBillId"]  = $relationBillId;
    }

    public function getRelationBillId()
    {
        return $this->relationBillId;
    }

    /**
     * @param string $wareType
     * 商品类型
     * Required: true
     * Example Value: 
     */
    private $wareType;

    /**
     * @param string $wareType
     * 商品类型
     * Example Value: 
     */
    public function setWareType($wareType)
    {
        $this->wareType             = $wareType;
        $this->apiParas["wareType"]  = $wareType;
    }

    public function getWareType()
    {
        return $this->wareType;
    }

    /**
     * @param int $partSrc
     * 来源
     * Required: false
     * Example Value: 
     */
    private $partSrc;

    /**
     * @param int $partSrc
     * 来源
     * Example Value: 
     */
    public function setPartSrc($partSrc)
    {
        $this->partSrc             = $partSrc;
        $this->apiParas["partSrc"]  = $partSrc;
    }

    public function getPartSrc()
    {
        return $this->partSrc;
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