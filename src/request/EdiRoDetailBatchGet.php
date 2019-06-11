<?php

namespace JD\request;

/**
 * 根据退货单号和京东SKU获取细目批次信息
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1976&apiName=jingdong.edi.ro.detail.batch.get
 * Class EdiRoDetailBatchGet
 * @package Jd\request
 */
class EdiRoDetailBatchGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.edi.ro.detail.batch.get";
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
     * @param String $returnOrderCode
     * 退货单号
     * Required: true
     * Example Value: 
     */
    private $returnOrderCode;

    /**
     * @param String $returnOrderCode
     * 退货单号
     * Example Value: 
     */
    public function setReturnOrderCode($returnOrderCode)
    {
        $this->returnOrderCode             = $returnOrderCode;
        $this->apiParas["returnOrderCode"]  = $returnOrderCode;
    }

    public function getReturnOrderCode()
    {
        return $this->returnOrderCode;
    }

    /**
     * @param String $jdSku
     * 京东SKU
     * Required: true
     * Example Value: 
     */
    private $jdSku;

    /**
     * @param String $jdSku
     * 京东SKU
     * Example Value: 
     */
    public function setJdSku($jdSku)
    {
        $this->jdSku             = $jdSku;
        $this->apiParas["jdSku"]  = $jdSku;
    }

    public function getJdSku()
    {
        return $this->jdSku;
    }

}