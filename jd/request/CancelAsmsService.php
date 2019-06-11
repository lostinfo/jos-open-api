<?php

namespace JD\request;

/**
 * 取消服务单
 * 企悦对外开放API-企悦对外开放API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=216&apiId=1859&apiName=jingdong.cancelAsmsService
 * Class CancelAsmsService
 * @package Jd\request
 */
class CancelAsmsService
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.cancelAsmsService";
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
     * @param String $operatorName
     * 操作人姓名
     * Required: true
     * Example Value: 
     */
    private $operatorName;

    /**
     * @param String $operatorName
     * 操作人姓名
     * Example Value: 
     */
    public function setOperatorName($operatorName)
    {
        $this->operatorName             = $operatorName;
        $this->apiParas["operatorName"]  = $operatorName;
    }

    public function getOperatorName()
    {
        return $this->operatorName;
    }

    /**
     * @param String $operatorPin
     * 操作人账号
     * Required: true
     * Example Value: 
     */
    private $operatorPin;

    /**
     * @param String $operatorPin
     * 操作人账号
     * Example Value: 
     */
    public function setOperatorPin($operatorPin)
    {
        $this->operatorPin             = $operatorPin;
        $this->apiParas["operatorPin"]  = $operatorPin;
    }

    public function getOperatorPin()
    {
        return $this->operatorPin;
    }

    /**
     * @param String $cancelReason
     * 取消原因
     * Required: true
     * Example Value: 
     */
    private $cancelReason;

    /**
     * @param String $cancelReason
     * 取消原因
     * Example Value: 
     */
    public function setCancelReason($cancelReason)
    {
        $this->cancelReason             = $cancelReason;
        $this->apiParas["cancelReason"]  = $cancelReason;
    }

    public function getCancelReason()
    {
        return $this->cancelReason;
    }

    /**
     * @param String $venderCode
     * 厂商编码
     * Required: true
     * Example Value: 
     */
    private $venderCode;

    /**
     * @param String $venderCode
     * 厂商编码
     * Example Value: 
     */
    public function setVenderCode($venderCode)
    {
        $this->venderCode             = $venderCode;
        $this->apiParas["venderCode"]  = $venderCode;
    }

    public function getVenderCode()
    {
        return $this->venderCode;
    }

}