<?php

namespace JD\request;

/**
 * 自开电子发票分页查询接口
 * 金算盘API-pop商家计费结算
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=195&apiId=1987&apiName=jingdong.pop.invoice.self.query
 * Class PopInvoiceSelfQuery
 * @package Jd\request
 */
class PopInvoiceSelfQuery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.invoice.self.query";
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
     * @param String $orderId
     * 订单编号
     * Required: false
     * Example Value: 
     */
    private $orderId;

    /**
     * @param String $orderId
     * 订单编号
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
     * @param String $invoiceCode
     * 发票代码
     * Required: false
     * Example Value: 
     */
    private $invoiceCode;

    /**
     * @param String $invoiceCode
     * 发票代码
     * Example Value: 
     */
    public function setInvoiceCode($invoiceCode)
    {
        $this->invoiceCode             = $invoiceCode;
        $this->apiParas["invoiceCode"]  = $invoiceCode;
    }

    public function getInvoiceCode()
    {
        return $this->invoiceCode;
    }

    /**
     * @param Number $invoiceNo
     * 发票号码
     * Required: false
     * Example Value: 
     */
    private $invoiceNo;

    /**
     * @param Number $invoiceNo
     * 发票号码
     * Example Value: 
     */
    public function setInvoiceNo($invoiceNo)
    {
        $this->invoiceNo             = $invoiceNo;
        $this->apiParas["invoiceNo"]  = $invoiceNo;
    }

    public function getInvoiceNo()
    {
        return $this->invoiceNo;
    }

    /**
     * @param Number $invoiceType
     * 发票类型 1-蓝票 2-红票
     * Required: false
     * Example Value: 
     */
    private $invoiceType;

    /**
     * @param Number $invoiceType
     * 发票类型 1-蓝票 2-红票
     * Example Value: 
     */
    public function setInvoiceType($invoiceType)
    {
        $this->invoiceType             = $invoiceType;
        $this->apiParas["invoiceType"]  = $invoiceType;
    }

    public function getInvoiceType()
    {
        return $this->invoiceType;
    }

    /**
     * @param String $invoiceTimeStart
     * 开票时间开始查询时间 格式yyyy-MM-dd
     * Required: false
     * Example Value: 
     */
    private $invoiceTimeStart;

    /**
     * @param String $invoiceTimeStart
     * 开票时间开始查询时间 格式yyyy-MM-dd
     * Example Value: 
     */
    public function setInvoiceTimeStart($invoiceTimeStart)
    {
        $this->invoiceTimeStart             = $invoiceTimeStart;
        $this->apiParas["invoiceTimeStart"]  = $invoiceTimeStart;
    }

    public function getInvoiceTimeStart()
    {
        return $this->invoiceTimeStart;
    }

    /**
     * @param String $invoiceTimeEnd
     * 开票时间结束查询时间 格式yyyy-MM-dd
     * Required: false
     * Example Value: 
     */
    private $invoiceTimeEnd;

    /**
     * @param String $invoiceTimeEnd
     * 开票时间结束查询时间 格式yyyy-MM-dd
     * Example Value: 
     */
    public function setInvoiceTimeEnd($invoiceTimeEnd)
    {
        $this->invoiceTimeEnd             = $invoiceTimeEnd;
        $this->apiParas["invoiceTimeEnd"]  = $invoiceTimeEnd;
    }

    public function getInvoiceTimeEnd()
    {
        return $this->invoiceTimeEnd;
    }

    /**
     * @param Number $pageSize
     * 每页记录数 取值范围1到100
     * Required: true
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 每页记录数 取值范围1到100
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

    /**
     * @param Number $pageCurrent
     * 当前页码 取值范围1到N
     * Required: true
     * Example Value: 
     */
    private $pageCurrent;

    /**
     * @param Number $pageCurrent
     * 当前页码 取值范围1到N
     * Example Value: 
     */
    public function setPageCurrent($pageCurrent)
    {
        $this->pageCurrent             = $pageCurrent;
        $this->apiParas["pageCurrent"]  = $pageCurrent;
    }

    public function getPageCurrent()
    {
        return $this->pageCurrent;
    }

}