<?php

namespace JD\request;

/**
 * 查询商品详细信息
 * 京东万家API-对外提供万家系统的标准API接口，支持整个万家系统供应链的接口对接。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=352&apiId=2666&apiName=jingdong.queryProdInfo
 * Class QueryProdInfo
 * @package Jd\request
 */
class QueryProdInfo
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.queryProdInfo";
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
     * @param Number $shopId
     * 门店ID
     * Required: false
     * Example Value: 
     */
    private $shopId;

    /**
     * @param Number $shopId
     * 门店ID
     * Example Value: 
     */
    public function setShopId($shopId)
    {
        $this->shopId             = $shopId;
        $this->apiParas["shopId"]  = $shopId;
    }

    public function getShopId()
    {
        return $this->shopId;
    }

    /**
     * @param Number $projectId
     * 项目ID
     * Required: false
     * Example Value: 
     */
    private $projectId;

    /**
     * @param Number $projectId
     * 项目ID
     * Example Value: 
     */
    public function setProjectId($projectId)
    {
        $this->projectId             = $projectId;
        $this->apiParas["projectId"]  = $projectId;
    }

    public function getProjectId()
    {
        return $this->projectId;
    }

    /**
     * @param Number[] $skuList
     * sku实体
     * Required: true
     * Example Value: 
     */
    private $skuList;

    /**
     * @param Number[] $skuList
     * sku实体
     * Example Value: 
     */
    public function setSkuList($skuList)
    {
        $this->skuList             = $skuList;
        $this->apiParas["skuList"]  = $skuList;
    }

    public function getSkuList()
    {
        return $this->skuList;
    }

    /**
     * @param String $isProduct
     * 采购商品 true,佣金商品 false
     * Required: true
     * Example Value: 
     */
    private $isProduct;

    /**
     * @param String $isProduct
     * 采购商品 true,佣金商品 false
     * Example Value: 
     */
    public function setIsProduct($isProduct)
    {
        $this->isProduct             = $isProduct;
        $this->apiParas["isProduct"]  = $isProduct;
    }

    public function getIsProduct()
    {
        return $this->isProduct;
    }

    /**
     * @param String $bizToken
     * 认证token
     * Required: true
     * Example Value: 
     */
    private $bizToken;

    /**
     * @param String $bizToken
     * 认证token
     * Example Value: 
     */
    public function setBizToken($bizToken)
    {
        $this->bizToken             = $bizToken;
        $this->apiParas["bizToken"]  = $bizToken;
    }

    public function getBizToken()
    {
        return $this->bizToken;
    }

    /**
     * @param String $source
     * source
     * Required: true
     * Example Value: 
     */
    private $source;

    /**
     * @param String $source
     * source
     * Example Value: 
     */
    public function setSource($source)
    {
        $this->source             = $source;
        $this->apiParas["source"]  = $source;
    }

    public function getSource()
    {
        return $this->source;
    }

}