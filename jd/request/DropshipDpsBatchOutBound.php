<?php

namespace JD\request;

/**
 * 厂家直送批量出库接口
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1641&apiName=jingdong.dropship.dps.batchOutBound
 * Class DropshipDpsBatchOutBound
 * @package Jd\request
 */
class DropshipDpsBatchOutBound
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dropship.dps.batchOutBound";
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
     * @param Number[] $customOrderId
     * 客单编号
     * Required: true
     * Example Value: 124531313
     */
    private $customOrderId;

    /**
     * @param Number[] $customOrderId
     * 客单编号
     * Example Value: 124531313
     */
    public function setCustomOrderId($customOrderId)
    {
        $this->customOrderId             = $customOrderId;
        $this->apiParas["customOrderId"]  = $customOrderId;
    }

    public function getCustomOrderId()
    {
        return $this->customOrderId;
    }

    /**
     * @param String[] $memoByVendor
     * 厂商备注
     * Required: true
     * Example Value: 优先发
     */
    private $memoByVendor;

    /**
     * @param String[] $memoByVendor
     * 厂商备注
     * Example Value: 优先发
     */
    public function setMemoByVendor($memoByVendor)
    {
        $this->memoByVendor             = $memoByVendor;
        $this->apiParas["memoByVendor"]  = $memoByVendor;
    }

    public function getMemoByVendor()
    {
        return $this->memoByVendor;
    }

    /**
     * @param Number[] $isJdexpress
     * 是否京配
     * Required: true
     * Example Value: 1.京配2.非京配
     */
    private $isJdexpress;

    /**
     * @param Number[] $isJdexpress
     * 是否京配
     * Example Value: 1.京配2.非京配
     */
    public function setIsJdexpress($isJdexpress)
    {
        $this->isJdexpress             = $isJdexpress;
        $this->apiParas["isJdexpress"]  = $isJdexpress;
    }

    public function getIsJdexpress()
    {
        return $this->isJdexpress;
    }

    /**
     * @param Number[] $parentOrderId
     * 父单编号
     * Required: true
     * Example Value: 12454312312
     */
    private $parentOrderId;

    /**
     * @param Number[] $parentOrderId
     * 父单编号
     * Example Value: 12454312312
     */
    public function setParentOrderId($parentOrderId)
    {
        $this->parentOrderId             = $parentOrderId;
        $this->apiParas["parentOrderId"]  = $parentOrderId;
    }

    public function getParentOrderId()
    {
        return $this->parentOrderId;
    }

    /**
     * @param Number[] $addressId
     * 发货地址id
     * Required: false
     * Example Value: 12
     */
    private $addressId;

    /**
     * @param Number[] $addressId
     * 发货地址id
     * Example Value: 12
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