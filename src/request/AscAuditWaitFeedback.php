<?php

namespace JD\request;

/**
 * 审核成待客户反馈
 * 商家售后服务开放API-商家售后服务开放
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=241&apiId=2082&apiName=jingdong.asc.audit.waitFeedback
 * Class AscAuditWaitFeedback
 * @package Jd\request
 */
class AscAuditWaitFeedback
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.asc.audit.waitFeedback";
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
     * @param String $buId
     * 商家ID（最长50）
     * Required: true
     * Example Value: 
     */
    private $buId;

    /**
     * @param String $buId
     * 商家ID（最长50）
     * Example Value: 
     */
    public function setBuId($buId)
    {
        $this->buId             = $buId;
        $this->apiParas["buId"]  = $buId;
    }

    public function getBuId()
    {
        return $this->buId;
    }

    /**
     * @param String $operatePin
     * 操作人账号（最长50）
     * Required: true
     * Example Value: 
     */
    private $operatePin;

    /**
     * @param String $operatePin
     * 操作人账号（最长50）
     * Example Value: 
     */
    public function setOperatePin($operatePin)
    {
        $this->operatePin             = $operatePin;
        $this->apiParas["operatePin"]  = $operatePin;
    }

    public function getOperatePin()
    {
        return $this->operatePin;
    }

    /**
     * @param String $operateNick
     * 操作人姓名（最长50）
     * Required: true
     * Example Value: 
     */
    private $operateNick;

    /**
     * @param String $operateNick
     * 操作人姓名（最长50）
     * Example Value: 
     */
    public function setOperateNick($operateNick)
    {
        $this->operateNick             = $operateNick;
        $this->apiParas["operateNick"]  = $operateNick;
    }

    public function getOperateNick()
    {
        return $this->operateNick;
    }

    /**
     * @param Number $serviceId
     * 服务单号
     * Required: true
     * Example Value: 
     */
    private $serviceId;

    /**
     * @param Number $serviceId
     * 服务单号
     * Example Value: 
     */
    public function setServiceId($serviceId)
    {
        $this->serviceId             = $serviceId;
        $this->apiParas["serviceId"]  = $serviceId;
    }

    public function getServiceId()
    {
        return $this->serviceId;
    }

    /**
     * @param Number $orderId
     * 订单号
     * Required: true
     * Example Value: 
     */
    private $orderId;

    /**
     * @param Number $orderId
     * 订单号
     * Example Value: 
     */
    public function setOrderId($orderId)
    {
        $this->orderId             = $orderId;
        $this->apiParas["orderId"]  = $orderId;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param String $approveNotes
     * 审核意见
     * Required: true
     * Example Value: 
     */
    private $approveNotes;

    /**
     * @param String $approveNotes
     * 审核意见
     * Example Value: 
     */
    public function setApproveNotes($approveNotes)
    {
        $this->approveNotes             = $approveNotes;
        $this->apiParas["approveNotes"]  = $approveNotes;
    }

    public function getApproveNotes()
    {
        return $this->approveNotes;
    }

    /**
     * @param Number $sysVersion
     * 服务单版本号
     * Required: true
     * Example Value: 
     */
    private $sysVersion;

    /**
     * @param Number $sysVersion
     * 服务单版本号
     * Example Value: 
     */
    public function setSysVersion($sysVersion)
    {
        $this->sysVersion             = $sysVersion;
        $this->apiParas["sysVersion"]  = $sysVersion;
    }

    public function getSysVersion()
    {
        return $this->sysVersion;
    }

    /**
     * @param Number $questionTypeCid1
     * 一级审核原因
     * Required: true
     * Example Value: 
     */
    private $questionTypeCid1;

    /**
     * @param Number $questionTypeCid1
     * 一级审核原因
     * Example Value: 
     */
    public function setQuestionTypeCid1($questionTypeCid1)
    {
        $this->questionTypeCid1             = $questionTypeCid1;
        $this->apiParas["approveReasonCid1"]  = $questionTypeCid1;
    }

    public function getQuestionTypeCid1()
    {
        return $this->questionTypeCid1;
    }

    /**
     * @param Number $questionTypeCid2
     * 二级审核原因
     * Required: false
     * Example Value: 
     */
    private $questionTypeCid2;

    /**
     * @param Number $questionTypeCid2
     * 二级审核原因
     * Example Value: 
     */
    public function setQuestionTypeCid2($questionTypeCid2)
    {
        $this->questionTypeCid2             = $questionTypeCid2;
        $this->apiParas["approveReasonCid2"]  = $questionTypeCid2;
    }

    public function getQuestionTypeCid2()
    {
        return $this->questionTypeCid2;
    }

    /**
     * @param String $operateRemark
     * 操作备注
     * Required: false
     * Example Value: 
     */
    private $operateRemark;

    /**
     * @param String $operateRemark
     * 操作备注
     * Example Value: 
     */
    public function setOperateRemark($operateRemark)
    {
        $this->operateRemark             = $operateRemark;
        $this->apiParas["operateRemark"]  = $operateRemark;
    }

    public function getOperateRemark()
    {
        return $this->operateRemark;
    }

    /**
     * @param String $extJsonStr
     * 扩展条件（JSON格式）
     * Required: false
     * Example Value: 
     */
    private $extJsonStr;

    /**
     * @param String $extJsonStr
     * 扩展条件（JSON格式）
     * Example Value: 
     */
    public function setExtJsonStr($extJsonStr)
    {
        $this->extJsonStr             = $extJsonStr;
        $this->apiParas["extJsonStr"]  = $extJsonStr;
    }

    public function getExtJsonStr()
    {
        return $this->extJsonStr;
    }

}