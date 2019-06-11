<?php

namespca Lostinfo\JosOpenApi;

/**
 * 组装单查询
 * 物流云-WMS-API-物流云仓储
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=192&apiId=1623&apiName=jingdong.jcloud.wms.machining.query
 * Class JcloudWmsMachiningQuery
 * @package Jd\request
 */
class JcloudWmsMachiningQuery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.jcloud.wms.machining.query";
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
     * Required: true
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
     * Required: false
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
     * @param string $warehouseNo
     * 仓库编号
     * Required: true
     * Example Value: 
     */
    private $warehouseNo;

    /**
     * @param string $warehouseNo
     * 仓库编号
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