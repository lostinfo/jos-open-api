<?php

namespca Lostinfo\JosOpenApi;

/**
 * 关键词查询选品接口【申请】
 * 京东联盟API-查询推广产品，获取推广链接。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=117&apiId=2017&apiName=jingdong.union.search.goods.keyword.query
 * Class UnionSearchGoodsKeywordQuery
 * @package Jd\request
 */
class UnionSearchGoodsKeywordQuery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.union.search.goods.keyword.query";
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
     * @param int $cat2Id
     * 二级类目
     * Required: false
     * Example Value: 
     */
    private $cat2Id;

    /**
     * @param int $cat2Id
     * 二级类目
     * Example Value: 
     */
    public function setCat2Id($cat2Id)
    {
        $this->cat2Id             = $cat2Id;
        $this->apiParas["cat2Id"]  = $cat2Id;
    }

    public function getCat2Id()
    {
        return $this->cat2Id;
    }

    /**
     * @param int $cat3Id
     * 三级类目
     * Required: false
     * Example Value: 
     */
    private $cat3Id;

    /**
     * @param int $cat3Id
     * 三级类目
     * Example Value: 
     */
    public function setCat3Id($cat3Id)
    {
        $this->cat3Id             = $cat3Id;
        $this->apiParas["cat3Id"]  = $cat3Id;
    }

    public function getCat3Id()
    {
        return $this->cat3Id;
    }

    /**
     * @param string $keyword
     * 关键词
     * Required: false
     * Example Value: 
     */
    private $keyword;

    /**
     * @param string $keyword
     * 关键词
     * Example Value: 
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
     * @param int $pageIndex
     * 页码
     * Required: true
     * Example Value: 
     */
    private $pageIndex;

    /**
     * @param int $pageIndex
     * 页码
     * Example Value: 
     */
    public function setPageIndex($pageIndex)
    {
        $this->pageIndex             = $pageIndex;
        $this->apiParas["page_index"]  = $pageIndex;
    }

    public function getPageIndex()
    {
        return $this->pageIndex;
    }

    /**
     * @param int $pageSize
     * 每页数量
     * Required: true
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 每页数量
     * Example Value: 
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize             = $pageSize;
        $this->apiParas["page_size"]  = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * @param string $sortName
     * 排序字段[pcPrice pc价],[pcCommission pc佣金],[pcCommissionShare pc佣金比例],[inOrderCount30Days 30天引入订单量],[inOrderComm30Days 30天支出佣金]
     * Required: false
     * Example Value: 
     */
    private $sortName;

    /**
     * @param string $sortName
     * 排序字段[pcPrice pc价],[pcCommission pc佣金],[pcCommissionShare pc佣金比例],[inOrderCount30Days 30天引入订单量],[inOrderComm30Days 30天支出佣金]
     * Example Value: 
     */
    public function setSortName($sortName)
    {
        $this->sortName             = $sortName;
        $this->apiParas["sort_name"]  = $sortName;
    }

    public function getSortName()
    {
        return $this->sortName;
    }

    /**
     * @param string $sort
     * asc,desc升降序,默认降序
     * Required: false
     * Example Value: 
     */
    private $sort;

    /**
     * @param string $sort
     * asc,desc升降序,默认降序
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

}