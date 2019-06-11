<?php

namespace JD\request;

/**
 * 查询京东结算单细目数据
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=3758&apiName=jingdong.edi.statement.queryStatemetLines
 * Class EdiStatementQueryStatemetLines
 * @package Jd\request
 */
class EdiStatementQueryStatemetLines
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.edi.statement.queryStatemetLines";
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
     * @param String[] $billNo
     * 结算单id
     * Required: true
     * Example Value: 
     */
    private $billNo;

    /**
     * @param String[] $billNo
     * 结算单id
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
     * @param String $vendorCode
     * 供应商编码
     * Required: true
     * Example Value: 
     */
    private $vendorCode;

    /**
     * @param String $vendorCode
     * 供应商编码
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