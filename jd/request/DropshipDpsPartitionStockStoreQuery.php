<?php

namespace JD\request;

/**
 * 厂直分区库存商家仓信息查询
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=2912&apiName=jingdong.dropship.dps.partitionStock.store.query
 * Class DropshipDpsPartitionStockStoreQuery
 * @package Jd\request
 */
class DropshipDpsPartitionStockStoreQuery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dropship.dps.partitionStock.store.query";
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
     * @param String $status
     * 商家仓状态 1：启用；2：停用
     * Required: true
     * Example Value: 
     */
    private $status;

    /**
     * @param String $status
     * 商家仓状态 1：启用；2：停用
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