<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 根据采购单号获取采购单细目
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1719&apiName=jingdong.edi.po.detail.get
 * Class EdiPoDetailGet
 * @package Jd\request
 */
class EdiPoDetailGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.edi.po.detail.get";
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
     * @param string $purchaseOrderCode
     * 采购单号
     * Required: true
     * Example Value: 
     */
    private $purchaseOrderCode;

    /**
     * @param string $purchaseOrderCode
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