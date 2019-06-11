<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 采购订单
 * 京云仓API-提供查询库存、入库单查询、出库单查询等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=56&apiId=153&apiName=jingdong.logistics.po.add
 * Class LogisticsPoAdd
 * @package Jd\request
 */
class LogisticsPoAdd
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.logistics.po.add";
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
     * @param string $channelsSellerNo
     * 商家编号
     * Required: true
     * Example Value: 
     */
    private $channelsSellerNo;

    /**
     * @param string $channelsSellerNo
     * 商家编号
     * Example Value: 
     */
    public function setChannelsSellerNo($channelsSellerNo)
    {
        $this->channelsSellerNo             = $channelsSellerNo;
        $this->apiParas["channels_seller_no"]  = $channelsSellerNo;
    }

    public function getChannelsSellerNo()
    {
        return $this->channelsSellerNo;
    }

    /**
     * @param string $poNo
     * 入库单号
     * Required: true
     * Example Value: 
     */
    private $poNo;

    /**
     * @param string $poNo
     * 入库单号
     * Example Value: 
     */
    public function setPoNo($poNo)
    {
        $this->poNo             = $poNo;
        $this->apiParas["po_no"]  = $poNo;
    }

    public function getPoNo()
    {
        return $this->poNo;
    }

    /**
     * @param string $warehouseNo
     * 生产库房编号
     * Required: true
     * Example Value: 
     */
    private $warehouseNo;

    /**
     * @param string $warehouseNo
     * 生产库房编号
     * Example Value: 
     */
    public function setWarehouseNo($warehouseNo)
    {
        $this->warehouseNo             = $warehouseNo;
        $this->apiParas["warehouse_no"]  = $warehouseNo;
    }

    public function getWarehouseNo()
    {
        return $this->warehouseNo;
    }

    /**
     * @param string $expectDate
     * 预计送达日期(yyyy-mm-dd)
     * Required: true
     * Example Value: 
     */
    private $expectDate;

    /**
     * @param string $expectDate
     * 预计送达日期(yyyy-mm-dd)
     * Example Value: 
     */
    public function setExpectDate($expectDate)
    {
        $this->expectDate             = $expectDate;
        $this->apiParas["expect_date"]  = $expectDate;
    }

    public function getExpectDate()
    {
        return $this->expectDate;
    }

    /**
     * @param string $supplierName
     * 供应商名称
     * Required: false
     * Example Value: 
     */
    private $supplierName;

    /**
     * @param string $supplierName
     * 供应商名称
     * Example Value: 
     */
    public function setSupplierName($supplierName)
    {
        $this->supplierName             = $supplierName;
        $this->apiParas["supplier_name"]  = $supplierName;
    }

    public function getSupplierName()
    {
        return $this->supplierName;
    }

    /**
     * @param string $supplierNo
     * 供应商编码
     * Required: false
     * Example Value: 
     */
    private $supplierNo;

    /**
     * @param string $supplierNo
     * 供应商编码
     * Example Value: 
     */
    public function setSupplierNo($supplierNo)
    {
        $this->supplierNo             = $supplierNo;
        $this->apiParas["supplier_no"]  = $supplierNo;
    }

    public function getSupplierNo()
    {
        return $this->supplierNo;
    }

    /**
     * @param string $approver
     * 审批人
     * Required: false
     * Example Value: 
     */
    private $approver;

    /**
     * @param string $approver
     * 审批人
     * Example Value: 
     */
    public function setApprover($approver)
    {
        $this->approver             = $approver;
        $this->apiParas["approver"]  = $approver;
    }

    public function getApprover()
    {
        return $this->approver;
    }

    /**
     * @param string[] $goodsNo
     * JOSL商品编号
     * Required: true
     * Example Value: 
     */
    private $goodsNo;

    /**
     * @param string[] $goodsNo
     * JOSL商品编号
     * Example Value: 
     */
    public function setGoodsNo($goodsNo)
    {
        $this->goodsNo             = $goodsNo;
        $this->apiParas["goods_no"]  = $goodsNo;
    }

    public function getGoodsNo()
    {
        return $this->goodsNo;
    }

    /**
     * @param int[] $expectedQty
     * 预期入库数量
     * Required: true
     * Example Value: 
     */
    private $expectedQty;

    /**
     * @param int[] $expectedQty
     * 预期入库数量
     * Example Value: 
     */
    public function setExpectedQty($expectedQty)
    {
        $this->expectedQty             = $expectedQty;
        $this->apiParas["expected_qty"]  = $expectedQty;
    }

    public function getExpectedQty()
    {
        return $this->expectedQty;
    }

    /**
     * @param string[] $goodsStatus
     * 商品状态（1：良品；2：残品；3：样品；4：新品）
     * Required: true
     * Example Value: 
     */
    private $goodsStatus;

    /**
     * @param string[] $goodsStatus
     * 商品状态（1：良品；2：残品；3：样品；4：新品）
     * Example Value: 
     */
    public function setGoodsStatus($goodsStatus)
    {
        $this->goodsStatus             = $goodsStatus;
        $this->apiParas["goods_status"]  = $goodsStatus;
    }

    public function getGoodsStatus()
    {
        return $this->goodsStatus;
    }

}