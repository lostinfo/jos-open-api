<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 方法描述
 * 拍拍业务-拍拍业务相关接口
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=382&apiId=3018&apiName=jingdong.orderCompanyCreateService.createCompanyOrderServide
 * Class OrderCompanyCreateServiceCreateCompanyOrderServide
 * @package Jd\request
 */
class OrderCompanyCreateServiceCreateCompanyOrderServide
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.orderCompanyCreateService.createCompanyOrderServide";
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
     * @param string $appOrderId
     * 商家回收单号
     * Required: true
     * Example Value: 35345345
     */
    private $appOrderId;

    /**
     * @param string $appOrderId
     * 商家回收单号
     * Example Value: 35345345
     */
    public function setAppOrderId($appOrderId)
    {
        $this->appOrderId             = $appOrderId;
        $this->apiParas["appOrderId"]  = $appOrderId;
    }

    public function getAppOrderId()
    {
        return $this->appOrderId;
    }

    /**
     * @param string $pickupContactTel
     * 联系人电话
     * Required: true
     * Example Value: 18400232323
     */
    private $pickupContactTel;

    /**
     * @param string $pickupContactTel
     * 联系人电话
     * Example Value: 18400232323
     */
    public function setPickupContactTel($pickupContactTel)
    {
        $this->pickupContactTel             = $pickupContactTel;
        $this->apiParas["pickupContactTel"]  = $pickupContactTel;
    }

    public function getPickupContactTel()
    {
        return $this->pickupContactTel;
    }

    /**
     * @param int $secondPrice
     * 二次最终报价
     * Required: false
     * Example Value: 800
     */
    private $secondPrice;

    /**
     * @param int $secondPrice
     * 二次最终报价
     * Example Value: 800
     */
    public function setSecondPrice($secondPrice)
    {
        $this->secondPrice             = $secondPrice;
        $this->apiParas["secondPrice"]  = $secondPrice;
    }

    public function getSecondPrice()
    {
        return $this->secondPrice;
    }

    /**
     * @param string $payAccount
     * 支付账号
     * Required: true
     * Example Value: 234323424324
     */
    private $payAccount;

    /**
     * @param string $payAccount
     * 支付账号
     * Example Value: 234323424324
     */
    public function setPayAccount($payAccount)
    {
        $this->payAccount             = $payAccount;
        $this->apiParas["payAccount"]  = $payAccount;
    }

    public function getPayAccount()
    {
        return $this->payAccount;
    }

    /**
     * @param string $pickupContactPerson
     * 联系人名字
     * Required: true
     * Example Value: 乔布斯
     */
    private $pickupContactPerson;

    /**
     * @param string $pickupContactPerson
     * 联系人名字
     * Example Value: 乔布斯
     */
    public function setPickupContactPerson($pickupContactPerson)
    {
        $this->pickupContactPerson             = $pickupContactPerson;
        $this->apiParas["pickupContactPerson"]  = $pickupContactPerson;
    }

    public function getPickupContactPerson()
    {
        return $this->pickupContactPerson;
    }

    /**
     * @param int $firstPrice
     * 第一次报价
     * Required: true
     * Example Value: 100
     */
    private $firstPrice;

    /**
     * @param int $firstPrice
     * 第一次报价
     * Example Value: 100
     */
    public function setFirstPrice($firstPrice)
    {
        $this->firstPrice             = $firstPrice;
        $this->apiParas["firstPrice"]  = $firstPrice;
    }

    public function getFirstPrice()
    {
        return $this->firstPrice;
    }

    /**
     * @param int $txPrice
     * 最终报价
     * Required: false
     * Example Value: 100
     */
    private $txPrice;

    /**
     * @param int $txPrice
     * 最终报价
     * Example Value: 100
     */
    public function setTxPrice($txPrice)
    {
        $this->txPrice             = $txPrice;
        $this->apiParas["txPrice"]  = $txPrice;
    }

    public function getTxPrice()
    {
        return $this->txPrice;
    }

    /**
     * @param string $pickupAddress
     * 用户地址
     * Required: true
     * Example Value: 北京
     */
    private $pickupAddress;

    /**
     * @param string $pickupAddress
     * 用户地址
     * Example Value: 北京
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
     * @param string $productInfos
     * 产品信息
     * Required: true
     * Example Value: {}
     */
    private $productInfos;

    /**
     * @param string $productInfos
     * 产品信息
     * Example Value: {}
     */
    public function setProductInfos($productInfos)
    {
        $this->productInfos             = $productInfos;
        $this->apiParas["productInfos"]  = $productInfos;
    }

    public function getProductInfos()
    {
        return $this->productInfos;
    }

}