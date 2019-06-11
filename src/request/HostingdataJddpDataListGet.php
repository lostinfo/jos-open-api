<?php

namespace JD\request;

/**
 * 下载
 * 云海API-云海数据开放平台支持API  data.jd.com
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=70&apiId=312&apiName=jingdong.hostingdata.jddp.data.list.get
 * Class HostingdataJddpDataListGet
 * @package Jd\request
 */
class HostingdataJddpDataListGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.hostingdata.jddp.data.list.get";
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
     * @param String $sqlId
     * 查询的sql语句ID
     * Required: true
     * Example Value: 22
     */
    private $sqlId;

    /**
     * @param String $sqlId
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
     * @param String $parameter
     * sql语句的参数，形式为paramName1=value1,paramName2=value2,....的字符串，多条以,分隔
     * Required: false
     * Example Value: name=joy,age=11
     */
    private $parameter;

    /**
     * @param String $parameter
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

}