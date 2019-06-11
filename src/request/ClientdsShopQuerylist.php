<?php

namespace JD\request;

/**
 * 店铺咨询会话信息
 * 店铺API-京东店铺API，包含提供商家、商家店铺基本信息及店内分类操作查询等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=88&apiId=3039&apiName=jingdong.clientds.shop.querylist
 * Class ClientdsShopQuerylist
 * @package Jd\request
 */
class ClientdsShopQuerylist
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.clientds.shop.querylist";
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
     * @param String $account
     * 请求发起方账号pin
     * Required: true
     * Example Value: pin
     */
    private $account;

    /**
     * @param String $account
     * 请求发起方账号pin
     * Example Value: pin
     */
    public function setAccount($account)
    {
        $this->account             = $account;
        $this->apiParas["account"]  = $account;
    }

    public function getAccount()
    {
        return $this->account;
    }

    /**
     * @param String $aid
     * 登录咚咚成功后下发的Aid即Token
     * Required: true
     * Example Value: aid
     */
    private $aid;

    /**
     * @param String $aid
     * 登录咚咚成功后下发的Aid即Token
     * Example Value: aid
     */
    public function setAid($aid)
    {
        $this->aid             = $aid;
        $this->apiParas["aid"]  = $aid;
    }

    public function getAid()
    {
        return $this->aid;
    }

    /**
     * @param String $appId
     * 咚咚的Appid标识
     * Required: true
     * Example Value: jd.waiter
     */
    private $appId;

    /**
     * @param String $appId
     * 咚咚的Appid标识
     * Example Value: jd.waiter
     */
    public function setAppId($appId)
    {
        $this->appId             = $appId;
        $this->apiParas["appId"]  = $appId;
    }

    public function getAppId()
    {
        return $this->appId;
    }

    /**
     * @param String $clientType
     * 咚咚的客户端类型标识
     * Required: true
     * Example Value: pc
     */
    private $clientType;

    /**
     * @param String $clientType
     * 咚咚的客户端类型标识
     * Example Value: pc
     */
    public function setClientType($clientType)
    {
        $this->clientType             = $clientType;
        $this->apiParas["clientType"]  = $clientType;
    }

    public function getClientType()
    {
        return $this->clientType;
    }

    /**
     * @param String $customer
     * 顾客账号
     * Required: false
     * Example Value: pin
     */
    private $customer;

    /**
     * @param String $customer
     * 顾客账号
     * Example Value: pin
     */
    public function setCustomer($customer)
    {
        $this->customer             = $customer;
        $this->apiParas["customer"]  = $customer;
    }

    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param String $waiter
     * 查询的客户账号
     * Required: false
     * Example Value: waiterpin
     */
    private $waiter;

    /**
     * @param String $waiter
     * 查询的客户账号
     * Example Value: waiterpin
     */
    public function setWaiter($waiter)
    {
        $this->waiter             = $waiter;
        $this->apiParas["waiter"]  = $waiter;
    }

    public function getWaiter()
    {
        return $this->waiter;
    }

    /**
     * @param Number $mark
     * 顾客的打标状态
     * Required: false
     * Example Value: 1
     */
    private $mark;

    /**
     * @param Number $mark
     * 顾客的打标状态
     * Example Value: 1
     */
    public function setMark($mark)
    {
        $this->mark             = $mark;
        $this->apiParas["mark"]  = $mark;
    }

    public function getMark()
    {
        return $this->mark;
    }

    /**
     * @param Number $page
     * 页码
     * Required: false
     * Example Value: 1
     */
    private $page;

    /**
     * @param Number $page
     * 页码
     * Example Value: 1
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
     * @param Number $pageSize
     * 页数量
     * Required: false
     * Example Value: 10
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 页数量
     * Example Value: 10
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
     * @param String $sd
     * 查询开始时间
     * Required: false
     * Example Value: 1971-01-01 00:32:11
     */
    private $sd;

    /**
     * @param String $sd
     * 查询开始时间
     * Example Value: 1971-01-01 00:32:11
     */
    public function setSd($sd)
    {
        $this->sd             = $sd;
        $this->apiParas["sd"]  = $sd;
    }

    public function getSd()
    {
        return $this->sd;
    }

    /**
     * @param String $ed
     * 查询结束时间
     * Required: false
     * Example Value: 1971-01-01 00:32:11
     */
    private $ed;

    /**
     * @param String $ed
     * 查询结束时间
     * Example Value: 1971-01-01 00:32:11
     */
    public function setEd($ed)
    {
        $this->ed             = $ed;
        $this->apiParas["ed"]  = $ed;
    }

    public function getEd()
    {
        return $this->ed;
    }

    /**
     * @param Number $st
     * 服务类型
     * Required: false
     * Example Value: 1
     */
    private $st;

    /**
     * @param Number $st
     * 服务类型
     * Example Value: 1
     */
    public function setSt($st)
    {
        $this->st             = $st;
        $this->apiParas["st"]  = $st;
    }

    public function getSt()
    {
        return $this->st;
    }

}