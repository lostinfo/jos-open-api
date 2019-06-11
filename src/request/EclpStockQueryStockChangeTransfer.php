<?php

namespace JD\request;

/**
 * 库存调整单查询
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=1798&apiName=jingdong.eclp.stock.queryStockChangeTransfer
 * Class EclpStockQueryStockChangeTransfer
 * @package Jd\request
 */
class EclpStockQueryStockChangeTransfer
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.stock.queryStockChangeTransfer";
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
     * @param String $changeNo
     * 库存调整单号
     * Required: false
     * Example Value: 
     */
    private $changeNo;

    /**
     * @param String $changeNo
     * 库存调整单号
     * Example Value: 
     */
    public function setChangeNo($changeNo)
    {
        $this->changeNo             = $changeNo;
        $this->apiParas["changeNo"]  = $changeNo;
    }

    public function getChangeNo()
    {
        return $this->changeNo;
    }

    /**
     * @param String $changeType
     * 调整类型
     * Required: true
     * Example Value: 
     */
    private $changeType;

    /**
     * @param String $changeType
     * 调整类型
     * Example Value: 
     */
    public function setChangeType($changeType)
    {
        $this->changeType             = $changeType;
        $this->apiParas["changeType"]  = $changeType;
    }

    public function getChangeType()
    {
        return $this->changeType;
    }

    /**
     * @param Date $timeStart
     * 开始日期
     * Required: true
     * Example Value: 
     */
    private $timeStart;

    /**
     * @param Date $timeStart
     * 开始日期
     * Example Value: 
     */
    public function setTimeStart($timeStart)
    {
        $this->timeStart             = $timeStart;
        $this->apiParas["timeStart"]  = $timeStart;
    }

    public function getTimeStart()
    {
        return $this->timeStart;
    }

    /**
     * @param Date $timeEnd
     * 结束日期
     * Required: true
     * Example Value: 
     */
    private $timeEnd;

    /**
     * @param Date $timeEnd
     * 结束日期
     * Example Value: 
     */
    public function setTimeEnd($timeEnd)
    {
        $this->timeEnd             = $timeEnd;
        $this->apiParas["timeEnd"]  = $timeEnd;
    }

    public function getTimeEnd()
    {
        return $this->timeEnd;
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
     * 租户
     * Required: false
     * Example Value: 
     */
    private $tenantId;

    /**
     * @param String $tenantId
     * 租户
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

}