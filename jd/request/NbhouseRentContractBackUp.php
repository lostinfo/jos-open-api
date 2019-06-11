<?php

namespace JD\request;

/**
 * 监管-合同备案接口
 * 京东房产-京东房产
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=253&apiId=3241&apiName=jingdong.nbhouse.rent.contractBackUp
 * Class NbhouseRentContractBackUp
 * @package Jd\request
 */
class NbhouseRentContractBackUp
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.nbhouse.rent.contractBackUp";
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
     * @param String $paramStrin
     * 请求参数
     * Required: true
     * Example Value: 
     */
    private $paramStrin;

    /**
     * @param String $paramStrin
     * 请求参数
     * Example Value: 
     */
    public function setParamStrin($paramStrin)
    {
        $this->paramStrin             = $paramStrin;
        $this->apiParas["paramStrin"]  = $paramStrin;
    }

    public function getParamStrin()
    {
        return $this->paramStrin;
    }

}