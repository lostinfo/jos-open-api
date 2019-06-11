<?php

namespace JD\request;

/**
 * 查询厂家直送供应商发货地址接口
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=3188&apiName=jingdong.dropship.dps.deliveryAddressService
 * Class DropshipDpsDeliveryAddressService
 * @package Jd\request
 */
class DropshipDpsDeliveryAddressService
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dropship.dps.deliveryAddressService";
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
     * @param Number $addressId
     * 发货地址ID
     * Required: false
     * Example Value: 
     */
    private $addressId;

    /**
     * @param Number $addressId
     * 发货地址ID
     * Example Value: 
     */
    public function setAddressId($addressId)
    {
        $this->addressId             = $addressId;
        $this->apiParas["addressId"]  = $addressId;
    }

    public function getAddressId()
    {
        return $this->addressId;
    }

}