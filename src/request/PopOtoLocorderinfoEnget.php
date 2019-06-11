<?php

namespace JD\request;

/**
 * 根据订单号加密查询码信息
 * 订单API-订单API组(该组下所有接口均不支持自营店铺业务)
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=55&apiId=2366&apiName=jingdong.pop.oto.locorderinfo.enget
 * Class PopOtoLocorderinfoEnget
 * @package Jd\request
 */
class PopOtoLocorderinfoEnget
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.oto.locorderinfo.enget";
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
     * @param Number $orderId
     * 订单号
     * Required: true
     * Example Value: 
     */
    private $orderId;

    /**
     * @param Number $orderId
     * 订单号
     * Example Value: 
     */
    public function setOrderId($orderId)
    {
        $this->orderId             = $orderId;
        $this->apiParas["order_id"]  = $orderId;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param Number $codeType
     * 码类型(0代表码是京东生成，1代表商家生成码)
     * Required: true
     * Example Value: 
     */
    private $codeType;

    /**
     * @param Number $codeType
     * 码类型(0代表码是京东生成，1代表商家生成码)
     * Example Value: 
     */
    public function setCodeType($codeType)
    {
        $this->codeType             = $codeType;
        $this->apiParas["code_type"]  = $codeType;
    }

    public function getCodeType()
    {
        return $this->codeType;
    }

}