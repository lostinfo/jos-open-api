<?php

namespace JD\request;

/**
 * 操作.快车.指定单元添加否定词
 * 京准通-快车API-京准通快车相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=151&apiId=1387&apiName=jingdong.dsp.adkckeyword.keywordnegative.add
 * Class DspAdkckeywordKeywordnegativeAdd
 * @package Jd\request
 */
class DspAdkckeywordKeywordnegativeAdd
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.adkckeyword.keywordnegative.add";
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
     * @param String[] $keywordName
     * 否定关键词名称
     * Required: true
     * Example Value: 
     */
    private $keywordName;

    /**
     * @param String[] $keywordName
     * 否定关键词名称
     * Example Value: 
     */
    public function setKeywordName($keywordName)
    {
        $this->keywordName             = $keywordName;
        $this->apiParas["keywordName"]  = $keywordName;
    }

    public function getKeywordName()
    {
        return $this->keywordName;
    }

    /**
     * @param Number $adGroupId
     * 单元id
     * Required: true
     * Example Value: 
     */
    private $adGroupId;

    /**
     * @param Number $adGroupId
     * 单元id
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