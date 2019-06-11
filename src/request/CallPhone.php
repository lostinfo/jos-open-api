<?php

namespace JD\request;

/**
 * 拨打电话
 * 企悦对外开放API-企悦对外开放API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=216&apiId=1860&apiName=jingdong.callPhone
 * Class CallPhone
 * @package Jd\request
 */
class CallPhone
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.callPhone";
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
     * @param String $engineerPin
     * 工程师账号
     * Required: true
     * Example Value: 
     */
    private $engineerPin;

    /**
     * @param String $engineerPin
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
     * @param String $engineerName
     * 工程师姓名
     * Required: true
     * Example Value: 
     */
    private $engineerName;

    /**
     * @param String $engineerName
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
     * @param String $engineerTel
     * 工程师电话
     * Required: true
     * Example Value: 
     */
    private $engineerTel;

    /**
     * @param String $engineerTel
     * 工程师电话
     * Example Value: 
     */
    public function setEngineerTel($engineerTel)
    {
        $this->engineerTel             = $engineerTel;
        $this->apiParas["engineerTel"]  = $engineerTel;
    }

    public function getEngineerTel()
    {
        return $this->engineerTel;
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

    /**
     * @param String $operatorPin
     * 操作人PIN
     * Required: true
     * Example Value: 
     */
    private $operatorPin;

    /**
     * @param String $operatorPin
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
     * @param String $operatorName
     * 操作人名称
     * Required: true
     * Example Value: 
     */
    private $operatorName;

    /**
     * @param String $operatorName
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