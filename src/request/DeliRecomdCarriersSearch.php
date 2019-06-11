<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 获取商家发货推荐承运商
 * 阿尔法API-阿尔法系统
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=191&apiId=1533&apiName=jingdong.deliRecomdCarriers.search
 * Class DeliRecomdCarriersSearch
 * @package Jd\request
 */
class DeliRecomdCarriersSearch
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.deliRecomdCarriers.search";
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
     * 订单ID
     * Required: true
     * Example Value: 
     */
    private $orderId;

    /**
     * @param int $orderId
     * 订单ID
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
     * @param int[] $sku
     * sku
     * Required: true
     * Example Value: 
     */
    private $sku;

    /**
     * @param int[] $sku
     * sku
     * Example Value: 
     */
    public function setSku($sku)
    {
        $this->sku             = $sku;
        $this->apiParas["sku"]  = $sku;
    }

    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param int $sendProvinceId
     * 发货省ID
     * Required: true
     * Example Value: 
     */
    private $sendProvinceId;

    /**
     * @param int $sendProvinceId
     * 发货省ID
     * Example Value: 
     */
    public function setSendProvinceId($sendProvinceId)
    {
        $this->sendProvinceId             = $sendProvinceId;
        $this->apiParas["sendProvinceId"]  = $sendProvinceId;
    }

    public function getSendProvinceId()
    {
        return $this->sendProvinceId;
    }

    /**
     * @param int $sendCityId
     * 发货市ID
     * Required: true
     * Example Value: 
     */
    private $sendCityId;

    /**
     * @param int $sendCityId
     * 发货市ID
     * Example Value: 
     */
    public function setSendCityId($sendCityId)
    {
        $this->sendCityId             = $sendCityId;
        $this->apiParas["sendCityId"]  = $sendCityId;
    }

    public function getSendCityId()
    {
        return $this->sendCityId;
    }

    /**
     * @param int $sendCountyId
     * 发货区县ID
     * Required: true
     * Example Value: 
     */
    private $sendCountyId;

    /**
     * @param int $sendCountyId
     * 发货区县ID
     * Example Value: 
     */
    public function setSendCountyId($sendCountyId)
    {
        $this->sendCountyId             = $sendCountyId;
        $this->apiParas["sendCountyId"]  = $sendCountyId;
    }

    public function getSendCountyId()
    {
        return $this->sendCountyId;
    }

    /**
     * @param int $sendTownId
     * 发货乡镇ID
     * Required: true
     * Example Value: 
     */
    private $sendTownId;

    /**
     * @param int $sendTownId
     * 发货乡镇ID
     * Example Value: 
     */
    public function setSendTownId($sendTownId)
    {
        $this->sendTownId             = $sendTownId;
        $this->apiParas["sendTownId"]  = $sendTownId;
    }

    public function getSendTownId()
    {
        return $this->sendTownId;
    }

    /**
     * @param int $receiveProvinceId
     * 收货省ID
     * Required: true
     * Example Value: 
     */
    private $receiveProvinceId;

    /**
     * @param int $receiveProvinceId
     * 收货省ID
     * Example Value: 
     */
    public function setReceiveProvinceId($receiveProvinceId)
    {
        $this->receiveProvinceId             = $receiveProvinceId;
        $this->apiParas["receiveProvinceId"]  = $receiveProvinceId;
    }

    public function getReceiveProvinceId()
    {
        return $this->receiveProvinceId;
    }

    /**
     * @param int $receiveCityId
     * 收货市ID
     * Required: true
     * Example Value: 
     */
    private $receiveCityId;

    /**
     * @param int $receiveCityId
     * 收货市ID
     * Example Value: 
     */
    public function setReceiveCityId($receiveCityId)
    {
        $this->receiveCityId             = $receiveCityId;
        $this->apiParas["receiveCityId"]  = $receiveCityId;
    }

    public function getReceiveCityId()
    {
        return $this->receiveCityId;
    }

    /**
     * @param int $receiveCountyId
     * 收货区县ID
     * Required: true
     * Example Value: 
     */
    private $receiveCountyId;

    /**
     * @param int $receiveCountyId
     * 收货区县ID
     * Example Value: 
     */
    public function setReceiveCountyId($receiveCountyId)
    {
        $this->receiveCountyId             = $receiveCountyId;
        $this->apiParas["receiveCountyId"]  = $receiveCountyId;
    }

    public function getReceiveCountyId()
    {
        return $this->receiveCountyId;
    }

    /**
     * @param int $receiveTownId
     * 收货乡镇ID
     * Required: true
     * Example Value: 
     */
    private $receiveTownId;

    /**
     * @param int $receiveTownId
     * 收货乡镇ID
     * Example Value: 
     */
    public function setReceiveTownId($receiveTownId)
    {
        $this->receiveTownId             = $receiveTownId;
        $this->apiParas["receiveTownId"]  = $receiveTownId;
    }

    public function getReceiveTownId()
    {
        return $this->receiveTownId;
    }

}