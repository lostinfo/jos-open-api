<?php

namespca Lostinfo\JosOpenApi;

/**
 * 检索入库单
 * FBP仓储API-FBP仓储API对应FBP类型商家后台（shop.jd.com）仓储管理模块中的业务。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=126&apiId=747&apiName=jingdong.store.queryStockInBill
 * Class StoreQueryStockInBill
 * @package Jd\request
 */
class StoreQueryStockInBill
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.store.queryStockInBill";
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
     * @param int $stockInStatus
     * 入库单状态.0:</br>已删除,1:等待入库,2:入库完成,3:删除失败,4:无法删除,5:删除处理中,6:超期,8:全部
     * Required: false
     * Example Value: 
     */
    private $stockInStatus;

    /**
     * @param int $stockInStatus
     * 入库单状态.0:</br>已删除,1:等待入库,2:入库完成,3:删除失败,4:无法删除,5:删除处理中,6:超期,8:全部
     * Example Value: 
     */
    public function setStockInStatus($stockInStatus)
    {
        $this->stockInStatus             = $stockInStatus;
        $this->apiParas["stock_in_status"]  = $stockInStatus;
    }

    public function getStockInStatus()
    {
        return $this->stockInStatus;
    }

    /**
     * @param int $stockInBillId
     * 入库单号
     * Required: false
     * Example Value: 
     */
    private $stockInBillId;

    /**
     * @param int $stockInBillId
     * 入库单号
     * Example Value: 
     */
    public function setStockInBillId($stockInBillId)
    {
        $this->stockInBillId             = $stockInBillId;
        $this->apiParas["stock_in_bill_id"]  = $stockInBillId;
    }

    public function getStockInBillId()
    {
        return $this->stockInBillId;
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