<?php

namespace JD\request;

/**
 * 删除老品商品资质信息，根据申请编号
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1662&apiName=jingdong.vc.item.qualification.delete
 * Class VcItemQualificationDelete
 * @package Jd\request
 */
class VcItemQualificationDelete
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vc.item.qualification.delete";
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
     * Example Value: ba089f41bd32428091600eda5b7f612c
     */
    private $applyId;

    /**
     * @param String $applyId
     * 申请编号
     * Example Value: ba089f41bd32428091600eda5b7f612c
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