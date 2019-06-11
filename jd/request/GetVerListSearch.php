<?php

namespace JD\request;

/**
 * 获取核销记录
 * 阿尔法API-阿尔法系统
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=191&apiId=1506&apiName=jingdong.getVerList.search
 * Class GetVerListSearch
 * @package Jd\request
 */
class GetVerListSearch
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.getVerList.search";
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
     * @param Number $appType
     * 三方平台id
     * Required: true
     * Example Value: 
     */
    private $appType;

    /**
     * @param Number $appType
     * 三方平台id
     * Example Value: 
     */
    public function setAppType($appType)
    {
        $this->appType             = $appType;
        $this->apiParas["appType"]  = $appType;
    }

    public function getAppType()
    {
        return $this->appType;
    }

    /**
     * @param String $appUserId
     * 三方平台师傅id
     * Required: true
     * Example Value: 
     */
    private $appUserId;

    /**
     * @param String $appUserId
     * 三方平台师傅id
     * Example Value: 
     */
    public function setAppUserId($appUserId)
    {
        $this->appUserId             = $appUserId;
        $this->apiParas["appUserId"]  = $appUserId;
    }

    public function getAppUserId()
    {
        return $this->appUserId;
    }

    /**
     * @param Number $pageNo
     * 第几页
     * Required: false
     * Example Value: 
     */
    private $pageNo;

    /**
     * @param Number $pageNo
     * 第几页
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
     * @param Number $pageSize
     * 每页几条数据
     * Required: false
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 每页几条数据
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
     * @param Number $orderId
     * 订单ID
     * Required: false
     * Example Value: 
     */
    private $orderId;

    /**
     * @param Number $orderId
     * 订单ID
     * Example Value: 
     */
    public function setOrderId($orderId)
    {
        $this->orderId             = $orderId;
        $this->apiParas["orderId"]  = $orderId;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

}