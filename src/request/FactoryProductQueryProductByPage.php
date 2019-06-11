<?php

namespca Lostinfo\JosOpenApi;

/**
 * 分页查询产品
 * 生鲜加工中心API-生鲜接口
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=257&apiId=3177&apiName=jingdong.factory.product.queryProductByPage
 * Class FactoryProductQueryProductByPage
 * @package Jd\request
 */
class FactoryProductQueryProductByPage
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.factory.product.queryProductByPage";
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
     * @param string $personalKey
     * 系统Key
     * Required: true
     * Example Value: 0
     */
    private $personalKey;

    /**
     * @param string $personalKey
     * 系统Key
     * Example Value: 0
     */
    public function setPersonalKey($personalKey)
    {
        $this->personalKey             = $personalKey;
        $this->apiParas["personalKey"]  = $personalKey;
    }

    public function getPersonalKey()
    {
        return $this->personalKey;
    }

    /**
     * @param int $ptId
     * 租户关联Id
     * Required: true
     * Example Value: 0
     */
    private $ptId;

    /**
     * @param int $ptId
     * 租户关联Id
     * Example Value: 0
     */
    public function setPtId($ptId)
    {
        $this->ptId             = $ptId;
        $this->apiParas["ptId"]  = $ptId;
    }

    public function getPtId()
    {
        return $this->ptId;
    }

    /**
     * @param string $startTime
     * 更新开始时间
     * Required: false
     * Example Value: 0
     */
    private $startTime;

    /**
     * @param string $startTime
     * 更新开始时间
     * Example Value: 0
     */
    public function setStartTime($startTime)
    {
        $this->startTime             = $startTime;
        $this->apiParas["startTime"]  = $startTime;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param string $endTime
     * 更新结束时间
     * Required: false
     * Example Value: 0
     */
    private $endTime;

    /**
     * @param string $endTime
     * 更新结束时间
     * Example Value: 0
     */
    public function setEndTime($endTime)
    {
        $this->endTime             = $endTime;
        $this->apiParas["endTime"]  = $endTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param int $materialType
     * 物料类型：10-产成品,  20-原材料,30-消耗品
     * Required: true
     * Example Value: 0
     */
    private $materialType;

    /**
     * @param int $materialType
     * 物料类型：10-产成品,  20-原材料,30-消耗品
     * Example Value: 0
     */
    public function setMaterialType($materialType)
    {
        $this->materialType             = $materialType;
        $this->apiParas["materialType"]  = $materialType;
    }

    public function getMaterialType()
    {
        return $this->materialType;
    }

    /**
     * @param int $subType
     * 消耗品子类型：30-耗材,40-包材
     * Required: false
     * Example Value: 0
     */
    private $subType;

    /**
     * @param int $subType
     * 消耗品子类型：30-耗材,40-包材
     * Example Value: 0
     */
    public function setSubType($subType)
    {
        $this->subType             = $subType;
        $this->apiParas["subType"]  = $subType;
    }

    public function getSubType()
    {
        return $this->subType;
    }

    /**
     * @param string[] $skuList
     * sku列表
     * Required: false
     * Example Value: 0
     */
    private $skuList;

    /**
     * @param string[] $skuList
     * sku列表
     * Example Value: 0
     */
    public function setSkuList($skuList)
    {
        $this->skuList             = $skuList;
        $this->apiParas["skuList"]  = $skuList;
    }

    public function getSkuList()
    {
        return $this->skuList;
    }

    /**
     * @param int $page
     * 第几页
     * Required: true
     * Example Value: 0
     */
    private $page;

    /**
     * @param int $page
     * 第几页
     * Example Value: 0
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
     * 每页大小
     * Required: true
     * Example Value: 0
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 每页大小
     * Example Value: 0
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