<?php

namespca Lostinfo\JosOpenApi;

/**
 * 组装单查询
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=1799&apiName=jingdong.eclp.cloud.queryOrderInfo
 * Class EclpCloudQueryOrderInfo
 * @package Jd\request
 */
class EclpCloudQueryOrderInfo
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.cloud.queryOrderInfo";
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
     * @param string $machiningNo
     * 加工单号
     * Required: false
     * Example Value: 
     */
    private $machiningNo;

    /**
     * @param string $machiningNo
     * 加工单号
     * Example Value: 
     */
    public function setMachiningNo($machiningNo)
    {
        $this->machiningNo             = $machiningNo;
        $this->apiParas["machiningNo"]  = $machiningNo;
    }

    public function getMachiningNo()
    {
        return $this->machiningNo;
    }

    /**
     * @param string $machiningType
     * 加工类型
     * Required: true
     * Example Value: 
     */
    private $machiningType;

    /**
     * @param string $machiningType
     * 加工类型
     * Example Value: 
     */
    public function setMachiningType($machiningType)
    {
        $this->machiningType             = $machiningType;
        $this->apiParas["machiningType"]  = $machiningType;
    }

    public function getMachiningType()
    {
        return $this->machiningType;
    }

    /**
     * @param string $timeStart
     * 开始日期
     * Required: true
     * Example Value: 
     */
    private $timeStart;

    /**
     * @param string $timeStart
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
     * @param string $timeEnd
     * 结束日期
     * Required: true
     * Example Value: 
     */
    private $timeEnd;

    /**
     * @param string $timeEnd
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
     * @param string $warehouseNo
     * 库房号
     * Required: true
     * Example Value: 
     */
    private $warehouseNo;

    /**
     * @param string $warehouseNo
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
     * @param string $tenantId
     * 租户
     * Required: true
     * Example Value: 
     */
    private $tenantId;

    /**
     * @param string $tenantId
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