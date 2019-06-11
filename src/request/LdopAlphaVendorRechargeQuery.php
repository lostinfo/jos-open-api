<?php

namespace JD\request;

/**
 * 商家充值记录查询接口
 * 无界电子面单-电子面单商家及ISV使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=356&apiId=1528&apiName=jingdong.ldop.alpha.vendor.recharge.query
 * Class LdopAlphaVendorRechargeQuery
 * @package Jd\request
 */
class LdopAlphaVendorRechargeQuery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ldop.alpha.vendor.recharge.query";
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
     * @param Number $providerId
     * 承运商ID
     * Required: true
     * Example Value: 
     */
    private $providerId;

    /**
     * @param Number $providerId
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
     * @param String $branchCode
     * 网点编码
     * Required: false
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
     * @param Date $startTime
     * 充值开始时间
     * Required: true
     * Example Value: 
     */
    private $startTime;

    /**
     * @param Date $startTime
     * 充值开始时间
     * Example Value: 
     */
    public function setStartTime($startTime)
    {
        $this->startTime             = $startTime;
        $this->apiParas["startTime"]  = $startTime;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param Date $endTime
     * 充值结束时间
     * Required: true
     * Example Value: 
     */
    private $endTime;

    /**
     * @param Date $endTime
     * 充值结束时间
     * Example Value: 
     */
    public function setEndTime($endTime)
    {
        $this->endTime             = $endTime;
        $this->apiParas["endTime"]  = $endTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

}