<?php

namespace JD\request;

/**
 * 获取商家自定义属性模板  
 * EPT全球售API-EPT全球售业务，开放订单查询、发货、商品查询、新增商品、修改商品等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=137&apiId=893&apiName=jingdong.ept.warecenter.customprop.get
 * Class EptWarecenterCustompropGet
 * @package Jd\request
 */
class EptWarecenterCustompropGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ept.warecenter.customprop.get";
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
     * @param Number $pageSize
     * 单页记录数(单页显示记录数不能超过20条)
     * Required: true
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 单页记录数(单页显示记录数不能超过20条)
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
     * @param Number $currentPage
     * 页码
     * Required: true
     * Example Value: 
     */
    private $currentPage;

    /**
     * @param Number $currentPage
     * 页码
     * Example Value: 
     */
    public function setCurrentPage($currentPage)
    {
        $this->currentPage             = $currentPage;
        $this->apiParas["currentPage"]  = $currentPage;
    }

    public function getCurrentPage()
    {
        return $this->currentPage;
    }

}