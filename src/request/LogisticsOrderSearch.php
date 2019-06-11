<?php

namespace JD\request;

/**
 * 获取多订单信息
 * 京云仓API-提供查询库存、入库单查询、出库单查询等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=56&apiId=154&apiName=jingdong.logistics.order.search
 * Class LogisticsOrderSearch
 * @package Jd\request
 */
class LogisticsOrderSearch
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.logistics.order.search";
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
     * @param String $receiptNos
     * JOSL唯一单号(多订单请用英文','分割,最大支持200单)
     * Required: true
     * Example Value: 
     */
    private $receiptNos;

    /**
     * @param String $receiptNos
     * JOSL唯一单号(多订单请用英文','分割,最大支持200单)
     * Example Value: 
     */
    public function setReceiptNos($receiptNos)
    {
        $this->receiptNos             = $receiptNos;
        $this->apiParas["receipt_nos"]  = $receiptNos;
    }

    public function getReceiptNos()
    {
        return $this->receiptNos;
    }

    /**
     * @param String $status
     * 状态值集(,)
     * Required: false
     * Example Value: 
     */
    private $status;

    /**
     * @param String $status
     * 状态值集(,)
     * Example Value: 
     */
    public function setStatus($status)
    {
        $this->status             = $status;
        $this->apiParas["status"]  = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

}