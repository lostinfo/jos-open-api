<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 短信批量触达发送接口(用于精准营销短信)
 * 数据API-数据开放API已下线，如有数据需求请进入云海数据开放平台（http://data.jd.com）进行申请。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=69&apiId=2885&apiName=jingdong.data.vender.userpack.isv.sms.batch.sent
 * Class DataVenderUserpackIsvSmsBatchSent
 * @package Jd\request
 */
class DataVenderUserpackIsvSmsBatchSent
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.data.vender.userpack.isv.sms.batch.sent";
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
     * @param string $foreignActivityId
     * 活动ID, 全局唯一的,建议其值与activity_record_id一致（计划该字段功能逐渐被activity_record_id字段替换）
     * Required: true
     * Example Value: bee7933278ea425798f780a47261d26c
     */
    private $foreignActivityId;

    /**
     * @param string $foreignActivityId
     * 活动ID, 全局唯一的,建议其值与activity_record_id一致（计划该字段功能逐渐被activity_record_id字段替换）
     * Example Value: bee7933278ea425798f780a47261d26c
     */
    public function setForeignActivityId($foreignActivityId)
    {
        $this->foreignActivityId             = $foreignActivityId;
        $this->apiParas["activity_id"]  = $foreignActivityId;
    }

    public function getForeignActivityId()
    {
        return $this->foreignActivityId;
    }

    /**
     * @param string $searchId
     * 人群包ID
     * Required: true
     * Example Value: 80e03f24c0c94aa9928e7500bf04bcac
     */
    private $searchId;

    /**
     * @param string $searchId
     * 人群包ID
     * Example Value: 80e03f24c0c94aa9928e7500bf04bcac
     */
    public function setSearchId($searchId)
    {
        $this->searchId             = $searchId;
        $this->apiParas["search_id"]  = $searchId;
    }

    public function getSearchId()
    {
        return $this->searchId;
    }

    /**
     * @param string $sendTime
     * 短信发送时间
     * Required: true
     * Example Value: 
     */
    private $sendTime;

    /**
     * @param string $sendTime
     * 短信发送时间
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
     * @param string $textContent
     * 短信内容
     * Required: true
     * Example Value: 短信内容（不包含URL）
     */
    private $textContent;

    /**
     * @param string $textContent
     * 短信内容
     * Example Value: 短信内容（不包含URL）
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
     * @param string $destUrl
     * 目标url
     * Required: false
     * Example Value: 3.cn
     */
    private $destUrl;

    /**
     * @param string $destUrl
     * 目标url
     * Example Value: 3.cn
     */
    public function setDestUrl($destUrl)
    {
        $this->destUrl             = $destUrl;
        $this->apiParas["dest_url"]  = $destUrl;
    }

    public function getDestUrl()
    {
        return $this->destUrl;
    }

    /**
     * @param string $fullContent
     * 短信全文内容
     * Required: true
     * Example Value: 短信内容（包含URL）
     */
    private $fullContent;

    /**
     * @param string $fullContent
     * 短信全文内容
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
     * @param string $sign
     * 短信签名
     * Required: true
     * Example Value: XXX店
     */
    private $sign;

    /**
     * @param string $sign
     * 短信签名
     * Example Value: XXX店
     */
    public function setSign($sign)
    {
        $this->sign             = $sign;
        $this->apiParas["sms_sign"]  = $sign;
    }

    public function getSign()
    {
        return $this->sign;
    }

    /**
     * @param int $sendNum
     * 发送短信数量
     * Required: true
     * Example Value: 1
     */
    private $sendNum;

    /**
     * @param int $sendNum
     * 发送短信数量
     * Example Value: 1
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
     * @param string $approverPhone
     * 负责人手机号
     * Required: true
     * Example Value: 186XXXXX
     */
    private $approverPhone;

    /**
     * @param string $approverPhone
     * 负责人手机号
     * Example Value: 186XXXXX
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
     * @param string $activityRecordId
     * 活动记录ID(通过jingdong.data.vender.userpack.isv.generate.activityid接口获得，后续该字段会设置成必填)
     * Required: false
     * Example Value: bee7933278ea425798f780a47261d26c
     */
    private $activityRecordId;

    /**
     * @param string $activityRecordId
     * 活动记录ID(通过jingdong.data.vender.userpack.isv.generate.activityid接口获得，后续该字段会设置成必填)
     * Example Value: bee7933278ea425798f780a47261d26c
     */
    public function setActivityRecordId($activityRecordId)
    {
        $this->activityRecordId             = $activityRecordId;
        $this->apiParas["activity_record_id"]  = $activityRecordId;
    }

    public function getActivityRecordId()
    {
        return $this->activityRecordId;
    }

}