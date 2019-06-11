<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 同步楼盘图片数据
 * 京东房产-京东房产
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=253&apiId=2721&apiName=jingdong.ers.fang.synHousesImgData
 * Class ErsFangSynHousesImgData
 * @package Jd\request
 */
class ErsFangSynHousesImgData
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ers.fang.synHousesImgData";
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
     * 楼盘图片信息
     * Required: true
     * Example Value: 
     */
    private $paramStrin;

    /**
     * @param string $paramStrin
     * 楼盘图片信息
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