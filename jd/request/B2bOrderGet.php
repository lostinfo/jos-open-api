<?php

namespace JD\request;

/**
 * 查询订单信息
 * B2B开放API-B2B开放
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=391&apiId=3120&apiName=jingdong.b2b.order.get
 * Class B2bOrderGet
 * @package Jd\request
 */
class B2bOrderGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.b2b.order.get";
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
     * @param Number $jdOrderId
     * 京东订单号
     * Required: true
     * Example Value: 82886680550
     */
    private $jdOrderId;

    /**
     * @param Number $jdOrderId
     * 京东订单号
     * Example Value: 82886680550
     */
    public function setJdOrderId($jdOrderId)
    {
        $this->jdOrderId             = $jdOrderId;
        $this->apiParas["jdOrderId"]  = $jdOrderId;
    }

    public function getJdOrderId()
    {
        return $this->jdOrderId;
    }

    /**
     * @param String[] $customKeys
     * 定制化条件
     * Required: true
     * Example Value: MAIN, 查询订单主信息 SKU, 查询订单商品 CONSIGNEE, 查询订单收货人信息 INVOICE，查询订单发票信息 SNAPSHOT, 查询订单快照 ADDITIONAL_PAY，查询附加支付 SUIT, 查询套装 EXT_INFO, 订单扩展信息
     */
    private $customKeys;

    /**
     * @param String[] $customKeys
     * 定制化条件
     * Example Value: MAIN, 查询订单主信息 SKU, 查询订单商品 CONSIGNEE, 查询订单收货人信息 INVOICE，查询订单发票信息 SNAPSHOT, 查询订单快照 ADDITIONAL_PAY，查询附加支付 SUIT, 查询套装 EXT_INFO, 订单扩展信息
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