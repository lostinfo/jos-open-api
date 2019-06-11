<?php

namespace JD\request;

/**
 * 另约、改派信息回传接口
 * 大家电服务API-供应商系统，大家电售后维修工单服务处理
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=136&apiId=1896&apiName=jingdong.sendFactoryAbutmentAgainAssignInfoReturn
 * Class SendFactoryAbutmentAgainAssignInfoReturn
 * @package Jd\request
 */
class SendFactoryAbutmentAgainAssignInfoReturn
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.sendFactoryAbutmentAgainAssignInfoReturn";
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
        $this->apiParas["auth_no"]  = $authorizedSequence;
    }

    public function getAuthorizedSequence()
    {
        return $this->authorizedSequence;
    }

    /**
     * @param Number $messageType
     * 回传类型，1：另约，2：改派
     * Required: true
     * Example Value: 
     */
    private $messageType;

    /**
     * @param Number $messageType
     * 回传类型，1：另约，2：改派
     * Example Value: 
     */
    public function setMessageType($messageType)
    {
        $this->messageType             = $messageType;
        $this->apiParas["msg_type"]  = $messageType;
    }

    public function getMessageType()
    {
        return $this->messageType;
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
        $this->apiParas["ord_no"]  = $orderno;
    }

    public function getOrderno()
    {
        return $this->orderno;
    }

    /**
     * @param Date $assignTime
     * 派工时间,如果是改派，必填
     * Required: false
     * Example Value: 
     */
    private $assignTime;

    /**
     * @param Date $assignTime
     * 派工时间,如果是改派，必填
     * Example Value: 
     */
    public function setAssignTime($assignTime)
    {
        $this->assignTime             = $assignTime;
        $this->apiParas["assign_time"]  = $assignTime;
    }

    public function getAssignTime()
    {
        return $this->assignTime;
    }

    /**
     * @param Date $atHomeTime
     * 上门时间，,如果是另约，必填
     * Required: false
     * Example Value: 
     */
    private $atHomeTime;

    /**
     * @param Date $atHomeTime
     * 上门时间，,如果是另约，必填
     * Example Value: 
     */
    public function setAtHomeTime($atHomeTime)
    {
        $this->atHomeTime             = $atHomeTime;
        $this->apiParas["at_home_time"]  = $atHomeTime;
    }

    public function getAtHomeTime()
    {
        return $this->atHomeTime;
    }

    /**
     * @param String $assignerName
     * 工程师姓名,如果是改派，必填
     * Required: false
     * Example Value: 
     */
    private $assignerName;

    /**
     * @param String $assignerName
     * 工程师姓名,如果是改派，必填
     * Example Value: 
     */
    public function setAssignerName($assignerName)
    {
        $this->assignerName             = $assignerName;
        $this->apiParas["assigner_name"]  = $assignerName;
    }

    public function getAssignerName()
    {
        return $this->assignerName;
    }

    /**
     * @param String $assignerTel
     * 工程师电话,如果是改派，必填
     * Required: false
     * Example Value: 
     */
    private $assignerTel;

    /**
     * @param String $assignerTel
     * 工程师电话,如果是改派，必填
     * Example Value: 
     */
    public function setAssignerTel($assignerTel)
    {
        $this->assignerTel             = $assignerTel;
        $this->apiParas["assigner_tel"]  = $assignerTel;
    }

    public function getAssignerTel()
    {
        return $this->assignerTel;
    }

}