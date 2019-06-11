<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 操作.聚效.新增创意
 * 京准通-品牌聚效API（展位）-京准通展位相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=341&apiId=868&apiName=jingdong.dsp.featured.addad
 * Class DspFeaturedAddad
 * @package Jd\request
 */
class DspFeaturedAddad
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.featured.addad";
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
     * @param string $materialStr
     * 素材ID 多个ID用 ,隔开
     * Required: true
     * Example Value: 
     */
    private $materialStr;

    /**
     * @param string $materialStr
     * 素材ID 多个ID用 ,隔开
     * Example Value: 
     */
    public function setMaterialStr($materialStr)
    {
        $this->materialStr             = $materialStr;
        $this->apiParas["materialStr"]  = $materialStr;
    }

    public function getMaterialStr()
    {
        return $this->materialStr;
    }

    /**
     * @param int $adGroupId
     * 单元ID
     * Required: true
     * Example Value: 
     */
    private $adGroupId;

    /**
     * @param int $adGroupId
     * 单元ID
     * Example Value: 
     */
    public function setAdGroupId($adGroupId)
    {
        $this->adGroupId             = $adGroupId;
        $this->apiParas["adGroupId"]  = $adGroupId;
    }

    public function getAdGroupId()
    {
        return $this->adGroupId;
    }

}