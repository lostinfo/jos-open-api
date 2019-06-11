<?php

namespca Lostinfo\JosOpenApi;

/**
 * 供应商驳回任务
 * 企悦对外开放API-企悦对外开放API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=216&apiId=1857&apiName=jingdong.rejectTask
 * Class RejectTask
 * @package Jd\request
 */
class RejectTask
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.rejectTask";
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
     * @param int $serviceId
     * 服务单号
     * Required: true
     * Example Value: 
     */
    private $serviceId;

    /**
     * @param int $serviceId
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
     * @param string $operatorName
     * 操作人姓名
     * Required: true
     * Example Value: 
     */
    private $operatorName;

    /**
     * @param string $operatorName
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
     * @param string $operatorPin
     * 操作人账号
     * Required: true
     * Example Value: 
     */
    private $operatorPin;

    /**
     * @param string $operatorPin
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
     * @param string $rejectReason
     * 驳回原因
     * Required: true
     * Example Value: 
     */
    private $rejectReason;

    /**
     * @param string $rejectReason
     * 驳回原因
     * Example Value: 
     */
    public function setRejectReason($rejectReason)
    {
        $this->rejectReason             = $rejectReason;
        $this->apiParas["rejectReason"]  = $rejectReason;
    }

    public function getRejectReason()
    {
        return $this->rejectReason;
    }

    /**
     * @param string $venderCode
     * 厂商编码
     * Required: true
     * Example Value: 
     */
    private $venderCode;

    /**
     * @param string $venderCode
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