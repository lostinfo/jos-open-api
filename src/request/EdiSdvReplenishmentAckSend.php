<?php

namespca Lostinfo\JosOpenApi;

/**
 * 保存供货计划
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1975&apiName=jingdong.edi.sdv.replenishment.ack.send
 * Class EdiSdvReplenishmentAckSend
 * @package Jd\request
 */
class EdiSdvReplenishmentAckSend
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.edi.sdv.replenishment.ack.send";
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
     * @param string[] $jdSKU
     * 京东SKU
     * Required: false
     * Example Value: 
     */
    private $jdSKU;

    /**
     * @param string[] $jdSKU
     * 京东SKU
     * Example Value: 
     */
    public function setJdSKU($jdSKU)
    {
        $this->jdSKU             = $jdSKU;
        $this->apiParas["jdSKU"]  = $jdSKU;
    }

    public function getJdSKU()
    {
        return $this->jdSKU;
    }

    /**
     * @param string[] $vendorProductId
     * 供应商商品ID
     * Required: false
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

    /**
     * @param string[] $deliverCenterID
     * 配送中心
     * Required: true
     * Example Value: 
     */
    private $deliverCenterID;

    /**
     * @param string[] $deliverCenterID
     * 配送中心
     * Example Value: 
     */
    public function setDeliverCenterID($deliverCenterID)
    {
        $this->deliverCenterID             = $deliverCenterID;
        $this->apiParas["deliverCenterID"]  = $deliverCenterID;
    }

    public function getDeliverCenterID()
    {
        return $this->deliverCenterID;
    }

    /**
     * @param int[] $replenishmentAckQuantity
     * 确认数量
     * Required: true
     * Example Value: 
     */
    private $replenishmentAckQuantity;

    /**
     * @param int[] $replenishmentAckQuantity
     * 确认数量
     * Example Value: 
     */
    public function setReplenishmentAckQuantity($replenishmentAckQuantity)
    {
        $this->replenishmentAckQuantity             = $replenishmentAckQuantity;
        $this->apiParas["replenishmentAckQuantity"]  = $replenishmentAckQuantity;
    }

    public function getReplenishmentAckQuantity()
    {
        return $this->replenishmentAckQuantity;
    }

    /**
     * @param string[] $startTime
     * 开始时间
     * Required: true
     * Example Value: 
     */
    private $startTime;

    /**
     * @param string[] $startTime
     * 开始时间
     * Example Value: 
     */
    public function setStartTime($startTime)
    {
        $this->startTime             = $startTime;
        $this->apiParas["startTime"]  = $startTime;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param string[] $endTime
     * 结束时间
     * Required: true
     * Example Value: 
     */
    private $endTime;

    /**
     * @param string[] $endTime
     * 结束时间
     * Example Value: 
     */
    public function setEndTime($endTime)
    {
        $this->endTime             = $endTime;
        $this->apiParas["endTime"]  = $endTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

}