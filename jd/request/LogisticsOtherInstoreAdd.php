<?php

namespace JD\request;

/**
 * 其它入库单申请
 * 京云仓API-提供查询库存、入库单查询、出库单查询等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=56&apiId=156&apiName=jingdong.logistics.otherInstore.add
 * Class LogisticsOtherInstoreAdd
 * @package Jd\request
 */
class LogisticsOtherInstoreAdd
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.logistics.otherInstore.add";
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
     * @param String $instoreType
     * 入库单类型
     * Required: true
     * Example Value: 
     */
    private $instoreType;

    /**
     * @param String $instoreType
     * 入库单类型
     * Example Value: 
     */
    public function setInstoreType($instoreType)
    {
        $this->instoreType             = $instoreType;
        $this->apiParas["instore_type"]  = $instoreType;
    }

    public function getInstoreType()
    {
        return $this->instoreType;
    }

    /**
     * @param String $poNo
     * 入库单号
     * Required: true
     * Example Value: 
     */
    private $poNo;

    /**
     * @param String $poNo
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
     * @param String $expectedDate
     * 预计送达日期
     * Required: false
     * Example Value: 
     */
    private $expectedDate;

    /**
     * @param String $expectedDate
     * 预计送达日期
     * Example Value: 
     */
    public function setExpectedDate($expectedDate)
    {
        $this->expectedDate             = $expectedDate;
        $this->apiParas["expected_date"]  = $expectedDate;
    }

    public function getExpectedDate()
    {
        return $this->expectedDate;
    }

    /**
     * @param String $approver
     * 审批人
     * Required: false
     * Example Value: 
     */
    private $approver;

    /**
     * @param String $approver
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
     * @param String $warehouseNo
     * 仓库编号
     * Required: true
     * Example Value: 
     */
    private $warehouseNo;

    /**
     * @param String $warehouseNo
     * 仓库编号
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
     * @param String[] $goodsNo
     * JOSL商品编号
     * Required: true
     * Example Value: 
     */
    private $goodsNo;

    /**
     * @param String[] $goodsNo
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
     * @param String[] $isvGoodsNo
     * ISV的商品编号
     * Required: true
     * Example Value: 
     */
    private $isvGoodsNo;

    /**
     * @param String[] $isvGoodsNo
     * ISV的商品编号
     * Example Value: 
     */
    public function setIsvGoodsNo($isvGoodsNo)
    {
        $this->isvGoodsNo             = $isvGoodsNo;
        $this->apiParas["isv_goods_no"]  = $isvGoodsNo;
    }

    public function getIsvGoodsNo()
    {
        return $this->isvGoodsNo;
    }

    /**
     * @param Number[] $expectedQty
     * 申请入库数量
     * Required: true
     * Example Value: 
     */
    private $expectedQty;

    /**
     * @param Number[] $expectedQty
     * 申请入库数量
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
     * @param String[] $goodsStatus
     * 商品状态
     * Required: true
     * Example Value: 
     */
    private $goodsStatus;

    /**
     * @param String[] $goodsStatus
     * 商品状态
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