<?php

namespace JD\request;

/**
 * 操作.快车.指定单元新增关键词
 * 京准通-快车API-京准通快车相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=151&apiId=1386&apiName=jingdong.dsp.adkckeyword.newkeyword.insert
 * Class DspAdkckeywordNewkeywordInsert
 * @package Jd\request
 */
class DspAdkckeywordNewkeywordInsert
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.adkckeyword.newkeyword.insert";
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
     * @param String[] $name
     * 关键词
     * Required: true
     * Example Value: 
     */
    private $name;

    /**
     * @param String[] $name
     * 关键词
     * Example Value: 
     */
    public function setName($name)
    {
        $this->name             = $name;
        $this->apiParas["name"]  = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * @param String[] $price
     * 出价
     * Required: true
     * Example Value: 
     */
    private $price;

    /**
     * @param String[] $price
     * 出价
     * Example Value: 
     */
    public function setPrice($price)
    {
        $this->price             = $price;
        $this->apiParas["price"]  = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param Number[] $type
     * 购买类型：1.精确匹配4.短语匹配8.切词匹配
     * Required: true
     * Example Value: 
     */
    private $type;

    /**
     * @param Number[] $type
     * 购买类型：1.精确匹配4.短语匹配8.切词匹配
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