<?php

namespace JD\request;

/**
 * 批量查询子单列表
 * B2B开放API-B2B开放
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=391&apiId=3211&apiName=jingdong.b2b.order.childOrderList
 * Class B2bOrderChildOrderList
 * @package Jd\request
 */
class B2bOrderChildOrderList
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.b2b.order.childOrderList";
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
     * @param Number[] $orderId
     * 京东订单号
     * Required: false
     * Example Value: 4444
     */
    private $orderId;

    /**
     * @param Number[] $orderId
     * 京东订单号
     * Example Value: 4444
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
     * @param String[] $customKeys
     * 定制化条件:MAIN, 查询订单主信息 SKU, 查询订单商品 CONSIGNEE, 查询订单收货人信息 INVOICE，查询订单发票信息 SNAPSHOT, 查询订单快照 ADDITIONAL_PAY，查询附加支付 SUIT, 查询套装 EXT_INFO, 订单扩展信息
     * Required: true
     * Example Value: MAN
     */
    private $customKeys;

    /**
     * @param String[] $customKeys
     * 定制化条件:MAIN, 查询订单主信息 SKU, 查询订单商品 CONSIGNEE, 查询订单收货人信息 INVOICE，查询订单发票信息 SNAPSHOT, 查询订单快照 ADDITIONAL_PAY，查询附加支付 SUIT, 查询套装 EXT_INFO, 订单扩展信息
     * Example Value: MAN
     */
    public function setCustomKeys($customKeys)
    {
        $this->customKeys             = $customKeys;
        $this->apiParas["customKeys"]  = $customKeys;
    }

    public function getCustomKeys()
    {
        return $this->customKeys;
    }

}