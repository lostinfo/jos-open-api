<?php

namespca Lostinfo\JosOpenApi;

/**
 * 删除入库单
 * FBP仓储API-FBP仓储API对应FBP类型商家后台（shop.jd.com）仓储管理模块中的业务。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=126&apiId=748&apiName=jingdong.store.deleteStockInBill
 * Class StoreDeleteStockInBill
 * @package Jd\request
 */
class StoreDeleteStockInBill
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.store.deleteStockInBill";
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
     * @param int $stockInBillId
     * 入库单号
     * Required: true
     * Example Value: 
     */
    private $stockInBillId;

    /**
     * @param int $stockInBillId
     * 入库单号
     * Example Value: 
     */
    public function setStockInBillId($stockInBillId)
    {
        $this->stockInBillId             = $stockInBillId;
        $this->apiParas["stock_in_bill_id"]  = $stockInBillId;
    }

    public function getStockInBillId()
    {
        return $this->stockInBillId;
    }

}