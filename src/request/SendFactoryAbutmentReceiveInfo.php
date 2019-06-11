<?php

namespace JD\request;

/**
 * 服务单接收成功状态回传接口
 * 大家电服务API-供应商系统，大家电售后维修工单服务处理
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=136&apiId=825&apiName=jingdong.sendFactoryAbutmentReceiveInfo
 * Class SendFactoryAbutmentReceiveInfo
 * @package Jd\request
 */
class SendFactoryAbutmentReceiveInfo
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.sendFactoryAbutmentReceiveInfo";
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
     * @param String $authorizedSequence
     * 厂家授权码
     * Required: true
     * Example Value: 
     */
    private $authorizedSequence;

    /**
     * @param String $authorizedSequence
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
     * @param Number $serviceType
     * 回传类型
     * Required: true
     * Example Value: 
     */
    private $serviceType;

    /**
     * @param Number $serviceType
     * 回传类型
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
     * @param String $orderno
     * 服务单号
     * Required: true
     * Example Value: 
     */
    private $orderno;

    /**
     * @param String $orderno
     * 服务单号
     * Example Value: 
     */
    public function setOrderno($orderno)
    {
        $this->orderno             = $orderno;
        $this->apiParas["orderno"]  = $orderno;
    }

    public function getOrderno()
    {
        return $this->orderno;
    }

    /**
     * @param Date $disposeTime
     * 成功接收时间
     * Required: true
     * Example Value: 
     */
    private $disposeTime;

    /**
     * @param Date $disposeTime
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
     * @param Number $disposeResult
     * 成功失败标识
     * Required: true
     * Example Value: 
     */
    private $disposeResult;

    /**
     * @param Number $disposeResult
     * 成功失败标识
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
     * @param String $remark
     * 备注
     * Required: true
     * Example Value: 
     */
    private $remark;

    /**
     * @param String $remark
     * 备注
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