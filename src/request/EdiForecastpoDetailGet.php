<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 获取预测订单细目
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1966&apiName=jingdong.edi.forecastpo.detail.get
 * Class EdiForecastpoDetailGet
 * @package Jd\request
 */
class EdiForecastpoDetailGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.edi.forecastpo.detail.get";
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
     * @param int $forecastPurchaseOrderId
     * 预测订单ID
     * Required: true
     * Example Value: 
     */
    private $forecastPurchaseOrderId;

    /**
     * @param int $forecastPurchaseOrderId
     * 预测订单ID
     * Example Value: 
     */
    public function setForecastPurchaseOrderId($forecastPurchaseOrderId)
    {
        $this->forecastPurchaseOrderId             = $forecastPurchaseOrderId;
        $this->apiParas["forecastPurchaseOrderId"]  = $forecastPurchaseOrderId;
    }

    public function getForecastPurchaseOrderId()
    {
        return $this->forecastPurchaseOrderId;
    }

}