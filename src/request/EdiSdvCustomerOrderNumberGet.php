<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 获取订单数量
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1934&apiName=jingdong.edi.sdv.customer.order.number.get
 * Class EdiSdvCustomerOrderNumberGet
 * @package Jd\request
 */
class EdiSdvCustomerOrderNumberGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.edi.sdv.customer.order.number.get";
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
     * @param string $startTime
     * 订单开始时间
     * Required: false
     * Example Value: 
     */
    private $startTime;

    /**
     * @param string $startTime
     * 订单开始时间
     * Example Value: 
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
     * 订单结束时间
     * Required: false
     * Example Value: 
     */
    private $endTime;

    /**
     * @param string $endTime
     * 订单结束时间
     * Example Value: 
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

}