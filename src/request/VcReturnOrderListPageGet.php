<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 分页查询退货单列表
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=488&apiName=jingdong.vc.return.order.list.page.get
 * Class VcReturnOrderListPageGet
 * @package Jd\request
 */
class VcReturnOrderListPageGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vc.return.order.list.page.get";
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
     * @param int $returnId
     * 退货单号
     * Required: false
     * Example Value: 123456
     */
    private $returnId;

    /**
     * @param int $returnId
     * 退货单号
     * Example Value: 123456
     */
    public function setReturnId($returnId)
    {
        $this->returnId             = $returnId;
        $this->apiParas["returnId"]  = $returnId;
    }

    public function getReturnId()
    {
        return $this->returnId;
    }

    /**
     * @param int $fromDeliverCenterId
     * 退货地配送中心
     * Required: false
     * Example Value: 6
     */
    private $fromDeliverCenterId;

    /**
     * @param int $fromDeliverCenterId
     * 退货地配送中心
     * Example Value: 6
     */
    public function setFromDeliverCenterId($fromDeliverCenterId)
    {
        $this->fromDeliverCenterId             = $fromDeliverCenterId;
        $this->apiParas["fromDeliverCenterId"]  = $fromDeliverCenterId;
    }

    public function getFromDeliverCenterId()
    {
        return $this->fromDeliverCenterId;
    }

    /**
     * @param string $returnStates
     * 退货单状态（支持多个,如果查询全部，则不需要赋值，其中1,初始退货单  2,等待经理审核 3,等待总监审核 4,等待质控审核 5,审核通过 9,等待退货机构出库 10,等待目的机构入库 11,等待退货区收货 13,等待供应商收货  17,报废等待结算 18,提货等待结算 20,已完成 21,等待删除确认 22,已删除）
     * Required: false
     * Example Value: 13
     */
    private $returnStates;

    /**
     * @param string $returnStates
     * 退货单状态（支持多个,如果查询全部，则不需要赋值，其中1,初始退货单  2,等待经理审核 3,等待总监审核 4,等待质控审核 5,审核通过 9,等待退货机构出库 10,等待目的机构入库 11,等待退货区收货 13,等待供应商收货  17,报废等待结算 18,提货等待结算 20,已完成 21,等待删除确认 22,已删除）
     * Example Value: 13
     */
    public function setReturnStates($returnStates)
    {
        $this->returnStates             = $returnStates;
        $this->apiParas["returnStates"]  = $returnStates;
    }

    public function getReturnStates()
    {
        return $this->returnStates;
    }

    /**
     * @param string $createDateBegin
     * 退货单创建时间（开始时间）
     * Required: false
     * Example Value: 2014-01-20 17:45:56
     */
    private $createDateBegin;

    /**
     * @param string $createDateBegin
     * 退货单创建时间（开始时间）
     * Example Value: 2014-01-20 17:45:56
     */
    public function setCreateDateBegin($createDateBegin)
    {
        $this->createDateBegin             = $createDateBegin;
        $this->apiParas["createDateBegin"]  = $createDateBegin;
    }

    public function getCreateDateBegin()
    {
        return $this->createDateBegin;
    }

    /**
     * @param string $createDateEnd
     * 退货单创建时间（截止时间,如果输入截止时间，则必须输入开始时间）
     * Required: false
     * Example Value: 2014-03-27 9:24:07
     */
    private $createDateEnd;

    /**
     * @param string $createDateEnd
     * 退货单创建时间（截止时间,如果输入截止时间，则必须输入开始时间）
     * Example Value: 2014-03-27 9:24:07
     */
    public function setCreateDateEnd($createDateEnd)
    {
        $this->createDateEnd             = $createDateEnd;
        $this->apiParas["createDateEnd"]  = $createDateEnd;
    }

    public function getCreateDateEnd()
    {
        return $this->createDateEnd;
    }

    /**
     * @param int $pageSize
     * 分页大小
     * Required: true
     * Example Value: 1
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 分页大小
     * Example Value: 1
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

    /**
     * @param int $pageIndex
     * 页码
     * Required: true
     * Example Value: 50
     */
    private $pageIndex;

    /**
     * @param int $pageIndex
     * 页码
     * Example Value: 50
     */
    public function setPageIndex($pageIndex)
    {
        $this->pageIndex             = $pageIndex;
        $this->apiParas["pageIndex"]  = $pageIndex;
    }

    public function getPageIndex()
    {
        return $this->pageIndex;
    }

}