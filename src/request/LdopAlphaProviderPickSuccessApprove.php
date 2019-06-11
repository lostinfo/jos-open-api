<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 承运商取件成功信息回传接口
 * 快递管家API-第三方快递API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=218&apiId=2004&apiName=jingdong.ldop.alpha.provider.pick.success.approve
 * Class LdopAlphaProviderPickSuccessApprove
 * @package Jd\request
 */
class LdopAlphaProviderPickSuccessApprove
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ldop.alpha.provider.pick.success.approve";
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
     * @param string $pickupCode
     * 取件任务ID
     * Required: true
     * Example Value: 
     */
    private $pickupCode;

    /**
     * @param string $pickupCode
     * 取件任务ID
     * Example Value: 
     */
    public function setPickupCode($pickupCode)
    {
        $this->pickupCode             = $pickupCode;
        $this->apiParas["pickupCode"]  = $pickupCode;
    }

    public function getPickupCode()
    {
        return $this->pickupCode;
    }

    /**
     * @param string $providerCode
     * 承运商编码
     * Required: true
     * Example Value: 
     */
    private $providerCode;

    /**
     * @param string $providerCode
     * 承运商编码
     * Example Value: 
     */
    public function setProviderCode($providerCode)
    {
        $this->providerCode             = $providerCode;
        $this->apiParas["providerCode"]  = $providerCode;
    }

    public function getProviderCode()
    {
        return $this->providerCode;
    }

    /**
     * @param string $deliveryId
     * 运单号
     * Required: true
     * Example Value: 
     */
    private $deliveryId;

    /**
     * @param string $deliveryId
     * 运单号
     * Example Value: 
     */
    public function setDeliveryId($deliveryId)
    {
        $this->deliveryId             = $deliveryId;
        $this->apiParas["deliveryId"]  = $deliveryId;
    }

    public function getDeliveryId()
    {
        return $this->deliveryId;
    }

    /**
     * @param int $weight
     * 运单重量
     * Required: true
     * Example Value: 
     */
    private $weight;

    /**
     * @param int $weight
     * 运单重量
     * Example Value: 
     */
    public function setWeight($weight)
    {
        $this->weight             = $weight;
        $this->apiParas["weight"]  = $weight;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param int $volume
     * 运单体积
     * Required: true
     * Example Value: 
     */
    private $volume;

    /**
     * @param int $volume
     * 运单体积
     * Example Value: 
     */
    public function setVolume($volume)
    {
        $this->volume             = $volume;
        $this->apiParas["volume"]  = $volume;
    }

    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * @param int $money
     * 运单金额
     * Required: true
     * Example Value: 
     */
    private $money;

    /**
     * @param int $money
     * 运单金额
     * Example Value: 
     */
    public function setMoney($money)
    {
        $this->money             = $money;
        $this->apiParas["money"]  = $money;
    }

    public function getMoney()
    {
        return $this->money;
    }

    /**
     * @param string $operateTime
     * 操作时间
     * Required: true
     * Example Value: 
     */
    private $operateTime;

    /**
     * @param string $operateTime
     * 操作时间
     * Example Value: 
     */
    public function setOperateTime($operateTime)
    {
        $this->operateTime             = $operateTime;
        $this->apiParas["operateTime"]  = $operateTime;
    }

    public function getOperateTime()
    {
        return $this->operateTime;
    }

}