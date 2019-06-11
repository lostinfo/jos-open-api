<?php

namespace JD\request;

/**
 * 销售订单出库数据
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1788&apiName=jingdong.edi.sdv.salesserialpay.get
 * Class EdiSdvSalesserialpayGet
 * @package Jd\request
 */
class EdiSdvSalesserialpayGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.edi.sdv.salesserialpay.get";
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
     * @param Date $recordDate
     * 记录日期
     * Required: true
     * Example Value: 
     */
    private $recordDate;

    /**
     * @param Date $recordDate
     * 记录日期
     * Example Value: 
     */
    public function setRecordDate($recordDate)
    {
        $this->recordDate             = $recordDate;
        $this->apiParas["recordDate"]  = $recordDate;
    }

    public function getRecordDate()
    {
        return $this->recordDate;
    }

    /**
     * @param Number $pageNum
     * 页码
     * Required: true
     * Example Value: 
     */
    private $pageNum;

    /**
     * @param Number $pageNum
     * 页码
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
     * 每页数量
     * Required: true
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 每页数量
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