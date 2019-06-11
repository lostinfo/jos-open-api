<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 工程师上门未服务
 * 企悦对外开放API-企悦对外开放API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=216&apiId=2047&apiName=jingdong.doorNotServiceOut
 * Class DoorNotServiceOut
 * @package Jd\request
 */
class DoorNotServiceOut
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.doorNotServiceOut";
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
     * @param string $engineerPin
     * 工程师账号
     * Required: true
     * Example Value: 
     */
    private $engineerPin;

    /**
     * @param string $engineerPin
     * 工程师账号
     * Example Value: 
     */
    public function setEngineerPin($engineerPin)
    {
        $this->engineerPin             = $engineerPin;
        $this->apiParas["engineerPin"]  = $engineerPin;
    }

    public function getEngineerPin()
    {
        return $this->engineerPin;
    }

    /**
     * @param string $engineerName
     * 工程师姓名
     * Required: true
     * Example Value: 
     */
    private $engineerName;

    /**
     * @param string $engineerName
     * 工程师姓名
     * Example Value: 
     */
    public function setEngineerName($engineerName)
    {
        $this->engineerName             = $engineerName;
        $this->apiParas["engineerName"]  = $engineerName;
    }

    public function getEngineerName()
    {
        return $this->engineerName;
    }

    /**
     * @param string $notHandleReason
     * 上门未处理原因
     * Required: true
     * Example Value: 
     */
    private $notHandleReason;

    /**
     * @param string $notHandleReason
     * 上门未处理原因
     * Example Value: 
     */
    public function setNotHandleReason($notHandleReason)
    {
        $this->notHandleReason             = $notHandleReason;
        $this->apiParas["notHandleReason"]  = $notHandleReason;
    }

    public function getNotHandleReason()
    {
        return $this->notHandleReason;
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

    /**
     * @param string $operatorPin
     * 操作人PIN
     * Required: true
     * Example Value: 
     */
    private $operatorPin;

    /**
     * @param string $operatorPin
     * 操作人PIN
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
     * @param string $operatorName
     * 操作人名称
     * Required: true
     * Example Value: 
     */
    private $operatorName;

    /**
     * @param string $operatorName
     * 操作人名称
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

}