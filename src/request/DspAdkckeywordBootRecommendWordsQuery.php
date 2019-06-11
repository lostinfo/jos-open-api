<?php

namespace JD\request;

/**
 * 核心拓词查询
 * 京准通-快车API-京准通快车相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=151&apiId=3553&apiName=jingdong.dsp.adkckeyword.boot.recommend.words.query
 * Class DspAdkckeywordBootRecommendWordsQuery
 * @package Jd\request
 */
class DspAdkckeywordBootRecommendWordsQuery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.adkckeyword.boot.recommend.words.query";
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
     * @param String $keyword
     * 查询关键词
     * Required: true
     * Example Value: apple
     */
    private $keyword;

    /**
     * @param String $keyword
     * 查询关键词
     * Example Value: apple
     */
    public function setKeyword($keyword)
    {
        $this->keyword             = $keyword;
        $this->apiParas["keyword"]  = $keyword;
    }

    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * @param Number $order
     * 排序方式，0：升序，1：降序
     * Required: true
     * Example Value: 0
     */
    private $order;

    /**
     * @param Number $order
     * 排序方式，0：升序，1：降序
     * Example Value: 0
     */
    public function setOrder($order)
    {
        $this->order             = $order;
        $this->apiParas["order"]  = $order;
    }

    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param Number $sortType
     * 排序类型，1：搜索量，2：平均出价，3：竞争激烈程度，5：点击率，6：点击转化率
     * Required: true
     * Example Value: 1
     */
    private $sortType;

    /**
     * @param Number $sortType
     * 排序类型，1：搜索量，2：平均出价，3：竞争激烈程度，5：点击率，6：点击转化率
     * Example Value: 1
     */
    public function setSortType($sortType)
    {
        $this->sortType             = $sortType;
        $this->apiParas["sortType"]  = $sortType;
    }

    public function getSortType()
    {
        return $this->sortType;
    }

}