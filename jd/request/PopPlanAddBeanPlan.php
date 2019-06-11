<?php

namespace JD\request;

/**
 * 新建京豆计划接口
 * 交易API-订单创建及查询相关
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=112&apiId=3198&apiName=jingdong.pop.plan.addBeanPlan
 * Class PopPlanAddBeanPlan
 * @package Jd\request
 */
class PopPlanAddBeanPlan
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.plan.addBeanPlan";
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
     * @param String $requestId
     * 可用来防重。时间有效性为60分钟，过了有效期，同样的requestId会认为是不同的调用
     * Required: true
     * Example Value: 48c5551d8fc04206a06385de4e083d64_im
     */
    private $requestId;

    /**
     * @param String $requestId
     * 可用来防重。时间有效性为60分钟，过了有效期，同样的requestId会认为是不同的调用
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
     * @param Number $serviceMoneyBudget
     * 服务费预算,当为BeanPlanType.FEE时，必须大于0
     * Required: true
     * Example Value: 0
     */
    private $serviceMoneyBudget;

    /**
     * @param Number $serviceMoneyBudget
     * 服务费预算,当为BeanPlanType.FEE时，必须大于0
     * Example Value: 0
     */
    public function setServiceMoneyBudget($serviceMoneyBudget)
    {
        $this->serviceMoneyBudget             = $serviceMoneyBudget;
        $this->apiParas["serviceMoneyBudget"]  = $serviceMoneyBudget;
    }

    public function getServiceMoneyBudget()
    {
        return $this->serviceMoneyBudget;
    }

    /**
     * @param String $accountCode
     * 京豆账户,当accountType=1，则accountCode为商家id;当accountType=2，则accouontCode为供应商简码
     * Required: true
     * Example Value: 70277
     */
    private $accountCode;

    /**
     * @param String $accountCode
     * 京豆账户,当accountType=1，则accountCode为商家id;当accountType=2，则accouontCode为供应商简码
     * Example Value: 70277
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
     * @param Number $accountType
     * 京豆账户类型,1:商家账户,2:供应商账户,3:品牌商账户
     * Required: true
     * Example Value: 1
     */
    private $accountType;

    /**
     * @param Number $accountType
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
     * @param Number $sendTimes
     * 京豆每人发放次数,1-20之间
     * Required: true
     * Example Value: 1
     */
    private $sendTimes;

    /**
     * @param Number $sendTimes
     * 京豆每人发放次数,1-20之间
     * Example Value: 1
     */
    public function setSendTimes($sendTimes)
    {
        $this->sendTimes             = $sendTimes;
        $this->apiParas["sendTimes"]  = $sendTimes;
    }

    public function getSendTimes()
    {
        return $this->sendTimes;
    }

    /**
     * @param Number $type
     * 计划类型,1:普通,2:含服务费,3:直发,8:回收,9:中转
     * Required: true
     * Example Value: 1
     */
    private $type;

    /**
     * @param Number $type
     * 计划类型,1:普通,2:含服务费,3:直发,8:回收,9:中转
     * Example Value: 1
     */
    public function setType($type)
    {
        $this->type             = $type;
        $this->apiParas["type"]  = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    /**
     * @param Number $modifyMode
     * 修改模式
     * Required: true
     * Example Value: 1
     */
    private $modifyMode;

    /**
     * @param Number $modifyMode
     * 修改模式
     * Example Value: 1
     */
    public function setModifyMode($modifyMode)
    {
        $this->modifyMode             = $modifyMode;
        $this->apiParas["modifyMode"]  = $modifyMode;
    }

    public function getModifyMode()
    {
        return $this->modifyMode;
    }

    /**
     * @param String $content
     * 计划描述
     * Required: false
     * Example Value: 无
     */
    private $content;

    /**
     * @param String $content
     * 计划描述
     * Example Value: 无
     */
    public function setContent($content)
    {
        $this->content             = $content;
        $this->apiParas["content"]  = $content;
    }

    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param Number $accountId
     * 京豆账户ID
     * Required: false
     * Example Value: 0
     */
    private $accountId;

    /**
     * @param Number $accountId
     * 京豆账户ID
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
     * @param Number $budgetNum
     * 预算京豆数量
     * Required: true
     * Example Value: 1
     */
    private $budgetNum;

    /**
     * @param Number $budgetNum
     * 预算京豆数量
     * Example Value: 1
     */
    public function setBudgetNum($budgetNum)
    {
        $this->budgetNum             = $budgetNum;
        $this->apiParas["budgetNum"]  = $budgetNum;
    }

    public function getBudgetNum()
    {
        return $this->budgetNum;
    }

    /**
     * @param String $name
     * 计划名称
     * Required: true
     * Example Value: 关注送好礼
     */
    private $name;

    /**
     * @param String $name
     * 计划名称
     * Example Value: 关注送好礼
     */
    public function setName($name)
    {
        $this->name             = $name;
        $this->apiParas["name"]  = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * @param String $rfId
     * 外部活动id
     * Required: false
     * Example Value: 0
     */
    private $rfId;

    /**
     * @param String $rfId
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

    /**
     * @param Date $beginTime
     * 计划开始时间
     * Required: true
     * Example Value: 2018-12-31
     */
    private $beginTime;

    /**
     * @param Date $beginTime
     * 计划开始时间
     * Example Value: 2018-12-31
     */
    public function setBeginTime($beginTime)
    {
        $this->beginTime             = $beginTime;
        $this->apiParas["beginTime"]  = $beginTime;
    }

    public function getBeginTime()
    {
        return $this->beginTime;
    }

    /**
     * @param Date $endTime
     * 计划结束时间
     * Required: true
     * Example Value: 2019-12-31
     */
    private $endTime;

    /**
     * @param Date $endTime
     * 计划结束时间
     * Example Value: 2019-12-31
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

    /**
     * @param Number $sendMode
     * 发豆模式,0:不限制来源,1:限制来源
     * Required: true
     * Example Value: 1
     */
    private $sendMode;

    /**
     * @param Number $sendMode
     * 发豆模式,0:不限制来源,1:限制来源
     * Example Value: 1
     */
    public function setSendMode($sendMode)
    {
        $this->sendMode             = $sendMode;
        $this->apiParas["sendMode"]  = $sendMode;
    }

    public function getSendMode()
    {
        return $this->sendMode;
    }

    /**
     * @param Number $sendRule
     * 京豆发放规则，1:京豆计划期间每人每天发放次数,2:京豆计划期间每人发放次数
     * Required: true
     * Example Value: 1
     */
    private $sendRule;

    /**
     * @param Number $sendRule
     * 京豆发放规则，1:京豆计划期间每人每天发放次数,2:京豆计划期间每人发放次数
     * Example Value: 1
     */
    public function setSendRule($sendRule)
    {
        $this->sendRule             = $sendRule;
        $this->apiParas["sendRule"]  = $sendRule;
    }

    public function getSendRule()
    {
        return $this->sendRule;
    }

    /**
     * @param Number $pinRiskLevel
     * 风险等级,新风控参考枚举类：11-16,原风控0 5 10 ,数值越大风险越高
     * Required: true
     * Example Value: 13
     */
    private $pinRiskLevel;

    /**
     * @param Number $pinRiskLevel
     * 风险等级,新风控参考枚举类：11-16,原风控0 5 10 ,数值越大风险越高
     * Example Value: 13
     */
    public function setPinRiskLevel($pinRiskLevel)
    {
        $this->pinRiskLevel             = $pinRiskLevel;
        $this->apiParas["pinRiskLevel"]  = $pinRiskLevel;
    }

    public function getPinRiskLevel()
    {
        return $this->pinRiskLevel;
    }

}