<?php

namespca Lostinfo\JosOpenApi;

/**
 * 根据申请编号查询商品主图
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1174&apiName=jingdong.vc.item.primaryPic.apply.get
 * Class VcItemPrimaryPicApplyGet
 * @package Jd\request
 */
class VcItemPrimaryPicApplyGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vc.item.primaryPic.apply.get";
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
     * @param string $applyId
     * 申请编号（VC系统产生的编号）
     * Required: true
     * Example Value: 9e3cb5dbe5fd41b784e67051db1e8e15
     */
    private $applyId;

    /**
     * @param string $applyId
     * 申请编号（VC系统产生的编号）
     * Example Value: 9e3cb5dbe5fd41b784e67051db1e8e15
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