<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 订单状态查询
 * 京东万家API-对外提供万家系统的标准API接口，支持整个万家系统供应链的接口对接。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=352&apiId=2674&apiName=jingdong.queryOrderBasicInfo
 * Class QueryOrderBasicInfo
 * @package Jd\request
 */
class QueryOrderBasicInfo
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.queryOrderBasicInfo";
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
     * 项目id
     * Required: true
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
     * @param int[] $orderList
     * 订单号
     * Required: true
     * Example Value: 
     */
    private $orderList;

    /**
     * @param int[] $orderList
     * 订单号
     * Example Value: 
     */
    public function setOrderList($orderList)
    {
        $this->orderList             = $orderList;
        $this->apiParas["orderList"]  = $orderList;
    }

    public function getOrderList()
    {
        return $this->orderList;
    }

    /**
     * @param int $orderType
     * 订单类型 0：采购订单 1：佣金订单 
     * Required: true
     * Example Value: 
     */
    private $orderType;

    /**
     * @param int $orderType
     * 订单类型 0：采购订单 1：佣金订单 
     * Example Value: 
     */
    public function setOrderType($orderType)
    {
        $this->orderType             = $orderType;
        $this->apiParas["orderType"]  = $orderType;
    }

    public function getOrderType()
    {
        return $this->orderType;
    }

    /**
     * @param int $index
     * 页码
     * Required: false
     * Example Value: 
     */
    private $index;

    /**
     * @param int $index
     * 页码
     * Example Value: 
     */
    public function setIndex($index)
    {
        $this->index             = $index;
        $this->apiParas["index"]  = $index;
    }

    public function getIndex()
    {
        return $this->index;
    }

    /**
     * @param int $pageSize
     * 每页数量
     * Required: false
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