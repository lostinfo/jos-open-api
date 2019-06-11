<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 设备数据推送
 * 无忧下单API-无忧下单项目
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=376&apiId=3032&apiName=jingdong.prepushinformationdatatest
 * Class Prepushinformationdatatest
 * @package Jd\request
 */
class Prepushinformationdatatest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.prepushinformationdatatest";
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
     * 业务类型
     * Required: true
     * Example Value: 5
     */
    private $dataType;

    /**
     * @param int $dataType
     * 业务类型
     * Example Value: 5
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
     * 业务参数
     * Required: true
     * Example Value: {dataType:5}
     */
    private $jsonData;

    /**
     * @param string $jsonData
     * 业务参数
     * Example Value: {dataType:5}
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
     * 扩展参数
     * Required: false
     * Example Value: 空
     */
    private $extStr;

    /**
     * @param string $extStr
     * 扩展参数
     * Example Value: 空
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