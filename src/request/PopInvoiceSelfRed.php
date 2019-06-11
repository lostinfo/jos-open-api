<?php

namespca Lostinfo\JosOpenApi;

/**
 * 自开电子发票红票上传接口
 * 金算盘API-pop商家计费结算
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=195&apiId=1988&apiName=jingdong.pop.invoice.self.red
 * Class PopInvoiceSelfRed
 * @package Jd\request
 */
class PopInvoiceSelfRed
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.invoice.self.red";
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
     * @param string $orderId
     * 订单编号
     * Required: true
     * Example Value: 
     */
    private $orderId;

    /**
     * @param string $orderId
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
     * @param string $invoiceCode
     * 发票代码
     * Required: true
     * Example Value: 
     */
    private $invoiceCode;

    /**
     * @param string $invoiceCode
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
     * @param int $invoiceNo
     * 发票号码
     * Required: true
     * Example Value: 
     */
    private $invoiceNo;

    /**
     * @param int $invoiceNo
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
     * @param string $invoiceTime
     * 开票时间
     * Required: true
     * Example Value: 
     */
    private $invoiceTime;

    /**
     * @param string $invoiceTime
     * 开票时间
     * Example Value: 
     */
    public function setInvoiceTime($invoiceTime)
    {
        $this->invoiceTime             = $invoiceTime;
        $this->apiParas["invoiceTime"]  = $invoiceTime;
    }

    public function getInvoiceTime()
    {
        return $this->invoiceTime;
    }

    /**
     * @param string $blueInvoiceCode
     * 原蓝票发票代码
     * Required: true
     * Example Value: 
     */
    private $blueInvoiceCode;

    /**
     * @param string $blueInvoiceCode
     * 原蓝票发票代码
     * Example Value: 
     */
    public function setBlueInvoiceCode($blueInvoiceCode)
    {
        $this->blueInvoiceCode             = $blueInvoiceCode;
        $this->apiParas["blueInvoiceCode"]  = $blueInvoiceCode;
    }

    public function getBlueInvoiceCode()
    {
        return $this->blueInvoiceCode;
    }

    /**
     * @param int $blueInvoiceNo
     * 原蓝票发票号码
     * Required: true
     * Example Value: 
     */
    private $blueInvoiceNo;

    /**
     * @param int $blueInvoiceNo
     * 原蓝票发票号码
     * Example Value: 
     */
    public function setBlueInvoiceNo($blueInvoiceNo)
    {
        $this->blueInvoiceNo             = $blueInvoiceNo;
        $this->apiParas["blueInvoiceNo"]  = $blueInvoiceNo;
    }

    public function getBlueInvoiceNo()
    {
        return $this->blueInvoiceNo;
    }

    /**
     * @param string $pdfInfo
     * 发票PDF文件二进制流base64编码
     * Required: true
     * Example Value: 
     */
    private $pdfInfo;

    /**
     * @param string $pdfInfo
     * 发票PDF文件二进制流base64编码
     * Example Value: 
     */
    public function setPdfInfo($pdfInfo)
    {
        $this->pdfInfo             = $pdfInfo;
        $this->apiParas["pdfInfo"]  = $pdfInfo;
    }

    public function getPdfInfo()
    {
        return $this->pdfInfo;
    }

}