<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 采购单出库
 * B2B开放API-B2B开放
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=391&apiId=3091&apiName=jingdong.b2b.gxpt.purchaseOrderErpService.deliveryPurchaseOrder
 * Class B2bGxptPurchaseOrderErpServiceDeliveryPurchaseOrder
 * @package Jd\request
 */
class B2bGxptPurchaseOrderErpServiceDeliveryPurchaseOrder
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.b2b.gxpt.purchaseOrderErpService.deliveryPurchaseOrder";
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
     * @param int $shipmentId
     * 配送公司id
     * Required: true
     * Example Value: 
     */
    private $shipmentId;

    /**
     * @param int $shipmentId
     * 配送公司id
     * Example Value: 
     */
    public function setShipmentId($shipmentId)
    {
        $this->shipmentId             = $shipmentId;
        $this->apiParas["shipmentId"]  = $shipmentId;
    }

    public function getShipmentId()
    {
        return $this->shipmentId;
    }

    /**
     * @param int $venderId
     * 商家id
     * Required: true
     * Example Value: 
     */
    private $venderId;

    /**
     * @param int $venderId
     * 商家id
     * Example Value: 
     */
    public function setVenderId($venderId)
    {
        $this->venderId             = $venderId;
        $this->apiParas["venderId"]  = $venderId;
    }

    public function getVenderId()
    {
        return $this->venderId;
    }

    /**
     * @param string $shipmentNo
     * 运单号
     * Required: true
     * Example Value: 
     */
    private $shipmentNo;

    /**
     * @param string $shipmentNo
     * 运单号
     * Example Value: 
     */
    public function setShipmentNo($shipmentNo)
    {
        $this->shipmentNo             = $shipmentNo;
        $this->apiParas["shipmentNo"]  = $shipmentNo;
    }

    public function getShipmentNo()
    {
        return $this->shipmentNo;
    }

    /**
     * @param int $erpOrderId
     * 订单id
     * Required: true
     * Example Value: 
     */
    private $erpOrderId;

    /**
     * @param int $erpOrderId
     * 订单id
     * Example Value: 
     */
    public function setErpOrderId($erpOrderId)
    {
        $this->erpOrderId             = $erpOrderId;
        $this->apiParas["erpOrderId"]  = $erpOrderId;
    }

    public function getErpOrderId()
    {
        return $this->erpOrderId;
    }

    /**
     * @param string $shipmentName
     * 配送公司名称
     * Required: true
     * Example Value: 
     */
    private $shipmentName;

    /**
     * @param string $shipmentName
     * 配送公司名称
     * Example Value: 
     */
    public function setShipmentName($shipmentName)
    {
        $this->shipmentName             = $shipmentName;
        $this->apiParas["shipmentName"]  = $shipmentName;
    }

    public function getShipmentName()
    {
        return $this->shipmentName;
    }

    /**
     * @param string $distributionMode
     * 配送方式
     * Required: false
     * Example Value: 
     */
    private $distributionMode;

    /**
     * @param string $distributionMode
     * 配送方式
     * Example Value: 
     */
    public function setDistributionMode($distributionMode)
    {
        $this->distributionMode             = $distributionMode;
        $this->apiParas["distributionMode"]  = $distributionMode;
    }

    public function getDistributionMode()
    {
        return $this->distributionMode;
    }

}