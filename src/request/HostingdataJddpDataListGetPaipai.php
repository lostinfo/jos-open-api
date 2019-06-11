<?php

namespca Lostinfo\JosOpenApi;

/**
 * 云海ISV结果表的数据下载
 * 云海API-云海数据开放平台支持API  data.jd.com
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=70&apiId=1016&apiName=jingdong.hostingdata.jddp.data.list.get.paipai
 * Class HostingdataJddpDataListGetPaipai
 * @package Jd\request
 */
class HostingdataJddpDataListGetPaipai
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.hostingdata.jddp.data.list.get.paipai";
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
     * @param string $sqlId
     * 查询的sql语句ID
     * Required: true
     * Example Value: 22
     */
    private $sqlId;

    /**
     * @param string $sqlId
     * 查询的sql语句ID
     * Example Value: 22
     */
    public function setSqlId($sqlId)
    {
        $this->sqlId             = $sqlId;
        $this->apiParas["sqlId"]  = $sqlId;
    }

    public function getSqlId()
    {
        return $this->sqlId;
    }

    /**
     * @param string $parameter
     * sql语句的参数，形式为paramName1=value1,paramName2=value2,....的字符串，多条以,分隔
     * Required: false
     * Example Value: name=joy,age=11
     */
    private $parameter;

    /**
     * @param string $parameter
     * sql语句的参数，形式为paramName1=value1,paramName2=value2,....的字符串，多条以,分隔
     * Example Value: name=joy,age=11
     */
    public function setParameter($parameter)
    {
        $this->parameter             = $parameter;
        $this->apiParas["parameter"]  = $parameter;
    }

    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * @param string $pin
     * 商家Pin
     * Required: true
     * Example Value: 
     */
    private $pin;

    /**
     * @param string $pin
     * 商家Pin
     * Example Value: 
     */
    public function setPin($pin)
    {
        $this->pin             = $pin;
        $this->apiParas["pin"]  = $pin;
    }

    public function getPin()
    {
        return $this->pin;
    }

    /**
     * @param string $venderId
     * 商家ID
     * Required: true
     * Example Value: 
     */
    private $venderId;

    /**
     * @param string $venderId
     * 商家ID
     * Example Value: 
     */
    public function setVenderId($venderId)
    {
        $this->venderId             = $venderId;
        $this->apiParas["venderId"]  = $venderId;
    }

    public function getVenderId()
    {
        return $this->venderId;
    }

}