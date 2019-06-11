<?php

namespca Lostinfo\JosOpenApi;

/**
 * 工程师确认预约时间变更
 * 企悦对外开放API-企悦对外开放API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=216&apiId=2802&apiName=jingdong.appointmentChange
 * Class AppointmentChange
 * @package Jd\request
 */
class AppointmentChange
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.appointmentChange";
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
     * 服务商编码
     * Required: true
     * Example Value: 
     */
    private $venderCode;

    /**
     * @param string $venderCode
     * 服务商编码
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
     * @param int $asmsServiceId
     * 服务单号
     * Required: true
     * Example Value: 
     */
    private $asmsServiceId;

    /**
     * @param int $asmsServiceId
     * 服务单号
     * Example Value: 
     */
    public function setAsmsServiceId($asmsServiceId)
    {
        $this->asmsServiceId             = $asmsServiceId;
        $this->apiParas["asmsServiceId"]  = $asmsServiceId;
    }

    public function getAsmsServiceId()
    {
        return $this->asmsServiceId;
    }

    /**
     * @param string $engineer
     * 工程师pin
     * Required: true
     * Example Value: 
     */
    private $engineer;

    /**
     * @param string $engineer
     * 工程师pin
     * Example Value: 
     */
    public function setEngineer($engineer)
    {
        $this->engineer             = $engineer;
        $this->apiParas["engineer"]  = $engineer;
    }

    public function getEngineer()
    {
        return $this->engineer;
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
     * @param string $appointmentTime
     * 预约时间,格式为yyyy-MM-dd HH:mm，例如：2011-06-16 13:23
     * Required: true
     * Example Value: 
     */
    private $appointmentTime;

    /**
     * @param string $appointmentTime
     * 预约时间,格式为yyyy-MM-dd HH:mm，例如：2011-06-16 13:23
     * Example Value: 
     */
    public function setAppointmentTime($appointmentTime)
    {
        $this->appointmentTime             = $appointmentTime;
        $this->apiParas["appointmentTime"]  = $appointmentTime;
    }

    public function getAppointmentTime()
    {
        return $this->appointmentTime;
    }

}