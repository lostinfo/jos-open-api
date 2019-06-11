<?php

namespca Lostinfo\JosOpenApi;

/**
 * 序列号流水查询
 * 物流云-WMS-API-物流云仓储
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=192&apiId=1790&apiName=jingdong.jcloud.wms.serialtrac.detail.query
 * Class JcloudWmsSerialtracDetailQuery
 * @package Jd\request
 */
class JcloudWmsSerialtracDetailQuery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.jcloud.wms.serialtrac.detail.query";
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
     * @param string $businessType
     * 单据类型
     * Required: true
     * Example Value: 
     */
    private $businessType;

    /**
     * @param string $businessType
     * 单据类型
     * Example Value: 
     */
    public function setBusinessType($businessType)
    {
        $this->businessType             = $businessType;
        $this->apiParas["billType"]  = $businessType;
    }

    public function getBusinessType()
    {
        return $this->businessType;
    }

    /**
     * @param string $businessNo
     * 单据号
     * Required: true
     * Example Value: 
     */
    private $businessNo;

    /**
     * @param string $businessNo
     * 单据号
     * Example Value: 
     */
    public function setBusinessNo($businessNo)
    {
        $this->businessNo             = $businessNo;
        $this->apiParas["orderNo"]  = $businessNo;
    }

    public function getBusinessNo()
    {
        return $this->businessNo;
    }

    /**
     * @param string $skuNo
     * 商品编码
     * Required: false
     * Example Value: 
     */
    private $skuNo;

    /**
     * @param string $skuNo
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
     * @param string $serial
     * 序列号
     * Required: false
     * Example Value: 
     */
    private $serial;

    /**
     * @param string $serial
     * 序列号
     * Example Value: 
     */
    public function setSerial($serial)
    {
        $this->serial             = $serial;
        $this->apiParas["serialNo"]  = $serial;
    }

    public function getSerial()
    {
        return $this->serial;
    }

    /**
     * @param int $id
     * 查询起始号
     * Required: true
     * Example Value: 
     */
    private $id;

    /**
     * @param int $id
     * 查询起始号
     * Example Value: 
     */
    public function setId($id)
    {
        $this->id             = $id;
        $this->apiParas["id"]  = $id;
    }

    public function getId()
    {
        return $this->id;
    }

}