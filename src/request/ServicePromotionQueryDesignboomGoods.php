<?php

namespca Lostinfo\JosOpenApi;

/**
 * 联盟设计帮内容推广
 * 京东联盟API-查询推广产品，获取推广链接。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=117&apiId=1883&apiName=jingdong.service.promotion.queryDesignboomGoods
 * Class ServicePromotionQueryDesignboomGoods
 * @package Jd\request
 */
class ServicePromotionQueryDesignboomGoods
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.service.promotion.queryDesignboomGoods";
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
     * @param string $state
     * 状态
     * Required: false
     * Example Value: 
     */
    private $state;

    /**
     * @param string $state
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
     * @param string $sort
     * 排序字段
     * Required: false
     * Example Value: 
     */
    private $sort;

    /**
     * @param string $sort
     * 排序字段
     * Example Value: 
     */
    public function setSort($sort)
    {
        $this->sort             = $sort;
        $this->apiParas["sort"]  = $sort;
    }

    public function getSort()
    {
        return $this->sort;
    }

    /**
     * @param string $desc
     * 升序/降序
     * Required: false
     * Example Value: 
     */
    private $desc;

    /**
     * @param string $desc
     * 升序/降序
     * Example Value: 
     */
    public function setDesc($desc)
    {
        $this->desc             = $desc;
        $this->apiParas["desc"]  = $desc;
    }

    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * @param int $pageNo
     * 分页
     * Required: false
     * Example Value: 
     */
    private $pageNo;

    /**
     * @param int $pageNo
     * 分页
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
     * @param int $pageSize
     * 每页大小
     * Required: false
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 每页大小
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