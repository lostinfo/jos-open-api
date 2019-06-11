<?php

namespca Lostinfo\JosOpenApi;

/**
 * 派工接口
 * 大家电服务API-供应商系统，大家电售后维修工单服务处理
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=136&apiId=822&apiName=jingdong.sendFactoryAbutmentAssignInfoReturn
 * Class SendFactoryAbutmentAssignInfoReturn
 * @package Jd\request
 */
class SendFactoryAbutmentAssignInfoReturn
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.sendFactoryAbutmentAssignInfoReturn";
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
     * @param string $authorizedSequence
     * 厂家授权码
     * Required: true
     * Example Value: 
     */
    private $authorizedSequence;

    /**
     * @param string $authorizedSequence
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
     * @param string $orderno
     * 服务单号
     * Required: true
     * Example Value: 
     */
    private $orderno;

    /**
     * @param string $orderno
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
     * @param string $assignTime
     * 派工时间
     * Required: true
     * Example Value: 
     */
    private $assignTime;

    /**
     * @param string $assignTime
     * 派工时间
     * Example Value: 
     */
    public function setAssignTime($assignTime)
    {
        $this->assignTime             = $assignTime;
        $this->apiParas["assignTime"]  = $assignTime;
    }

    public function getAssignTime()
    {
        return $this->assignTime;
    }

    /**
     * @param string $atHomeTime
     * 上门时间
     * Required: true
     * Example Value: 
     */
    private $atHomeTime;

    /**
     * @param string $atHomeTime
     * 上门时间
     * Example Value: 
     */
    public function setAtHomeTime($atHomeTime)
    {
        $this->atHomeTime             = $atHomeTime;
        $this->apiParas["atHomeTime"]  = $atHomeTime;
    }

    public function getAtHomeTime()
    {
        return $this->atHomeTime;
    }

    /**
     * @param string $assignerName
     * 工程师名
     * Required: true
     * Example Value: 
     */
    private $assignerName;

    /**
     * @param string $assignerName
     * 工程师名
     * Example Value: 
     */
    public function setAssignerName($assignerName)
    {
        $this->assignerName             = $assignerName;
        $this->apiParas["assignerName"]  = $assignerName;
    }

    public function getAssignerName()
    {
        return $this->assignerName;
    }

    /**
     * @param string $assignerTel
     * 工程师电话
     * Required: true
     * Example Value: 
     */
    private $assignerTel;

    /**
     * @param string $assignerTel
     * 工程师电话
     * Example Value: 
     */
    public function setAssignerTel($assignerTel)
    {
        $this->assignerTel             = $assignerTel;
        $this->apiParas["assignerTel"]  = $assignerTel;
    }

    public function getAssignerTel()
    {
        return $this->assignerTel;
    }

}