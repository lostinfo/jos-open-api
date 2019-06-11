<?php

namespca Lostinfo\JosOpenApi;

/**
 * 采购订单下单
 * 京东万家API-对外提供万家系统的标准API接口，支持整个万家系统供应链的接口对接。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=352&apiId=2700&apiName=jingdong.submitPurchaseOrder
 * Class SubmitPurchaseOrder
 * @package Jd\request
 */
class SubmitPurchaseOrder
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.submitPurchaseOrder";
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
     * @param int $shopId
     * shopId
     * Required: true
     * Example Value: 
     */
    private $shopId;

    /**
     * @param int $shopId
     * shopId
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
     * @param int $paymentId
     * 支付类型 此字段目前无效 默认在线支付
     * Required: true
     * Example Value: 
     */
    private $paymentId;

    /**
     * @param int $paymentId
     * 支付类型 此字段目前无效 默认在线支付
     * Example Value: 
     */
    public function setPaymentId($paymentId)
    {
        $this->paymentId             = $paymentId;
        $this->apiParas["paymentId"]  = $paymentId;
    }

    public function getPaymentId()
    {
        return $this->paymentId;
    }

    /**
     * @param int $totalPrice
     * 实付金额
     * Required: true
     * Example Value: 
     */
    private $totalPrice;

    /**
     * @param int $totalPrice
     * 实付金额
     * Example Value: 
     */
    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice             = $totalPrice;
        $this->apiParas["totalPrice"]  = $totalPrice;
    }

    public function getTotalPrice()
    {
        return $this->totalPrice;
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

    /**
     * @param int[] $skuId
     * 商品sku
     * Required: true
     * Example Value: 
     */
    private $skuId;

    /**
     * @param int[] $skuId
     * 商品sku
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
     * @param int[] $skuNum
     * 商品数量
     * Required: true
     * Example Value: 
     */
    private $skuNum;

    /**
     * @param int[] $skuNum
     * 商品数量
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
     * @param int[] $purchasePrice
     * 采购价格
     * Required: true
     * Example Value: 
     */
    private $purchasePrice;

    /**
     * @param int[] $purchasePrice
     * 采购价格
     * Example Value: 
     */
    public function setPurchasePrice($purchasePrice)
    {
        $this->purchasePrice             = $purchasePrice;
        $this->apiParas["purchasePrice"]  = $purchasePrice;
    }

    public function getPurchasePrice()
    {
        return $this->purchasePrice;
    }

}