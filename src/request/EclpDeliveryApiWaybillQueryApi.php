<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 查询标准实际运费
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=3672&apiName=jingdong.eclp.delivery.api.WaybillQueryApi
 * Class EclpDeliveryApiWaybillQueryApi
 * @package Jd\request
 */
class EclpDeliveryApiWaybillQueryApi
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.delivery.api.WaybillQueryApi";
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
     * @param string $waybillCode
     * 运单号
     * Required: false
     * Example Value: 
     */
    private $waybillCode;

    /**
     * @param string $waybillCode
     * 运单号
     * Example Value: 
     */
    public function setWaybillCode($waybillCode)
    {
        $this->waybillCode             = $waybillCode;
        $this->apiParas["waybillCode"]  = $waybillCode;
    }

    public function getWaybillCode()
    {
        return $this->waybillCode;
    }

    /**
     * @param string $orderNo
     * 商家订单号（与运单号不能同时为空）
     * Required: false
     * Example Value: 
     */
    private $orderNo;

    /**
     * @param string $orderNo
     * 商家订单号（与运单号不能同时为空）
     * Example Value: 
     */
    public function setOrderNo($orderNo)
    {
        $this->orderNo             = $orderNo;
        $this->apiParas["orderNo"]  = $orderNo;
    }

    public function getOrderNo()
    {
        return $this->orderNo;
    }

    /**
     * @param int $settleType
     * 运费结算方式
     * Required: true
     * Example Value: 
     */
    private $settleType;

    /**
     * @param int $settleType
     * 运费结算方式
     * Example Value: 
     */
    public function setSettleType($settleType)
    {
        $this->settleType             = $settleType;
        $this->apiParas["settleType"]  = $settleType;
    }

    public function getSettleType()
    {
        return $this->settleType;
    }

    /**
     * @param string $traderCode
     * 青龙业主号
     * Required: true
     * Example Value: 
     */
    private $traderCode;

    /**
     * @param string $traderCode
     * 青龙业主号
     * Example Value: 
     */
    public function setTraderCode($traderCode)
    {
        $this->traderCode             = $traderCode;
        $this->apiParas["traderCode"]  = $traderCode;
    }

    public function getTraderCode()
    {
        return $this->traderCode;
    }

}