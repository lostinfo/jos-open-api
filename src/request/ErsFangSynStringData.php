<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * synStringData
 * 京东房产-京东房产
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=253&apiId=2713&apiName=jingdong.ers.fang.synStringData
 * Class ErsFangSynStringData
 * @package Jd\request
 */
class ErsFangSynStringData
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ers.fang.synStringData";
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
     * @param string $paramStrin
     * 图片信息
     * Required: true
     * Example Value: 
     */
    private $paramStrin;

    /**
     * @param string $paramStrin
     * 图片信息
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