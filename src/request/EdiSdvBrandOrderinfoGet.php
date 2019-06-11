<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 获取品牌订单数据
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=3021&apiName=jingdong.edi.sdv.brand.orderinfo.get
 * Class EdiSdvBrandOrderinfoGet
 * @package Jd\request
 */
class EdiSdvBrandOrderinfoGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.edi.sdv.brand.orderinfo.get";
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
     * @param string $createTime
     * 创建时间
     * Required: true
     * Example Value: 
     */
    private $createTime;

    /**
     * @param string $createTime
     * 创建时间
     * Example Value: 
     */
    public function setCreateTime($createTime)
    {
        $this->createTime             = $createTime;
        $this->apiParas["createTime"]  = $createTime;
    }

    public function getCreateTime()
    {
        return $this->createTime;
    }

    /**
     * @param int $pageNum
     * 页码
     * Required: true
     * Example Value: 
     */
    private $pageNum;

    /**
     * @param int $pageNum
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
     * @param int $pageSize
     * 每页条数
     * Required: true
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 每页条数
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