<?php

namespca Lostinfo\JosOpenApi;

/**
 * 通过loc短信优惠码查询门店帮订单信息
 * 订单API-订单API组(该组下所有接口均不支持自营店铺业务)
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=55&apiId=2500&apiName=jingdong.findStoreOrderIdListByCouponCodeList
 * Class FindStoreOrderIdListByCouponCodeList
 * @package Jd\request
 */
class FindStoreOrderIdListByCouponCodeList
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.findStoreOrderIdListByCouponCodeList";
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
     * @param string[] $couponCode
     * 订单短信优惠码
     * Required: true
     * Example Value: 
     */
    private $couponCode;

    /**
     * @param string[] $couponCode
     * 订单短信优惠码
     * Example Value: 
     */
    public function setCouponCode($couponCode)
    {
        $this->couponCode             = $couponCode;
        $this->apiParas["couponCode"]  = $couponCode;
    }

    public function getCouponCode()
    {
        return $this->couponCode;
    }

}