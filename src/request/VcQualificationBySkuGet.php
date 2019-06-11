<?php

namespace JD\request;

/**
 * 获取商品资质信息
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1656&apiName=jingdong.vc.qualification.by.sku.get
 * Class VcQualificationBySkuGet
 * @package Jd\request
 */
class VcQualificationBySkuGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vc.qualification.by.sku.get";
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
     * @param String $wareId
     * 商品编号
     * Required: true
     * Example Value: 5689423
     */
    private $wareId;

    /**
     * @param String $wareId
     * 商品编号
     * Example Value: 5689423
     */
    public function setWareId($wareId)
    {
        $this->wareId             = $wareId;
        $this->apiParas["wareId"]  = $wareId;
    }

    public function getWareId()
    {
        return $this->wareId;
    }

}