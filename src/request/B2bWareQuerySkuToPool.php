<?php

namespace JD\request;

/**
 * 商品池下商品读服务
 * B2B开放API-B2B开放
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=391&apiId=3187&apiName=jingdong.b2b.ware.querySkuToPool
 * Class B2bWareQuerySkuToPool
 * @package Jd\request
 */
class B2bWareQuerySkuToPool
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.b2b.ware.querySkuToPool";
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
     * @param String $businessChannel
     * 业务渠道
     * Required: true
     * Example Value: 
     */
    private $businessChannel;

    /**
     * @param String $businessChannel
     * 业务渠道
     * Example Value: 
     */
    public function setBusinessChannel($businessChannel)
    {
        $this->businessChannel             = $businessChannel;
        $this->apiParas["businessChannel"]  = $businessChannel;
    }

    public function getBusinessChannel()
    {
        return $this->businessChannel;
    }

    /**
     * @param String $mappingId
     * 用户id
     * Required: true
     * Example Value: 
     */
    private $mappingId;

    /**
     * @param String $mappingId
     * 用户id
     * Example Value: 
     */
    public function setMappingId($mappingId)
    {
        $this->mappingId             = $mappingId;
        $this->apiParas["mappingId"]  = $mappingId;
    }

    public function getMappingId()
    {
        return $this->mappingId;
    }

    /**
     * @param Number $minJdSkuId
     * 最小skuId
     * Required: false
     * Example Value: 
     */
    private $minJdSkuId;

    /**
     * @param Number $minJdSkuId
     * 最小skuId
     * Example Value: 
     */
    public function setMinJdSkuId($minJdSkuId)
    {
        $this->minJdSkuId             = $minJdSkuId;
        $this->apiParas["minJdSkuId"]  = $minJdSkuId;
    }

    public function getMinJdSkuId()
    {
        return $this->minJdSkuId;
    }

    /**
     * @param Number $jdSkuId
     * 指定skuId
     * Required: false
     * Example Value: 
     */
    private $jdSkuId;

    /**
     * @param Number $jdSkuId
     * 指定skuId
     * Example Value: 
     */
    public function setJdSkuId($jdSkuId)
    {
        $this->jdSkuId             = $jdSkuId;
        $this->apiParas["jdSkuId"]  = $jdSkuId;
    }

    public function getJdSkuId()
    {
        return $this->jdSkuId;
    }

    /**
     * @param Number $totalItem
     * 记录总数
     * Required: false
     * Example Value: 
     */
    private $totalItem;

    /**
     * @param Number $totalItem
     * 记录总数
     * Example Value: 
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
     * 页码
     * Required: true
     * Example Value: 
     */
    private $pageNo;

    /**
     * @param Number $pageNo
     * 页码
     * Example Value: 
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
     * @param Number $totalPage
     * 总页数
     * Required: false
     * Example Value: 
     */
    private $totalPage;

    /**
     * @param Number $totalPage
     * 总页数
     * Example Value: 
     */
    public function setTotalPage($totalPage)
    {
        $this->totalPage             = $totalPage;
        $this->apiParas["totalPage"]  = $totalPage;
    }

    public function getTotalPage()
    {
        return $this->totalPage;
    }

    /**
     * @param Number $mappingType
     * 用户类型
     * Required: true
     * Example Value: 
     */
    private $mappingType;

    /**
     * @param Number $mappingType
     * 用户类型
     * Example Value: 
     */
    public function setMappingType($mappingType)
    {
        $this->mappingType             = $mappingType;
        $this->apiParas["mappingType"]  = $mappingType;
    }

    public function getMappingType()
    {
        return $this->mappingType;
    }

    /**
     * @param Number $pageSize
     * pageSize
     * Required: true
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * pageSize
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
     * @param String $b2bSkuToPoolQueryTypeEnum
     * 查询类型(1.NORMAL_PAGE_QUERY：(普通分页查询) 必传 b2bPoolId,pageNo,pageSize 2.QUERY_ALL_SKU_TO_POOL：(查询商品池下所有商品); 必传 b2bPoolId)
     * Required: true
     * Example Value: 
     */
    private $b2bSkuToPoolQueryTypeEnum;

    /**
     * @param String $b2bSkuToPoolQueryTypeEnum
     * 查询类型(1.NORMAL_PAGE_QUERY：(普通分页查询) 必传 b2bPoolId,pageNo,pageSize 2.QUERY_ALL_SKU_TO_POOL：(查询商品池下所有商品); 必传 b2bPoolId)
     * Example Value: 
     */
    public function setB2bSkuToPoolQueryTypeEnum($b2bSkuToPoolQueryTypeEnum)
    {
        $this->b2bSkuToPoolQueryTypeEnum             = $b2bSkuToPoolQueryTypeEnum;
        $this->apiParas["b2bSkuToPoolQueryTypeEnum"]  = $b2bSkuToPoolQueryTypeEnum;
    }

    public function getB2bSkuToPoolQueryTypeEnum()
    {
        return $this->b2bSkuToPoolQueryTypeEnum;
    }

    /**
     * @param Number $b2bPoolId
     * 商品池id
     * Required: true
     * Example Value: 
     */
    private $b2bPoolId;

    /**
     * @param Number $b2bPoolId
     * 商品池id
     * Example Value: 
     */
    public function setB2bPoolId($b2bPoolId)
    {
        $this->b2bPoolId             = $b2bPoolId;
        $this->apiParas["b2bPoolId"]  = $b2bPoolId;
    }

    public function getB2bPoolId()
    {
        return $this->b2bPoolId;
    }

}