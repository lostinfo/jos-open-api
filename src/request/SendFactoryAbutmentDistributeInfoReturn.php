<?php

namespca Lostinfo\JosOpenApi;

/**
 * 分配网点状态回传接口
 * 大家电服务API-供应商系统，大家电售后维修工单服务处理
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=136&apiId=1923&apiName=jingdong.sendFactoryAbutmentDistributeInfoReturn
 * Class SendFactoryAbutmentDistributeInfoReturn
 * @package Jd\request
 */
class SendFactoryAbutmentDistributeInfoReturn
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.sendFactoryAbutmentDistributeInfoReturn";
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
     * @param string $distributeTime
     * 派工时间
     * Required: true
     * Example Value: 
     */
    private $distributeTime;

    /**
     * @param string $distributeTime
     * 派工时间
     * Example Value: 
     */
    public function setDistributeTime($distributeTime)
    {
        $this->distributeTime             = $distributeTime;
        $this->apiParas["distributeTime"]  = $distributeTime;
    }

    public function getDistributeTime()
    {
        return $this->distributeTime;
    }

    /**
     * @param string $distributeOutletsName
     * 工程师名
     * Required: true
     * Example Value: 
     */
    private $distributeOutletsName;

    /**
     * @param string $distributeOutletsName
     * 工程师名
     * Example Value: 
     */
    public function setDistributeOutletsName($distributeOutletsName)
    {
        $this->distributeOutletsName             = $distributeOutletsName;
        $this->apiParas["distributeOutletsName"]  = $distributeOutletsName;
    }

    public function getDistributeOutletsName()
    {
        return $this->distributeOutletsName;
    }

    /**
     * @param string $distributeOutletsPhone
     * 工程师电话
     * Required: true
     * Example Value: 
     */
    private $distributeOutletsPhone;

    /**
     * @param string $distributeOutletsPhone
     * 工程师电话
     * Example Value: 
     */
    public function setDistributeOutletsPhone($distributeOutletsPhone)
    {
        $this->distributeOutletsPhone             = $distributeOutletsPhone;
        $this->apiParas["distributeOutletsPhone"]  = $distributeOutletsPhone;
    }

    public function getDistributeOutletsPhone()
    {
        return $this->distributeOutletsPhone;
    }

}