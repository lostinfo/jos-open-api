<?php

namespace JD\request;

/**
 * 售前退货审核
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=474&apiName=jingdong.dropship.dps.prerefund
 * Class DropshipDpsPrerefund
 * @package Jd\request
 */
class DropshipDpsPrerefund
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dropship.dps.prerefund";
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
     * @param Number $customOrderId
     * 客单编号
     * Required: true
     * Example Value: 
     */
    private $customOrderId;

    /**
     * @param Number $customOrderId
     * 客单编号
     * Example Value: 
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
     * @param String $approvalSuggestion
     * 审核意见
     * Required: true
     * Example Value: 
     */
    private $approvalSuggestion;

    /**
     * @param String $approvalSuggestion
     * 审核意见
     * Example Value: 
     */
    public function setApprovalSuggestion($approvalSuggestion)
    {
        $this->approvalSuggestion             = $approvalSuggestion;
        $this->apiParas["approvalSuggestion"]  = $approvalSuggestion;
    }

    public function getApprovalSuggestion()
    {
        return $this->approvalSuggestion;
    }

    /**
     * @param String $approvalState
     * 审核状态 1:审核通过 2:审核不通过
     * Required: true
     * Example Value: 
     */
    private $approvalState;

    /**
     * @param String $approvalState
     * 审核状态 1:审核通过 2:审核不通过
     * Example Value: 
     */
    public function setApprovalState($approvalState)
    {
        $this->approvalState             = $approvalState;
        $this->apiParas["approvalState"]  = $approvalState;
    }

    public function getApprovalState()
    {
        return $this->approvalState;
    }

    /**
     * @param Number $id
     * 售前退款数据唯一标示
     * Required: true
     * Example Value: 
     */
    private $id;

    /**
     * @param Number $id
     * 售前退款数据唯一标示
     * Example Value: 
     */
    public function setId($id)
    {
        $this->id             = $id;
        $this->apiParas["id"]  = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param Number $operatorState
     * 操作状态：5新订单;9正在出库;10 出库成功;15正在发货;16发货成功;23等待退款
     * Required: true
     * Example Value: 
     */
    private $operatorState;

    /**
     * @param Number $operatorState
     * 操作状态：5新订单;9正在出库;10 出库成功;15正在发货;16发货成功;23等待退款
     * Example Value: 
     */
    public function setOperatorState($operatorState)
    {
        $this->operatorState             = $operatorState;
        $this->apiParas["operatorState"]  = $operatorState;
    }

    public function getOperatorState()
    {
        return $this->operatorState;
    }

}