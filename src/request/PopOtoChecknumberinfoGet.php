<?php

namespca Lostinfo\JosOpenApi;

/**
 * 获取验证码信息
 * 订单API-订单API组(该组下所有接口均不支持自营店铺业务)
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=55&apiId=596&apiName=jingdong.pop.oto.checknumberinfo.get
 * Class PopOtoChecknumberinfoGet
 * @package Jd\request
 */
class PopOtoChecknumberinfoGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.oto.checknumberinfo.get";
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
        $this->apiParas["pwd_number"]  = $pwdNumber;
    }

    public function getPwdNumber()
    {
        return $this->pwdNumber;
    }

}