<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 保存运单
 * 商家售后服务开放API-商家售后服务开放
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=241&apiId=2109&apiName=jingdong.asc.freight.save
 * Class AscFreightSave
 * @package Jd\request
 */
class AscFreightSave
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.asc.freight.save";
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
     * 商家ID（最长50）
     * Required: true
     * Example Value: 
     */
    private $buId;

    /**
     * @param string $buId
     * 商家ID（最长50）
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
     * 操作人账号（最长50）
     * Required: true
     * Example Value: 
     */
    private $operatePin;

    /**
     * @param string $operatePin
     * 操作人账号（最长50）
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
     * 操作人姓名（最长50）
     * Required: true
     * Example Value: 
     */
    private $operateNick;

    /**
     * @param string $operateNick
     * 操作人姓名（最长50）
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
     * @param string $expressCode
     * 快递单号
     * Required: false
     * Example Value: 
     */
    private $expressCode;

    /**
     * @param string $expressCode
     * 快递单号
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
     * @param string $expressCompany
     * 快递公司
     * Required: false
     * Example Value: 
     */
    private $expressCompany;

    /**
     * @param string $expressCompany
     * 快递公司
     * Example Value: 
     */
    public function setExpressCompany($expressCompany)
    {
        $this->expressCompany             = $expressCompany;
        $this->apiParas["expressCompany"]  = $expressCompany;
    }

    public function getExpressCompany()
    {
        return $this->expressCompany;
    }

    /**
     * @param int $freightMoney
     * 运费金额
     * Required: true
     * Example Value: 
     */
    private $freightMoney;

    /**
     * @param int $freightMoney
     * 运费金额
     * Example Value: 
     */
    public function setFreightMoney($freightMoney)
    {
        $this->freightMoney             = $freightMoney;
        $this->apiParas["freightMoney"]  = $freightMoney;
    }

    public function getFreightMoney()
    {
        return $this->freightMoney;
    }

    /**
     * @param int $shipWayId
     * 承运商编号
     * Required: false
     * Example Value: 
     */
    private $shipWayId;

    /**
     * @param int $shipWayId
     * 承运商编号
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
     * @param string $extJsonStr
     * 扩展条件（JSON格式）
     * Required: false
     * Example Value: 
     */
    private $extJsonStr;

    /**
     * @param string $extJsonStr
     * 扩展条件（JSON格式）
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