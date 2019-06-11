<?php

namespca Lostinfo\JosOpenApi;

/**
 * 查询商家已租用仓库列表
 * FBP仓储API-FBP仓储API对应FBP类型商家后台（shop.jd.com）仓储管理模块中的业务。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=126&apiId=746&apiName=jingdong.store.queryStoreHouseRentlist
 * Class StoreQueryStoreHouseRentlist
 * @package Jd\request
 */
class StoreQueryStoreHouseRentlist
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.store.queryStoreHouseRentlist";
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
     * @param int $page
     * 页码
     * Required: true
     * Example Value: 
     */
    private $page;

    /**
     * @param int $page
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
     * @param int $pageSize
     * 每页显示条数.最大值为50
     * Required: true
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 每页显示条数.最大值为50
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