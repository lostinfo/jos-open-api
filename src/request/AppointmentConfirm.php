<?php

namespace JD\request;

/**
 * 工程师确认预约接口
 * 企悦对外开放API-企悦对外开放API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=216&apiId=1862&apiName=jingdong.appointmentConfirm
 * Class AppointmentConfirm
 * @package Jd\request
 */
class AppointmentConfirm
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.appointmentConfirm";
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
     * @param String $venderCode
     * 服务商编码
     * Required: true
     * Example Value: 
     */
    private $venderCode;

    /**
     * @param String $venderCode
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
     * @param Number $asmsServiceId
     * 服务单号
     * Required: true
     * Example Value: 
     */
    private $asmsServiceId;

    /**
     * @param Number $asmsServiceId
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
     * @param String $engineer
     * 工程师pin
     * Required: true
     * Example Value: 
     */
    private $engineer;

    /**
     * @param String $engineer
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
     * @param String $engineerName
     * 工程师name
     * Required: true
     * Example Value: 
     */
    private $engineerName;

    /**
     * @param String $engineerName
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
     * @param String $appointmentTime
     * 预约时间,格式为yyyy-MM-dd HH:mm，例如：2011-06-16 13:23
     * Required: true
     * Example Value: 
     */
    private $appointmentTime;

    /**
     * @param String $appointmentTime
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