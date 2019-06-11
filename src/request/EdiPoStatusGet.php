<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 采购单状态查询
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=2670&apiName=jingdong.edi.po.status.get
 * Class EdiPoStatusGet
 * @package Jd\request
 */
class EdiPoStatusGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.edi.po.status.get";
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
     * Required: true
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
     * Required: true
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

    /**
     * @param string $purchaseOrderCode
     * 采购单号
     * Required: false
     * Example Value: 
     */
    private $purchaseOrderCode;

    /**
     * @param string $purchaseOrderCode
     * 采购单号
     * Example Value: 
     */
    public function setPurchaseOrderCode($purchaseOrderCode)
    {
        $this->purchaseOrderCode             = $purchaseOrderCode;
        $this->apiParas["purchaseOrderCode"]  = $purchaseOrderCode;
    }

    public function getPurchaseOrderCode()
    {
        return $this->purchaseOrderCode;
    }

    /**
     * @param int $bipLogicalDel
     * 删除标记
     * Required: false
     * Example Value: 
     */
    private $bipLogicalDel;

    /**
     * @param int $bipLogicalDel
     * 删除标记
     * Example Value: 
     */
    public function setBipLogicalDel($bipLogicalDel)
    {
        $this->bipLogicalDel             = $bipLogicalDel;
        $this->apiParas["bipLogicalDel"]  = $bipLogicalDel;
    }

    public function getBipLogicalDel()
    {
        return $this->bipLogicalDel;
    }

    /**
     * @param int $bipStatus
     * 采购单状态
     * Required: false
     * Example Value: 
     */
    private $bipStatus;

    /**
     * @param int $bipStatus
     * 采购单状态
     * Example Value: 
     */
    public function setBipStatus($bipStatus)
    {
        $this->bipStatus             = $bipStatus;
        $this->apiParas["bipStatus"]  = $bipStatus;
    }

    public function getBipStatus()
    {
        return $this->bipStatus;
    }

}