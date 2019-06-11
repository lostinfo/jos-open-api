<?php

namespace JD\request;

/**
 * 查询单个商品资质信息，根据申请编号
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1665&apiName=jingdong.vc.item.qualification.single.get
 * Class VcItemQualificationSingleGet
 * @package Jd\request
 */
class VcItemQualificationSingleGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vc.item.qualification.single.get";
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
     * @param String $applyId
     * 申请编号
     * Required: true
     * Example Value: 7694c0426bfc4c138670b7d771572372
     */
    private $applyId;

    /**
     * @param String $applyId
     * 申请编号
     * Example Value: 7694c0426bfc4c138670b7d771572372
     */
    public function setApplyId($applyId)
    {
        $this->applyId             = $applyId;
        $this->apiParas["apply_id"]  = $applyId;
    }

    public function getApplyId()
    {
        return $this->applyId;
    }

}