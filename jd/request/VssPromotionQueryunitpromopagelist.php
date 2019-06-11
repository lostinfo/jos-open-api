<?php

namespace JD\request;

/**
 * 查询单品促销列表
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1794&apiName=jingdong.vss.promotion.queryunitpromopagelist
 * Class VssPromotionQueryunitpromopagelist
 * @package Jd\request
 */
class VssPromotionQueryunitpromopagelist
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vss.promotion.queryunitpromopagelist";
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
     * @param Number $wareId
     * 商品编号
     * Required: false
     * Example Value: 
     */
    private $wareId;

    /**
     * @param Number $wareId
     * 商品编号
     * Example Value: 
     */
    public function setWareId($wareId)
    {
        $this->wareId             = $wareId;
        $this->apiParas["ware_id"]  = $wareId;
    }

    public function getWareId()
    {
        return $this->wareId;
    }

    /**
     * @param String $promoId
     * 促销编号
     * Required: false
     * Example Value: 
     */
    private $promoId;

    /**
     * @param String $promoId
     * 促销编号
     * Example Value: 
     */
    public function setPromoId($promoId)
    {
        $this->promoId             = $promoId;
        $this->apiParas["promo_id"]  = $promoId;
    }

    public function getPromoId()
    {
        return $this->promoId;
    }

    /**
     * @param String $promoName
     * 促销名称
     * Required: false
     * Example Value: 
     */
    private $promoName;

    /**
     * @param String $promoName
     * 促销名称
     * Example Value: 
     */
    public function setPromoName($promoName)
    {
        $this->promoName             = $promoName;
        $this->apiParas["promo_name"]  = $promoName;
    }

    public function getPromoName()
    {
        return $this->promoName;
    }

    /**
     * @param Date $createTimeBegin
     * 创建时间(开始)
     * Required: false
     * Example Value: 
     */
    private $createTimeBegin;

    /**
     * @param Date $createTimeBegin
     * 创建时间(开始)
     * Example Value: 
     */
    public function setCreateTimeBegin($createTimeBegin)
    {
        $this->createTimeBegin             = $createTimeBegin;
        $this->apiParas["create_time_begin"]  = $createTimeBegin;
    }

    public function getCreateTimeBegin()
    {
        return $this->createTimeBegin;
    }

    /**
     * @param Date $createTimeEnd
     * 创建时间(结束)
     * Required: false
     * Example Value: 
     */
    private $createTimeEnd;

    /**
     * @param Date $createTimeEnd
     * 创建时间(结束)
     * Example Value: 
     */
    public function setCreateTimeEnd($createTimeEnd)
    {
        $this->createTimeEnd             = $createTimeEnd;
        $this->apiParas["create_time_end"]  = $createTimeEnd;
    }

    public function getCreateTimeEnd()
    {
        return $this->createTimeEnd;
    }

    /**
     * @param Date $beginModifyTime
     * 生效时间(开始)
     * Required: false
     * Example Value: 
     */
    private $beginModifyTime;

    /**
     * @param Date $beginModifyTime
     * 生效时间(开始)
     * Example Value: 
     */
    public function setBeginModifyTime($beginModifyTime)
    {
        $this->beginModifyTime             = $beginModifyTime;
        $this->apiParas["begin_time"]  = $beginModifyTime;
    }

    public function getBeginModifyTime()
    {
        return $this->beginModifyTime;
    }

    /**
     * @param Date $endModifyTime
     * 生效时间(结束)
     * Required: false
     * Example Value: 
     */
    private $endModifyTime;

    /**
     * @param Date $endModifyTime
     * 生效时间(结束)
     * Example Value: 
     */
    public function setEndModifyTime($endModifyTime)
    {
        $this->endModifyTime             = $endModifyTime;
        $this->apiParas["end_time"]  = $endModifyTime;
    }

    public function getEndModifyTime()
    {
        return $this->endModifyTime;
    }

    /**
     * @param Number $promoState
     * 促销状态 空全部 1进行中 2已过期 3人工删除 4系统删除 5未启动
     * Required: false
     * Example Value: 5
     */
    private $promoState;

    /**
     * @param Number $promoState
     * 促销状态 空全部 1进行中 2已过期 3人工删除 4系统删除 5未启动
     * Example Value: 5
     */
    public function setPromoState($promoState)
    {
        $this->promoState             = $promoState;
        $this->apiParas["promo_state"]  = $promoState;
    }

    public function getPromoState()
    {
        return $this->promoState;
    }

    /**
     * @param Number $auditState
     * 审核状态 空全部 1审核通过 2待审核 3驳回
     * Required: false
     * Example Value: 1
     */
    private $auditState;

    /**
     * @param Number $auditState
     * 审核状态 空全部 1审核通过 2待审核 3驳回
     * Example Value: 1
     */
    public function setAuditState($auditState)
    {
        $this->auditState             = $auditState;
        $this->apiParas["audit_state"]  = $auditState;
    }

    public function getAuditState()
    {
        return $this->auditState;
    }

    /**
     * @param Number $pageIndex
     * 分页当前页(从1开始)
     * Required: true
     * Example Value: 1
     */
    private $pageIndex;

    /**
     * @param Number $pageIndex
     * 分页当前页(从1开始)
     * Example Value: 1
     */
    public function setPageIndex($pageIndex)
    {
        $this->pageIndex             = $pageIndex;
        $this->apiParas["page_index"]  = $pageIndex;
    }

    public function getPageIndex()
    {
        return $this->pageIndex;
    }

    /**
     * @param Number $pageSize
     * 每页显示数(最多100)
     * Required: true
     * Example Value: 1
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 每页显示数(最多100)
     * Example Value: 1
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize             = $pageSize;
        $this->apiParas["page_size"]  = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

}