<?php

namespace JD\request;

/**
 * 运单单号库存管理接口
 * 快递管家API-第三方快递API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=218&apiId=1525&apiName=jingdong.ldop.alpha.provider.stock.increase
 * Class LdopAlphaProviderStockIncrease
 * @package Jd\request
 */
class LdopAlphaProviderStockIncrease
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ldop.alpha.provider.stock.increase";
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
     * @param String $operatorCode
     * 充值编码
     * Required: true
     * Example Value: 
     */
    private $operatorCode;

    /**
     * @param String $operatorCode
     * 充值编码
     * Example Value: 
     */
    public function setOperatorCode($operatorCode)
    {
        $this->operatorCode             = $operatorCode;
        $this->apiParas["operatorCode"]  = $operatorCode;
    }

    public function getOperatorCode()
    {
        return $this->operatorCode;
    }

    /**
     * @param String $vendorCode
     * 商家编码
     * Required: true
     * Example Value: 
     */
    private $vendorCode;

    /**
     * @param String $vendorCode
     * 商家编码
     * Example Value: 
     */
    public function setVendorCode($vendorCode)
    {
        $this->vendorCode             = $vendorCode;
        $this->apiParas["vendorCode"]  = $vendorCode;
    }

    public function getVendorCode()
    {
        return $this->vendorCode;
    }

    /**
     * @param String $vendorName
     * 商家名称
     * Required: true
     * Example Value: 
     */
    private $vendorName;

    /**
     * @param String $vendorName
     * 商家名称
     * Example Value: 
     */
    public function setVendorName($vendorName)
    {
        $this->vendorName             = $vendorName;
        $this->apiParas["vendorName"]  = $vendorName;
    }

    public function getVendorName()
    {
        return $this->vendorName;
    }

    /**
     * @param String $providerId
     * 承运商ID
     * Required: true
     * Example Value: 
     */
    private $providerId;

    /**
     * @param String $providerId
     * 承运商ID
     * Example Value: 
     */
    public function setProviderId($providerId)
    {
        $this->providerId             = $providerId;
        $this->apiParas["providerId"]  = $providerId;
    }

    public function getProviderId()
    {
        return $this->providerId;
    }

    /**
     * @param String $providerCode
     * 承运商编码
     * Required: true
     * Example Value: 
     */
    private $providerCode;

    /**
     * @param String $providerCode
     * 承运商编码
     * Example Value: 
     */
    public function setProviderCode($providerCode)
    {
        $this->providerCode             = $providerCode;
        $this->apiParas["providerCode"]  = $providerCode;
    }

    public function getProviderCode()
    {
        return $this->providerCode;
    }

    /**
     * @param String $providerName
     * 承运商名称
     * Required: true
     * Example Value: 
     */
    private $providerName;

    /**
     * @param String $providerName
     * 承运商名称
     * Example Value: 
     */
    public function setProviderName($providerName)
    {
        $this->providerName             = $providerName;
        $this->apiParas["providerName"]  = $providerName;
    }

    public function getProviderName()
    {
        return $this->providerName;
    }

    /**
     * @param String $branchCode
     * 网点编码
     * Required: true
     * Example Value: 
     */
    private $branchCode;

    /**
     * @param String $branchCode
     * 网点编码
     * Example Value: 
     */
    public function setBranchCode($branchCode)
    {
        $this->branchCode             = $branchCode;
        $this->apiParas["branchCode"]  = $branchCode;
    }

    public function getBranchCode()
    {
        return $this->branchCode;
    }

    /**
     * @param String $branchName
     * 网点名称
     * Required: true
     * Example Value: 
     */
    private $branchName;

    /**
     * @param String $branchName
     * 网点名称
     * Example Value: 
     */
    public function setBranchName($branchName)
    {
        $this->branchName             = $branchName;
        $this->apiParas["branchName"]  = $branchName;
    }

    public function getBranchName()
    {
        return $this->branchName;
    }

    /**
     * @param Number $amount
     * 数量（正数：增加，负数：减少）
     * Required: true
     * Example Value: 
     */
    private $amount;

    /**
     * @param Number $amount
     * 数量（正数：增加，负数：减少）
     * Example Value: 
     */
    public function setAmount($amount)
    {
        $this->amount             = $amount;
        $this->apiParas["amount"]  = $amount;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param Date $operatorTime
     * 操作时间
     * Required: true
     * Example Value: 
     */
    private $operatorTime;

    /**
     * @param Date $operatorTime
     * 操作时间
     * Example Value: 
     */
    public function setOperatorTime($operatorTime)
    {
        $this->operatorTime             = $operatorTime;
        $this->apiParas["operatorTime"]  = $operatorTime;
    }

    public function getOperatorTime()
    {
        return $this->operatorTime;
    }

    /**
     * @param String $operatorName
     * 操作人姓名
     * Required: true
     * Example Value: 
     */
    private $operatorName;

    /**
     * @param String $operatorName
     * 操作人姓名
     * Example Value: 
     */
    public function setOperatorName($operatorName)
    {
        $this->operatorName             = $operatorName;
        $this->apiParas["operatorName"]  = $operatorName;
    }

    public function getOperatorName()
    {
        return $this->operatorName;
    }

    /**
     * @param Number $state
     * 充值状态（1-成功，2-失败）
     * Required: true
     * Example Value: 
     */
    private $state;

    /**
     * @param Number $state
     * 充值状态（1-成功，2-失败）
     * Example Value: 
     */
    public function setState($state)
    {
        $this->state             = $state;
        $this->apiParas["state"]  = $state;
    }

    public function getState()
    {
        return $this->state;
    }

}