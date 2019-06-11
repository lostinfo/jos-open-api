<?php

namespca Lostinfo\JosOpenApi;

/**
 * 盘盈亏单查询
 * 物流云-WMS-API-物流云仓储
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=192&apiId=1640&apiName=jingdong.jcloud.wms.inventory.queryProfitLossOrder
 * Class JcloudWmsInventoryQueryProfitLossOrder
 * @package Jd\request
 */
class JcloudWmsInventoryQueryProfitLossOrder
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.jcloud.wms.inventory.queryProfitLossOrder";
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
     * @param string $plNo
     * 盘盈亏单号
     * Required: false
     * Example Value: 
     */
    private $plNo;

    /**
     * @param string $plNo
     * 盘盈亏单号
     * Example Value: 
     */
    public function setPlNo($plNo)
    {
        $this->plNo             = $plNo;
        $this->apiParas["inventoryNo"]  = $plNo;
    }

    public function getPlNo()
    {
        return $this->plNo;
    }

    /**
     * @param int $plType
     * 盘盈亏类型
     * Required: false
     * Example Value: 
     */
    private $plType;

    /**
     * @param int $plType
     * 盘盈亏类型
     * Example Value: 
     */
    public function setPlType($plType)
    {
        $this->plType             = $plType;
        $this->apiParas["surplusDeficitType"]  = $plType;
    }

    public function getPlType()
    {
        return $this->plType;
    }

    /**
     * @param string $approveBeginTime
     * 审核开始时间
     * Required: true
     * Example Value: 
     */
    private $approveBeginTime;

    /**
     * @param string $approveBeginTime
     * 审核开始时间
     * Example Value: 
     */
    public function setApproveBeginTime($approveBeginTime)
    {
        $this->approveBeginTime             = $approveBeginTime;
        $this->apiParas["TimeStart"]  = $approveBeginTime;
    }

    public function getApproveBeginTime()
    {
        return $this->approveBeginTime;
    }

    /**
     * @param string $approveEndTime
     * 审核结束时间
     * Required: false
     * Example Value: 
     */
    private $approveEndTime;

    /**
     * @param string $approveEndTime
     * 审核结束时间
     * Example Value: 
     */
    public function setApproveEndTime($approveEndTime)
    {
        $this->approveEndTime             = $approveEndTime;
        $this->apiParas["TimeEnd"]  = $approveEndTime;
    }

    public function getApproveEndTime()
    {
        return $this->approveEndTime;
    }

    /**
     * @param string $warehouseNo
     * 库房编号
     * Required: true
     * Example Value: 
     */
    private $warehouseNo;

    /**
     * @param string $warehouseNo
     * 库房编号
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
     * 租户ID
     * Required: true
     * Example Value: 
     */
    private $tenantId;

    /**
     * @param string $tenantId
     * 租户ID
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