<?php

namespace JD\request;

/**
 * 批量查询代销采购单接口
 * B2B开放API-B2B开放
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=391&apiId=3155&apiName=jingdong.b2b.gxpt.dxPurchaseOrderErpService.queryPurchaseOrder
 * Class B2bGxptDxPurchaseOrderErpServiceQueryPurchaseOrder
 * @package Jd\request
 */
class B2bGxptDxPurchaseOrderErpServiceQueryPurchaseOrder
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.b2b.gxpt.dxPurchaseOrderErpService.queryPurchaseOrder";
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
     * @param String $consumerAddress
     * 收货人地址
     * Required: false
     * Example Value: 
     */
    private $consumerAddress;

    /**
     * @param String $consumerAddress
     * 收货人地址
     * Example Value: 
     */
    public function setConsumerAddress($consumerAddress)
    {
        $this->consumerAddress             = $consumerAddress;
        $this->apiParas["consumerAddress"]  = $consumerAddress;
    }

    public function getConsumerAddress()
    {
        return $this->consumerAddress;
    }

    /**
     * @param Number $shipmentCompanyId
     * 物流公司id
     * Required: false
     * Example Value: 
     */
    private $shipmentCompanyId;

    /**
     * @param Number $shipmentCompanyId
     * 物流公司id
     * Example Value: 
     */
    public function setShipmentCompanyId($shipmentCompanyId)
    {
        $this->shipmentCompanyId             = $shipmentCompanyId;
        $this->apiParas["shipmentCompanyId"]  = $shipmentCompanyId;
    }

    public function getShipmentCompanyId()
    {
        return $this->shipmentCompanyId;
    }

    /**
     * @param Number $consignee
     * 收货地址
     * Required: false
     * Example Value: 
     */
    private $consignee;

    /**
     * @param Number $consignee
     * 收货地址
     * Example Value: 
     */
    public function setConsignee($consignee)
    {
        $this->consignee             = $consignee;
        $this->apiParas["consignee"]  = $consignee;
    }

    public function getConsignee()
    {
        return $this->consignee;
    }

    /**
     * @param Number $flag
     * 采购单类型
     * Required: false
     * Example Value: 
     */
    private $flag;

    /**
     * @param Number $flag
     * 采购单类型
     * Example Value: 
     */
    public function setFlag($flag)
    {
        $this->flag             = $flag;
        $this->apiParas["flag"]  = $flag;
    }

    public function getFlag()
    {
        return $this->flag;
    }

    /**
     * @param Date $endDate
     * 下单时间筛选右边界
     * Required: false
     * Example Value: 
     */
    private $endDate;

    /**
     * @param Date $endDate
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
     * @param Number $venderId
     * 商家id
     * Required: false
     * Example Value: 
     */
    private $venderId;

    /**
     * @param Number $venderId
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
     * @param Number $area1
     * 收货一级地址
     * Required: false
     * Example Value: 
     */
    private $area1;

    /**
     * @param Number $area1
     * 收货一级地址
     * Example Value: 
     */
    public function setArea1($area1)
    {
        $this->area1             = $area1;
        $this->apiParas["area1"]  = $area1;
    }

    public function getArea1()
    {
        return $this->area1;
    }

    /**
     * @param Date $completeEndDate
     * 完成时间筛选右边界
     * Required: false
     * Example Value: 
     */
    private $completeEndDate;

    /**
     * @param Date $completeEndDate
     * 完成时间筛选右边界
     * Example Value: 
     */
    public function setCompleteEndDate($completeEndDate)
    {
        $this->completeEndDate             = $completeEndDate;
        $this->apiParas["completeEndDate"]  = $completeEndDate;
    }

    public function getCompleteEndDate()
    {
        return $this->completeEndDate;
    }

    /**
     * @param Number $pageSize
     * 每页条数
     * Required: false
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param Number $pageSize
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
     * @param Number $area2
     * 收货二级地址
     * Required: false
     * Example Value: 
     */
    private $area2;

    /**
     * @param Number $area2
     * 收货二级地址
     * Example Value: 
     */
    public function setArea2($area2)
    {
        $this->area2             = $area2;
        $this->apiParas["area2"]  = $area2;
    }

    public function getArea2()
    {
        return $this->area2;
    }

    /**
     * @param Number $area3
     * 收货三级地址
     * Required: false
     * Example Value: 
     */
    private $area3;

    /**
     * @param Number $area3
     * 收货三级地址
     * Example Value: 
     */
    public function setArea3($area3)
    {
        $this->area3             = $area3;
        $this->apiParas["area3"]  = $area3;
    }

    public function getArea3()
    {
        return $this->area3;
    }

    /**
     * @param Date $completeStartDate
     * 完成时间筛选左边界
     * Required: false
     * Example Value: 
     */
    private $completeStartDate;

    /**
     * @param Date $completeStartDate
     * 完成时间筛选左边界
     * Example Value: 
     */
    public function setCompleteStartDate($completeStartDate)
    {
        $this->completeStartDate             = $completeStartDate;
        $this->apiParas["completeStartDate"]  = $completeStartDate;
    }

    public function getCompleteStartDate()
    {
        return $this->completeStartDate;
    }

    /**
     * @param Number $area4
     * 收货四级地址
     * Required: false
     * Example Value: 
     */
    private $area4;

    /**
     * @param Number $area4
     * 收货四级地址
     * Example Value: 
     */
    public function setArea4($area4)
    {
        $this->area4             = $area4;
        $this->apiParas["area4"]  = $area4;
    }

    public function getArea4()
    {
        return $this->area4;
    }

    /**
     * @param String $consumerTel
     * 收货人电话
     * Required: false
     * Example Value: 
     */
    private $consumerTel;

    /**
     * @param String $consumerTel
     * 收货人电话
     * Example Value: 
     */
    public function setConsumerTel($consumerTel)
    {
        $this->consumerTel             = $consumerTel;
        $this->apiParas["consumerTel"]  = $consumerTel;
    }

    public function getConsumerTel()
    {
        return $this->consumerTel;
    }

    /**
     * @param Number $purchaserOrderStatus
     * 采购单状态
     * Required: false
     * Example Value: 
     */
    private $purchaserOrderStatus;

    /**
     * @param Number $purchaserOrderStatus
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
     * @param Number $pageIndex
     * 起始页码
     * Required: false
     * Example Value: 
     */
    private $pageIndex;

    /**
     * @param Number $pageIndex
     * 起始页码
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
     * @param Number $purchaseOrderId
     * 采购单编号
     * Required: false
     * Example Value: 
     */
    private $purchaseOrderId;

    /**
     * @param Number $purchaseOrderId
     * 采购单编号
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
     * @param Number $shipmentNo
     * 运单号
     * Required: false
     * Example Value: 
     */
    private $shipmentNo;

    /**
     * @param Number $shipmentNo
     * 运单号
     * Example Value: 
     */
    public function setShipmentNo($shipmentNo)
    {
        $this->shipmentNo             = $shipmentNo;
        $this->apiParas["shipmentNo"]  = $shipmentNo;
    }

    public function getShipmentNo()
    {
        return $this->shipmentNo;
    }

    /**
     * @param Date $startDate
     * 下单时间筛选左边界
     * Required: false
     * Example Value: 
     */
    private $startDate;

    /**
     * @param Date $startDate
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
     * @param Number $skuId
     * 京东SKU
     * Required: false
     * Example Value: 
     */
    private $skuId;

    /**
     * @param Number $skuId
     * 京东SKU
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

    /**
     * @param String $consumerName
     * 收货人姓名
     * Required: false
     * Example Value: 
     */
    private $consumerName;

    /**
     * @param String $consumerName
     * 收货人姓名
     * Example Value: 
     */
    public function setConsumerName($consumerName)
    {
        $this->consumerName             = $consumerName;
        $this->apiParas["consumerName"]  = $consumerName;
    }

    public function getConsumerName()
    {
        return $this->consumerName;
    }

}