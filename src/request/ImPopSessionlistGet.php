<?php

namespca Lostinfo\JosOpenApi;

/**
 * 获取会话列表
 * 咚咚API-京东咚咚系统API，包含：查询信息、客服日评价、客服登陆日志、时长等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=53&apiId=389&apiName=jingdong.im.pop.sessionlist.get
 * Class ImPopSessionlistGet
 * @package Jd\request
 */
class ImPopSessionlistGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.im.pop.sessionlist.get";
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
     * @param string[] $waiter
     * 需要查询的客服账号列表，为空默认查询的是商家主账户
     * Required: false
     * Example Value: 
     */
    private $waiter;

    /**
     * @param string[] $waiter
     * 需要查询的客服账号列表，为空默认查询的是商家主账户
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
     * @param string $startTime
     * 需要查询数据的开始日期（取Date的年月日部分）
     * Required: true
     * Example Value: 
     */
    private $startTime;

    /**
     * @param string $startTime
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
     * @param string $endTime
     * 需要查询数据的截止日期（取Date的年月日部分），查询起止日期相差不能大于7天，查询的日期距现在不能大于3个月
     * Required: true
     * Example Value: 
     */
    private $endTime;

    /**
     * @param string $endTime
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
     * @param int $page
     * 查询页数
     * Required: false
     * Example Value: 
     */
    private $page;

    /**
     * @param int $page
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
     * @param int $pageSize
     * 每页记录数
     * Required: false
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param int $pageSize
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