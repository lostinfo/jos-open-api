<?php

namespace JD\request;

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
     * @param String $vendorName
     * 供应商名称
     * Required: false
     * Example Value: 
     */
    private $vendorName;

    /**
     * @param String $vendorName
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
     * @param String $vendorCode
     * 供应商编码
     * Required: true
     * Example Value: 
     */
    private $vendorCode;

    /**
     * @param String $vendorCode
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
     * @param Number[] $orderType
     * 单据类型：1，采购单；2，ASN单
     * Required: true
     * Example Value: 
     */
    private $orderType;

    /**
     * @param Number[] $orderType
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
     * @param String[] $asnCode
     * 京东ASN单号
     * Required: false
     * Example Value: 
     */
    private $asnCode;

    /**
     * @param String[] $asnCode
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
     * @param String[] $purchaseOrderCode
     * 采购单号
     * Required: false
     * Example Value: 
     */
    private $purchaseOrderCode;

    /**
     * @param String[] $purchaseOrderCode
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
     * @param Date[] $supposedArrivedDate
     * 预计到货时间
     * Required: false
     * Example Value: 
     */
    private $supposedArrivedDate;

    /**
     * @param Date[] $supposedArrivedDate
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
     * @param String[] $eventCode
     * 事件ID
     * Required: false
     * Example Value: 
     */
    private $eventCode;

    /**
     * @param String[] $eventCode
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
     * @param Date[] $eventTime
     * 事件时间
     * Required: true
     * Example Value: 
     */
    private $eventTime;

    /**
     * @param Date[] $eventTime
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
     * @param String[] $eventLocation
     * 事件地点
     * Required: false
     * Example Value: 
     */
    private $eventLocation;

    /**
     * @param String[] $eventLocation
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
     * @param String[] $eventNameCn
     * 事件中文名称
     * Required: true
     * Example Value: 
     */
    private $eventNameCn;

    /**
     * @param String[] $eventNameCn
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
     * @param String[] $eventNameEn
     * 事件英文名称
     * Required: false
     * Example Value: 
     */
    private $eventNameEn;

    /**
     * @param String[] $eventNameEn
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
     * @param String[] $nextEventCode
     * 下一事件ID
     * Required: false
     * Example Value: 
     */
    private $nextEventCode;

    /**
     * @param String[] $nextEventCode
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
     * @param Date[] $nextEventTime
     * 下一事件时间
     * Required: false
     * Example Value: 
     */
    private $nextEventTime;

    /**
     * @param Date[] $nextEventTime
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
     * @param String[] $nextEventLocation
     * 下一事件地点
     * Required: false
     * Example Value: 
     */
    private $nextEventLocation;

    /**
     * @param String[] $nextEventLocation
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
     * @param String[] $nextEventNameCn
     * 下一事件中文名称
     * Required: false
     * Example Value: 
     */
    private $nextEventNameCn;

    /**
     * @param String[] $nextEventNameCn
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
     * @param String[] $nextEventNameEn
     * 下一事件英文名称
     * Required: false
     * Example Value: 
     */
    private $nextEventNameEn;

    /**
     * @param String[] $nextEventNameEn
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