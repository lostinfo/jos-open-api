<?php

namespace Lostinfo\JosOpenApi\request;

/**
 *  获取商家授权品牌
 * EPT全球售API-EPT全球售业务，开放订单查询、发货、商品查询、新增商品、修改商品等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=137&apiId=920&apiName=jingdong.ept.vender.brand.get
 * Class EptVenderBrandGet
 * @package Jd\request
 */
class EptVenderBrandGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ept.vender.brand.get";
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
     * @param int $status
     * 品牌状态1启用，2停用 
     * Required: true
     * Example Value: 
     */
    private $status;

    /**
     * @param int $status
     * 品牌状态1启用，2停用 
     * Example Value: 
     */
    public function setStatus($status)
    {
        $this->status             = $status;
        $this->apiParas["status"]  = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param int $pageSize
     * 单页大小(单页显示记录数不能超过20条)
     * Required: true
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 单页大小(单页显示记录数不能超过20条)
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
     * @param int $currentPage
     * 当前页
     * Required: true
     * Example Value: 
     */
    private $currentPage;

    /**
     * @param int $currentPage
     * 当前页
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