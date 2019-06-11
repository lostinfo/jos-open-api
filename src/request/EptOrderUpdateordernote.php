<?php

namespca Lostinfo\JosOpenApi;

/**
 * 更新订单备注
 * EPT全球售API-EPT全球售业务，开放订单查询、发货、商品查询、新增商品、修改商品等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=137&apiId=897&apiName=jingdong.ept.order.updateordernote
 * Class EptOrderUpdateordernote
 * @package Jd\request
 */
class EptOrderUpdateordernote
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ept.order.updateordernote";
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
        $this->apiParas["orderId"]  = $orderId;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param string $note
     * 订单备注
     * Required: true
     * Example Value: 
     */
    private $note;

    /**
     * @param string $note
     * 订单备注
     * Example Value: 
     */
    public function setNote($note)
    {
        $this->note             = $note;
        $this->apiParas["note"]  = $note;
    }

    public function getNote()
    {
        return $this->note;
    }

}