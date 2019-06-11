<?php

namespca Lostinfo\JosOpenApi;

/**
 * 退货入库单取消
 * 京云仓API-提供查询库存、入库单查询、出库单查询等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=56&apiId=149&apiName=jingdong.logistics.returnorder.cancel
 * Class LogisticsReturnorderCancel
 * @package Jd\request
 */
class LogisticsReturnorderCancel
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.logistics.returnorder.cancel";
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
     * @param string $receiptNo
     * 要取消的退货入库单号
     * Required: true
     * Example Value: JRI000001
     */
    private $receiptNo;

    /**
     * @param string $receiptNo
     * 要取消的退货入库单号
     * Example Value: JRI000001
     */
    public function setReceiptNo($receiptNo)
    {
        $this->receiptNo             = $receiptNo;
        $this->apiParas["receipt_no"]  = $receiptNo;
    }

    public function getReceiptNo()
    {
        return $this->receiptNo;
    }

}