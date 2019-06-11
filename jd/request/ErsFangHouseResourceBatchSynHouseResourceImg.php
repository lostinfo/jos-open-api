<?php

namespace JD\request;

/**
 * 批量同步房源下的所有图片
 * 京东房产-京东房产
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=253&apiId=2929&apiName=jingdong.ers.fang.houseResource.batchSynHouseResourceImg
 * Class ErsFangHouseResourceBatchSynHouseResourceImg
 * @package Jd\request
 */
class ErsFangHouseResourceBatchSynHouseResourceImg
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ers.fang.houseResource.batchSynHouseResourceImg";
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
     * 图片信息
     * Required: true
     * Example Value: 
     */
    private $paramStrin;

    /**
     * @param String $paramStrin
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