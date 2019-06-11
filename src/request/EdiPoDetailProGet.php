<?php

namespace JD\request;

/**
 * 根据采购单号获取采购单细目(pro)
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=2686&apiName=jingdong.edi.po.detail.pro.get
 * Class EdiPoDetailProGet
 * @package Jd\request
 */
class EdiPoDetailProGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.edi.po.detail.pro.get";
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
     * @param String $purchaseOrderCode
     * 采购单号
     * Required: true
     * Example Value: 
     */
    private $purchaseOrderCode;

    /**
     * @param String $purchaseOrderCode
     * 采购单号
     * Example Value: 
     */
    public function setPurchaseOrderCode($purchaseOrderCode)
    {
        $this->purchaseOrderCode             = $purchaseOrderCode;
        $this->apiParas["purchaseOrderCode"]  = $purchaseOrderCode;
    }

    public function getPurchaseOrderCode()
    {
        return $this->purchaseOrderCode;
    }

}