<?php

namespca Lostinfo\JosOpenApi;

/**
 * 查询产品线列表接口
 * B2B开放API-B2B开放
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=391&apiId=3135&apiName=jingdong.b2b.ware.search.skulist.tuopan
 * Class B2bWareSearchSkulistTuopan
 * @package Jd\request
 */
class B2bWareSearchSkulistTuopan
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.b2b.ware.search.skulist.tuopan";
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
     * @param com.jd.b2b.ware.biz.sdk.req.BizSkuSearchReq $req
     * b2bPoolId:null, pageSize:null, pageNo:null, yn:1, auditStatus:0, returnFieldList:[jdSkuId,skuName,imagePath,tpPoolIds,supplier,operator,status,yn,auditStatus,beingAuditPoint,instanceId,processKey,pdPin]}
     * Required: true
     * Example Value: 
     */
    private $req;

    /**
     * @param com.jd.b2b.ware.biz.sdk.req.BizSkuSearchReq $req
     * b2bPoolId:null, pageSize:null, pageNo:null, yn:1, auditStatus:0, returnFieldList:[jdSkuId,skuName,imagePath,tpPoolIds,supplier,operator,status,yn,auditStatus,beingAuditPoint,instanceId,processKey,pdPin]}
     * Example Value: 
     */
    public function setReq($req)
    {
        $this->req             = $req;
        $this->apiParas["req"]  = $req;
    }

    public function getReq()
    {
        return $this->req;
    }

    /**
     * @param int $jdSkuId
     * 京东skuId
     * Required: false
     * Example Value: 
     */
    private $jdSkuId;

    /**
     * @param int $jdSkuId
     * 京东skuId
     * Example Value: 
     */
    public function setJdSkuId($jdSkuId)
    {
        $this->jdSkuId             = $jdSkuId;
        $this->apiParas["jdSkuId"]  = $jdSkuId;
    }

    public function getJdSkuId()
    {
        return $this->jdSkuId;
    }

    /**
     * @param int $b2bPoolId
     * 商品池ID（即产品线ID）
     * Required: false
     * Example Value: 
     */
    private $b2bPoolId;

    /**
     * @param int $b2bPoolId
     * 商品池ID（即产品线ID）
     * Example Value: 
     */
    public function setB2bPoolId($b2bPoolId)
    {
        $this->b2bPoolId             = $b2bPoolId;
        $this->apiParas["b2bPoolId"]  = $b2bPoolId;
    }

    public function getB2bPoolId()
    {
        return $this->b2bPoolId;
    }

    /**
     * @param int $pageSize
     * 每页数量
     * Required: false
     * Example Value: 10
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 每页数量
     * Example Value: 10
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
     * @param java.util.Set $returnFieldList
     * 选择需要返回的列名
     * Required: false
     * Example Value: 
     */
    private $returnFieldList;

    /**
     * @param java.util.Set $returnFieldList
     * 选择需要返回的列名
     * Example Value: 
     */
    public function setReturnFieldList($returnFieldList)
    {
        $this->returnFieldList             = $returnFieldList;
        $this->apiParas["returnFieldList"]  = $returnFieldList;
    }

    public function getReturnFieldList()
    {
        return $this->returnFieldList;
    }

    /**
     * @param string $returnFieldKeys
     * 选择需要返回的列名jdSkuId,skuName,imagePath,tpPoolIds,supplier,operator,status,yn,auditStatus,beingAuditPoint,instanceId,processKey,pdPin
     * Required: false
     * Example Value: 
     */
    private $returnFieldKeys;

    /**
     * @param string $returnFieldKeys
     * 选择需要返回的列名jdSkuId,skuName,imagePath,tpPoolIds,supplier,operator,status,yn,auditStatus,beingAuditPoint,instanceId,processKey,pdPin
     * Example Value: 
     */
    public function setReturnFieldKeys($returnFieldKeys)
    {
        $this->returnFieldKeys             = $returnFieldKeys;
        $this->apiParas["returnFieldKeys"]  = $returnFieldKeys;
    }

    public function getReturnFieldKeys()
    {
        return $this->returnFieldKeys;
    }

    /**
     * @param string $operator
     * sku的授权erp
     * Required: true
     * Example Value: 
     */
    private $operator;

    /**
     * @param string $operator
     * sku的授权erp
     * Example Value: 
     */
    public function setOperator($operator)
    {
        $this->operator             = $operator;
        $this->apiParas["operatorErp"]  = $operator;
    }

    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * @param string $skuName
     * 商品名称，支持模糊匹配
     * Required: true
     * Example Value: 
     */
    private $skuName;

    /**
     * @param string $skuName
     * 商品名称，支持模糊匹配
     * Example Value: 
     */
    public function setSkuName($skuName)
    {
        $this->skuName             = $skuName;
        $this->apiParas["skuName"]  = $skuName;
    }

    public function getSkuName()
    {
        return $this->skuName;
    }

    /**
     * @param int $yn
     * 授权状态；1有效,0:无效,-1:已删除
     * Required: true
     * Example Value: 
     */
    private $yn;

    /**
     * @param int $yn
     * 授权状态；1有效,0:无效,-1:已删除
     * Example Value: 
     */
    public function setYn($yn)
    {
        $this->yn             = $yn;
        $this->apiParas["yn"]  = $yn;
    }

    public function getYn()
    {
        return $this->yn;
    }

    /**
     * @param java.util.List $sortList
     * 字段排序
     * Required: false
     * Example Value: 
     */
    private $sortList;

    /**
     * @param java.util.List $sortList
     * 字段排序
     * Example Value: 
     */
    public function setSortList($sortList)
    {
        $this->sortList             = $sortList;
        $this->apiParas["sortList"]  = $sortList;
    }

    public function getSortList()
    {
        return $this->sortList;
    }

    /**
     * @param com.jd.b2b.ware.biz.sdk.req.Sort $sortKeys
     * 排序规则
     * Required: false
     * Example Value: 
     */
    private $sortKeys;

    /**
     * @param com.jd.b2b.ware.biz.sdk.req.Sort $sortKeys
     * 排序规则
     * Example Value: 
     */
    public function setSortKeys($sortKeys)
    {
        $this->sortKeys             = $sortKeys;
        $this->apiParas["sortKeys"]  = $sortKeys;
    }

    public function getSortKeys()
    {
        return $this->sortKeys;
    }

    /**
     * @param string $field
     * 字段名称
     * Required: false
     * Example Value: 
     */
    private $field;

    /**
     * @param string $field
     * 字段名称
     * Example Value: 
     */
    public function setField($field)
    {
        $this->field             = $field;
        $this->apiParas["field"]  = $field;
    }

    public function getField()
    {
        return $this->field;
    }

    /**
     * @param string $sortType
     * ASC,DESC
     * Required: false
     * Example Value: 
     */
    private $sortType;

    /**
     * @param string $sortType
     * ASC,DESC
     * Example Value: 
     */
    public function setSortType($sortType)
    {
        $this->sortType             = $sortType;
        $this->apiParas["sortType"]  = $sortType;
    }

    public function getSortType()
    {
        return $this->sortType;
    }

    /**
     * @param string $missing
     * last,first
     * Required: false
     * Example Value: 
     */
    private $missing;

    /**
     * @param string $missing
     * last,first
     * Example Value: 
     */
    public function setMissing($missing)
    {
        $this->missing             = $missing;
        $this->apiParas["missing"]  = $missing;
    }

    public function getMissing()
    {
        return $this->missing;
    }

    /**
     * @param int $pageNo
     * 当前页
     * Required: false
     * Example Value: 1
     */
    private $pageNo;

    /**
     * @param int $pageNo
     * 当前页
     * Example Value: 1
     */
    public function setPageNo($pageNo)
    {
        $this->pageNo             = $pageNo;
        $this->apiParas["pageNo"]  = $pageNo;
    }

    public function getPageNo()
    {
        return $this->pageNo;
    }

    /**
     * @param string $supplier
     * 品牌商id
     * Required: false
     * Example Value: 
     */
    private $supplier;

    /**
     * @param string $supplier
     * 品牌商id
     * Example Value: 
     */
    public function setSupplier($supplier)
    {
        $this->supplier             = $supplier;
        $this->apiParas["supplier"]  = $supplier;
    }

    public function getSupplier()
    {
        return $this->supplier;
    }

    /**
     * @param int $auditStatus
     * 审批状态 0：审核通过
     * Required: false
     * Example Value: 
     */
    private $auditStatus;

    /**
     * @param int $auditStatus
     * 审批状态 0：审核通过
     * Example Value: 
     */
    public function setAuditStatus($auditStatus)
    {
        $this->auditStatus             = $auditStatus;
        $this->apiParas["auditStatus"]  = $auditStatus;
    }

    public function getAuditStatus()
    {
        return $this->auditStatus;
    }

    /**
     * @param int $status
     * 上下架状态 1为上架,2为下架
     * Required: false
     * Example Value: 
     */
    private $status;

    /**
     * @param int $status
     * 上下架状态 1为上架,2为下架
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

}