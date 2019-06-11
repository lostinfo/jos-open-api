<?php

namespace JD\request;

/**
 * 上门完成接口
 * 大家电服务API-供应商系统，大家电售后维修工单服务处理
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=136&apiId=824&apiName=jingdong.sendFactoryAbutmentEndInfoReturn
 * Class SendFactoryAbutmentEndInfoReturn
 * @package Jd\request
 */
class SendFactoryAbutmentEndInfoReturn
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.sendFactoryAbutmentEndInfoReturn";
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
     * @param Number $serviceEndState
     * 反馈结果
     * Required: true
     * Example Value: 
     */
    private $serviceEndState;

    /**
     * @param Number $serviceEndState
     * 反馈结果
     * Example Value: 
     */
    public function setServiceEndState($serviceEndState)
    {
        $this->serviceEndState             = $serviceEndState;
        $this->apiParas["serviceEndState"]  = $serviceEndState;
    }

    public function getServiceEndState()
    {
        return $this->serviceEndState;
    }

    /**
     * @param Number $serviceEndStateLevelTow
     * 反馈结果二级ID
     * Required: true
     * Example Value: 
     */
    private $serviceEndStateLevelTow;

    /**
     * @param Number $serviceEndStateLevelTow
     * 反馈结果二级ID
     * Example Value: 
     */
    public function setServiceEndStateLevelTow($serviceEndStateLevelTow)
    {
        $this->serviceEndStateLevelTow             = $serviceEndStateLevelTow;
        $this->apiParas["serviceEndStateLevelTow"]  = $serviceEndStateLevelTow;
    }

    public function getServiceEndStateLevelTow()
    {
        return $this->serviceEndStateLevelTow;
    }

    /**
     * @param String $serviceEndStateLevelTowDescribe
     * 反馈结果二级描述
     * Required: true
     * Example Value: 
     */
    private $serviceEndStateLevelTowDescribe;

    /**
     * @param String $serviceEndStateLevelTowDescribe
     * 反馈结果二级描述
     * Example Value: 
     */
    public function setServiceEndStateLevelTowDescribe($serviceEndStateLevelTowDescribe)
    {
        $this->serviceEndStateLevelTowDescribe             = $serviceEndStateLevelTowDescribe;
        $this->apiParas["serviceEndStateLevelTowDescribe"]  = $serviceEndStateLevelTowDescribe;
    }

    public function getServiceEndStateLevelTowDescribe()
    {
        return $this->serviceEndStateLevelTowDescribe;
    }

    /**
     * @param Date $serviceEndTime
     * serviceEndTime
     * Required: true
     * Example Value: 
     */
    private $serviceEndTime;

    /**
     * @param Date $serviceEndTime
     * serviceEndTime
     * Example Value: 
     */
    public function setServiceEndTime($serviceEndTime)
    {
        $this->serviceEndTime             = $serviceEndTime;
        $this->apiParas["serviceEndTime"]  = $serviceEndTime;
    }

    public function getServiceEndTime()
    {
        return $this->serviceEndTime;
    }

    /**
     * @param String $cancelRemark
     * cancelRemark
     * Required: true
     * Example Value: 
     */
    private $cancelRemark;

    /**
     * @param String $cancelRemark
     * cancelRemark
     * Example Value: 
     */
    public function setCancelRemark($cancelRemark)
    {
        $this->cancelRemark             = $cancelRemark;
        $this->apiParas["cancelRemark"]  = $cancelRemark;
    }

    public function getCancelRemark()
    {
        return $this->cancelRemark;
    }

}