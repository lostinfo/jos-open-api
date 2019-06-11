<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 获取采购单总目
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1720&apiName=jingdong.edi.po.get
 * Class EdiPoGet
 * @package Jd\request
 */
class EdiPoGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.edi.po.get";
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
     * @param int $orderStatus
     * 采购单状态: 1. 待订单确认; 2. 待发货通知; 3. 待收货通知; 4. 己收货确认; 12. 已驳回.
     * Required: false
     * Example Value: 
     */
    private $orderStatus;

    /**
     * @param int $orderStatus
     * 采购单状态: 1. 待订单确认; 2. 待发货通知; 3. 待收货通知; 4. 己收货确认; 12. 已驳回.
     * Example Value: 
     */
    public function setOrderStatus($orderStatus)
    {
        $this->orderStatus             = $orderStatus;
        $this->apiParas["orderStatus"]  = $orderStatus;
    }

    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    /**
     * @param string $createTimeStart
     * 采购单创建时间起始点
     * Required: true
     * Example Value: 
     */
    private $createTimeStart;

    /**
     * @param string $createTimeStart
     * 采购单创建时间起始点
     * Example Value: 
     */
    public function setCreateTimeStart($createTimeStart)
    {
        $this->createTimeStart             = $createTimeStart;
        $this->apiParas["createTimeStart"]  = $createTimeStart;
    }

    public function getCreateTimeStart()
    {
        return $this->createTimeStart;
    }

    /**
     * @param string $createTimeEnd
     * 采购单创建时间终止点
     * Required: true
     * Example Value: 
     */
    private $createTimeEnd;

    /**
     * @param string $createTimeEnd
     * 采购单创建时间终止点
     * Example Value: 
     */
    public function setCreateTimeEnd($createTimeEnd)
    {
        $this->createTimeEnd             = $createTimeEnd;
        $this->apiParas["createTimeEnd"]  = $createTimeEnd;
    }

    public function getCreateTimeEnd()
    {
        return $this->createTimeEnd;
    }

    /**
     * @param int $pageNum
     * 当前页数，从1开始
     * Required: false
     * Example Value: 
     */
    private $pageNum;

    /**
     * @param int $pageNum
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
     * @param int $pageSize
     * 一页记录数目
     * Required: false
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param int $pageSize
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