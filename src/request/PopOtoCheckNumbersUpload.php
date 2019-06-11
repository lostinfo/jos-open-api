<?php

namespace JD\request;

/**
 * 商家回传验证码
 * 订单API-订单API组(该组下所有接口均不支持自营店铺业务)
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=55&apiId=597&apiName=jingdong.pop.oto.checkNumbers.upload
 * Class PopOtoCheckNumbersUpload
 * @package Jd\request
 */
class PopOtoCheckNumbersUpload
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.oto.checkNumbers.upload";
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
     * @param String $cardId
     * 卡号(若卡号为多个，用英文逗号隔开)
     * Required: false
     * Example Value: card1,card2,card3
     */
    private $cardId;

    /**
     * @param String $cardId
     * 卡号(若卡号为多个，用英文逗号隔开)
     * Example Value: card1,card2,card3
     */
    public function setCardId($cardId)
    {
        $this->cardId             = $cardId;
        $this->apiParas["card_number"]  = $cardId;
    }

    public function getCardId()
    {
        return $this->cardId;
    }

    /**
     * @param String $cardPwd
     * 密码(若密码为多个，用英文逗号隔开)
     * Required: true
     * Example Value: pwd1,pwd2,pwd3
     */
    private $cardPwd;

    /**
     * @param String $cardPwd
     * 密码(若密码为多个，用英文逗号隔开)
     * Example Value: pwd1,pwd2,pwd3
     */
    public function setCardPwd($cardPwd)
    {
        $this->cardPwd             = $cardPwd;
        $this->apiParas["pwd_number"]  = $cardPwd;
    }

    public function getCardPwd()
    {
        return $this->cardPwd;
    }

}