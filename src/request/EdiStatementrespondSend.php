<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 发送供应商结算确认单
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=3759&apiName=jingdong.edi.statementrespond.send
 * Class EdiStatementrespondSend
 * @package Jd\request
 */
class EdiStatementrespondSend
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.edi.statementrespond.send";
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
     * @param string $vendorName
     * 供应商名称
     * Required: false
     * Example Value: 
     */
    private $vendorName;

    /**
     * @param string $vendorName
     * 供应商名称
     * Example Value: 
     */
    public function setVendorName($vendorName)
    {
        $this->vendorName             = $vendorName;
        $this->apiParas["vendorName"]  = $vendorName;
    }

    public function getVendorName()
    {
        return $this->vendorName;
    }

    /**
     * @param string $billNo
     * 结算单号
     * Required: true
     * Example Value: 
     */
    private $billNo;

    /**
     * @param string $billNo
     * 结算单号
     * Example Value: 
     */
    public function setBillNo($billNo)
    {
        $this->billNo             = $billNo;
        $this->apiParas["billNo"]  = $billNo;
    }

    public function getBillNo()
    {
        return $this->billNo;
    }

    /**
     * @param string $respond
     * 确认结果
     * Required: true
     * Example Value: 
     */
    private $respond;

    /**
     * @param string $respond
     * 确认结果
     * Example Value: 
     */
    public function setRespond($respond)
    {
        $this->respond             = $respond;
        $this->apiParas["respond"]  = $respond;
    }

    public function getRespond()
    {
        return $this->respond;
    }

    /**
     * @param int $finalAmount
     * 应结金额
     * Required: true
     * Example Value: 
     */
    private $finalAmount;

    /**
     * @param int $finalAmount
     * 应结金额
     * Example Value: 
     */
    public function setFinalAmount($finalAmount)
    {
        $this->finalAmount             = $finalAmount;
        $this->apiParas["finalAmount"]  = $finalAmount;
    }

    public function getFinalAmount()
    {
        return $this->finalAmount;
    }

    /**
     * @param int $invoiceAmount
     * 开票金额
     * Required: true
     * Example Value: 
     */
    private $invoiceAmount;

    /**
     * @param int $invoiceAmount
     * 开票金额
     * Example Value: 
     */
    public function setInvoiceAmount($invoiceAmount)
    {
        $this->invoiceAmount             = $invoiceAmount;
        $this->apiParas["invoiceAmount"]  = $invoiceAmount;
    }

    public function getInvoiceAmount()
    {
        return $this->invoiceAmount;
    }

    /**
     * @param string $vendorCode
     * 供应商简码
     * Required: true
     * Example Value: 
     */
    private $vendorCode;

    /**
     * @param string $vendorCode
     * 供应商简码
     * Example Value: 
     */
    public function setVendorCode($vendorCode)
    {
        $this->vendorCode             = $vendorCode;
        $this->apiParas["vendorCode"]  = $vendorCode;
    }

    public function getVendorCode()
    {
        return $this->vendorCode;
    }

}