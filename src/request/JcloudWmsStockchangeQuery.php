<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 库存调整单查询
 * 物流云-WMS-API-物流云仓储
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=192&apiId=1634&apiName=jingdong.jcloud.wms.stockchange.query
 * Class JcloudWmsStockchangeQuery
 * @package Jd\request
 */
class JcloudWmsStockchangeQuery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.jcloud.wms.stockchange.query";
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
     * @param string $changeNo
     * 库存调整单号
     * Required: true
     * Example Value: 
     */
    private $changeNo;

    /**
     * @param string $changeNo
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
     * @param string $changeType
     * 调整类型
     * Required: false
     * Example Value: 
     */
    private $changeType;

    /**
     * @param string $changeType
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