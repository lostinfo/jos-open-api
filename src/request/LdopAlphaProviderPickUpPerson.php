<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 承运商取件员信息回传接口
 * 快递管家API-第三方快递API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=218&apiId=2002&apiName=jingdong.ldop.alpha.provider.pick.up.person
 * Class LdopAlphaProviderPickUpPerson
 * @package Jd\request
 */
class LdopAlphaProviderPickUpPerson
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ldop.alpha.provider.pick.up.person";
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
     * @param string $siteName
     * 取件站点名称
     * Required: true
     * Example Value: 
     */
    private $siteName;

    /**
     * @param string $siteName
     * 取件站点名称
     * Example Value: 
     */
    public function setSiteName($siteName)
    {
        $this->siteName             = $siteName;
        $this->apiParas["siteName"]  = $siteName;
    }

    public function getSiteName()
    {
        return $this->siteName;
    }

    /**
     * @param string $pickPerson
     * 取件员名称
     * Required: true
     * Example Value: 
     */
    private $pickPerson;

    /**
     * @param string $pickPerson
     * 取件员名称
     * Example Value: 
     */
    public function setPickPerson($pickPerson)
    {
        $this->pickPerson             = $pickPerson;
        $this->apiParas["pickPerson"]  = $pickPerson;
    }

    public function getPickPerson()
    {
        return $this->pickPerson;
    }

    /**
     * @param string $phone
     * 取件员电话
     * Required: true
     * Example Value: 
     */
    private $phone;

    /**
     * @param string $phone
     * 取件员电话
     * Example Value: 
     */
    public function setPhone($phone)
    {
        $this->phone             = $phone;
        $this->apiParas["phone"]  = $phone;
    }

    public function getPhone()
    {
        return $this->phone;
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