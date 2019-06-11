<?php

namespace JD\request;

/**
 * 无界账单查询
 * 金算盘API-pop商家计费结算
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=195&apiId=2952&apiName=jingdong.jpass.journal.queryOrderBill
 * Class JpassJournalQueryOrderBill
 * @package Jd\request
 */
class JpassJournalQueryOrderBill
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.jpass.journal.queryOrderBill";
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
     * @param String $bid
     * 经营主体ID
     * Required: false
     * Example Value: 
     */
    private $bid;

    /**
     * @param String $bid
     * 经营主体ID
     * Example Value: 
     */
    public function setBid($bid)
    {
        $this->bid             = $bid;
        $this->apiParas["bid"]  = $bid;
    }

    public function getBid()
    {
        return $this->bid;
    }

    /**
     * @param String $orderId
     * 无界订单号
     * Required: false
     * Example Value: 
     */
    private $orderId;

    /**
     * @param String $orderId
     * 无界订单号
     * Example Value: 
     */
    public function setOrderId($orderId)
    {
        $this->orderId             = $orderId;
        $this->apiParas["orderId"]  = $orderId;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param String $refOrderId
     * 品牌订单号
     * Required: false
     * Example Value: 
     */
    private $refOrderId;

    /**
     * @param String $refOrderId
     * 品牌订单号
     * Example Value: 
     */
    public function setRefOrderId($refOrderId)
    {
        $this->refOrderId             = $refOrderId;
        $this->apiParas["refOrderId"]  = $refOrderId;
    }

    public function getRefOrderId()
    {
        return $this->refOrderId;
    }

    /**
     * @param String $storeId
     * 无界门店编号
     * Required: false
     * Example Value: 
     */
    private $storeId;

    /**
     * @param String $storeId
     * 无界门店编号
     * Example Value: 
     */
    public function setStoreId($storeId)
    {
        $this->storeId             = $storeId;
        $this->apiParas["storeId"]  = $storeId;
    }

    public function getStoreId()
    {
        return $this->storeId;
    }

    /**
     * @param Number[] $sId
     * 无界门店编号
     * Required: false
     * Example Value: Long
     */
    private $sId;

    /**
     * @param Number[] $sId
     * 无界门店编号
     * Example Value: Long
     */
    public function setSId($sId)
    {
        $this->sId             = $sId;
        $this->apiParas["sId"]  = $sId;
    }

    public function getSId()
    {
        return $this->sId;
    }

    /**
     * @param String $refStoreId
     * 品牌门店编号
     * Required: false
     * Example Value: 
     */
    private $refStoreId;

    /**
     * @param String $refStoreId
     * 品牌门店编号
     * Example Value: 
     */
    public function setRefStoreId($refStoreId)
    {
        $this->refStoreId             = $refStoreId;
        $this->apiParas["refStoreId"]  = $refStoreId;
    }

    public function getRefStoreId()
    {
        return $this->refStoreId;
    }

    /**
     * @param String $orderCompleteTime
     * 订单完成时间-非空
     * Required: true
     * Example Value: yyyy-MM-dd
     */
    private $orderCompleteTime;

    /**
     * @param String $orderCompleteTime
     * 订单完成时间-非空
     * Example Value: yyyy-MM-dd
     */
    public function setOrderCompleteTime($orderCompleteTime)
    {
        $this->orderCompleteTime             = $orderCompleteTime;
        $this->apiParas["orderCompleteTime"]  = $orderCompleteTime;
    }

    public function getOrderCompleteTime()
    {
        return $this->orderCompleteTime;
    }

    /**
     * @param String $orderCompleteTimeBegin
     * 订单完成时间-起始时间
     * Required: false
     * Example Value: yyyy-MM-dd HH:mm:ss
     */
    private $orderCompleteTimeBegin;

    /**
     * @param String $orderCompleteTimeBegin
     * 订单完成时间-起始时间
     * Example Value: yyyy-MM-dd HH:mm:ss
     */
    public function setOrderCompleteTimeBegin($orderCompleteTimeBegin)
    {
        $this->orderCompleteTimeBegin             = $orderCompleteTimeBegin;
        $this->apiParas["orderCompleteTimeBegin"]  = $orderCompleteTimeBegin;
    }

    public function getOrderCompleteTimeBegin()
    {
        return $this->orderCompleteTimeBegin;
    }

    /**
     * @param String $orderCompleteTimeEnd
     * 订单完成时间-结束时间
     * Required: false
     * Example Value: yyyy-MM-dd HH:mm:ss
     */
    private $orderCompleteTimeEnd;

    /**
     * @param String $orderCompleteTimeEnd
     * 订单完成时间-结束时间
     * Example Value: yyyy-MM-dd HH:mm:ss
     */
    public function setOrderCompleteTimeEnd($orderCompleteTimeEnd)
    {
        $this->orderCompleteTimeEnd             = $orderCompleteTimeEnd;
        $this->apiParas["orderCompleteTimeEnd"]  = $orderCompleteTimeEnd;
    }

    public function getOrderCompleteTimeEnd()
    {
        return $this->orderCompleteTimeEnd;
    }

    /**
     * @param String $settleStatus
     * 结算状态
     * Required: false
     * Example Value: 
     */
    private $settleStatus;

    /**
     * @param String $settleStatus
     * 结算状态
     * Example Value: 
     */
    public function setSettleStatus($settleStatus)
    {
        $this->settleStatus             = $settleStatus;
        $this->apiParas["settleStatus"]  = $settleStatus;
    }

    public function getSettleStatus()
    {
        return $this->settleStatus;
    }

    /**
     * @param Number $pageIndex
     * 页码
     * Required: true
     * Example Value: 
     */
    private $pageIndex;

    /**
     * @param Number $pageIndex
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
     * @param Number $pageSize
     * 每页条数Max(100)
     * Required: true
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 每页条数Max(100)
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

}