<?php

namespace JD\request;

/**
 * 厂家直送订单拆分接口
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=2324&apiName=jingdong.dropship.dps.splitOrder
 * Class DropshipDpsSplitOrder
 * @package Jd\request
 */
class DropshipDpsSplitOrder
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dropship.dps.splitOrder";
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
     * @param String $splitOrderJson
     * 订单拆分信息，需联系京东获取Object转换为Json
     * Required: false
     * Example Value: 
     */
    private $splitOrderJson;

    /**
     * @param String $splitOrderJson
     * 订单拆分信息，需联系京东获取Object转换为Json
     * Example Value: 
     */
    public function setSplitOrderJson($splitOrderJson)
    {
        $this->splitOrderJson             = $splitOrderJson;
        $this->apiParas["splitOrderJson"]  = $splitOrderJson;
    }

    public function getSplitOrderJson()
    {
        return $this->splitOrderJson;
    }

}