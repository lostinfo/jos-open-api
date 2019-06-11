<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 批量查询采购单列表
 * B2B开放API-B2B开放
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=391&apiId=3083&apiName=jingdong.b2b.gxpt.purchaseOrderErpService.queryPurchaseOrder
 * Class B2bGxptPurchaseOrderErpServiceQueryPurchaseOrder
 * @package Jd\request
 */
class B2bGxptPurchaseOrderErpServiceQueryPurchaseOrder
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.b2b.gxpt.purchaseOrderErpService.queryPurchaseOrder";
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
     * @param int $venderId
     * 商家id
     * Required: true
     * Example Value: 
     */
    private $venderId;

    /**
     * @param int $venderId
     * 商家id
     * Example Value: 
     */
    public function setVenderId($venderId)
    {
        $this->venderId             = $venderId;
        $this->apiParas["venderId"]  = $venderId;
    }

    public function getVenderId()
    {
        return $this->venderId;
    }

    /**
     * @param int $purchaserOrderStatus
     * 采购单状态
     * Required: false
     * Example Value: 
     */
    private $purchaserOrderStatus;

    /**
     * @param int $purchaserOrderStatus
     * 采购单状态
     * Example Value: 
     */
    public function setPurchaserOrderStatus($purchaserOrderStatus)
    {
        $this->purchaserOrderStatus             = $purchaserOrderStatus;
        $this->apiParas["purchaserOrderStatus"]  = $purchaserOrderStatus;
    }

    public function getPurchaserOrderStatus()
    {
        return $this->purchaserOrderStatus;
    }

    /**
     * @param int $pageIndex
     * 页码
     * Required: false
     * Example Value: 
     */
    private $pageIndex;

    /**
     * @param int $pageIndex
     * 页码
     * Example Value: 
     */
    public function setPageIndex($pageIndex)
    {
        $this->pageIndex             = $pageIndex;
        $this->apiParas["pageIndex"]  = $pageIndex;
    }

    public function getPageIndex()
    {
        return $this->pageIndex;
    }

    /**
     * @param int $pageSize
     * 每页条数
     * Required: false
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

    /**
     * @param int $purchaseOrderId
     * 采购单id
     * Required: false
     * Example Value: 
     */
    private $purchaseOrderId;

    /**
     * @param int $purchaseOrderId
     * 采购单id
     * Example Value: 
     */
    public function setPurchaseOrderId($purchaseOrderId)
    {
        $this->purchaseOrderId             = $purchaseOrderId;
        $this->apiParas["purchaseOrderId"]  = $purchaseOrderId;
    }

    public function getPurchaseOrderId()
    {
        return $this->purchaseOrderId;
    }

    /**
     * @param string $startDate
     * 下单时间筛选左边界
     * Required: false
     * Example Value: 
     */
    private $startDate;

    /**
     * @param string $startDate
     * 下单时间筛选左边界
     * Example Value: 
     */
    public function setStartDate($startDate)
    {
        $this->startDate             = $startDate;
        $this->apiParas["startDate"]  = $startDate;
    }

    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param string $endDate
     * 下单时间筛选右边界
     * Required: false
     * Example Value: 
     */
    private $endDate;

    /**
     * @param string $endDate
     * 下单时间筛选右边界
     * Example Value: 
     */
    public function setEndDate($endDate)
    {
        $this->endDate             = $endDate;
        $this->apiParas["endDate"]  = $endDate;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param int $skuId
     * 采购单SKU
     * Required: false
     * Example Value: 
     */
    private $skuId;

    /**
     * @param int $skuId
     * 采购单SKU
     * Example Value: 
     */
    public function setSkuId($skuId)
    {
        $this->skuId             = $skuId;
        $this->apiParas["skuId"]  = $skuId;
    }

    public function getSkuId()
    {
        return $this->skuId;
    }

}