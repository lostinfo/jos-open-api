<?php

namespca Lostinfo\JosOpenApi;

/**
 * 查询商品的资质列表，根据查询条件
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1666&apiName=jingdong.vc.item.qualification.list.find
 * Class VcItemQualificationListFind
 * @package Jd\request
 */
class VcItemQualificationListFind
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vc.item.qualification.list.find";
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
     * @param string $wareId
     * 商品编号
     * Required: false
     * Example Value: 1044727
     */
    private $wareId;

    /**
     * @param string $wareId
     * 商品编号
     * Example Value: 1044727
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
     * @param int $categoryId
     * 三级分类ID
     * Required: false
     * Example Value: 12
     */
    private $categoryId;

    /**
     * @param int $categoryId
     * 三级分类ID
     * Example Value: 12
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId             = $categoryId;
        $this->apiParas["category_id"]  = $categoryId;
    }

    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * @param string $name
     * 商品名称
     * Required: false
     * Example Value: 京东电脑
     */
    private $name;

    /**
     * @param string $name
     * 商品名称
     * Example Value: 京东电脑
     */
    public function setName($name)
    {
        $this->name             = $name;
        $this->apiParas["name"]  = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * @param int $brandId
     * 品牌ID
     * Required: false
     * Example Value: 12
     */
    private $brandId;

    /**
     * @param int $brandId
     * 品牌ID
     * Example Value: 12
     */
    public function setBrandId($brandId)
    {
        $this->brandId             = $brandId;
        $this->apiParas["brand_id"]  = $brandId;
    }

    public function getBrandId()
    {
        return $this->brandId;
    }

    /**
     * @param string $beginAuditTime
     * 审核开始时间
     * Required: false
     * Example Value: 2015-11-13 23:59:59
     */
    private $beginAuditTime;

    /**
     * @param string $beginAuditTime
     * 审核开始时间
     * Example Value: 2015-11-13 23:59:59
     */
    public function setBeginAuditTime($beginAuditTime)
    {
        $this->beginAuditTime             = $beginAuditTime;
        $this->apiParas["begin_audit_time"]  = $beginAuditTime;
    }

    public function getBeginAuditTime()
    {
        return $this->beginAuditTime;
    }

    /**
     * @param string $endAuditTime
     * 审核结束时间
     * Required: false
     * Example Value: 2015-11-13 23:59:59
     */
    private $endAuditTime;

    /**
     * @param string $endAuditTime
     * 审核结束时间
     * Example Value: 2015-11-13 23:59:59
     */
    public function setEndAuditTime($endAuditTime)
    {
        $this->endAuditTime             = $endAuditTime;
        $this->apiParas["end_audit_time"]  = $endAuditTime;
    }

    public function getEndAuditTime()
    {
        return $this->endAuditTime;
    }

    /**
     * @param int $state
     * 审核状态（普通商品，302:待审核,303:驳回,304:通过；OTC和处方药商品，401:质量管理部待审核,402:质量管理部驳回,403:质量负责人待审核,404:质量负责人驳回,304:通过）
     * Required: false
     * Example Value: 302
     */
    private $state;

    /**
     * @param int $state
     * 审核状态（普通商品，302:待审核,303:驳回,304:通过；OTC和处方药商品，401:质量管理部待审核,402:质量管理部驳回,403:质量负责人待审核,404:质量负责人驳回,304:通过）
     * Example Value: 302
     */
    public function setState($state)
    {
        $this->state             = $state;
        $this->apiParas["state"]  = $state;
    }

    public function getState()
    {
        return $this->state;
    }

    /**
     * @param int $offset
     * 记录起始值(下标从0开始)
     * Required: false
     * Example Value: 0
     */
    private $offset;

    /**
     * @param int $offset
     * 记录起始值(下标从0开始)
     * Example Value: 0
     */
    public function setOffset($offset)
    {
        $this->offset             = $offset;
        $this->apiParas["offset"]  = $offset;
    }

    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * @param int $pageSize
     * 每次获取记录数
     * Required: false
     * Example Value: 20
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 每次获取记录数
     * Example Value: 20
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