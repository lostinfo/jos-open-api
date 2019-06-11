<?php

namespace JD\request;

/**
 * 取件单下单
 * 京东快递API-提供获取青龙运单号、向京东物流系统提交运单信息、跟踪查询物流信息等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=64&apiId=1535&apiName=jingdong.ldop.receive.pickuporder.receive
 * Class LdopReceivePickuporderReceive
 * @package Jd\request
 */
class LdopReceivePickuporderReceive
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ldop.receive.pickuporder.receive";
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
     * @param String $pickupAddress
     * 取件地址
     * Required: true
     * Example Value: 
     */
    private $pickupAddress;

    /**
     * @param String $pickupAddress
     * 取件地址
     * Example Value: 
     */
    public function setPickupAddress($pickupAddress)
    {
        $this->pickupAddress             = $pickupAddress;
        $this->apiParas["pickupAddress"]  = $pickupAddress;
    }

    public function getPickupAddress()
    {
        return $this->pickupAddress;
    }

    /**
     * @param String $pickupName
     * 取件联系人
     * Required: true
     * Example Value: 
     */
    private $pickupName;

    /**
     * @param String $pickupName
     * 取件联系人
     * Example Value: 
     */
    public function setPickupName($pickupName)
    {
        $this->pickupName             = $pickupName;
        $this->apiParas["pickupName"]  = $pickupName;
    }

    public function getPickupName()
    {
        return $this->pickupName;
    }

    /**
     * @param String $pickupTel
     * 取件联系电话
     * Required: true
     * Example Value: 
     */
    private $pickupTel;

    /**
     * @param String $pickupTel
     * 取件联系电话
     * Example Value: 
     */
    public function setPickupTel($pickupTel)
    {
        $this->pickupTel             = $pickupTel;
        $this->apiParas["pickupTel"]  = $pickupTel;
    }

    public function getPickupTel()
    {
        return $this->pickupTel;
    }

    /**
     * @param String $customerTel
     * 商家联系电话
     * Required: true
     * Example Value: 
     */
    private $customerTel;

    /**
     * @param String $customerTel
     * 商家联系电话
     * Example Value: 
     */
    public function setCustomerTel($customerTel)
    {
        $this->customerTel             = $customerTel;
        $this->apiParas["customerTel"]  = $customerTel;
    }

    public function getCustomerTel()
    {
        return $this->customerTel;
    }

    /**
     * @param String $customerCode
     * 商家编码
     * Required: true
     * Example Value: 
     */
    private $customerCode;

    /**
     * @param String $customerCode
     * 商家编码
     * Example Value: 
     */
    public function setCustomerCode($customerCode)
    {
        $this->customerCode             = $customerCode;
        $this->apiParas["customerCode"]  = $customerCode;
    }

    public function getCustomerCode()
    {
        return $this->customerCode;
    }

    /**
     * @param String $backAddress
     * 退货地址
     * Required: true
     * Example Value: 
     */
    private $backAddress;

    /**
     * @param String $backAddress
     * 退货地址
     * Example Value: 
     */
    public function setBackAddress($backAddress)
    {
        $this->backAddress             = $backAddress;
        $this->apiParas["backAddress"]  = $backAddress;
    }

    public function getBackAddress()
    {
        return $this->backAddress;
    }

    /**
     * @param String $customerContract
     * 商家联系人
     * Required: true
     * Example Value: 
     */
    private $customerContract;

    /**
     * @param String $customerContract
     * 商家联系人
     * Example Value: 
     */
    public function setCustomerContract($customerContract)
    {
        $this->customerContract             = $customerContract;
        $this->apiParas["customerContract"]  = $customerContract;
    }

    public function getCustomerContract()
    {
        return $this->customerContract;
    }

    /**
     * @param String $desp
     * 取件描述
     * Required: true
     * Example Value: 
     */
    private $desp;

    /**
     * @param String $desp
     * 取件描述
     * Example Value: 
     */
    public function setDesp($desp)
    {
        $this->desp             = $desp;
        $this->apiParas["desp"]  = $desp;
    }

    public function getDesp()
    {
        return $this->desp;
    }

    /**
     * @param String $orderId
     * 订单号
     * Required: true
     * Example Value: 
     */
    private $orderId;

    /**
     * @param String $orderId
     * 订单号
     * Example Value: 
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
     * @param Number $weight
     * 重量
     * Required: true
     * Example Value: 
     */
    private $weight;

    /**
     * @param Number $weight
     * 重量
     * Example Value: 
     */
    public function setWeight($weight)
    {
        $this->weight             = $weight;
        $this->apiParas["weight"]  = $weight;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param String $remark
     * 备注
     * Required: true
     * Example Value: 
     */
    private $remark;

    /**
     * @param String $remark
     * 备注
     * Example Value: 
     */
    public function setRemark($remark)
    {
        $this->remark             = $remark;
        $this->apiParas["remark"]  = $remark;
    }

    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * @param Number $volume
     * 体积
     * Required: true
     * Example Value: 
     */
    private $volume;

    /**
     * @param Number $volume
     * 体积
     * Example Value: 
     */
    public function setVolume($volume)
    {
        $this->volume             = $volume;
        $this->apiParas["volume"]  = $volume;
    }

    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * @param String $valueAddService
     * 增值服务
     * Required: false
     * Example Value: 
     */
    private $valueAddService;

    /**
     * @param String $valueAddService
     * 增值服务
     * Example Value: 
     */
    public function setValueAddService($valueAddService)
    {
        $this->valueAddService             = $valueAddService;
        $this->apiParas["valueAddService"]  = $valueAddService;
    }

    public function getValueAddService()
    {
        return $this->valueAddService;
    }

    /**
     * @param Boolean $guaranteeValue
     * 是否保价
     * Required: false
     * Example Value: 
     */
    private $guaranteeValue;

    /**
     * @param Boolean $guaranteeValue
     * 是否保价
     * Example Value: 
     */
    public function setGuaranteeValue($guaranteeValue)
    {
        $this->guaranteeValue             = $guaranteeValue;
        $this->apiParas["guaranteeValue"]  = $guaranteeValue;
    }

    public function getGuaranteeValue()
    {
        return $this->guaranteeValue;
    }

    /**
     * @param Number $guaranteeValueAmount
     * 保价金额
     * Required: false
     * Example Value: 
     */
    private $guaranteeValueAmount;

    /**
     * @param Number $guaranteeValueAmount
     * 保价金额
     * Example Value: 
     */
    public function setGuaranteeValueAmount($guaranteeValueAmount)
    {
        $this->guaranteeValueAmount             = $guaranteeValueAmount;
        $this->apiParas["guaranteeValueAmount"]  = $guaranteeValueAmount;
    }

    public function getGuaranteeValueAmount()
    {
        return $this->guaranteeValueAmount;
    }

    /**
     * @param Date $pickupStartTime
     * 开始取件时间
     * Required: false
     * Example Value: 
     */
    private $pickupStartTime;

    /**
     * @param Date $pickupStartTime
     * 开始取件时间
     * Example Value: 
     */
    public function setPickupStartTime($pickupStartTime)
    {
        $this->pickupStartTime             = $pickupStartTime;
        $this->apiParas["pickupStartTime"]  = $pickupStartTime;
    }

    public function getPickupStartTime()
    {
        return $this->pickupStartTime;
    }

    /**
     * @param Date $pickupEndTime
     * 结束取件时间
     * Required: false
     * Example Value: 
     */
    private $pickupEndTime;

    /**
     * @param Date $pickupEndTime
     * 结束取件时间
     * Example Value: 
     */
    public function setPickupEndTime($pickupEndTime)
    {
        $this->pickupEndTime             = $pickupEndTime;
        $this->apiParas["pickupEndTime"]  = $pickupEndTime;
    }

    public function getPickupEndTime()
    {
        return $this->pickupEndTime;
    }

    /**
     * @param String[] $productId
     * 商品SKU
     * Required: false
     * Example Value: 
     */
    private $productId;

    /**
     * @param String[] $productId
     * 商品SKU
     * Example Value: 
     */
    public function setProductId($productId)
    {
        $this->productId             = $productId;
        $this->apiParas["productId"]  = $productId;
    }

    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @param String[] $productName
     * 商品名字
     * Required: true
     * Example Value: 
     */
    private $productName;

    /**
     * @param String[] $productName
     * 商品名字
     * Example Value: 
     */
    public function setProductName($productName)
    {
        $this->productName             = $productName;
        $this->apiParas["productName"]  = $productName;
    }

    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @param Number[] $productCount
     * 商品数量
     * Required: true
     * Example Value: 
     */
    private $productCount;

    /**
     * @param Number[] $productCount
     * 商品数量
     * Example Value: 
     */
    public function setProductCount($productCount)
    {
        $this->productCount             = $productCount;
        $this->apiParas["productCount"]  = $productCount;
    }

    public function getProductCount()
    {
        return $this->productCount;
    }

    /**
     * @param String[] $snCode
     * 商品条码，选择校验条码时，必填
     * Required: false
     * Example Value: 
     */
    private $snCode;

    /**
     * @param String[] $snCode
     * 商品条码，选择校验条码时，必填
     * Example Value: 
     */
    public function setSnCode($snCode)
    {
        $this->snCode             = $snCode;
        $this->apiParas["snCode"]  = $snCode;
    }

    public function getSnCode()
    {
        return $this->snCode;
    }

}