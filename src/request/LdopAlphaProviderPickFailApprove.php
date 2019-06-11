<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 承运商取件失败信息回传接口
 * 快递管家API-第三方快递API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=218&apiId=2003&apiName=jingdong.ldop.alpha.provider.pick.fail.approve
 * Class LdopAlphaProviderPickFailApprove
 * @package Jd\request
 */
class LdopAlphaProviderPickFailApprove
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ldop.alpha.provider.pick.fail.approve";
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
     * @param int $failCode
     * 取件失败编码
     * Required: true
     * Example Value: 
     */
    private $failCode;

    /**
     * @param int $failCode
     * 取件失败编码
     * Example Value: 
     */
    public function setFailCode($failCode)
    {
        $this->failCode             = $failCode;
        $this->apiParas["failCode"]  = $failCode;
    }

    public function getFailCode()
    {
        return $this->failCode;
    }

    /**
     * @param string $failReason
     * 取件失败原因
     * Required: true
     * Example Value: 
     */
    private $failReason;

    /**
     * @param string $failReason
     * 取件失败原因
     * Example Value: 
     */
    public function setFailReason($failReason)
    {
        $this->failReason             = $failReason;
        $this->apiParas["failReason"]  = $failReason;
    }

    public function getFailReason()
    {
        return $this->failReason;
    }

    /**
     * @param string $operateTime
     * 取件失败操作时间
     * Required: true
     * Example Value: 
     */
    private $operateTime;

    /**
     * @param string $operateTime
     * 取件失败操作时间
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