<?php

namespca Lostinfo\JosOpenApi;

/**
 * 客单拒送操作
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=477&apiName=jingdong.dropship.dps.refuse
 * Class DropshipDpsRefuse
 * @package Jd\request
 */
class DropshipDpsRefuse
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dropship.dps.refuse";
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
     * @param int $customOrderId
     * 客单编号
     * Required: true
     * Example Value: 170439197
     */
    private $customOrderId;

    /**
     * @param int $customOrderId
     * 客单编号
     * Example Value: 170439197
     */
    public function setCustomOrderId($customOrderId)
    {
        $this->customOrderId             = $customOrderId;
        $this->apiParas["customOrderId"]  = $customOrderId;
    }

    public function getCustomOrderId()
    {
        return $this->customOrderId;
    }

    /**
     * @param string $refuseReason
     * 拒送原因
     * Required: true
     * Example Value: 无货
     */
    private $refuseReason;

    /**
     * @param string $refuseReason
     * 拒送原因
     * Example Value: 无货
     */
    public function setRefuseReason($refuseReason)
    {
        $this->refuseReason             = $refuseReason;
        $this->apiParas["refuseReason"]  = $refuseReason;
    }

    public function getRefuseReason()
    {
        return $this->refuseReason;
    }

}