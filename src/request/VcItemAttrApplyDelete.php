<?php

namespca Lostinfo\JosOpenApi;

/**
 * 删除驳回的颜色尺码申请
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1152&apiName=jingdong.vc.item.attr.apply.delete
 * Class VcItemAttrApplyDelete
 * @package Jd\request
 */
class VcItemAttrApplyDelete
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vc.item.attr.apply.delete";
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
     * 申请编号（提交申请后，vc系统产生的申请的唯一标识）
     * Required: true
     * Example Value: 06067413cc6c4219bb81f2a726265862
     */
    private $applyId;

    /**
     * @param string $applyId
     * 申请编号（提交申请后，vc系统产生的申请的唯一标识）
     * Example Value: 06067413cc6c4219bb81f2a726265862
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