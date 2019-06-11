<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 订单取消
 * 京云仓API-提供查询库存、入库单查询、出库单查询等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=56&apiId=141&apiName=jingdong.logistics.order.delete
 * Class LogisticsOrderDelete
 * @package Jd\request
 */
class LogisticsOrderDelete
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.logistics.order.delete";
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
     * JOSL单号
     * Required: true
     * Example Value: 
     */
    private $receiptNo;

    /**
     * @param string $receiptNo
     * JOSL单号
     * Example Value: 
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