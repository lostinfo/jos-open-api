<?php

namespca Lostinfo\JosOpenApi;

/**
 * 一段订单商品称重
 * 集运商API-集运商对集运订单查询，集运商上报订单数据等业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=263&apiId=2453&apiName=jingdong.productweigh
 * Class Productweigh
 * @package Jd\request
 */
class Productweigh
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.productweigh";
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
     * @param int $oneOrderId
     * oneOrderId
     * Required: true
     * Example Value: 
     */
    private $oneOrderId;

    /**
     * @param int $oneOrderId
     * oneOrderId
     * Example Value: 
     */
    public function setOneOrderId($oneOrderId)
    {
        $this->oneOrderId             = $oneOrderId;
        $this->apiParas["oneOrderId"]  = $oneOrderId;
    }

    public function getOneOrderId()
    {
        return $this->oneOrderId;
    }

    /**
     * @param int $skuId
     * skuId
     * Required: true
     * Example Value: 
     */
    private $skuId;

    /**
     * @param int $skuId
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
     * @param int $actualWeight
     * actualWeight
     * Required: true
     * Example Value: 
     */
    private $actualWeight;

    /**
     * @param int $actualWeight
     * actualWeight
     * Example Value: 
     */
    public function setActualWeight($actualWeight)
    {
        $this->actualWeight             = $actualWeight;
        $this->apiParas["actualWeight"]  = $actualWeight;
    }

    public function getActualWeight()
    {
        return $this->actualWeight;
    }

    /**
     * @param int $billingWeight
     * billingWeight
     * Required: true
     * Example Value: 
     */
    private $billingWeight;

    /**
     * @param int $billingWeight
     * billingWeight
     * Example Value: 
     */
    public function setBillingWeight($billingWeight)
    {
        $this->billingWeight             = $billingWeight;
        $this->apiParas["billingWeight"]  = $billingWeight;
    }

    public function getBillingWeight()
    {
        return $this->billingWeight;
    }

    /**
     * @param int $jysSkuLength
     * jysSkuLength
     * Required: true
     * Example Value: 
     */
    private $jysSkuLength;

    /**
     * @param int $jysSkuLength
     * jysSkuLength
     * Example Value: 
     */
    public function setJysSkuLength($jysSkuLength)
    {
        $this->jysSkuLength             = $jysSkuLength;
        $this->apiParas["jysSkuLength"]  = $jysSkuLength;
    }

    public function getJysSkuLength()
    {
        return $this->jysSkuLength;
    }

    /**
     * @param int $jysSkuWidth
     * jysSkuWidth
     * Required: true
     * Example Value: 
     */
    private $jysSkuWidth;

    /**
     * @param int $jysSkuWidth
     * jysSkuWidth
     * Example Value: 
     */
    public function setJysSkuWidth($jysSkuWidth)
    {
        $this->jysSkuWidth             = $jysSkuWidth;
        $this->apiParas["jysSkuWidth"]  = $jysSkuWidth;
    }

    public function getJysSkuWidth()
    {
        return $this->jysSkuWidth;
    }

    /**
     * @param int $jysSkuHeight
     * jysSkuHeight
     * Required: true
     * Example Value: 
     */
    private $jysSkuHeight;

    /**
     * @param int $jysSkuHeight
     * jysSkuHeight
     * Example Value: 
     */
    public function setJysSkuHeight($jysSkuHeight)
    {
        $this->jysSkuHeight             = $jysSkuHeight;
        $this->apiParas["jysSkuHeight"]  = $jysSkuHeight;
    }

    public function getJysSkuHeight()
    {
        return $this->jysSkuHeight;
    }

    /**
     * @param string $extStr
     * extStr
     * Required: false
     * Example Value: 
     */
    private $extStr;

    /**
     * @param string $extStr
     * extStr
     * Example Value: 
     */
    public function setExtStr($extStr)
    {
        $this->extStr             = $extStr;
        $this->apiParas["extStr"]  = $extStr;
    }

    public function getExtStr()
    {
        return $this->extStr;
    }

}