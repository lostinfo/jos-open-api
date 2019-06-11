<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 查询京东价
 * 京东万家API-对外提供万家系统的标准API接口，支持整个万家系统供应链的接口对接。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=352&apiId=2590&apiName=jingdong.queryJDPrice
 * Class QueryJDPrice
 * @package Jd\request
 */
class QueryJDPrice
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.queryJDPrice";
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
     * @param int $shopId
     * 门店id
     * Required: false
     * Example Value: 
     */
    private $shopId;

    /**
     * @param int $shopId
     * 门店id
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
     * @param int $projectId
     * 项目id
     * Required: false
     * Example Value: 
     */
    private $projectId;

    /**
     * @param int $projectId
     * 项目id
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
     * @param int[] $skuidList
     * 商品集合
     * Required: true
     * Example Value: 
     */
    private $skuidList;

    /**
     * @param int[] $skuidList
     * 商品集合
     * Example Value: 
     */
    public function setSkuidList($skuidList)
    {
        $this->skuidList             = $skuidList;
        $this->apiParas["skuidList"]  = $skuidList;
    }

    public function getSkuidList()
    {
        return $this->skuidList;
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