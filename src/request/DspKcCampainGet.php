<?php

namespca Lostinfo\JosOpenApi;

/**
 * 查询.快车.计划信息（指定计划ID）
 * 京准通-快车API-京准通快车相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=151&apiId=1299&apiName=jingdong.dsp.kc.campain.get
 * Class DspKcCampainGet
 * @package Jd\request
 */
class DspKcCampainGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.kc.campain.get";
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
     * 计划ID
     * Required: true
     * Example Value: 
     */
    private $id;

    /**
     * @param int $id
     * 计划ID
     * Example Value: 
     */
    public function setId($id)
    {
        $this->id             = $id;
        $this->apiParas["campaignId"]  = $id;
    }

    public function getId()
    {
        return $this->id;
    }

}