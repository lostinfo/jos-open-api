<?php

namespca Lostinfo\JosOpenApi;

/**
 * sop出库发货接口
 * 订单API-订单API组(该组下所有接口均不支持自营店铺业务)
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=55&apiId=1948&apiName=jingdong.pop.order.shipment
 * Class PopOrderShipment
 * @package Jd\request
 */
class PopOrderShipment
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.order.shipment";
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
     * @param int $orderId
     * 订单号
     * Required: true
     * Example Value: 1
     */
    private $orderId;

    /**
     * @param int $orderId
     * 订单号
     * Example Value: 1
     */
    public function setOrderId($orderId)
    {
        $this->orderId             = $orderId;
        $this->apiParas["orderId"]  = $orderId;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param string $logiCoprId
     * 物流公司ID(只可通过获取商家物流公司接口获得),多个物流公司以|分隔。如：2100|4700。请注意：如果填写厂家自送（1274），则不会保存物流单号，也不会有具体的跟踪信息。
     * Required: true
     * Example Value: 2100|4700
     */
    private $logiCoprId;

    /**
     * @param string $logiCoprId
     * 物流公司ID(只可通过获取商家物流公司接口获得),多个物流公司以|分隔。如：2100|4700。请注意：如果填写厂家自送（1274），则不会保存物流单号，也不会有具体的跟踪信息。
     * Example Value: 2100|4700
     */
    public function setLogiCoprId($logiCoprId)
    {
        $this->logiCoprId             = $logiCoprId;
        $this->apiParas["logiCoprId"]  = $logiCoprId;
    }

    public function getLogiCoprId()
    {
        return $this->logiCoprId;
    }

    /**
     * @param string $logiNo
     * 运单号(当厂家自送时运单号可为空，不同物流公司的运单号用|分隔，如果同一物流公司有多个运单号，则用英文逗号分隔) 。如：1200458628372,111232|468778814888,323232323 
     * Required: false
     * Example Value: 1200458628372,111232|468778814888,323232323 
     */
    private $logiNo;

    /**
     * @param string $logiNo
     * 运单号(当厂家自送时运单号可为空，不同物流公司的运单号用|分隔，如果同一物流公司有多个运单号，则用英文逗号分隔) 。如：1200458628372,111232|468778814888,323232323 
     * Example Value: 1200458628372,111232|468778814888,323232323 
     */
    public function setLogiNo($logiNo)
    {
        $this->logiNo             = $logiNo;
        $this->apiParas["logiNo"]  = $logiNo;
    }

    public function getLogiNo()
    {
        return $this->logiNo;
    }

    /**
     * @param int $installId
     * 安装公司（非必填，大件物流订单可填）
     * Required: false
     * Example Value: 1
     */
    private $installId;

    /**
     * @param int $installId
     * 安装公司（非必填，大件物流订单可填）
     * Example Value: 1
     */
    public function setInstallId($installId)
    {
        $this->installId             = $installId;
        $this->apiParas["installId"]  = $installId;
    }

    public function getInstallId()
    {
        return $this->installId;
    }

}