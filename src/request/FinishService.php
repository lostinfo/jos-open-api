<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 工程师服务完成接口
 * 企悦对外开放API-企悦对外开放API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=216&apiId=1861&apiName=jingdong.finishService
 * Class FinishService
 * @package Jd\request
 */
class FinishService
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.finishService";
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
     * 工程师pin
     * Required: true
     * Example Value: 
     */
    private $engineerPin;

    /**
     * @param string $engineerPin
     * 工程师pin
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
     * 工程师name
     * Required: true
     * Example Value: 
     */
    private $engineerName;

    /**
     * @param string $engineerName
     * 工程师name
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
     * @param int $finshNum
     * 完成数量
     * Required: true
     * Example Value: 
     */
    private $finshNum;

    /**
     * @param int $finshNum
     * 完成数量
     * Example Value: 
     */
    public function setFinshNum($finshNum)
    {
        $this->finshNum             = $finshNum;
        $this->apiParas["finshNum"]  = $finshNum;
    }

    public function getFinshNum()
    {
        return $this->finshNum;
    }

    /**
     * @param string $remart
     * 描述
     * Required: true
     * Example Value: 
     */
    private $remart;

    /**
     * @param string $remart
     * 描述
     * Example Value: 
     */
    public function setRemart($remart)
    {
        $this->remart             = $remart;
        $this->apiParas["remart"]  = $remart;
    }

    public function getRemart()
    {
        return $this->remart;
    }

}