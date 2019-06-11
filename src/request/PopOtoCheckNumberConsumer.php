<?php

namespca Lostinfo\JosOpenApi;

/**
 * 消费验证码
 * 订单API-订单API组(该组下所有接口均不支持自营店铺业务)
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=55&apiId=595&apiName=jingdong.pop.oto.CheckNumber.consumer
 * Class PopOtoCheckNumberConsumer
 * @package Jd\request
 */
class PopOtoCheckNumberConsumer
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.oto.CheckNumber.consumer";
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
     * Required: false
     * Example Value: 
     */
    private $orderId;

    /**
     * @param int $orderId
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
     * @param string $cardNumber
     * 卡号
     * Required: false
     * Example Value: 
     */
    private $cardNumber;

    /**
     * @param string $cardNumber
     * 卡号
     * Example Value: 
     */
    public function setCardNumber($cardNumber)
    {
        $this->cardNumber             = $cardNumber;
        $this->apiParas["card_number"]  = $cardNumber;
    }

    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    /**
     * @param string $pwdNumber
     * 密码
     * Required: true
     * Example Value: 
     */
    private $pwdNumber;

    /**
     * @param string $pwdNumber
     * 密码
     * Example Value: 
     */
    public function setPwdNumber($pwdNumber)
    {
        $this->pwdNumber             = $pwdNumber;
        $this->apiParas["pwd_umber"]  = $pwdNumber;
    }

    public function getPwdNumber()
    {
        return $this->pwdNumber;
    }

    /**
     * @param int $consumerShopId
     * 消费门店id
     * Required: false
     * Example Value: 
     */
    private $consumerShopId;

    /**
     * @param int $consumerShopId
     * 消费门店id
     * Example Value: 
     */
    public function setConsumerShopId($consumerShopId)
    {
        $this->consumerShopId             = $consumerShopId;
        $this->apiParas["shop_id"]  = $consumerShopId;
    }

    public function getConsumerShopId()
    {
        return $this->consumerShopId;
    }

    /**
     * @param string $consumerShopName
     * 消费门店名称
     * Required: false
     * Example Value: 
     */
    private $consumerShopName;

    /**
     * @param string $consumerShopName
     * 消费门店名称
     * Example Value: 
     */
    public function setConsumerShopName($consumerShopName)
    {
        $this->consumerShopName             = $consumerShopName;
        $this->apiParas["shop_name"]  = $consumerShopName;
    }

    public function getConsumerShopName()
    {
        return $this->consumerShopName;
    }

    /**
     * @param int $type
     * 验证码类型(0表示京东生成码，1表示商家生成码)
     * Required: true
     * Example Value: 
     */
    private $type;

    /**
     * @param int $type
     * 验证码类型(0表示京东生成码，1表示商家生成码)
     * Example Value: 
     */
    public function setType($type)
    {
        $this->type             = $type;
        $this->apiParas["code_type"]  = $type;
    }

    public function getType()
    {
        return $this->type;
    }

}