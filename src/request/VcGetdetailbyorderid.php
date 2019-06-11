<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 根据订单号获取采购订单明细
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1193&apiName=jingdong.vc.getdetailbyorderid
 * Class VcGetdetailbyorderid
 * @package Jd\request
 */
class VcGetdetailbyorderid
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vc.getdetailbyorderid";
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
     * @param int $orderId
     * 采购单号
     * Required: false
     * Example Value: 12734022
     */
    private $orderId;

    /**
     * @param int $orderId
     * 采购单号
     * Example Value: 12734022
     */
    public function setOrderId($orderId)
    {
        $this->orderId             = $orderId;
        $this->apiParas["order_id"]  = $orderId;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param string $sortFiled
     * 排序字段 默认值按照采购数量降序(originalNum:采购数量;jiage:采购价)
     * Required: false
     * Example Value: originalNum
     */
    private $sortFiled;

    /**
     * @param string $sortFiled
     * 排序字段 默认值按照采购数量降序(originalNum:采购数量;jiage:采购价)
     * Example Value: originalNum
     */
    public function setSortFiled($sortFiled)
    {
        $this->sortFiled             = $sortFiled;
        $this->apiParas["sort_filed"]  = $sortFiled;
    }

    public function getSortFiled()
    {
        return $this->sortFiled;
    }

    /**
     * @param string $sortMode
     * 排序方式 默认值按照采购数量降序（DESC:降序;ASC:升序）
     * Required: false
     * Example Value: DESC
     */
    private $sortMode;

    /**
     * @param string $sortMode
     * 排序方式 默认值按照采购数量降序（DESC:降序;ASC:升序）
     * Example Value: DESC
     */
    public function setSortMode($sortMode)
    {
        $this->sortMode             = $sortMode;
        $this->apiParas["sort_mode"]  = $sortMode;
    }

    public function getSortMode()
    {
        return $this->sortMode;
    }

    /**
     * @param int $pageIndex
     * pageIndex
     * Required: false
     * Example Value: 页码
     */
    private $pageIndex;

    /**
     * @param int $pageIndex
     * pageIndex
     * Example Value: 页码
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
     * pageSize
     * Required: false
     * Example Value: 每页显示大小
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * pageSize
     * Example Value: 每页显示大小
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
     * @param bool $isPage
     * 是否需要分页（true:分页;false:不需要）
     * Required: false
     * Example Value: true
     */
    private $isPage;

    /**
     * @param bool $isPage
     * 是否需要分页（true:分页;false:不需要）
     * Example Value: true
     */
    public function setIsPage($isPage)
    {
        $this->isPage             = $isPage;
        $this->apiParas["is_page"]  = $isPage;
    }

    public function getIsPage()
    {
        return $this->isPage;
    }

}