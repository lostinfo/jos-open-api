<?php

namespace JD\request;

/**
 * 人群策略列表接口
 * 数据API-数据开放API已下线，如有数据需求请进入云海数据开放平台（http://data.jd.com）进行申请。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=69&apiId=3656&apiName=jingdong.data.vender.strategy.list
 * Class DataVenderStrategyList
 * @package Jd\request
 */
class DataVenderStrategyList
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.data.vender.strategy.list";
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
     * @param Number $state
     * 状态
     * Required: false
     * Example Value: 
     */
    private $state;

    /**
     * @param Number $state
     * 状态
     * Example Value: 
     */
    public function setState($state)
    {
        $this->state             = $state;
        $this->apiParas["state"]  = $state;
    }

    public function getState()
    {
        return $this->state;
    }

    /**
     * @param Number $page
     * 页码
     * Required: false
     * Example Value: 
     */
    private $page;

    /**
     * @param Number $page
     * 页码
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
     * 每页数量(最大200)
     * Required: true
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 每页数量(最大200)
     * Example Value: 
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize             = $pageSize;
        $this->apiParas["page_size"]  = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

}