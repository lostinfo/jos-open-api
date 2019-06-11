<?php

namespace JD\request;

/**
 * 根据条件获取大件备件库库存
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1978&apiName=jingdong.edi.spi.large.get
 * Class EdiSpiLargeGet
 * @package Jd\request
 */
class EdiSpiLargeGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.edi.spi.large.get";
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
     * @param Number $pageNum
     * 当前页数，从1开始
     * Required: false
     * Example Value: 
     */
    private $pageNum;

    /**
     * @param Number $pageNum
     * 当前页数，从1开始
     * Example Value: 
     */
    public function setPageNum($pageNum)
    {
        $this->pageNum             = $pageNum;
        $this->apiParas["pageNum"]  = $pageNum;
    }

    public function getPageNum()
    {
        return $this->pageNum;
    }

    /**
     * @param Number $pageSize
     * 一页记录数目
     * Required: false
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 一页记录数目
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