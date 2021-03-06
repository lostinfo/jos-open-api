<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 海外厂直订单退款审核
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=2987&apiName=jingdong.dropshipept.ordercancel.review
 * Class DropshipeptOrdercancelReview
 * @package Jd\request
 */
class DropshipeptOrdercancelReview
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dropshipept.ordercancel.review";
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
     * @param int $orderId
     * 订单号
     * Required: true
     * Example Value: 
     */
    private $orderId;

    /**
     * @param int $orderId
     * 订单号
     * Example Value: 
     */
    public function setOrderId($orderId)
    {
        $this->orderId             = $orderId;
        $this->apiParas["orderId"]  = $orderId;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param string $handleTime
     * 处理时间（格式yyyy-MM-dd hh:mm:ss）
     * Required: true
     * Example Value: 
     */
    private $handleTime;

    /**
     * @param string $handleTime
     * 处理时间（格式yyyy-MM-dd hh:mm:ss）
     * Example Value: 
     */
    public function setHandleTime($handleTime)
    {
        $this->handleTime             = $handleTime;
        $this->apiParas["handleTime"]  = $handleTime;
    }

    public function getHandleTime()
    {
        return $this->handleTime;
    }

    /**
     * @param int $auditType
     * 审核类型  3:通过  4.驳回
     * Required: true
     * Example Value: 
     */
    private $auditType;

    /**
     * @param int $auditType
     * 审核类型  3:通过  4.驳回
     * Example Value: 
     */
    public function setAuditType($auditType)
    {
        $this->auditType             = $auditType;
        $this->apiParas["auditType"]  = $auditType;
    }

    public function getAuditType()
    {
        return $this->auditType;
    }

}