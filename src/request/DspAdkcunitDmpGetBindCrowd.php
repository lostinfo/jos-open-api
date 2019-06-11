<?php

namespca Lostinfo\JosOpenApi;

/**
 * 查询.快车.单元绑定人群信息
 * 京准通-快车API-京准通快车相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=151&apiId=1605&apiName=jingdong.dsp.adkcunit.dmp.getBindCrowd
 * Class DspAdkcunitDmpGetBindCrowd
 * @package Jd\request
 */
class DspAdkcunitDmpGetBindCrowd
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.adkcunit.dmp.getBindCrowd";
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

    /**
     * @param int $displayType
     * 类型:1推荐(RECOMMEND)，2搜索(SEARCH)，3CPM(CPM)，4信息流广告(INFORMATIONFLOW)
     * Required: true
     * Example Value: 
     */
    private $displayType;

    /**
     * @param int $displayType
     * 类型:1推荐(RECOMMEND)，2搜索(SEARCH)，3CPM(CPM)，4信息流广告(INFORMATIONFLOW)
     * Example Value: 
     */
    public function setDisplayType($displayType)
    {
        $this->displayType             = $displayType;
        $this->apiParas["displayType"]  = $displayType;
    }

    public function getDisplayType()
    {
        return $this->displayType;
    }

}