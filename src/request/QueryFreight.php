<?php

namespca Lostinfo\JosOpenApi;

/**
 * 采购商品运费接口
 * 京东万家API-对外提供万家系统的标准API接口，支持整个万家系统供应链的接口对接。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=352&apiId=2699&apiName=jingdong.queryFreight
 * Class QueryFreight
 * @package Jd\request
 */
class QueryFreight
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.queryFreight";
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
     * @param string $bizToken
     * bizToken
     * Required: true
     * Example Value: 
     */
    private $bizToken;

    /**
     * @param string $bizToken
     * bizToken
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
     * @param string $source
     * source
     * Required: true
     * Example Value: 
     */
    private $source;

    /**
     * @param string $source
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

    /**
     * @param int $projectId
     * projectId
     * Required: true
     * Example Value: 
     */
    private $projectId;

    /**
     * @param int $projectId
     * projectId
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
     * @param int $shopId
     * shopId
     * Required: true
     * Example Value: 
     */
    private $shopId;

    /**
     * @param int $shopId
     * shopId
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
     * @param string $skuInfo
     * 商品sku及数量json串    json数组字符串
     * Required: true
     * Example Value: [{sku:123,num:1},{sku:123,num:1}] 
     */
    private $skuInfo;

    /**
     * @param string $skuInfo
     * 商品sku及数量json串    json数组字符串
     * Example Value: [{sku:123,num:1},{sku:123,num:1}] 
     */
    public function setSkuInfo($skuInfo)
    {
        $this->skuInfo             = $skuInfo;
        $this->apiParas["skuInfo"]  = $skuInfo;
    }

    public function getSkuInfo()
    {
        return $this->skuInfo;
    }

}