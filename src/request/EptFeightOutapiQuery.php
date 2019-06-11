<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 查询当前运费模板
 * EPT全球售API-EPT全球售业务，开放订单查询、发货、商品查询、新增商品、修改商品等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=137&apiId=906&apiName=jingdong.ept.feight.outapi.query
 * Class EptFeightOutapiQuery
 * @package Jd\request
 */
class EptFeightOutapiQuery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ept.feight.outapi.query";
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
     * @param int $pageSize
     * 每页显示数量(默认为20)
     * Required: false
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 每页显示数量(默认为20)
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
     * @param int $currPage
     * 当前页码(默认为1)
     * Required: false
     * Example Value: 
     */
    private $currPage;

    /**
     * @param int $currPage
     * 当前页码(默认为1)
     * Example Value: 
     */
    public function setCurrPage($currPage)
    {
        $this->currPage             = $currPage;
        $this->apiParas["currPage"]  = $currPage;
    }

    public function getCurrPage()
    {
        return $this->currPage;
    }

}