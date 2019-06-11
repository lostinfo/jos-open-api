<?php

namespace Lostinfo\JosOpenApi\request;

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
     * @param string $bid
     * 经营主体ID
     * Required: false
     * Example Value: 
     */
    private $bid;

    /**
     * @param string $bid
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
     * @param string $orderId
     * 无界订单号
     * Required: false
     * Example Value: 
     */
    private $orderId;

    /**
     * @param string $orderId
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
     * @param string $refOrderId
     * 品牌订单号
     * Required: false
     * Example Value: 
     */
    private $refOrderId;

    /**
     * @param string $refOrderId
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
     * @param string $storeId
     * 无界门店编号
     * Required: false
     * Example Value: 
     */
    private $storeId;

    /**
     * @param string $storeId
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
     * @param int[] $sId
     * 无界门店编号
     * Required: false
     * Example Value: Long
     */
    private $sId;

    /**
     * @param int[] $sId
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
     * @param string $refStoreId
     * 品牌门店编号
     * Required: false
     * Example Value: 
     */
    private $refStoreId;

    /**
     * @param string $refStoreId
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
     * @param string $orderCompleteTime
     * 订单完成时间-非空
     * Required: true
     * Example Value: yyyy-MM-dd
     */
    private $orderCompleteTime;

    /**
     * @param string $orderCompleteTime
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
     * @param string $orderCompleteTimeBegin
     * 订单完成时间-起始时间
     * Required: false
     * Example Value: yyyy-MM-dd HH:mm:ss
     */
    private $orderCompleteTimeBegin;

    /**
     * @param string $orderCompleteTimeBegin
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
     * @param string $orderCompleteTimeEnd
     * 订单完成时间-结束时间
     * Required: false
     * Example Value: yyyy-MM-dd HH:mm:ss
     */
    private $orderCompleteTimeEnd;

    /**
     * @param string $orderCompleteTimeEnd
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
     * @param string $settleStatus
     * 结算状态
     * Required: false
     * Example Value: 
     */
    private $settleStatus;

    /**
     * @param string $settleStatus
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
     * @param int $pageIndex
     * 页码
     * Required: true
     * Example Value: 
     */
    private $pageIndex;

    /**
     * @param int $pageIndex
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
     * @param int $pageSize
     * 每页条数Max(100)
     * Required: true
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param int $pageSize
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