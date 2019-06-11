<?php

namespca Lostinfo\JosOpenApi;

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
     * @param string[] $ownerNo
     * 货主编号
     * Required: true
     * Example Value: 
     */
    private $ownerNo;

    /**
     * @param string[] $ownerNo
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
     * @param string[] $skuNo
     * 商品编码
     * Required: true
     * Example Value: 
     */
    private $skuNo;

    /**
     * @param string[] $skuNo
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
     * @param int[] $erpQty
     * Erp库存数
     * Required: true
     * Example Value: 
     */
    private $erpQty;

    /**
     * @param int[] $erpQty
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
     * @param int[] $erpWmsQty
     * Wms库存数
     * Required: false
     * Example Value: 
     */
    private $erpWmsQty;

    /**
     * @param int[] $erpWmsQty
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
     * @param int[] $erpNotlessQty
     * Erp未过账的出库数
     * Required: false
     * Example Value: 
     */
    private $erpNotlessQty;

    /**
     * @param int[] $erpNotlessQty
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
     * @param int[] $erpNotplusQty
     * Erp未过账的入库数
     * Required: false
     * Example Value: 
     */
    private $erpNotplusQty;

    /**
     * @param int[] $erpNotplusQty
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
     * @param string[] $isvStockSnapshotInList
     * isv库存快照入库集合(Json串形式)
     * Required: false
     * Example Value: 
     */
    private $isvStockSnapshotInList;

    /**
     * @param string[] $isvStockSnapshotInList
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
     * @param string[] $isvStockSnapshotOutList
     * isv库存快照出库集合(Json串形式)
     * Required: false
     * Example Value: 
     */
    private $isvStockSnapshotOutList;

    /**
     * @param string[] $isvStockSnapshotOutList
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
     * @param string[] $warehouseNo
     * 库房号
     * Required: true
     * Example Value: 
     */
    private $warehouseNo;

    /**
     * @param string[] $warehouseNo
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
     * @param string $paramStrin
     * 商家授权码
     * Required: true
     * Example Value: 
     */
    private $paramStrin;

    /**
     * @param string $paramStrin
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