<?php

namespca Lostinfo\JosOpenApi;

/**
 * 采购商品库存
 * 京东万家API-对外提供万家系统的标准API接口，支持整个万家系统供应链的接口对接。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=352&apiId=2667&apiName=jingdong.queryPurchaseStock
 * Class QueryPurchaseStock
 * @package Jd\request
 */
class QueryPurchaseStock
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.queryPurchaseStock";
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
     * @param int $projectId
     * 项目ID
     * Required: true
     * Example Value: 
     */
    private $projectId;

    /**
     * @param int $projectId
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
     * @param int $shopId
     * 店铺ID
     * Required: true
     * Example Value: 
     */
    private $shopId;

    /**
     * @param int $shopId
     * 店铺ID
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
     * @param int[] $skuList
     * sku数组
     * Required: true
     * Example Value: 
     */
    private $skuList;

    /**
     * @param int[] $skuList
     * sku数组
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

}