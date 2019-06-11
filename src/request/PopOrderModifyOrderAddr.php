<?php

namespace JD\request;

/**
 * 修改订单收货地址
 * 订单API-订单API组(该组下所有接口均不支持自营店铺业务)
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=55&apiId=1693&apiName=jingdong.pop.order.modifyOrderAddr
 * Class PopOrderModifyOrderAddr
 * @package Jd\request
 */
class PopOrderModifyOrderAddr
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.order.modifyOrderAddr";
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
     * @param Number $orderId
     * 订单编号（大于1的正整数）
     * Required: true
     * Example Value: 1
     */
    private $orderId;

    /**
     * @param Number $orderId
     * 订单编号（大于1的正整数）
     * Example Value: 1
     */
    public function setOrderId($orderId)
    {
        $this->orderId             = $orderId;
        $this->apiParas["orderId"]  = $orderId;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param String $customerName
     * 客户名称（不可为空）
     * Required: false
     * Example Value: 张三
     */
    private $customerName;

    /**
     * @param String $customerName
     * 客户名称（不可为空）
     * Example Value: 张三
     */
    public function setCustomerName($customerName)
    {
        $this->customerName             = $customerName;
        $this->apiParas["customerName"]  = $customerName;
    }

    public function getCustomerName()
    {
        return $this->customerName;
    }

    /**
     * @param String $customerPhone
     * 客户联系电话（必须符合手机号规则）
     * Required: false
     * Example Value: 15000000000
     */
    private $customerPhone;

    /**
     * @param String $customerPhone
     * 客户联系电话（必须符合手机号规则）
     * Example Value: 15000000000
     */
    public function setCustomerPhone($customerPhone)
    {
        $this->customerPhone             = $customerPhone;
        $this->apiParas["customerPhone"]  = $customerPhone;
    }

    public function getCustomerPhone()
    {
        return $this->customerPhone;
    }

    /**
     * @param Number $provinceId
     * 一级地址编号（不可为空）
     * Required: true
     * Example Value: 15
     */
    private $provinceId;

    /**
     * @param Number $provinceId
     * 一级地址编号（不可为空）
     * Example Value: 15
     */
    public function setProvinceId($provinceId)
    {
        $this->provinceId             = $provinceId;
        $this->apiParas["provinceId"]  = $provinceId;
    }

    public function getProvinceId()
    {
        return $this->provinceId;
    }

    /**
     * @param Number $cityId
     * 二级地址编号（不可为空）
     * Required: true
     * Example Value: 1213
     */
    private $cityId;

    /**
     * @param Number $cityId
     * 二级地址编号（不可为空）
     * Example Value: 1213
     */
    public function setCityId($cityId)
    {
        $this->cityId             = $cityId;
        $this->apiParas["cityId"]  = $cityId;
    }

    public function getCityId()
    {
        return $this->cityId;
    }

    /**
     * @param Number $countyId
     * 三级地址编号（不可为空）
     * Required: true
     * Example Value: 3411
     */
    private $countyId;

    /**
     * @param Number $countyId
     * 三级地址编号（不可为空）
     * Example Value: 3411
     */
    public function setCountyId($countyId)
    {
        $this->countyId             = $countyId;
        $this->apiParas["countyId"]  = $countyId;
    }

    public function getCountyId()
    {
        return $this->countyId;
    }

    /**
     * @param Number $townId
     * 四级地址编号（不填默认为-1）
     * Required: false
     * Example Value: 50027
     */
    private $townId;

    /**
     * @param Number $townId
     * 四级地址编号（不填默认为-1）
     * Example Value: 50027
     */
    public function setTownId($townId)
    {
        $this->townId             = $townId;
        $this->apiParas["townId"]  = $townId;
    }

    public function getTownId()
    {
        return $this->townId;
    }

    /**
     * @param String $detailAddr
     * 详细地址（不可为空）
     * Required: true
     * Example Value: 浙江杭州市西湖区三墩镇西园八路
     */
    private $detailAddr;

    /**
     * @param String $detailAddr
     * 详细地址（不可为空）
     * Example Value: 浙江杭州市西湖区三墩镇西园八路
     */
    public function setDetailAddr($detailAddr)
    {
        $this->detailAddr             = $detailAddr;
        $this->apiParas["detailAddr"]  = $detailAddr;
    }

    public function getDetailAddr()
    {
        return $this->detailAddr;
    }

}