<?php

namespace JD\request;

/**
 * 查询物流跟踪消息
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=2378&apiName=jingdong.eclp.order.getTrackMessagePlusByOrder
 * Class EclpOrderGetTrackMessagePlusByOrder
 * @package Jd\request
 */
class EclpOrderGetTrackMessagePlusByOrder
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.order.getTrackMessagePlusByOrder";
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
     * @param String $customerCode
     * 青龙业主号
     * Required: true
     * Example Value: 
     */
    private $customerCode;

    /**
     * @param String $customerCode
     * 青龙业主号
     * Example Value: 
     */
    public function setCustomerCode($customerCode)
    {
        $this->customerCode             = $customerCode;
        $this->apiParas["customerCode"]  = $customerCode;
    }

    public function getCustomerCode()
    {
        return $this->customerCode;
    }

    /**
     * @param String $bizCode
     * 订单号(可以传ECLP订单号, 或者商家订单号)
     * Required: true
     * Example Value: 
     */
    private $bizCode;

    /**
     * @param String $bizCode
     * 订单号(可以传ECLP订单号, 或者商家订单号)
     * Example Value: 
     */
    public function setBizCode($bizCode)
    {
        $this->bizCode             = $bizCode;
        $this->apiParas["bizCode"]  = $bizCode;
    }

    public function getBizCode()
    {
        return $this->bizCode;
    }

    /**
     * @param Number $type
     * 订单号类型(10：代表ECLP订单号, 20：代表商家订单号)
     * Required: true
     * Example Value: 
     */
    private $type;

    /**
     * @param Number $type
     * 订单号类型(10：代表ECLP订单号, 20：代表商家订单号)
     * Example Value: 
     */
    public function setType($type)
    {
        $this->type             = $type;
        $this->apiParas["type"]  = $type;
    }

    public function getType()
    {
        return $this->type;
    }

}