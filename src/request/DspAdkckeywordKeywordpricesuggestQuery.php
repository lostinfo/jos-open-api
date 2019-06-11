<?php

namespace JD\request;

/**
 * 查询.快车.关键词出价建议
 * 京准通-快车API-京准通快车相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=151&apiId=1391&apiName=jingdong.dsp.adkckeyword.keywordpricesuggest.query
 * Class DspAdkckeywordKeywordpricesuggestQuery
 * @package Jd\request
 */
class DspAdkckeywordKeywordpricesuggestQuery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.adkckeyword.keywordpricesuggest.query";
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
     * @param String $key
     * 关键词
     * Required: true
     * Example Value: 
     */
    private $key;

    /**
     * @param String $key
     * 关键词
     * Example Value: 
     */
    public function setKey($key)
    {
        $this->key             = $key;
        $this->apiParas["key"]  = $key;
    }

    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param String $mobileType
     * 设备类型 0.PC 1.无线
     * Required: true
     * Example Value: 
     */
    private $mobileType;

    /**
     * @param String $mobileType
     * 设备类型 0.PC 1.无线
     * Example Value: 
     */
    public function setMobileType($mobileType)
    {
        $this->mobileType             = $mobileType;
        $this->apiParas["mobileType"]  = $mobileType;
    }

    public function getMobileType()
    {
        return $this->mobileType;
    }

}