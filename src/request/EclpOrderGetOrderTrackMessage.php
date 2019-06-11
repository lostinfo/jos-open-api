<?php

namespca Lostinfo\JosOpenApi;

/**
 * 大件仓配一体运单跟踪信息查询
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=2254&apiName=jingdong.eclp.order.getOrderTrackMessage
 * Class EclpOrderGetOrderTrackMessage
 * @package Jd\request
 */
class EclpOrderGetOrderTrackMessage
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.order.getOrderTrackMessage";
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
     * @param string $orderNo
     * 单据编号
     * Required: true
     * Example Value: 
     */
    private $orderNo;

    /**
     * @param string $orderNo
     * 单据编号
     * Example Value: 
     */
    public function setOrderNo($orderNo)
    {
        $this->orderNo             = $orderNo;
        $this->apiParas["orderNo"]  = $orderNo;
    }

    public function getOrderNo()
    {
        return $this->orderNo;
    }

}