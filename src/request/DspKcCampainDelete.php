<?php

namespace JD\request;

/**
 * 操作.快车.删除计划
 * 京准通-快车API-京准通快车相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=151&apiId=1408&apiName=jingdong.dsp.kc.campain.delete
 * Class DspKcCampainDelete
 * @package Jd\request
 */
class DspKcCampainDelete
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.kc.campain.delete";
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
     * @param Number[] $id
     * 计划ID
     * Required: true
     * Example Value: 
     */
    private $id;

    /**
     * @param Number[] $id
     * 计划ID
     * Example Value: 
     */
    public function setId($id)
    {
        $this->id             = $id;
        $this->apiParas["compaignId"]  = $id;
    }

    public function getId()
    {
        return $this->id;
    }

}