<?php

namespca Lostinfo\JosOpenApi;

/**
 * 获取销量预测数据
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1932&apiName=jingdong.edi.sdv.sales.forecast.number.search
 * Class EdiSdvSalesForecastNumberSearch
 * @package Jd\request
 */
class EdiSdvSalesForecastNumberSearch
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.edi.sdv.sales.forecast.number.search";
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
     * 页数
     * Required: true
     * Example Value: 
     */
    private $page;

    /**
     * @param int $page
     * 页数
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
     * 每页大小
     * Required: true
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