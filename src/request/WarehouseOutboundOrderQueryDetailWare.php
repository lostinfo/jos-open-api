<?php

namespace JD\request;

/**
 * 查询出库单明细
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1596&apiName=jingdong.warehouse.outbound.order.query.detail.ware
 * Class WarehouseOutboundOrderQueryDetailWare
 * @package Jd\request
 */
class WarehouseOutboundOrderQueryDetailWare
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.warehouse.outbound.order.query.detail.ware";
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
     * @param String $stockOutNo
     * 出库单号
     * Required: false
     * Example Value: 
     */
    private $stockOutNo;

    /**
     * @param String $stockOutNo
     * 出库单号
     * Example Value: 
     */
    public function setStockOutNo($stockOutNo)
    {
        $this->stockOutNo             = $stockOutNo;
        $this->apiParas["stockOutNo"]  = $stockOutNo;
    }

    public function getStockOutNo()
    {
        return $this->stockOutNo;
    }

}