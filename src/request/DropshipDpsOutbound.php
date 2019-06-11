<?php

namespca Lostinfo\JosOpenApi;

/**
 * 厂商直送出库
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=475&apiName=jingdong.dropship.dps.outbound
 * Class DropshipDpsOutbound
 * @package Jd\request
 */
class DropshipDpsOutbound
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dropship.dps.outbound";
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
     * @param int $customOrderId
     * 客单编号
     * Required: true
     * Example Value: 170439197
     */
    private $customOrderId;

    /**
     * @param int $customOrderId
     * 客单编号
     * Example Value: 170439197
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
     * @param string $memoByVendor
     * 厂商备注
     * Required: false
     * Example Value: 厂商生产备注
     */
    private $memoByVendor;

    /**
     * @param string $memoByVendor
     * 厂商备注
     * Example Value: 厂商生产备注
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
     * @param int $isJdexpress
     * 是否是京东配送：1是，2否
     * Required: false
     * Example Value: 1
     */
    private $isJdexpress;

    /**
     * @param int $isJdexpress
     * 是否是京东配送：1是，2否
     * Example Value: 1
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
     * @param int $addressId
     * 发货地址ID
     * Required: false
     * Example Value: 1212
     */
    private $addressId;

    /**
     * @param int $addressId
     * 发货地址ID
     * Example Value: 1212
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