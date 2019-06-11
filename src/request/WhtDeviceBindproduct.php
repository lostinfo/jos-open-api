<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 绑定商品
 * 京东万家API-对外提供万家系统的标准API接口，支持整个万家系统供应链的接口对接。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=352&apiId=3373&apiName=jingdong.wht.device.bindproduct
 * Class WhtDeviceBindproduct
 * @package Jd\request
 */
class WhtDeviceBindproduct
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.wht.device.bindproduct";
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
     * @param int $systemId
     * 系统ID
     * Required: true
     * Example Value: 
     */
    private $systemId;

    /**
     * @param int $systemId
     * 系统ID
     * Example Value: 
     */
    public function setSystemId($systemId)
    {
        $this->systemId             = $systemId;
        $this->apiParas["system_id"]  = $systemId;
    }

    public function getSystemId()
    {
        return $this->systemId;
    }

    /**
     * @param string $shopId
     * 门店ID
     * Required: true
     * Example Value: 
     */
    private $shopId;

    /**
     * @param string $shopId
     * 门店ID
     * Example Value: 
     */
    public function setShopId($shopId)
    {
        $this->shopId             = $shopId;
        $this->apiParas["shop_id"]  = $shopId;
    }

    public function getShopId()
    {
        return $this->shopId;
    }

    /**
     * @param int $deviceType
     * 设备类型
     * Required: true
     * Example Value: 
     */
    private $deviceType;

    /**
     * @param int $deviceType
     * 设备类型
     * Example Value: 
     */
    public function setDeviceType($deviceType)
    {
        $this->deviceType             = $deviceType;
        $this->apiParas["device_type"]  = $deviceType;
    }

    public function getDeviceType()
    {
        return $this->deviceType;
    }

    /**
     * @param string $deviceSn
     * 设备编号
     * Required: true
     * Example Value: 
     */
    private $deviceSn;

    /**
     * @param string $deviceSn
     * 设备编号
     * Example Value: 
     */
    public function setDeviceSn($deviceSn)
    {
        $this->deviceSn             = $deviceSn;
        $this->apiParas["device_sn"]  = $deviceSn;
    }

    public function getDeviceSn()
    {
        return $this->deviceSn;
    }

    /**
     * @param int $skuId
     * 商品编号
     * Required: true
     * Example Value: 0
     */
    private $skuId;

    /**
     * @param int $skuId
     * 商品编号
     * Example Value: 0
     */
    public function setSkuId($skuId)
    {
        $this->skuId             = $skuId;
        $this->apiParas["sku_id"]  = $skuId;
    }

    public function getSkuId()
    {
        return $this->skuId;
    }

}