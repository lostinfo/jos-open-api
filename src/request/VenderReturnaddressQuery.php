<?php

namespca Lostinfo\JosOpenApi;

/**
 * 查询退货地址列表
 * 店铺API-京东店铺API，包含提供商家、商家店铺基本信息及店内分类操作查询等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=88&apiId=587&apiName=jingdong.vender.returnaddress.query
 * Class VenderReturnaddressQuery
 * @package Jd\request
 */
class VenderReturnaddressQuery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vender.returnaddress.query";
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
     * @param int $type
     * 退货地址类型.可选值：备件库退货地址(0),自主售后退货地址(1),全部类型(2)
     * Required: false
     * Example Value: 2
     */
    private $type;

    /**
     * @param int $type
     * 退货地址类型.可选值：备件库退货地址(0),自主售后退货地址(1),全部类型(2)
     * Example Value: 2
     */
    public function setType($type)
    {
        $this->type             = $type;
        $this->apiParas["address_type"]  = $type;
    }

    public function getType()
    {
        return $this->type;
    }

}