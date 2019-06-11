<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 发送供应商预先发货清单
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=2979&apiName=jingdong.edi.asn.send
 * Class EdiAsnSend
 * @package Jd\request
 */
class EdiAsnSend
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.edi.asn.send";
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
     * @param string $deliveryCenterCode
     * 配送中心编码
     * Required: false
     * Example Value: 
     */
    private $deliveryCenterCode;

    /**
     * @param string $deliveryCenterCode
     * 配送中心编码
     * Example Value: 
     */
    public function setDeliveryCenterCode($deliveryCenterCode)
    {
        $this->deliveryCenterCode             = $deliveryCenterCode;
        $this->apiParas["deliveryCenterCode"]  = $deliveryCenterCode;
    }

    public function getDeliveryCenterCode()
    {
        return $this->deliveryCenterCode;
    }

    /**
     * @param string $deliveryCenterName
     * 配送中心名称
     * Required: false
     * Example Value: 
     */
    private $deliveryCenterName;

    /**
     * @param string $deliveryCenterName
     * 配送中心名称
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
     * @param string $warehouseCode
     * 仓库编码
     * Required: false
     * Example Value: 
     */
    private $warehouseCode;

    /**
     * @param string $warehouseCode
     * 仓库编码
     * Example Value: 
     */
    public function setWarehouseCode($warehouseCode)
    {
        $this->warehouseCode             = $warehouseCode;
        $this->apiParas["warehouseCode"]  = $warehouseCode;
    }

    public function getWarehouseCode()
    {
        return $this->warehouseCode;
    }

    /**
     * @param string $warehouseName
     * 仓库名称
     * Required: false
     * Example Value: 
     */
    private $warehouseName;

    /**
     * @param string $warehouseName
     * 仓库名称
     * Example Value: 
     */
    public function setWarehouseName($warehouseName)
    {
        $this->warehouseName             = $warehouseName;
        $this->apiParas["warehouseName"]  = $warehouseName;
    }

    public function getWarehouseName()
    {
        return $this->warehouseName;
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
     * @param string $vendorShipmentCode
     * 供应商发货单号
     * Required: true
     * Example Value: 
     */
    private $vendorShipmentCode;

    /**
     * @param string $vendorShipmentCode
     * 供应商发货单号
     * Example Value: 
     */
    public function setVendorShipmentCode($vendorShipmentCode)
    {
        $this->vendorShipmentCode             = $vendorShipmentCode;
        $this->apiParas["vendorShipmentCode"]  = $vendorShipmentCode;
    }

    public function getVendorShipmentCode()
    {
        return $this->vendorShipmentCode;
    }

    /**
     * @param string $jdShipmentCode
     * 京东发货单号
     * Required: false
     * Example Value: 
     */
    private $jdShipmentCode;

    /**
     * @param string $jdShipmentCode
     * 京东发货单号
     * Example Value: 
     */
    public function setJdShipmentCode($jdShipmentCode)
    {
        $this->jdShipmentCode             = $jdShipmentCode;
        $this->apiParas["jdShipmentCode"]  = $jdShipmentCode;
    }

    public function getJdShipmentCode()
    {
        return $this->jdShipmentCode;
    }

    /**
     * @param int $deleted
     * 是否删除
     * Required: true
     * Example Value: 
     */
    private $deleted;

    /**
     * @param int $deleted
     * 是否删除
     * Example Value: 
     */
    public function setDeleted($deleted)
    {
        $this->deleted             = $deleted;
        $this->apiParas["deleted"]  = $deleted;
    }

    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * @param string $supposedShipmentTime
     * 预计发货时间
     * Required: false
     * Example Value: 
     */
    private $supposedShipmentTime;

    /**
     * @param string $supposedShipmentTime
     * 预计发货时间
     * Example Value: 
     */
    public function setSupposedShipmentTime($supposedShipmentTime)
    {
        $this->supposedShipmentTime             = $supposedShipmentTime;
        $this->apiParas["supposedShipmentTime"]  = $supposedShipmentTime;
    }

    public function getSupposedShipmentTime()
    {
        return $this->supposedShipmentTime;
    }

    /**
     * @param string $supposedArrivedTime
     * 预计到货时间
     * Required: false
     * Example Value: 
     */
    private $supposedArrivedTime;

    /**
     * @param string $supposedArrivedTime
     * 预计到货时间
     * Example Value: 
     */
    public function setSupposedArrivedTime($supposedArrivedTime)
    {
        $this->supposedArrivedTime             = $supposedArrivedTime;
        $this->apiParas["supposedArrivedTime"]  = $supposedArrivedTime;
    }

    public function getSupposedArrivedTime()
    {
        return $this->supposedArrivedTime;
    }

    /**
     * @param string $vendorCode
     * 供应商简码
     * Required: false
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
     * @param string[] $jdSku
     * 京东 SKU
     * Required: true
     * Example Value: 
     */
    private $jdSku;

    /**
     * @param string[] $jdSku
     * 京东 SKU
     * Example Value: 
     */
    public function setJdSku($jdSku)
    {
        $this->jdSku             = $jdSku;
        $this->apiParas["jdSku"]  = $jdSku;
    }

    public function getJdSku()
    {
        return $this->jdSku;
    }

    /**
     * @param string[] $vendorProductId
     * 供应商商品编码
     * Required: false
     * Example Value: 
     */
    private $vendorProductId;

    /**
     * @param string[] $vendorProductId
     * 供应商商品编码
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

    /**
     * @param string[] $productName
     * 商品名称
     * Required: false
     * Example Value: 
     */
    private $productName;

    /**
     * @param string[] $productName
     * 商品名称
     * Example Value: 
     */
    public function setProductName($productName)
    {
        $this->productName             = $productName;
        $this->apiParas["productName"]  = $productName;
    }

    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @param int[] $quantity
     * 数量
     * Required: true
     * Example Value: 
     */
    private $quantity;

    /**
     * @param int[] $quantity
     * 数量
     * Example Value: 
     */
    public function setQuantity($quantity)
    {
        $this->quantity             = $quantity;
        $this->apiParas["quantity"]  = $quantity;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

}