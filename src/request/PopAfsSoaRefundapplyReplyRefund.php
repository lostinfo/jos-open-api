<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 商家审核退款单
 * 退款API-提供退款审核列表、退款审核详情功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=71&apiId=923&apiName=jingdong.pop.afs.soa.refundapply.replyRefund
 * Class PopAfsSoaRefundapplyReplyRefund
 * @package Jd\request
 */
class PopAfsSoaRefundapplyReplyRefund
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.afs.soa.refundapply.replyRefund";
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
     * @param int $status
     * 退款申请单状态 1审核通过 2审核不通过 6通过并京东拦截 9强制关单 10物流待跟进
     * Required: true
     * Example Value: 
     */
    private $status;

    /**
     * @param int $status
     * 退款申请单状态 1审核通过 2审核不通过 6通过并京东拦截 9强制关单 10物流待跟进
     * Example Value: 
     */
    public function setStatus($status)
    {
        $this->status             = $status;
        $this->apiParas["status"]  = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param int $id
     * 退款单id
     * Required: true
     * Example Value: 
     */
    private $id;

    /**
     * @param int $id
     * 退款单id
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
     * @param string $checkUserName
     * 审核人
     * Required: true
     * Example Value: 
     */
    private $checkUserName;

    /**
     * @param string $checkUserName
     * 审核人
     * Example Value: 
     */
    public function setCheckUserName($checkUserName)
    {
        $this->checkUserName             = $checkUserName;
        $this->apiParas["checkUserName"]  = $checkUserName;
    }

    public function getCheckUserName()
    {
        return $this->checkUserName;
    }

    /**
     * @param string $remark
     * 审核备注,除强制关单外的其它审核状态下必填
     * Required: false
     * Example Value: 
     */
    private $remark;

    /**
     * @param string $remark
     * 审核备注,除强制关单外的其它审核状态下必填
     * Example Value: 
     */
    public function setRemark($remark)
    {
        $this->remark             = $remark;
        $this->apiParas["remark"]  = $remark;
    }

    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * @param int $rejectType
     * 仅在审核不通过时填写该值。1: 商品已在配送途中,无法取消,烦请谅解；2：商品已签收,无法取消,烦请谅解；3：国际站保税区订单，已报关;4：已电话沟通客户，客户同意签收商品;5：其他
     * Required: false
     * Example Value: 
     */
    private $rejectType;

    /**
     * @param int $rejectType
     * 仅在审核不通过时填写该值。1: 商品已在配送途中,无法取消,烦请谅解；2：商品已签收,无法取消,烦请谅解；3：国际站保税区订单，已报关;4：已电话沟通客户，客户同意签收商品;5：其他
     * Example Value: 
     */
    public function setRejectType($rejectType)
    {
        $this->rejectType             = $rejectType;
        $this->apiParas["rejectType"]  = $rejectType;
    }

    public function getRejectType()
    {
        return $this->rejectType;
    }

    /**
     * @param int $outWareStatus
     * 实际是否已出库:1已出库 2未出库
     * Required: false
     * Example Value: 
     */
    private $outWareStatus;

    /**
     * @param int $outWareStatus
     * 实际是否已出库:1已出库 2未出库
     * Example Value: 
     */
    public function setOutWareStatus($outWareStatus)
    {
        $this->outWareStatus             = $outWareStatus;
        $this->apiParas["outWareStatus"]  = $outWareStatus;
    }

    public function getOutWareStatus()
    {
        return $this->outWareStatus;
    }

}