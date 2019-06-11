<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 获取预采购单
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1968&apiName=jingdong.edi.prepo.get
 * Class EdiPrepoGet
 * @package Jd\request
 */
class EdiPrepoGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.edi.prepo.get";
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
     * @param string $prePurchaseOrderCode
     * 预采购单编码
     * Required: false
     * Example Value: 
     */
    private $prePurchaseOrderCode;

    /**
     * @param string $prePurchaseOrderCode
     * 预采购单编码
     * Example Value: 
     */
    public function setPrePurchaseOrderCode($prePurchaseOrderCode)
    {
        $this->prePurchaseOrderCode             = $prePurchaseOrderCode;
        $this->apiParas["prePurchaseOrderCode"]  = $prePurchaseOrderCode;
    }

    public function getPrePurchaseOrderCode()
    {
        return $this->prePurchaseOrderCode;
    }

    /**
     * @param int $status
     * 预采购单状态: 1. 待下发; 2. 已下发; 3. 已驳回
     * Required: false
     * Example Value: 
     */
    private $status;

    /**
     * @param int $status
     * 预采购单状态: 1. 待下发; 2. 已下发; 3. 已驳回
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
     * @param string $receiveTimeStart
     * 预采购单接收时间开始
     * Required: true
     * Example Value: 
     */
    private $receiveTimeStart;

    /**
     * @param string $receiveTimeStart
     * 预采购单接收时间开始
     * Example Value: 
     */
    public function setReceiveTimeStart($receiveTimeStart)
    {
        $this->receiveTimeStart             = $receiveTimeStart;
        $this->apiParas["receiveTimeStart"]  = $receiveTimeStart;
    }

    public function getReceiveTimeStart()
    {
        return $this->receiveTimeStart;
    }

    /**
     * @param string $receiveTimeEnd
     * 预采购单接收时间结束
     * Required: true
     * Example Value: 
     */
    private $receiveTimeEnd;

    /**
     * @param string $receiveTimeEnd
     * 预采购单接收时间结束
     * Example Value: 
     */
    public function setReceiveTimeEnd($receiveTimeEnd)
    {
        $this->receiveTimeEnd             = $receiveTimeEnd;
        $this->apiParas["receiveTimeEnd"]  = $receiveTimeEnd;
    }

    public function getReceiveTimeEnd()
    {
        return $this->receiveTimeEnd;
    }

    /**
     * @param int $pageNum
     * 当前页数，从1开始
     * Required: false
     * Example Value: 
     */
    private $pageNum;

    /**
     * @param int $pageNum
     * 当前页数，从1开始
     * Example Value: 
     */
    public function setPageNum($pageNum)
    {
        $this->pageNum             = $pageNum;
        $this->apiParas["pageNum"]  = $pageNum;
    }

    public function getPageNum()
    {
        return $this->pageNum;
    }

    /**
     * @param int $pageSize
     * 一页记录数目
     * Required: false
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 一页记录数目
     * Example Value: 
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize             = $pageSize;
        $this->apiParas["pageSize"]  = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

}