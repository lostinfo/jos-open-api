<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 发送序列码
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1990&apiName=jingdong.edi.ss.send
 * Class EdiSsSend
 * @package Jd\request
 */
class EdiSsSend
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.edi.ss.send";
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
     * @param string $purchaseOrderCode
     * 采购单号
     * Required: true
     * Example Value: 
     */
    private $purchaseOrderCode;

    /**
     * @param string $purchaseOrderCode
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
     * @param string $vendorCode
     * 供应商简码
     * Required: true
     * Example Value: 
     */
    private $vendorCode;

    /**
     * @param string $vendorCode
     * 供应商简码
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
     * @param string[] $shipmentNumber
     * 发货单号
     * Required: true
     * Example Value: 
     */
    private $shipmentNumber;

    /**
     * @param string[] $shipmentNumber
     * 发货单号
     * Example Value: 
     */
    public function setShipmentNumber($shipmentNumber)
    {
        $this->shipmentNumber             = $shipmentNumber;
        $this->apiParas["shipmentNumber"]  = $shipmentNumber;
    }

    public function getShipmentNumber()
    {
        return $this->shipmentNumber;
    }

    /**
     * @param string[] $serialNumber
     * 序列号
     * Required: true
     * Example Value: 
     */
    private $serialNumber;

    /**
     * @param string[] $serialNumber
     * 序列号
     * Example Value: 
     */
    public function setSerialNumber($serialNumber)
    {
        $this->serialNumber             = $serialNumber;
        $this->apiParas["serialNumber"]  = $serialNumber;
    }

    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    /**
     * @param string[] $sku
     * 京东SKU
     * Required: true
     * Example Value: 
     */
    private $sku;

    /**
     * @param string[] $sku
     * 京东SKU
     * Example Value: 
     */
    public function setSku($sku)
    {
        $this->sku             = $sku;
        $this->apiParas["sku"]  = $sku;
    }

    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param string[] $vendorProductId
     * 供应商商品ID
     * Required: true
     * Example Value: 
     */
    private $vendorProductId;

    /**
     * @param string[] $vendorProductId
     * 供应商商品ID
     * Example Value: 
     */
    public function setVendorProductId($vendorProductId)
    {
        $this->vendorProductId             = $vendorProductId;
        $this->apiParas["vendorProductId"]  = $vendorProductId;
    }

    public function getVendorProductId()
    {
        return $this->vendorProductId;
    }

}