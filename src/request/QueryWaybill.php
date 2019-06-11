<?php

namespace JD\request;

/**
 * 订单轨迹
 * 京东万家API-对外提供万家系统的标准API接口，支持整个万家系统供应链的接口对接。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=352&apiId=2665&apiName=jingdong.queryWaybill
 * Class QueryWaybill
 * @package Jd\request
 */
class QueryWaybill
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.queryWaybill";
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
     * @param Number[] $orderList
     * 订单数组
     * Required: true
     * Example Value: 
     */
    private $orderList;

    /**
     * @param Number[] $orderList
     * 订单数组
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
     * @param Number $orderType
     * 订单类型 0：采购订单 1：佣金订单
     * Required: true
     * Example Value: 
     */
    private $orderType;

    /**
     * @param Number $orderType
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
     * @param String $bizToken
     * Token
     * Required: true
     * Example Value: 
     */
    private $bizToken;

    /**
     * @param String $bizToken
     * Token
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