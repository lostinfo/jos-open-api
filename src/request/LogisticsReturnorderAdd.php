<?php

namespca Lostinfo\JosOpenApi;

/**
 * 退货入库单申请
 * 京云仓API-提供查询库存、入库单查询、出库单查询等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=56&apiId=150&apiName=jingdong.logistics.returnorder.add
 * Class LogisticsReturnorderAdd
 * @package Jd\request
 */
class LogisticsReturnorderAdd
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.logistics.returnorder.add";
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
     * @param string $sellerNo
     * ISV商家编号
     * Required: false
     * Example Value: EDB0001
     */
    private $sellerNo;

    /**
     * @param string $sellerNo
     * ISV商家编号
     * Example Value: EDB0001
     */
    public function setSellerNo($sellerNo)
    {
        $this->sellerNo             = $sellerNo;
        $this->apiParas["seller_no"]  = $sellerNo;
    }

    public function getSellerNo()
    {
        return $this->sellerNo;
    }

    /**
     * @param string $warehouseNo
     * JOSL库房编号
     * Required: true
     * Example Value: BJ000000001
     */
    private $warehouseNo;

    /**
     * @param string $warehouseNo
     * JOSL库房编号
     * Example Value: BJ000000001
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
     * @param string $inboundNo
     * ISV入库单号
     * Required: true
     * Example Value: EDBI001111
     */
    private $inboundNo;

    /**
     * @param string $inboundNo
     * ISV入库单号
     * Example Value: EDBI001111
     */
    public function setInboundNo($inboundNo)
    {
        $this->inboundNo             = $inboundNo;
        $this->apiParas["inbound_no"]  = $inboundNo;
    }

    public function getInboundNo()
    {
        return $this->inboundNo;
    }

    /**
     * @param string $joslOutboundNo
     * JOSL出库单号
     * Required: true
     * Example Value: JOSL1000012
     */
    private $joslOutboundNo;

    /**
     * @param string $joslOutboundNo
     * JOSL出库单号
     * Example Value: JOSL1000012
     */
    public function setJoslOutboundNo($joslOutboundNo)
    {
        $this->joslOutboundNo             = $joslOutboundNo;
        $this->apiParas["josl_outbound_no"]  = $joslOutboundNo;
    }

    public function getJoslOutboundNo()
    {
        return $this->joslOutboundNo;
    }

    /**
     * @param string $expectedDate
     * JOSL预计送达日期
     * Required: true
     * Example Value: 2013-06-18 11:00:59
     */
    private $expectedDate;

    /**
     * @param string $expectedDate
     * JOSL预计送达日期
     * Example Value: 2013-06-18 11:00:59
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
     * @param string $isvSource
     * ISV来源
     * Required: false
     * Example Value: http://www.centaur.cn/
     */
    private $isvSource;

    /**
     * @param string $isvSource
     * ISV来源
     * Example Value: http://www.centaur.cn/
     */
    public function setIsvSource($isvSource)
    {
        $this->isvSource             = $isvSource;
        $this->apiParas["isv_source"]  = $isvSource;
    }

    public function getIsvSource()
    {
        return $this->isvSource;
    }

    /**
     * @param string $approver
     * 审批人
     * Required: true
     * Example Value: 张三
     */
    private $approver;

    /**
     * @param string $approver
     * 审批人
     * Example Value: 张三
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
     * JOSL商品编码
     * Required: true
     * Example Value: JGNO1000000052
     */
    private $goodsNo;

    /**
     * @param string[] $goodsNo
     * JOSL商品编码
     * Example Value: JGNO1000000052
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
     * 入库数量
     * Required: true
     * Example Value: 10
     */
    private $expectedQty;

    /**
     * @param int[] $expectedQty
     * 入库数量
     * Example Value: 10
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
     * @param string[] $stockMark
     * 库存等级标识代码
     * Required: true
     * Example Value: 1良品，2残品，3样品，4新品
     */
    private $stockMark;

    /**
     * @param string[] $stockMark
     * 库存等级标识代码
     * Example Value: 1良品，2残品，3样品，4新品
     */
    public function setStockMark($stockMark)
    {
        $this->stockMark             = $stockMark;
        $this->apiParas["stock_mark"]  = $stockMark;
    }

    public function getStockMark()
    {
        return $this->stockMark;
    }

}