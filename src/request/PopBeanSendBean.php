<?php

namespca Lostinfo\JosOpenApi;

/**
 * 发送京豆接口
 * 交易API-订单创建及查询相关
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=112&apiId=3200&apiName=jingdong.pop.bean.sendBean
 * Class PopBeanSendBean
 * @package Jd\request
 */
class PopBeanSendBean
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.bean.sendBean";
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
     * @param string $requestId
     * 防重入ID
     * Required: true
     * Example Value: 48c5551d8fc04206a06385de4e083d64_im
     */
    private $requestId;

    /**
     * @param string $requestId
     * 防重入ID
     * Example Value: 48c5551d8fc04206a06385de4e083d64_im
     */
    public function setRequestId($requestId)
    {
        $this->requestId             = $requestId;
        $this->apiParas["requestId"]  = $requestId;
    }

    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * @param int $beanNum
     * 发豆数量
     * Required: true
     * Example Value: 10
     */
    private $beanNum;

    /**
     * @param int $beanNum
     * 发豆数量
     * Example Value: 10
     */
    public function setBeanNum($beanNum)
    {
        $this->beanNum             = $beanNum;
        $this->apiParas["beanNum"]  = $beanNum;
    }

    public function getBeanNum()
    {
        return $this->beanNum;
    }

    /**
     * @param int $accountId
     * 帐号id
     * Required: false
     * Example Value: 0
     */
    private $accountId;

    /**
     * @param int $accountId
     * 帐号id
     * Example Value: 0
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
     * @param string $accountCode
     * 京豆账户,当accountType=1，则accountCode为商家id;当accountType=2，则accouontCode为供应商简码
     * Required: true
     * Example Value: 600086
     */
    private $accountCode;

    /**
     * @param string $accountCode
     * 京豆账户,当accountType=1，则accountCode为商家id;当accountType=2，则accouontCode为供应商简码
     * Example Value: 600086
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
     * @param int $sendWay
     * 发豆方式,目前只支持按PIN发豆，固定值为1
     * Required: true
     * Example Value: 1
     */
    private $sendWay;

    /**
     * @param int $sendWay
     * 发豆方式,目前只支持按PIN发豆，固定值为1
     * Example Value: 1
     */
    public function setSendWay($sendWay)
    {
        $this->sendWay             = $sendWay;
        $this->apiParas["sendWay"]  = $sendWay;
    }

    public function getSendWay()
    {
        return $this->sendWay;
    }

    /**
     * @param string $sendCode
     * 发豆参数,当sendWay=1, 为用户pin,目前只支持按PIN发豆，固定值为1
     * Required: true
     * Example Value: testjingdou_00012
     */
    private $sendCode;

    /**
     * @param string $sendCode
     * 发豆参数,当sendWay=1, 为用户pin,目前只支持按PIN发豆，固定值为1
     * Example Value: testjingdou_00012
     */
    public function setSendCode($sendCode)
    {
        $this->sendCode             = $sendCode;
        $this->apiParas["sendCode"]  = $sendCode;
    }

    public function getSendCode()
    {
        return $this->sendCode;
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
     * @param string $context
     * 发豆说明
     * Required: false
     * Example Value: 无线端签到领京豆
     */
    private $context;

    /**
     * @param string $context
     * 发豆说明
     * Example Value: 无线端签到领京豆
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
     * @param int $planId
     * 计划ID
     * Required: true
     * Example Value: 1401
     */
    private $planId;

    /**
     * @param int $planId
     * 计划ID
     * Example Value: 1401
     */
    public function setPlanId($planId)
    {
        $this->planId             = $planId;
        $this->apiParas["planId"]  = $planId;
    }

    public function getPlanId()
    {
        return $this->planId;
    }

    /**
     * @param string $rfId
     * 外部活动id
     * Required: false
     * Example Value: 0
     */
    private $rfId;

    /**
     * @param string $rfId
     * 外部活动id
     * Example Value: 0
     */
    public function setRfId($rfId)
    {
        $this->rfId             = $rfId;
        $this->apiParas["rfId"]  = $rfId;
    }

    public function getRfId()
    {
        return $this->rfId;
    }

}