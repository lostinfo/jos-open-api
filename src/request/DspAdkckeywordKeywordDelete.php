<?php

namespca Lostinfo\JosOpenApi;

/**
 * 操作.快车.删除指定单元关键词
 * 京准通-快车API-京准通快车相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=151&apiId=1392&apiName=jingdong.dsp.adkckeyword.keyword.delete
 * Class DspAdkckeywordKeywordDelete
 * @package Jd\request
 */
class DspAdkckeywordKeywordDelete
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.adkckeyword.keyword.delete";
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
     * 单元id
     * Required: true
     * Example Value: 
     */
    private $adGroupId;

    /**
     * @param int $adGroupId
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

    /**
     * @param string[] $keyWordsName
     * 关键词
     * Required: true
     * Example Value: 
     */
    private $keyWordsName;

    /**
     * @param string[] $keyWordsName
     * 关键词
     * Example Value: 
     */
    public function setKeyWordsName($keyWordsName)
    {
        $this->keyWordsName             = $keyWordsName;
        $this->apiParas["keyWordsName"]  = $keyWordsName;
    }

    public function getKeyWordsName()
    {
        return $this->keyWordsName;
    }

}