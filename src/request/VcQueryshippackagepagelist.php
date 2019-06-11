<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 包裹列表
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=2268&apiName=jingdong.vc.queryshippackagepagelist
 * Class VcQueryshippackagepagelist
 * @package Jd\request
 */
class VcQueryshippackagepagelist
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vc.queryshippackagepagelist";
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
     * @param int $brandId
     * 品牌编号
     * Required: true
     * Example Value: 
     */
    private $brandId;

    /**
     * @param int $brandId
     * 品牌编号
     * Example Value: 
     */
    public function setBrandId($brandId)
    {
        $this->brandId             = $brandId;
        $this->apiParas["brand_id"]  = $brandId;
    }

    public function getBrandId()
    {
        return $this->brandId;
    }

    /**
     * @param int $pageIndex
     * 分页页码，从1开始
     * Required: true
     * Example Value: 
     */
    private $pageIndex;

    /**
     * @param int $pageIndex
     * 分页页码，从1开始
     * Example Value: 
     */
    public function setPageIndex($pageIndex)
    {
        $this->pageIndex             = $pageIndex;
        $this->apiParas["page_index"]  = $pageIndex;
    }

    public function getPageIndex()
    {
        return $this->pageIndex;
    }

    /**
     * @param int $pageSize
     * 每页显示数量
     * Required: true
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 每页显示数量
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

    /**
     * @param string $createTimeBegin
     * 创建日期开始时间(包含),范围为45天
     * Required: true
     * Example Value: 
     */
    private $createTimeBegin;

    /**
     * @param string $createTimeBegin
     * 创建日期开始时间(包含),范围为45天
     * Example Value: 
     */
    public function setCreateTimeBegin($createTimeBegin)
    {
        $this->createTimeBegin             = $createTimeBegin;
        $this->apiParas["create_time_begin"]  = $createTimeBegin;
    }

    public function getCreateTimeBegin()
    {
        return $this->createTimeBegin;
    }

    /**
     * @param string $createTimeEnd
     * 创建日期结束时间(不包含),范围为45天
     * Required: true
     * Example Value: 
     */
    private $createTimeEnd;

    /**
     * @param string $createTimeEnd
     * 创建日期结束时间(不包含),范围为45天
     * Example Value: 
     */
    public function setCreateTimeEnd($createTimeEnd)
    {
        $this->createTimeEnd             = $createTimeEnd;
        $this->apiParas["create_time_end"]  = $createTimeEnd;
    }

    public function getCreateTimeEnd()
    {
        return $this->createTimeEnd;
    }

}