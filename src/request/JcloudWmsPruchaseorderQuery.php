<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 入库单查询
 * 物流云-WMS-API-物流云仓储
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=192&apiId=2154&apiName=jingdong.jcloud.wms.pruchaseorder.query
 * Class JcloudWmsPruchaseorderQuery
 * @package Jd\request
 */
class JcloudWmsPruchaseorderQuery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.jcloud.wms.pruchaseorder.query";
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
     * @param string $receiptNo
     * 入库单编号
     * Required: true
     * Example Value: 
     */
    private $receiptNo;

    /**
     * @param string $receiptNo
     * 入库单编号
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
     * @param string $warehouseNo
     * 库房
     * Required: true
     * Example Value: 
     */
    private $warehouseNo;

    /**
     * @param string $warehouseNo
     * 库房
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

    /**
     * @param string $billType
     * 单据类型
     * Required: false
     * Example Value: 
     */
    private $billType;

    /**
     * @param string $billType
     * 单据类型
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

}