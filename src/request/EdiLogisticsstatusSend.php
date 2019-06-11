<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 发送物流状态数据
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=2978&apiName=jingdong.edi.logisticsstatus.send
 * Class EdiLogisticsstatusSend
 * @package Jd\request
 */
class EdiLogisticsstatusSend
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.edi.logisticsstatus.send";
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
     * @param string $vendorName
     * 供应商名称
     * Required: false
     * Example Value: 
     */
    private $vendorName;

    /**
     * @param string $vendorName
     * 供应商名称
     * Example Value: 
     */
    public function setVendorName($vendorName)
    {
        $this->vendorName             = $vendorName;
        $this->apiParas["vendorName"]  = $vendorName;
    }

    public function getVendorName()
    {
        return $this->vendorName;
    }

    /**
     * @param string $vendorCode
     * 供应商编码
     * Required: true
     * Example Value: 
     */
    private $vendorCode;

    /**
     * @param string $vendorCode
     * 供应商编码
     * Example Value: 
     */
    public function setVendorCode($vendorCode)
    {
        $this->vendorCode             = $vendorCode;
        $this->apiParas["vendorCode"]  = $vendorCode;
    }

    public function getVendorCode()
    {
        return $this->vendorCode;
    }

    /**
     * @param int[] $orderType
     * 单据类型：1，采购单；2，ASN单
     * Required: true
     * Example Value: 
     */
    private $orderType;

    /**
     * @param int[] $orderType
     * 单据类型：1，采购单；2，ASN单
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
     * @param string[] $asnCode
     * 京东ASN单号
     * Required: false
     * Example Value: 
     */
    private $asnCode;

    /**
     * @param string[] $asnCode
     * 京东ASN单号
     * Example Value: 
     */
    public function setAsnCode($asnCode)
    {
        $this->asnCode             = $asnCode;
        $this->apiParas["asnCode"]  = $asnCode;
    }

    public function getAsnCode()
    {
        return $this->asnCode;
    }

    /**
     * @param string[] $purchaseOrderCode
     * 采购单号
     * Required: false
     * Example Value: 
     */
    private $purchaseOrderCode;

    /**
     * @param string[] $purchaseOrderCode
     * 采购单号
     * Example Value: 
     */
    public function setPurchaseOrderCode($purchaseOrderCode)
    {
        $this->purchaseOrderCode             = $purchaseOrderCode;
        $this->apiParas["purchaseOrderCode"]  = $purchaseOrderCode;
    }

    public function getPurchaseOrderCode()
    {
        return $this->purchaseOrderCode;
    }

    /**
     * @param string[] $supposedArrivedDate
     * 预计到货时间
     * Required: false
     * Example Value: 
     */
    private $supposedArrivedDate;

    /**
     * @param string[] $supposedArrivedDate
     * 预计到货时间
     * Example Value: 
     */
    public function setSupposedArrivedDate($supposedArrivedDate)
    {
        $this->supposedArrivedDate             = $supposedArrivedDate;
        $this->apiParas["supposedArrivedDate"]  = $supposedArrivedDate;
    }

    public function getSupposedArrivedDate()
    {
        return $this->supposedArrivedDate;
    }

    /**
     * @param string[] $eventCode
     * 事件ID
     * Required: false
     * Example Value: 
     */
    private $eventCode;

    /**
     * @param string[] $eventCode
     * 事件ID
     * Example Value: 
     */
    public function setEventCode($eventCode)
    {
        $this->eventCode             = $eventCode;
        $this->apiParas["eventCode"]  = $eventCode;
    }

    public function getEventCode()
    {
        return $this->eventCode;
    }

    /**
     * @param string[] $eventTime
     * 事件时间
     * Required: true
     * Example Value: 
     */
    private $eventTime;

    /**
     * @param string[] $eventTime
     * 事件时间
     * Example Value: 
     */
    public function setEventTime($eventTime)
    {
        $this->eventTime             = $eventTime;
        $this->apiParas["eventTime"]  = $eventTime;
    }

    public function getEventTime()
    {
        return $this->eventTime;
    }

    /**
     * @param string[] $eventLocation
     * 事件地点
     * Required: false
     * Example Value: 
     */
    private $eventLocation;

    /**
     * @param string[] $eventLocation
     * 事件地点
     * Example Value: 
     */
    public function setEventLocation($eventLocation)
    {
        $this->eventLocation             = $eventLocation;
        $this->apiParas["eventLocation"]  = $eventLocation;
    }

    public function getEventLocation()
    {
        return $this->eventLocation;
    }

    /**
     * @param string[] $eventNameCn
     * 事件中文名称
     * Required: true
     * Example Value: 
     */
    private $eventNameCn;

    /**
     * @param string[] $eventNameCn
     * 事件中文名称
     * Example Value: 
     */
    public function setEventNameCn($eventNameCn)
    {
        $this->eventNameCn             = $eventNameCn;
        $this->apiParas["eventNameCn"]  = $eventNameCn;
    }

    public function getEventNameCn()
    {
        return $this->eventNameCn;
    }

    /**
     * @param string[] $eventNameEn
     * 事件英文名称
     * Required: false
     * Example Value: 
     */
    private $eventNameEn;

    /**
     * @param string[] $eventNameEn
     * 事件英文名称
     * Example Value: 
     */
    public function setEventNameEn($eventNameEn)
    {
        $this->eventNameEn             = $eventNameEn;
        $this->apiParas["eventNameEn"]  = $eventNameEn;
    }

    public function getEventNameEn()
    {
        return $this->eventNameEn;
    }

    /**
     * @param string[] $nextEventCode
     * 下一事件ID
     * Required: false
     * Example Value: 
     */
    private $nextEventCode;

    /**
     * @param string[] $nextEventCode
     * 下一事件ID
     * Example Value: 
     */
    public function setNextEventCode($nextEventCode)
    {
        $this->nextEventCode             = $nextEventCode;
        $this->apiParas["nextEventCode"]  = $nextEventCode;
    }

    public function getNextEventCode()
    {
        return $this->nextEventCode;
    }

    /**
     * @param string[] $nextEventTime
     * 下一事件时间
     * Required: false
     * Example Value: 
     */
    private $nextEventTime;

    /**
     * @param string[] $nextEventTime
     * 下一事件时间
     * Example Value: 
     */
    public function setNextEventTime($nextEventTime)
    {
        $this->nextEventTime             = $nextEventTime;
        $this->apiParas["nextEventTime"]  = $nextEventTime;
    }

    public function getNextEventTime()
    {
        return $this->nextEventTime;
    }

    /**
     * @param string[] $nextEventLocation
     * 下一事件地点
     * Required: false
     * Example Value: 
     */
    private $nextEventLocation;

    /**
     * @param string[] $nextEventLocation
     * 下一事件地点
     * Example Value: 
     */
    public function setNextEventLocation($nextEventLocation)
    {
        $this->nextEventLocation             = $nextEventLocation;
        $this->apiParas["nextEventLocation"]  = $nextEventLocation;
    }

    public function getNextEventLocation()
    {
        return $this->nextEventLocation;
    }

    /**
     * @param string[] $nextEventNameCn
     * 下一事件中文名称
     * Required: false
     * Example Value: 
     */
    private $nextEventNameCn;

    /**
     * @param string[] $nextEventNameCn
     * 下一事件中文名称
     * Example Value: 
     */
    public function setNextEventNameCn($nextEventNameCn)
    {
        $this->nextEventNameCn             = $nextEventNameCn;
        $this->apiParas["nextEventNameCn"]  = $nextEventNameCn;
    }

    public function getNextEventNameCn()
    {
        return $this->nextEventNameCn;
    }

    /**
     * @param string[] $nextEventNameEn
     * 下一事件英文名称
     * Required: false
     * Example Value: 
     */
    private $nextEventNameEn;

    /**
     * @param string[] $nextEventNameEn
     * 下一事件英文名称
     * Example Value: 
     */
    public function setNextEventNameEn($nextEventNameEn)
    {
        $this->nextEventNameEn             = $nextEventNameEn;
        $this->apiParas["nextEventNameEn"]  = $nextEventNameEn;
    }

    public function getNextEventNameEn()
    {
        return $this->nextEventNameEn;
    }

}