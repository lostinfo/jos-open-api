<?php

namespca Lostinfo\JosOpenApi;

/**
 * 获取账户信息接口
 * 交易API-订单创建及查询相关
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=112&apiId=3199&apiName=jingdong.pop.account.getAccountInfo
 * Class PopAccountGetAccountInfo
 * @package Jd\request
 */
class PopAccountGetAccountInfo
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.account.getAccountInfo";
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
     * @param int $accountType
     * 京豆账户类型,1:商家账户,2:供应商账户,3:品牌商账户
     * Required: true
     * Example Value: 1
     */
    private $accountType;

    /**
     * @param int $accountType
     * 京豆账户类型,1:商家账户,2:供应商账户,3:品牌商账户
     * Example Value: 1
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
     * @param string $accountCode
     * 京豆账户,当accountType=1，则accountCode为商家id;当accountType=2，则accouontCode为供应商简码
     * Required: true
     * Example Value: 37335
     */
    private $accountCode;

    /**
     * @param string $accountCode
     * 京豆账户,当accountType=1，则accountCode为商家id;当accountType=2，则accouontCode为供应商简码
     * Example Value: 37335
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