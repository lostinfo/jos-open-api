<?php

namespca Lostinfo\JosOpenApi;

/**
 * 获取评价
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=2046&apiName=jingdong.edi.sdv.customer.evaluation.search
 * Class EdiSdvCustomerEvaluationSearch
 * @package Jd\request
 */
class EdiSdvCustomerEvaluationSearch
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.edi.sdv.customer.evaluation.search";
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
     * @param string $sku
     * 商品编码
     * Required: true
     * Example Value: 
     */
    private $sku;

    /**
     * @param string $sku
     * 商品编码
     * Example Value: 
     */
    public function setSku($sku)
    {
        $this->sku             = $sku;
        $this->apiParas["sku"]  = $sku;
    }

    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param int $score
     * 评价类型
     * Required: true
     * Example Value: 
     */
    private $score;

    /**
     * @param int $score
     * 评价类型
     * Example Value: 
     */
    public function setScore($score)
    {
        $this->score             = $score;
        $this->apiParas["score"]  = $score;
    }

    public function getScore()
    {
        return $this->score;
    }

    /**
     * @param int $sortType
     * 排序方式
     * Required: true
     * Example Value: 
     */
    private $sortType;

    /**
     * @param int $sortType
     * 排序方式
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
     * @param int $page
     * 页号
     * Required: true
     * Example Value: 
     */
    private $page;

    /**
     * @param int $page
     * 页号
     * Example Value: 
     */
    public function setPage($page)
    {
        $this->page             = $page;
        $this->apiParas["page"]  = $page;
    }

    public function getPage()
    {
        return $this->page;
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
        $this->apiParas["pageSize"]  = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * @param string $jdUsername
     * 用户名
     * Required: true
     * Example Value: 
     */
    private $jdUsername;

    /**
     * @param string $jdUsername
     * 用户名
     * Example Value: 
     */
    public function setJdUsername($jdUsername)
    {
        $this->jdUsername             = $jdUsername;
        $this->apiParas["pin"]  = $jdUsername;
    }

    public function getJdUsername()
    {
        return $this->jdUsername;
    }

}