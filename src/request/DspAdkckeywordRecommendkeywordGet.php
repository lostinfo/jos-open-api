<?php

namespace JD\request;

/**
 * 查询.快车.根据SKUID获取推荐关键词
 * 京准通-快车API-京准通快车相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=151&apiId=1308&apiName=jingdong.dsp.adkckeyword.recommendkeyword.get
 * Class DspAdkckeywordRecommendkeywordGet
 * @package Jd\request
 */
class DspAdkckeywordRecommendkeywordGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.adkckeyword.recommendkeyword.get";
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
     * @param Number $skuId
     * skuId
     * Required: true
     * Example Value: 
     */
    private $skuId;

    /**
     * @param Number $skuId
     * skuId
     * Example Value: 
     */
    public function setSkuId($skuId)
    {
        $this->skuId             = $skuId;
        $this->apiParas["skuId"]  = $skuId;
    }

    public function getSkuId()
    {
        return $this->skuId;
    }

    /**
     * @param Number $searchType
     * 查询范围 1.按整体查询/2.按无线端查询/3.按PC端查询
     * Required: true
     * Example Value: 
     */
    private $searchType;

    /**
     * @param Number $searchType
     * 查询范围 1.按整体查询/2.按无线端查询/3.按PC端查询
     * Example Value: 
     */
    public function setSearchType($searchType)
    {
        $this->searchType             = $searchType;
        $this->apiParas["searchType"]  = $searchType;
    }

    public function getSearchType()
    {
        return $this->searchType;
    }

    /**
     * @param Number $order
     * 排序方式 0.正序/1.倒序
     * Required: true
     * Example Value: 
     */
    private $order;

    /**
     * @param Number $order
     * 排序方式 0.正序/1.倒序
     * Example Value: 
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
     * 排序方式 1.按搜索量排序/2.按平均出价排序/3.按竞争激烈程度排序
     * Required: true
     * Example Value: 
     */
    private $sortType;

    /**
     * @param Number $sortType
     * 排序方式 1.按搜索量排序/2.按平均出价排序/3.按竞争激烈程度排序
     * Example Value: 
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

    /**
     * @param Number $keyWordType
     * 关键词来源 1.商品关键词/2.相似商品关键词/3.行业热词
     * Required: true
     * Example Value: 
     */
    private $keyWordType;

    /**
     * @param Number $keyWordType
     * 关键词来源 1.商品关键词/2.相似商品关键词/3.行业热词
     * Example Value: 
     */
    public function setKeyWordType($keyWordType)
    {
        $this->keyWordType             = $keyWordType;
        $this->apiParas["keyWordType"]  = $keyWordType;
    }

    public function getKeyWordType()
    {
        return $this->keyWordType;
    }

}