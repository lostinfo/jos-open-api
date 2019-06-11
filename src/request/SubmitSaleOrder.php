<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 门店出货单下单
 * 京东万家API-对外提供万家系统的标准API接口，支持整个万家系统供应链的接口对接。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=352&apiId=2716&apiName=jingdong.submitSaleOrder
 * Class SubmitSaleOrder
 * @package Jd\request
 */
class SubmitSaleOrder
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.submitSaleOrder";
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
     * @param int $shopId
     * 店铺ID
     * Required: true
     * Example Value: 
     */
    private $shopId;

    /**
     * @param int $shopId
     * 店铺ID
     * Example Value: 
     */
    public function setShopId($shopId)
    {
        $this->shopId             = $shopId;
        $this->apiParas["shopId"]  = $shopId;
    }

    public function getShopId()
    {
        return $this->shopId;
    }

    /**
     * @param int $totalFee
     * 总金额
     * Required: true
     * Example Value: 
     */
    private $totalFee;

    /**
     * @param int $totalFee
     * 总金额
     * Example Value: 
     */
    public function setTotalFee($totalFee)
    {
        $this->totalFee             = $totalFee;
        $this->apiParas["totalFee"]  = $totalFee;
    }

    public function getTotalFee()
    {
        return $this->totalFee;
    }

    /**
     * @param int $realPayFee
     * 实付金额
     * Required: true
     * Example Value: 
     */
    private $realPayFee;

    /**
     * @param int $realPayFee
     * 实付金额
     * Example Value: 
     */
    public function setRealPayFee($realPayFee)
    {
        $this->realPayFee             = $realPayFee;
        $this->apiParas["realPayFee"]  = $realPayFee;
    }

    public function getRealPayFee()
    {
        return $this->realPayFee;
    }

    /**
     * @param int $orderPayType
     * 支付类型 0：现金支付 1：微信支付 2：京东支付 3：网银支付 4：门店分期支付
     * Required: true
     * Example Value: 
     */
    private $orderPayType;

    /**
     * @param int $orderPayType
     * 支付类型 0：现金支付 1：微信支付 2：京东支付 3：网银支付 4：门店分期支付
     * Example Value: 
     */
    public function setOrderPayType($orderPayType)
    {
        $this->orderPayType             = $orderPayType;
        $this->apiParas["orderPayType"]  = $orderPayType;
    }

    public function getOrderPayType()
    {
        return $this->orderPayType;
    }

    /**
     * @param int $salerId
     * 售货员ID
     * Required: true
     * Example Value: 
     */
    private $salerId;

    /**
     * @param int $salerId
     * 售货员ID
     * Example Value: 
     */
    public function setSalerId($salerId)
    {
        $this->salerId             = $salerId;
        $this->apiParas["salerId"]  = $salerId;
    }

    public function getSalerId()
    {
        return $this->salerId;
    }

    /**
     * @param string $salerName
     * 售货员名称
     * Required: true
     * Example Value: 
     */
    private $salerName;

    /**
     * @param string $salerName
     * 售货员名称
     * Example Value: 
     */
    public function setSalerName($salerName)
    {
        $this->salerName             = $salerName;
        $this->apiParas["salerName"]  = $salerName;
    }

    public function getSalerName()
    {
        return $this->salerName;
    }

    /**
     * @param string $buyerName
     * 客户姓名
     * Required: true
     * Example Value: 
     */
    private $buyerName;

    /**
     * @param string $buyerName
     * 客户姓名
     * Example Value: 
     */
    public function setBuyerName($buyerName)
    {
        $this->buyerName             = $buyerName;
        $this->apiParas["buyerName"]  = $buyerName;
    }

    public function getBuyerName()
    {
        return $this->buyerName;
    }

    /**
     * @param string $buyerTel
     * 客户电话
     * Required: true
     * Example Value: 
     */
    private $buyerTel;

    /**
     * @param string $buyerTel
     * 客户电话
     * Example Value: 
     */
    public function setBuyerTel($buyerTel)
    {
        $this->buyerTel             = $buyerTel;
        $this->apiParas["buyerTel"]  = $buyerTel;
    }

    public function getBuyerTel()
    {
        return $this->buyerTel;
    }

    /**
     * @param int[] $skuId
     * skuId
     * Required: true
     * Example Value: 
     */
    private $skuId;

    /**
     * @param int[] $skuId
     * skuId
     * Example Value: 
     */
    public function setSkuId($skuId)
    {
        $this->skuId             = $skuId;
        $this->apiParas["skuId"]  = $skuId;
    }

    public function getSkuId()
    {
        return $this->skuId;
    }

    /**
     * @param string[] $serialCode
     * 串码
     * Required: false
     * Example Value: 
     */
    private $serialCode;

    /**
     * @param string[] $serialCode
     * 串码
     * Example Value: 
     */
    public function setSerialCode($serialCode)
    {
        $this->serialCode             = $serialCode;
        $this->apiParas["serialCode"]  = $serialCode;
    }

    public function getSerialCode()
    {
        return $this->serialCode;
    }

    /**
     * @param int[] $skuPrice
     * 商品价格
     * Required: true
     * Example Value: 
     */
    private $skuPrice;

    /**
     * @param int[] $skuPrice
     * 商品价格
     * Example Value: 
     */
    public function setSkuPrice($skuPrice)
    {
        $this->skuPrice             = $skuPrice;
        $this->apiParas["skuPrice"]  = $skuPrice;
    }

    public function getSkuPrice()
    {
        return $this->skuPrice;
    }

    /**
     * @param int[] $skuNum
     * 数量
     * Required: true
     * Example Value: 
     */
    private $skuNum;

    /**
     * @param int[] $skuNum
     * 数量
     * Example Value: 
     */
    public function setSkuNum($skuNum)
    {
        $this->skuNum             = $skuNum;
        $this->apiParas["skuNum"]  = $skuNum;
    }

    public function getSkuNum()
    {
        return $this->skuNum;
    }

    /**
     * @param int $projectId
     * projectId
     * Required: true
     * Example Value: 
     */
    private $projectId;

    /**
     * @param int $projectId
     * projectId
     * Example Value: 
     */
    public function setProjectId($projectId)
    {
        $this->projectId             = $projectId;
        $this->apiParas["projectId"]  = $projectId;
    }

    public function getProjectId()
    {
        return $this->projectId;
    }

    /**
     * @param string $source
     * source
     * Required: true
     * Example Value: 
     */
    private $source;

    /**
     * @param string $source
     * source
     * Example Value: 
     */
    public function setSource($source)
    {
        $this->source             = $source;
        $this->apiParas["source"]  = $source;
    }

    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param string $bizToken
     * bizToken
     * Required: true
     * Example Value: 
     */
    private $bizToken;

    /**
     * @param string $bizToken
     * bizToken
     * Example Value: 
     */
    public function setBizToken($bizToken)
    {
        $this->bizToken             = $bizToken;
        $this->apiParas["bizToken"]  = $bizToken;
    }

    public function getBizToken()
    {
        return $this->bizToken;
    }

}