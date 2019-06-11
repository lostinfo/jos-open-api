<?php

namespca Lostinfo\JosOpenApi;

/**
 * 更新关键词
 * 京准通-快车API-京准通快车相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=151&apiId=1287&apiName=jingdong.dsp.adkcunit.keywords.update
 * Class DspAdkcunitKeywordsUpdate
 * @package Jd\request
 */
class DspAdkcunitKeywordsUpdate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.adkcunit.keywords.update";
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
     * @param string[] $name
     * 关键词名称
     * Required: true
     * Example Value: 
     */
    private $name;

    /**
     * @param string[] $name
     * 关键词名称
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
     * @param string[] $price
     * 关键词出价
     * Required: true
     * Example Value: 
     */
    private $price;

    /**
     * @param string[] $price
     * 关键词出价
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
     * @param int[] $type
     * 关键词类型:1精确匹配 4.短语匹配 8.切词包含
     * Required: true
     * Example Value: 
     */
    private $type;

    /**
     * @param int[] $type
     * 关键词类型:1精确匹配 4.短语匹配 8.切词包含
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

}