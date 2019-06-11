<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 供应商列表
 * 生鲜加工中心API-生鲜接口
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=257&apiId=3183&apiName=jingdong.factory.purchase.queryVendorByPage
 * Class FactoryPurchaseQueryVendorByPage
 * @package Jd\request
 */
class FactoryPurchaseQueryVendorByPage
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.factory.purchase.queryVendorByPage";
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
     * @param int $factoryId
     * 工厂id
     * Required: true
     * Example Value: 0
     */
    private $factoryId;

    /**
     * @param int $factoryId
     * 工厂id
     * Example Value: 0
     */
    public function setFactoryId($factoryId)
    {
        $this->factoryId             = $factoryId;
        $this->apiParas["factoryId"]  = $factoryId;
    }

    public function getFactoryId()
    {
        return $this->factoryId;
    }

    /**
     * @param string $personalKey
     * 个人key
     * Required: true
     * Example Value: 0
     */
    private $personalKey;

    /**
     * @param string $personalKey
     * 个人key
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
     * 租户关联id
     * Required: true
     * Example Value: 0
     */
    private $ptId;

    /**
     * @param int $ptId
     * 租户关联id
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
     * @param int $pageIndex
     * 页码
     * Required: true
     * Example Value: 0
     */
    private $pageIndex;

    /**
     * @param int $pageIndex
     * 页码
     * Example Value: 0
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