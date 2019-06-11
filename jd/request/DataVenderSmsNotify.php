<?php

namespace JD\request;

/**
 * 短信发送任务V2
 * 数据API-数据开放API已下线，如有数据需求请进入云海数据开放平台（http://data.jd.com）进行申请。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=69&apiId=3648&apiName=jingdong.data.vender.sms.notify
 * Class DataVenderSmsNotify
 * @package Jd\request
 */
class DataVenderSmsNotify
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.data.vender.sms.notify";
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
     * @param String $approverPhone
     * 负责人手机号
     * Required: true
     * Example Value: 189****
     */
    private $approverPhone;

    /**
     * @param String $approverPhone
     * 负责人手机号
     * Example Value: 189****
     */
    public function setApproverPhone($approverPhone)
    {
        $this->approverPhone             = $approverPhone;
        $this->apiParas["approver_phone"]  = $approverPhone;
    }

    public function getApproverPhone()
    {
        return $this->approverPhone;
    }

    /**
     * @param String $sign
     * 短信签名
     * Required: true
     * Example Value: 签名
     */
    private $sign;

    /**
     * @param String $sign
     * 短信签名
     * Example Value: 签名
     */
    public function setSign($sign)
    {
        $this->sign             = $sign;
        $this->apiParas["sign"]  = $sign;
    }

    public function getSign()
    {
        return $this->sign;
    }

    /**
     * @param String $textContent
     * 短信内容（不包含URL）
     * Required: true
     * Example Value: 短信内容
     */
    private $textContent;

    /**
     * @param String $textContent
     * 短信内容（不包含URL）
     * Example Value: 短信内容
     */
    public function setTextContent($textContent)
    {
        $this->textContent             = $textContent;
        $this->apiParas["text_content"]  = $textContent;
    }

    public function getTextContent()
    {
        return $this->textContent;
    }

    /**
     * @param String $taskInstId
     * 任务实例ID
     * Required: true
     * Example Value: 任务实例ID
     */
    private $taskInstId;

    /**
     * @param String $taskInstId
     * 任务实例ID
     * Example Value: 任务实例ID
     */
    public function setTaskInstId($taskInstId)
    {
        $this->taskInstId             = $taskInstId;
        $this->apiParas["task_inst_id"]  = $taskInstId;
    }

    public function getTaskInstId()
    {
        return $this->taskInstId;
    }

    /**
     * @param String $url
     * 短信中包含的URL
     * Required: false
     * Example Value: 短信中包含的URL
     */
    private $url;

    /**
     * @param String $url
     * 短信中包含的URL
     * Example Value: 短信中包含的URL
     */
    public function setUrl($url)
    {
        $this->url             = $url;
        $this->apiParas["url"]  = $url;
    }

    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param Date $sendTime
     * 发送时间
     * Required: true
     * Example Value: 
     */
    private $sendTime;

    /**
     * @param Date $sendTime
     * 发送时间
     * Example Value: 
     */
    public function setSendTime($sendTime)
    {
        $this->sendTime             = $sendTime;
        $this->apiParas["send_time"]  = $sendTime;
    }

    public function getSendTime()
    {
        return $this->sendTime;
    }

    /**
     * @param String $fullContent
     * 短信内容（包含URL）
     * Required: true
     * Example Value: 短信内容（包含URL）
     */
    private $fullContent;

    /**
     * @param String $fullContent
     * 短信内容（包含URL）
     * Example Value: 短信内容（包含URL）
     */
    public function setFullContent($fullContent)
    {
        $this->fullContent             = $fullContent;
        $this->apiParas["full_content"]  = $fullContent;
    }

    public function getFullContent()
    {
        return $this->fullContent;
    }

    /**
     * @param String $mktActivityId
     * 活动ID
     * Required: true
     * Example Value: uuid
     */
    private $mktActivityId;

    /**
     * @param String $mktActivityId
     * 活动ID
     * Example Value: uuid
     */
    public function setMktActivityId($mktActivityId)
    {
        $this->mktActivityId             = $mktActivityId;
        $this->apiParas["mkt_activity_id"]  = $mktActivityId;
    }

    public function getMktActivityId()
    {
        return $this->mktActivityId;
    }

    /**
     * @param Number $sendNum
     * 发送数量
     * Required: true
     * Example Value: 200
     */
    private $sendNum;

    /**
     * @param Number $sendNum
     * 发送数量
     * Example Value: 200
     */
    public function setSendNum($sendNum)
    {
        $this->sendNum             = $sendNum;
        $this->apiParas["send_num"]  = $sendNum;
    }

    public function getSendNum()
    {
        return $this->sendNum;
    }

    /**
     * @param String $mktActivityInstId
     * 活动实例ID
     * Required: true
     * Example Value: uuid
     */
    private $mktActivityInstId;

    /**
     * @param String $mktActivityInstId
     * 活动实例ID
     * Example Value: uuid
     */
    public function setMktActivityInstId($mktActivityInstId)
    {
        $this->mktActivityInstId             = $mktActivityInstId;
        $this->apiParas["mkt_activity_inst_id"]  = $mktActivityInstId;
    }

    public function getMktActivityInstId()
    {
        return $this->mktActivityInstId;
    }

    /**
     * @param String $taskId
     * 任务ID
     * Required: true
     * Example Value: uuid
     */
    private $taskId;

    /**
     * @param String $taskId
     * 任务ID
     * Example Value: uuid
     */
    public function setTaskId($taskId)
    {
        $this->taskId             = $taskId;
        $this->apiParas["task_id"]  = $taskId;
    }

    public function getTaskId()
    {
        return $this->taskId;
    }

    /**
     * @param String $strategyInstId
     * 人群包实例ID
     * Required: true
     * Example Value: uuid
     */
    private $strategyInstId;

    /**
     * @param String $strategyInstId
     * 人群包实例ID
     * Example Value: uuid
     */
    public function setStrategyInstId($strategyInstId)
    {
        $this->strategyInstId             = $strategyInstId;
        $this->apiParas["strategy_inst_id"]  = $strategyInstId;
    }

    public function getStrategyInstId()
    {
        return $this->strategyInstId;
    }

}