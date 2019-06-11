<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 墨盒数据推送接口
 * 无忧下单API-无忧下单项目
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=376&apiId=2858&apiName=jingdong.pushinformationdata
 * Class Pushinformationdata
 * @package Jd\request
 */
class Pushinformationdata
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pushinformationdata";
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
     * @param int $dataType
     * dataType
     * Required: true
     * Example Value: 
     */
    private $dataType;

    /**
     * @param int $dataType
     * dataType
     * Example Value: 
     */
    public function setDataType($dataType)
    {
        $this->dataType             = $dataType;
        $this->apiParas["dataType"]  = $dataType;
    }

    public function getDataType()
    {
        return $this->dataType;
    }

    /**
     * @param string $jsonData
     * jsonData
     * Required: true
     * Example Value: 
     */
    private $jsonData;

    /**
     * @param string $jsonData
     * jsonData
     * Example Value: 
     */
    public function setJsonData($jsonData)
    {
        $this->jsonData             = $jsonData;
        $this->apiParas["jsonData"]  = $jsonData;
    }

    public function getJsonData()
    {
        return $this->jsonData;
    }

    /**
     * @param string $extStr
     * extStr
     * Required: false
     * Example Value: 
     */
    private $extStr;

    /**
     * @param string $extStr
     * extStr
     * Example Value: 
     */
    public function setExtStr($extStr)
    {
        $this->extStr             = $extStr;
        $this->apiParas["extStr"]  = $extStr;
    }

    public function getExtStr()
    {
        return $this->extStr;
    }

}