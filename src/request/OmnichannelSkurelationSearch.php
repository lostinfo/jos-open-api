<?php

namespace JD\request;

/**
 * sku对应关系查询
 * 全渠道开放平台API-全渠道开放平台API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=244&apiId=3186&apiName=jingdong.omnichannel.skurelation.search
 * Class OmnichannelSkurelationSearch
 * @package Jd\request
 */
class OmnichannelSkurelationSearch
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.omnichannel.skurelation.search";
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
     * @param Number $totalItem
     * 总条数
     * Required: false
     * Example Value: 0
     */
    private $totalItem;

    /**
     * @param Number $totalItem
     * 总条数
     * Example Value: 0
     */
    public function setTotalItem($totalItem)
    {
        $this->totalItem             = $totalItem;
        $this->apiParas["totalItem"]  = $totalItem;
    }

    public function getTotalItem()
    {
        return $this->totalItem;
    }

    /**
     * @param Number $pageNo
     * 页数
     * Required: true
     * Example Value: 1
     */
    private $pageNo;

    /**
     * @param Number $pageNo
     * 页数
     * Example Value: 1
     */
    public function setPageNo($pageNo)
    {
        $this->pageNo             = $pageNo;
        $this->apiParas["pageNo"]  = $pageNo;
    }

    public function getPageNo()
    {
        return $this->pageNo;
    }

    /**
     * @param Number $pageSize
     * 每页数量 最多100条，大于100 默认返回100
     * Required: true
     * Example Value: 100
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 每页数量 最多100条，大于100 默认返回100
     * Example Value: 100
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize             = $pageSize;
        $this->apiParas["pageSize"]  = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

}