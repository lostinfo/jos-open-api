<?php

namespca Lostinfo\JosOpenApi;

/**
 * 获取拼购商品接口
 * 京东联盟API-查询推广产品，获取推广链接。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=117&apiId=2145&apiName=jingdong.union.search.goods.param.query
 * Class UnionSearchGoodsParamQuery
 * @package Jd\request
 */
class UnionSearchGoodsParamQuery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.union.search.goods.param.query";
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
     * @param int $cat1Id
     * 一级类目
     * Required: false
     * Example Value: 
     */
    private $cat1Id;

    /**
     * @param int $cat1Id
     * 一级类目
     * Example Value: 
     */
    public function setCat1Id($cat1Id)
    {
        $this->cat1Id             = $cat1Id;
        $this->apiParas["cat1Id"]  = $cat1Id;
    }

    public function getCat1Id()
    {
        return $this->cat1Id;
    }

    /**
     * @param string $owner
     * 商品类型：自营[g]，POP[p]
     * Required: false
     * Example Value: 
     */
    private $owner;

    /**
     * @param string $owner
     * 商品类型：自营[g]，POP[p]
     * Example Value: 
     */
    public function setOwner($owner)
    {
        $this->owner             = $owner;
        $this->apiParas["owner"]  = $owner;
    }

    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @param int $pageIndex
     * 页码(不支持和skuIds同时查询)
     * Required: true
     * Example Value: 
     */
    private $pageIndex;

    /**
     * @param int $pageIndex
     * 页码(不支持和skuIds同时查询)
     * Example Value: 
     */
    public function setPageIndex($pageIndex)
    {
        $this->pageIndex             = $pageIndex;
        $this->apiParas["pageIndex"]  = $pageIndex;
    }

    public function getPageIndex()
    {
        return $this->pageIndex;
    }

    /**
     * @param int $pageSize
     * 每页数量(不支持和skuIds同时查询)
     * Required: true
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 每页数量(不支持和skuIds同时查询)
     * Example Value: 
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

    /**
     * @param string $sortName
     * 排序字段：无线佣金比例[wlCommissionShare]，商品评价数[comments]，商品好评率[goodCommentsShare](不支持和skuIds同时查询)
     * Required: false
     * Example Value: 
     */
    private $sortName;

    /**
     * @param string $sortName
     * 排序字段：无线佣金比例[wlCommissionShare]，商品评价数[comments]，商品好评率[goodCommentsShare](不支持和skuIds同时查询)
     * Example Value: 
     */
    public function setSortName($sortName)
    {
        $this->sortName             = $sortName;
        $this->apiParas["sortName"]  = $sortName;
    }

    public function getSortName()
    {
        return $this->sortName;
    }

    /**
     * @param string $sort
     * asc、desc升降序(不支持和skuIds同时查询)
     * Required: false
     * Example Value: 
     */
    private $sort;

    /**
     * @param string $sort
     * asc、desc升降序(不支持和skuIds同时查询)
     * Example Value: 
     */
    public function setSort($sort)
    {
        $this->sort             = $sort;
        $this->apiParas["sort"]  = $sort;
    }

    public function getSort()
    {
        return $this->sort;
    }

    /**
     * @param int[] $skuIds
     * skuid集合(一次最多支持查询100个sku)
     * Required: false
     * Example Value: 
     */
    private $skuIds;

    /**
     * @param int[] $skuIds
     * skuid集合(一次最多支持查询100个sku)
     * Example Value: 
     */
    public function setSkuIds($skuIds)
    {
        $this->skuIds             = $skuIds;
        $this->apiParas["skuIds"]  = $skuIds;
    }

    public function getSkuIds()
    {
        return $this->skuIds;
    }

    /**
     * @param int $pingouPriceStart
     * 拼购价格区间开始
     * Required: false
     * Example Value: 
     */
    private $pingouPriceStart;

    /**
     * @param int $pingouPriceStart
     * 拼购价格区间开始
     * Example Value: 
     */
    public function setPingouPriceStart($pingouPriceStart)
    {
        $this->pingouPriceStart             = $pingouPriceStart;
        $this->apiParas["pingouPriceStart"]  = $pingouPriceStart;
    }

    public function getPingouPriceStart()
    {
        return $this->pingouPriceStart;
    }

    /**
     * @param int $pingouPriceEnd
     * 拼购价格区间结束
     * Required: false
     * Example Value: 
     */
    private $pingouPriceEnd;

    /**
     * @param int $pingouPriceEnd
     * 拼购价格区间结束
     * Example Value: 
     */
    public function setPingouPriceEnd($pingouPriceEnd)
    {
        $this->pingouPriceEnd             = $pingouPriceEnd;
        $this->apiParas["pingouPriceEnd"]  = $pingouPriceEnd;
    }

    public function getPingouPriceEnd()
    {
        return $this->pingouPriceEnd;
    }

    /**
     * @param int $wlCommissionShareStart
     * 无线佣金比例区间开始
     * Required: false
     * Example Value: 
     */
    private $wlCommissionShareStart;

    /**
     * @param int $wlCommissionShareStart
     * 无线佣金比例区间开始
     * Example Value: 
     */
    public function setWlCommissionShareStart($wlCommissionShareStart)
    {
        $this->wlCommissionShareStart             = $wlCommissionShareStart;
        $this->apiParas["wlCommissionShareStart"]  = $wlCommissionShareStart;
    }

    public function getWlCommissionShareStart()
    {
        return $this->wlCommissionShareStart;
    }

    /**
     * @param int $wlCommissionShareEnd
     * 无线佣金比例区间结束
     * Required: false
     * Example Value: 
     */
    private $wlCommissionShareEnd;

    /**
     * @param int $wlCommissionShareEnd
     * 无线佣金比例区间结束
     * Example Value: 
     */
    public function setWlCommissionShareEnd($wlCommissionShareEnd)
    {
        $this->wlCommissionShareEnd             = $wlCommissionShareEnd;
        $this->apiParas["wlCommissionShareEnd"]  = $wlCommissionShareEnd;
    }

    public function getWlCommissionShareEnd()
    {
        return $this->wlCommissionShareEnd;
    }

}