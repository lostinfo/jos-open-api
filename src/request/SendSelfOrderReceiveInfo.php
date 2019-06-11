<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 服务单结算完成回传接口
 * 大家电服务API-供应商系统，大家电售后维修工单服务处理
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=136&apiId=1924&apiName=jingdong.sendSelfOrderReceiveInfo
 * Class SendSelfOrderReceiveInfo
 * @package Jd\request
 */
class SendSelfOrderReceiveInfo
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.sendSelfOrderReceiveInfo";
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
     * @param string $authorizedSequence
     * 厂家授权码
     * Required: true
     * Example Value: 
     */
    private $authorizedSequence;

    /**
     * @param string $authorizedSequence
     * 厂家授权码
     * Example Value: 
     */
    public function setAuthorizedSequence($authorizedSequence)
    {
        $this->authorizedSequence             = $authorizedSequence;
        $this->apiParas["authorizedSequence"]  = $authorizedSequence;
    }

    public function getAuthorizedSequence()
    {
        return $this->authorizedSequence;
    }

    /**
     * @param int $serviceType
     * 服务类型（1 服务单结算回传 ）
     * Required: true
     * Example Value: 
     */
    private $serviceType;

    /**
     * @param int $serviceType
     * 服务类型（1 服务单结算回传 ）
     * Example Value: 
     */
    public function setServiceType($serviceType)
    {
        $this->serviceType             = $serviceType;
        $this->apiParas["serviceType"]  = $serviceType;
    }

    public function getServiceType()
    {
        return $this->serviceType;
    }

    /**
     * @param string $orderNo
     * 服务单号
     * Required: true
     * Example Value: 
     */
    private $orderNo;

    /**
     * @param string $orderNo
     * 服务单号
     * Example Value: 
     */
    public function setOrderNo($orderNo)
    {
        $this->orderNo             = $orderNo;
        $this->apiParas["orderNo"]  = $orderNo;
    }

    public function getOrderNo()
    {
        return $this->orderNo;
    }

    /**
     * @param string $disposeTime
     * 成功接收时间
     * Required: true
     * Example Value: 
     */
    private $disposeTime;

    /**
     * @param string $disposeTime
     * 成功接收时间
     * Example Value: 
     */
    public function setDisposeTime($disposeTime)
    {
        $this->disposeTime             = $disposeTime;
        $this->apiParas["disposeTime"]  = $disposeTime;
    }

    public function getDisposeTime()
    {
        return $this->disposeTime;
    }

    /**
     * @param int $disposeResult
     * 结算成功失败标识
     * Required: true
     * Example Value: 
     */
    private $disposeResult;

    /**
     * @param int $disposeResult
     * 结算成功失败标识
     * Example Value: 
     */
    public function setDisposeResult($disposeResult)
    {
        $this->disposeResult             = $disposeResult;
        $this->apiParas["disposeResult"]  = $disposeResult;
    }

    public function getDisposeResult()
    {
        return $this->disposeResult;
    }

    /**
     * @param string $remark
     * 备注（失败时存储失败原因）
     * Required: true
     * Example Value: 
     */
    private $remark;

    /**
     * @param string $remark
     * 备注（失败时存储失败原因）
     * Example Value: 
     */
    public function setRemark($remark)
    {
        $this->remark             = $remark;
        $this->apiParas["remark"]  = $remark;
    }

    public function getRemark()
    {
        return $this->remark;
    }

}