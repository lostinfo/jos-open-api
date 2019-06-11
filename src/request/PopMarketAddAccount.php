<?php

namespace JD\request;

/**
 * 初始化京豆账户
 * 交易API-订单创建及查询相关
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=112&apiId=2546&apiName=jingdong.pop.market.addAccount
 * Class PopMarketAddAccount
 * @package Jd\request
 */
class PopMarketAddAccount
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.market.addAccount";
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
     * @param java.lang.String $appName
     * 调用方名称
     * Required: true
     * Example Value: 
     */
    private $appName;

    /**
     * @param java.lang.String $appName
     * 调用方名称
     * Example Value: 
     */
    public function setAppName($appName)
    {
        $this->appName             = $appName;
        $this->apiParas["appName"]  = $appName;
    }

    public function getAppName()
    {
        return $this->appName;
    }

    /**
     * @param java.lang.String $ip
     * 调用方ip
     * Required: true
     * Example Value: 
     */
    private $ip;

    /**
     * @param java.lang.String $ip
     * 调用方ip
     * Example Value: 
     */
    public function setIp($ip)
    {
        $this->ip             = $ip;
        $this->apiParas["ip"]  = $ip;
    }

    public function getIp()
    {
        return $this->ip;
    }

    /**
     * @param java.lang.Integer $accountType
     * 京豆账户类型
     * Required: true
     * Example Value: 
     */
    private $accountType;

    /**
     * @param java.lang.Integer $accountType
     * 京豆账户类型
     * Example Value: 
     */
    public function setAccountType($accountType)
    {
        $this->accountType             = $accountType;
        $this->apiParas["accountType"]  = $accountType;
    }

    public function getAccountType()
    {
        return $this->accountType;
    }

    /**
     * @param java.lang.Long $accountId
     *  账户ID
     * Required: false
     * Example Value: 
     */
    private $accountId;

    /**
     * @param java.lang.Long $accountId
     *  账户ID
     * Example Value: 
     */
    public function setAccountId($accountId)
    {
        $this->accountId             = $accountId;
        $this->apiParas["accountId"]  = $accountId;
    }

    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * @param java.lang.String $accountCode
     * 京豆账户
     * Required: true
     * Example Value: 
     */
    private $accountCode;

    /**
     * @param java.lang.String $accountCode
     * 京豆账户
     * Example Value: 
     */
    public function setAccountCode($accountCode)
    {
        $this->accountCode             = $accountCode;
        $this->apiParas["accountCode"]  = $accountCode;
    }

    public function getAccountCode()
    {
        return $this->accountCode;
    }

}