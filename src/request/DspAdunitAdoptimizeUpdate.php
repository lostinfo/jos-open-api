<?php

namespca Lostinfo\JosOpenApi;

/**
 * 操作.聚效.修改创意优选状态
 * 京准通-品牌聚效API（展位）-京准通展位相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=341&apiId=2010&apiName=jingdong.dsp.adunit.adoptimize.update
 * Class DspAdunitAdoptimizeUpdate
 * @package Jd\request
 */
class DspAdunitAdoptimizeUpdate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.adunit.adoptimize.update";
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
     * @param int $id
     * 单元id
     * Required: true
     * Example Value: 
     */
    private $id;

    /**
     * @param int $id
     * 单元id
     * Example Value: 
     */
    public function setId($id)
    {
        $this->id             = $id;
        $this->apiParas["id"]  = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $adOptimize
     * 创意优选
     * Required: false
     * Example Value: 
     */
    private $adOptimize;

    /**
     * @param int $adOptimize
     * 创意优选
     * Example Value: 
     */
    public function setAdOptimize($adOptimize)
    {
        $this->adOptimize             = $adOptimize;
        $this->apiParas["adOptimize"]  = $adOptimize;
    }

    public function getAdOptimize()
    {
        return $this->adOptimize;
    }

}