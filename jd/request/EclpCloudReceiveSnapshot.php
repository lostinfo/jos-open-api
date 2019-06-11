<?php

namespace JD\request;

/**
 * ISV库存快照下传
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=1802&apiName=jingdong.eclp.cloud.receiveSnapshot
 * Class EclpCloudReceiveSnapshot
 * @package Jd\request
 */
class EclpCloudReceiveSnapshot
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.cloud.receiveSnapshot";
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
     * @param String[] $ownerNo
     * 货主编号
     * Required: true
     * Example Value: 
     */
    private $ownerNo;

    /**
     * @param String[] $ownerNo
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
     * @param Number[] $erpQty
     * Erp库存数
     * Required: true
     * Example Value: 
     */
    private $erpQty;

    /**
     * @param Number[] $erpQty
     * Erp库存数
     * Example Value: 
     */
    public function setErpQty($erpQty)
    {
        $this->erpQty             = $erpQty;
        $this->apiParas["erpQty"]  = $erpQty;
    }

    public function getErpQty()
    {
        return $this->erpQty;
    }

    /**
     * @param Number[] $erpWmsQty
     * Wms库存数
     * Required: false
     * Example Value: 
     */
    private $erpWmsQty;

    /**
     * @param Number[] $erpWmsQty
     * Wms库存数
     * Example Value: 
     */
    public function setErpWmsQty($erpWmsQty)
    {
        $this->erpWmsQty             = $erpWmsQty;
        $this->apiParas["erpWmsQty"]  = $erpWmsQty;
    }

    public function getErpWmsQty()
    {
        return $this->erpWmsQty;
    }

    /**
     * @param Number[] $erpNotlessQty
     * Erp未过账的出库数
     * Required: false
     * Example Value: 
     */
    private $erpNotlessQty;

    /**
     * @param Number[] $erpNotlessQty
     * Erp未过账的出库数
     * Example Value: 
     */
    public function setErpNotlessQty($erpNotlessQty)
    {
        $this->erpNotlessQty             = $erpNotlessQty;
        $this->apiParas["erpNotlessQty"]  = $erpNotlessQty;
    }

    public function getErpNotlessQty()
    {
        return $this->erpNotlessQty;
    }

    /**
     * @param Number[] $erpNotplusQty
     * Erp未过账的入库数
     * Required: false
     * Example Value: 
     */
    private $erpNotplusQty;

    /**
     * @param Number[] $erpNotplusQty
     * Erp未过账的入库数
     * Example Value: 
     */
    public function setErpNotplusQty($erpNotplusQty)
    {
        $this->erpNotplusQty             = $erpNotplusQty;
        $this->apiParas["erpNotplusQty"]  = $erpNotplusQty;
    }

    public function getErpNotplusQty()
    {
        return $this->erpNotplusQty;
    }

    /**
     * @param String[] $isvStockSnapshotInList
     * isv库存快照入库集合(Json串形式)
     * Required: false
     * Example Value: 
     */
    private $isvStockSnapshotInList;

    /**
     * @param String[] $isvStockSnapshotInList
     * isv库存快照入库集合(Json串形式)
     * Example Value: 
     */
    public function setIsvStockSnapshotInList($isvStockSnapshotInList)
    {
        $this->isvStockSnapshotInList             = $isvStockSnapshotInList;
        $this->apiParas["isvStockSnapshotInList"]  = $isvStockSnapshotInList;
    }

    public function getIsvStockSnapshotInList()
    {
        return $this->isvStockSnapshotInList;
    }

    /**
     * @param String[] $isvStockSnapshotOutList
     * isv库存快照出库集合(Json串形式)
     * Required: false
     * Example Value: 
     */
    private $isvStockSnapshotOutList;

    /**
     * @param String[] $isvStockSnapshotOutList
     * isv库存快照出库集合(Json串形式)
     * Example Value: 
     */
    public function setIsvStockSnapshotOutList($isvStockSnapshotOutList)
    {
        $this->isvStockSnapshotOutList             = $isvStockSnapshotOutList;
        $this->apiParas["isvStockSnapshotOutList"]  = $isvStockSnapshotOutList;
    }

    public function getIsvStockSnapshotOutList()
    {
        return $this->isvStockSnapshotOutList;
    }

    /**
     * @param String[] $warehouseNo
     * 库房号
     * Required: true
     * Example Value: 
     */
    private $warehouseNo;

    /**
     * @param String[] $warehouseNo
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
     * @param String $paramStrin
     * 商家授权码
     * Required: true
     * Example Value: 
     */
    private $paramStrin;

    /**
     * @param String $paramStrin
     * 商家授权码
     * Example Value: 
     */
    public function setParamStrin($paramStrin)
    {
        $this->paramStrin             = $paramStrin;
        $this->apiParas["paramStrin"]  = $paramStrin;
    }

    public function getParamStrin()
    {
        return $this->paramStrin;
    }

}