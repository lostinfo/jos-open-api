<?php

namespca Lostinfo\JosOpenApi;

/**
 * 删除申请记录
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1675&apiName=jingdong.vc.item.product.apply.delete
 * Class VcItemProductApplyDelete
 * @package Jd\request
 */
class VcItemProductApplyDelete
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vc.item.product.apply.delete";
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
     * 申请编号(提交新的申请时，vc系统产生的申请唯一标识)
     * Required: true
     * Example Value: 984765151324365132135
     */
    private $applyId;

    /**
     * @param string $applyId
     * 申请编号(提交新的申请时，vc系统产生的申请唯一标识)
     * Example Value: 984765151324365132135
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