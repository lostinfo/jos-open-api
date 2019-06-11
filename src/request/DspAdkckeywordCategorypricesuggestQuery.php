<?php

namespace JD\request;

/**
 * 查询.快车.三级类目出价建议
 * 京准通-快车API-京准通快车相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=151&apiId=1390&apiName=jingdong.dsp.adkckeyword.categorypricesuggest.query
 * Class DspAdkckeywordCategorypricesuggestQuery
 * @package Jd\request
 */
class DspAdkckeywordCategorypricesuggestQuery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.adkckeyword.categorypricesuggest.query";
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
     * @param Number $type
     * type
     * Required: true
     * Example Value: 
     */
    private $type;

    /**
     * @param Number $type
     * type
     * Example Value: 
     */
    public function setType($type)
    {
        $this->type             = $type;
        $this->apiParas["type"]  = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    /**
     * @param String $key
     * 三级类目ID
     * Required: true
     * Example Value: 
     */
    private $key;

    /**
     * @param String $key
     * 三级类目ID
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