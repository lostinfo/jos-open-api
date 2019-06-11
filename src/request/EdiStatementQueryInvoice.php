<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 查询发票信息
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=2714&apiName=jingdong.edi.statement.queryInvoice
 * Class EdiStatementQueryInvoice
 * @package Jd\request
 */
class EdiStatementQueryInvoice
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.edi.statement.queryInvoice";
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
     * @param string $invoiceNo
     * 发票号
     * Required: true
     * Example Value: 
     */
    private $invoiceNo;

    /**
     * @param string $invoiceNo
     * 发票号
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

}