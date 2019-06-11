<?php

namespace JD\request;

/**
 * 聊天记录模糊查询
 * 咚咚API-京东咚咚系统API，包含：查询信息、客服日评价、客服登陆日志、时长等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=53&apiId=392&apiName=jingdong.im.pop.chatlog.fuzzy.query
 * Class ImPopChatlogFuzzyQuery
 * @package Jd\request
 */
class ImPopChatlogFuzzyQuery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.im.pop.chatlog.fuzzy.query";
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
     * @param String $waiter
     * 需要查询的客服账号，为空默认查询的是商家主账户
     * Required: false
     * Example Value: 
     */
    private $waiter;

    /**
     * @param String $waiter
     * 需要查询的客服账号，为空默认查询的是商家主账户
     * Example Value: 
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
     * @param String $customer
     * 要查询的顾客账号
     * Required: true
     * Example Value: 
     */
    private $customer;

    /**
     * @param String $customer
     * 要查询的顾客账号
     * Example Value: 
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
     * @param String $keyWord
     * 关键词
     * Required: true
     * Example Value: 
     */
    private $keyWord;

    /**
     * @param String $keyWord
     * 关键词
     * Example Value: 
     */
    public function setKeyWord($keyWord)
    {
        $this->keyWord             = $keyWord;
        $this->apiParas["keyWord"]  = $keyWord;
    }

    public function getKeyWord()
    {
        return $this->keyWord;
    }

    /**
     * @param Date $startTime
     * 需要查询数据的开始日期（取Date的年月日部分）
     * Required: true
     * Example Value: 
     */
    private $startTime;

    /**
     * @param Date $startTime
     * 需要查询数据的开始日期（取Date的年月日部分）
     * Example Value: 
     */
    public function setStartTime($startTime)
    {
        $this->startTime             = $startTime;
        $this->apiParas["startTime"]  = $startTime;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param Date $endTime
     * 需要查询数据的截止日期（取Date的年月日部分），查询起止日期相差不能大于7天，查询的日期距现在不能大于3个月
     * Required: true
     * Example Value: 
     */
    private $endTime;

    /**
     * @param Date $endTime
     * 需要查询数据的截止日期（取Date的年月日部分），查询起止日期相差不能大于7天，查询的日期距现在不能大于3个月
     * Example Value: 
     */
    public function setEndTime($endTime)
    {
        $this->endTime             = $endTime;
        $this->apiParas["endTime"]  = $endTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param Number $page
     * 查询页数
     * Required: false
     * Example Value: 
     */
    private $page;

    /**
     * @param Number $page
     * 查询页数
     * Example Value: 
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
     * 每页记录数
     * Required: false
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 每页记录数
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