<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 2B品牌商采购数据接口
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=2391&apiName=jingdong.wjBrand.query2BBuyData
 * Class WjBrandQuery2BBuyData
 * @package Jd\request
 */
class WjBrandQuery2BBuyData
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.wjBrand.query2BBuyData";
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
     * @param string $token
     * token
     * Required: true
     * Example Value: 
     */
    private $token;

    /**
     * @param string $token
     * token
     * Example Value: 
     */
    public function setToken($token)
    {
        $this->token             = $token;
        $this->apiParas["token"]  = $token;
    }

    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param string $brandId
     * 品牌商名称
     * Required: true
     * Example Value: 
     */
    private $brandId;

    /**
     * @param string $brandId
     * 品牌商名称
     * Example Value: 
     */
    public function setBrandId($brandId)
    {
        $this->brandId             = $brandId;
        $this->apiParas["brandId"]  = $brandId;
    }

    public function getBrandId()
    {
        return $this->brandId;
    }

    /**
     * @param string $skuId
     * sku商品id,多个商品用逗号分隔
     * Required: true
     * Example Value: 
     */
    private $skuId;

    /**
     * @param string $skuId
     * sku商品id,多个商品用逗号分隔
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
     * @param string $date
     * 查询日期
     * Required: true
     * Example Value: 
     */
    private $date;

    /**
     * @param string $date
     * 查询日期
     * Example Value: 
     */
    public function setDate($date)
    {
        $this->date             = $date;
        $this->apiParas["date"]  = $date;
    }

    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param int $startPage
     * 页索引，如果不分页则不传
     * Required: false
     * Example Value: 
     */
    private $startPage;

    /**
     * @param int $startPage
     * 页索引，如果不分页则不传
     * Example Value: 
     */
    public function setStartPage($startPage)
    {
        $this->startPage             = $startPage;
        $this->apiParas["startPage"]  = $startPage;
    }

    public function getStartPage()
    {
        return $this->startPage;
    }

    /**
     * @param int $pageSize
     * 每页展示页数，0或不分页则不传
     * Required: false
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 每页展示页数，0或不分页则不传
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

}