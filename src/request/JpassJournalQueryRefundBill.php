<?php

namespace JD\request;

/**
 * 无界退款账单查询
 * 金算盘API-pop商家计费结算
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=195&apiId=2962&apiName=jingdong.jpass.journal.queryRefundBill
 * Class JpassJournalQueryRefundBill
 * @package Jd\request
 */
class JpassJournalQueryRefundBill
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.jpass.journal.queryRefundBill";
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
     * @param String $businessBillId
     * 无界退款单单号
     * Required: false
     * Example Value: 
     */
    private $businessBillId;

    /**
     * @param String $businessBillId
     * 无界退款单单号
     * Example Value: 
     */
    public function setBusinessBillId($businessBillId)
    {
        $this->businessBillId             = $businessBillId;
        $this->apiParas["businessBillId"]  = $businessBillId;
    }

    public function getBusinessBillId()
    {
        return $this->businessBillId;
    }

    /**
     * @param String $orderId
     * 订单号
     * Required: false
     * Example Value: 
     */
    private $orderId;

    /**
     * @param String $orderId
     * 订单号
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
     * @param Number[] $sId
     * 无界门店编号
     * Required: false
     * Example Value: 
     */
    private $sId;

    /**
     * @param Number[] $sId
     * 无界门店编号
     * Example Value: 
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
     * @param String $happenTime
     * 退款单发生时间(yyyy-MM-dd)
     * Required: true
     * Example Value: 必输
     */
    private $happenTime;

    /**
     * @param String $happenTime
     * 退款单发生时间(yyyy-MM-dd)
     * Example Value: 必输
     */
    public function setHappenTime($happenTime)
    {
        $this->happenTime             = $happenTime;
        $this->apiParas["happenTime"]  = $happenTime;
    }

    public function getHappenTime()
    {
        return $this->happenTime;
    }

    /**
     * @param String $happenTimeBegin
     * 退款单发生开始时间(yyyy-MM-dd HH:mm:ss)
     * Required: false
     * Example Value: yyyy-MM-dd HH:mm:ss
     */
    private $happenTimeBegin;

    /**
     * @param String $happenTimeBegin
     * 退款单发生开始时间(yyyy-MM-dd HH:mm:ss)
     * Example Value: yyyy-MM-dd HH:mm:ss
     */
    public function setHappenTimeBegin($happenTimeBegin)
    {
        $this->happenTimeBegin             = $happenTimeBegin;
        $this->apiParas["happenTimeBegin"]  = $happenTimeBegin;
    }

    public function getHappenTimeBegin()
    {
        return $this->happenTimeBegin;
    }

    /**
     * @param String $happenTimeEnd
     * 退款单发生结束时间(yyyy-MM-dd HH:mm:ss)
     * Required: false
     * Example Value: yyyy-MM-dd HH:mm:ss
     */
    private $happenTimeEnd;

    /**
     * @param String $happenTimeEnd
     * 退款单发生结束时间(yyyy-MM-dd HH:mm:ss)
     * Example Value: yyyy-MM-dd HH:mm:ss
     */
    public function setHappenTimeEnd($happenTimeEnd)
    {
        $this->happenTimeEnd             = $happenTimeEnd;
        $this->apiParas["happenTimeEnd"]  = $happenTimeEnd;
    }

    public function getHappenTimeEnd()
    {
        return $this->happenTimeEnd;
    }

    /**
     * @param String $settleStatus
     * 结算状态
     * Required: false
     * Example Value: 1-已结算, 2-结算中, 3-未结算
     */
    private $settleStatus;

    /**
     * @param String $settleStatus
     * 结算状态
     * Example Value: 1-已结算, 2-结算中, 3-未结算
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
     * 分页页码
     * Required: true
     * Example Value: 
     */
    private $pageIndex;

    /**
     * @param Number $pageIndex
     * 分页页码
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
     * 每页条数(最大100条)
     * Required: true
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 每页条数(最大100条)
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