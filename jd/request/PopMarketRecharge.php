<?php

namespace JD\request;

/**
 * 充值京豆
 * 交易API-订单创建及查询相关
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=112&apiId=2542&apiName=jingdong.pop.market.recharge
 * Class PopMarketRecharge
 * @package Jd\request
 */
class PopMarketRecharge
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.market.recharge";
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
     * @param String $appName
     * 调用方名称
     * Required: true
     * Example Value: 
     */
    private $appName;

    /**
     * @param String $appName
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
     * @param String $ip
     * 调用方ip
     * Required: true
     * Example Value: 
     */
    private $ip;

    /**
     * @param String $ip
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
     * @param Number $accountType
     * 京豆账户类型
     * Required: true
     * Example Value: 
     */
    private $accountType;

    /**
     * @param Number $accountType
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
     * @param Number $accountId
     * 京豆账户ID
     * Required: false
     * Example Value: 
     */
    private $accountId;

    /**
     * @param Number $accountId
     * 京豆账户ID
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
     * @param String $accountCode
     * 京豆账户
     * Required: true
     * Example Value: 
     */
    private $accountCode;

    /**
     * @param String $accountCode
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

    /**
     * @param Number $rechargeType
     * 充值类型
     * Required: true
     * Example Value: 
     */
    private $rechargeType;

    /**
     * @param Number $rechargeType
     * 充值类型
     * Example Value: 
     */
    public function setRechargeType($rechargeType)
    {
        $this->rechargeType             = $rechargeType;
        $this->apiParas["rechargeType"]  = $rechargeType;
    }

    public function getRechargeType()
    {
        return $this->rechargeType;
    }

    /**
     * @param Number $rechargeNum
     * 充值金额
     * Required: true
     * Example Value: 
     */
    private $rechargeNum;

    /**
     * @param Number $rechargeNum
     * 充值金额
     * Example Value: 
     */
    public function setRechargeNum($rechargeNum)
    {
        $this->rechargeNum             = $rechargeNum;
        $this->apiParas["rechargeNum"]  = $rechargeNum;
    }

    public function getRechargeNum()
    {
        return $this->rechargeNum;
    }

    /**
     * @param Number $rechargeId
     * 充值外部ID
     * Required: true
     * Example Value: 
     */
    private $rechargeId;

    /**
     * @param Number $rechargeId
     * 充值外部ID
     * Example Value: 
     */
    public function setRechargeId($rechargeId)
    {
        $this->rechargeId             = $rechargeId;
        $this->apiParas["rechargeId"]  = $rechargeId;
    }

    public function getRechargeId()
    {
        return $this->rechargeId;
    }

    /**
     * @param String $context
     * 充值说明
     * Required: false
     * Example Value: 
     */
    private $context;

    /**
     * @param String $context
     * 充值说明
     * Example Value: 
     */
    public function setContext($context)
    {
        $this->context             = $context;
        $this->apiParas["context"]  = $context;
    }

    public function getContext()
    {
        return $this->context;
    }

    /**
     * @param String $ext
     * 备注
     * Required: false
     * Example Value: 
     */
    private $ext;

    /**
     * @param String $ext
     * 备注
     * Example Value: 
     */
    public function setExt($ext)
    {
        $this->ext             = $ext;
        $this->apiParas["ext"]  = $ext;
    }

    public function getExt()
    {
        return $this->ext;
    }

}