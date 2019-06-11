<?php

namespca Lostinfo\JosOpenApi;

/**
 * 检索退库单
 * FBP仓储API-FBP仓储API对应FBP类型商家后台（shop.jd.com）仓储管理模块中的业务。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=126&apiId=739&apiName=jingdong.store.queryStockOutBill
 * Class StoreQueryStockOutBill
 * @package Jd\request
 */
class StoreQueryStockOutBill
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.store.queryStockOutBill";
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
     * @param int $stockOutStatus
     * 退库单状态.1:等待审核,2:商家已收货,3:退库完成,4:删除成功,6:报废,7:删除处理中,8:全部,9:审核通过,10:驳回,12:等待发货,13:等待退货区收货,14:等待商家自提
     * Required: false
     * Example Value: 
     */
    private $stockOutStatus;

    /**
     * @param int $stockOutStatus
     * 退库单状态.1:等待审核,2:商家已收货,3:退库完成,4:删除成功,6:报废,7:删除处理中,8:全部,9:审核通过,10:驳回,12:等待发货,13:等待退货区收货,14:等待商家自提
     * Example Value: 
     */
    public function setStockOutStatus($stockOutStatus)
    {
        $this->stockOutStatus             = $stockOutStatus;
        $this->apiParas["stock_out_status"]  = $stockOutStatus;
    }

    public function getStockOutStatus()
    {
        return $this->stockOutStatus;
    }

    /**
     * @param int $id
     * 退库编号
     * Required: false
     * Example Value: 
     */
    private $id;

    /**
     * @param int $id
     * 退库编号
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
     * @param int $stockOutBillId
     * 退库单号
     * Required: false
     * Example Value: 
     */
    private $stockOutBillId;

    /**
     * @param int $stockOutBillId
     * 退库单号
     * Example Value: 
     */
    public function setStockOutBillId($stockOutBillId)
    {
        $this->stockOutBillId             = $stockOutBillId;
        $this->apiParas["stock_out_bill_id"]  = $stockOutBillId;
    }

    public function getStockOutBillId()
    {
        return $this->stockOutBillId;
    }

    /**
     * @param int $comId
     * 分公司ID
     * Required: false
     * Example Value: 
     */
    private $comId;

    /**
     * @param int $comId
     * 分公司ID
     * Example Value: 
     */
    public function setComId($comId)
    {
        $this->comId             = $comId;
        $this->apiParas["com_id"]  = $comId;
    }

    public function getComId()
    {
        return $this->comId;
    }

    /**
     * @param int $orgId
     * 机构ID
     * Required: false
     * Example Value: 
     */
    private $orgId;

    /**
     * @param int $orgId
     * 机构ID
     * Example Value: 
     */
    public function setOrgId($orgId)
    {
        $this->orgId             = $orgId;
        $this->apiParas["org_id"]  = $orgId;
    }

    public function getOrgId()
    {
        return $this->orgId;
    }

    /**
     * @param int $whId
     * 库房ID
     * Required: false
     * Example Value: 
     */
    private $whId;

    /**
     * @param int $whId
     * 库房ID
     * Example Value: 
     */
    public function setWhId($whId)
    {
        $this->whId             = $whId;
        $this->apiParas["wh_id"]  = $whId;
    }

    public function getWhId()
    {
        return $this->whId;
    }

    /**
     * @param int $skuId
     * sku编码
     * Required: false
     * Example Value: 
     */
    private $skuId;

    /**
     * @param int $skuId
     * sku编码
     * Example Value: 
     */
    public function setSkuId($skuId)
    {
        $this->skuId             = $skuId;
        $this->apiParas["sku_id"]  = $skuId;
    }

    public function getSkuId()
    {
        return $this->skuId;
    }

    /**
     * @param string $beginTime
     * 申请开始时间
     * Required: false
     * Example Value: 
     */
    private $beginTime;

    /**
     * @param string $beginTime
     * 申请开始时间
     * Example Value: 
     */
    public function setBeginTime($beginTime)
    {
        $this->beginTime             = $beginTime;
        $this->apiParas["begin_time"]  = $beginTime;
    }

    public function getBeginTime()
    {
        return $this->beginTime;
    }

    /**
     * @param string $endTime
     * 申请结束时间
     * Required: false
     * Example Value: 
     */
    private $endTime;

    /**
     * @param string $endTime
     * 申请结束时间
     * Example Value: 
     */
    public function setEndTime($endTime)
    {
        $this->endTime             = $endTime;
        $this->apiParas["end_time"]  = $endTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param int $page
     * 页码
     * Required: true
     * Example Value: 
     */
    private $page;

    /**
     * @param int $page
     * 页码
     * Example Value: 
     */
    public function setPage($page)
    {
        $this->page             = $page;
        $this->apiParas["page"]  = $page;
    }

    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param int $pageSize
     * 每页显示条数.最大值为50
     * Required: true
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 每页显示条数.最大值为50
     * Example Value: 
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