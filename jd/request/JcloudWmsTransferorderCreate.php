<?php

namespace JD\request;

/**
 * 调拨入库单下传
 * 物流云-WMS-API-物流云仓储
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=192&apiId=1616&apiName=jingdong.jcloud.wms.transferorder.create
 * Class JcloudWmsTransferorderCreate
 * @package Jd\request
 */
class JcloudWmsTransferorderCreate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.jcloud.wms.transferorder.create";
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
     * @param String $receiptNo
     * 入库单号
     * Required: true
     * Example Value: 
     */
    private $receiptNo;

    /**
     * @param String $receiptNo
     * 入库单号
     * Example Value: 
     */
    public function setReceiptNo($receiptNo)
    {
        $this->receiptNo             = $receiptNo;
        $this->apiParas["receiptNo"]  = $receiptNo;
    }

    public function getReceiptNo()
    {
        return $this->receiptNo;
    }

    /**
     * @param String $ownerNo
     * 货主编号
     * Required: true
     * Example Value: 
     */
    private $ownerNo;

    /**
     * @param String $ownerNo
     * 货主编号
     * Example Value: 
     */
    public function setOwnerNo($ownerNo)
    {
        $this->ownerNo             = $ownerNo;
        $this->apiParas["ownerNo"]  = $ownerNo;
    }

    public function getOwnerNo()
    {
        return $this->ownerNo;
    }

    /**
     * @param String $billType
     * 入库单类型
     * Required: true
     * Example Value: 
     */
    private $billType;

    /**
     * @param String $billType
     * 入库单类型
     * Example Value: 
     */
    public function setBillType($billType)
    {
        $this->billType             = $billType;
        $this->apiParas["billType"]  = $billType;
    }

    public function getBillType()
    {
        return $this->billType;
    }

    /**
     * @param String $warehouseNo
     * 库房号
     * Required: true
     * Example Value: 
     */
    private $warehouseNo;

    /**
     * @param String $warehouseNo
     * 库房号
     * Example Value: 
     */
    public function setWarehouseNo($warehouseNo)
    {
        $this->warehouseNo             = $warehouseNo;
        $this->apiParas["warehouseNo"]  = $warehouseNo;
    }

    public function getWarehouseNo()
    {
        return $this->warehouseNo;
    }

    /**
     * @param String $tenantId
     * 租户id
     * Required: true
     * Example Value: 
     */
    private $tenantId;

    /**
     * @param String $tenantId
     * 租户id
     * Example Value: 
     */
    public function setTenantId($tenantId)
    {
        $this->tenantId             = $tenantId;
        $this->apiParas["tenantId"]  = $tenantId;
    }

    public function getTenantId()
    {
        return $this->tenantId;
    }

    /**
     * @param String $sourceWarehouseNo
     * 来源仓库号
     * Required: false
     * Example Value: 
     */
    private $sourceWarehouseNo;

    /**
     * @param String $sourceWarehouseNo
     * 来源仓库号
     * Example Value: 
     */
    public function setSourceWarehouseNo($sourceWarehouseNo)
    {
        $this->sourceWarehouseNo             = $sourceWarehouseNo;
        $this->apiParas["sourceWarehouseNo"]  = $sourceWarehouseNo;
    }

    public function getSourceWarehouseNo()
    {
        return $this->sourceWarehouseNo;
    }

    /**
     * @param String[] $skuNo
     * 商品编码
     * Required: true
     * Example Value: 
     */
    private $skuNo;

    /**
     * @param String[] $skuNo
     * 商品编码
     * Example Value: 
     */
    public function setSkuNo($skuNo)
    {
        $this->skuNo             = $skuNo;
        $this->apiParas["skuNo"]  = $skuNo;
    }

    public function getSkuNo()
    {
        return $this->skuNo;
    }

    /**
     * @param String[] $skuName
     * 商品名称
     * Required: true
     * Example Value: 
     */
    private $skuName;

    /**
     * @param String[] $skuName
     * 商品名称
     * Example Value: 
     */
    public function setSkuName($skuName)
    {
        $this->skuName             = $skuName;
        $this->apiParas["skuName"]  = $skuName;
    }

    public function getSkuName()
    {
        return $this->skuName;
    }

    /**
     * @param Number[] $expectedQty
     * 调拨数量
     * Required: true
     * Example Value: 
     */
    private $expectedQty;

    /**
     * @param Number[] $expectedQty
     * 调拨数量
     * Example Value: 
     */
    public function setExpectedQty($expectedQty)
    {
        $this->expectedQty             = $expectedQty;
        $this->apiParas["expectedQty"]  = $expectedQty;
    }

    public function getExpectedQty()
    {
        return $this->expectedQty;
    }

}