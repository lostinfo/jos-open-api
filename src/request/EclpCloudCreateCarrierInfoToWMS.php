<?php

namespace JD\request;

/**
 * 承运商信息下传/更新接口
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=1801&apiName=jingdong.eclp.cloud.createCarrierInfoToWMS
 * Class EclpCloudCreateCarrierInfoToWMS
 * @package Jd\request
 */
class EclpCloudCreateCarrierInfoToWMS
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.cloud.createCarrierInfoToWMS";
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
     * @param String $carrierNo
     * 承运商编码
     * Required: true
     * Example Value: 
     */
    private $carrierNo;

    /**
     * @param String $carrierNo
     * 承运商编码
     * Example Value: 
     */
    public function setCarrierNo($carrierNo)
    {
        $this->carrierNo             = $carrierNo;
        $this->apiParas["carrierNo"]  = $carrierNo;
    }

    public function getCarrierNo()
    {
        return $this->carrierNo;
    }

    /**
     * @param String $carrierName
     * 承运商名称
     * Required: true
     * Example Value: 
     */
    private $carrierName;

    /**
     * @param String $carrierName
     * 承运商名称
     * Example Value: 
     */
    public function setCarrierName($carrierName)
    {
        $this->carrierName             = $carrierName;
        $this->apiParas["carrierName"]  = $carrierName;
    }

    public function getCarrierName()
    {
        return $this->carrierName;
    }

    /**
     * @param Number $useFlag
     * 是否可用
     * Required: true
     * Example Value: 
     */
    private $useFlag;

    /**
     * @param Number $useFlag
     * 是否可用
     * Example Value: 
     */
    public function setUseFlag($useFlag)
    {
        $this->useFlag             = $useFlag;
        $this->apiParas["useFlag"]  = $useFlag;
    }

    public function getUseFlag()
    {
        return $this->useFlag;
    }

    /**
     * @param String $contact
     * 联系人
     * Required: false
     * Example Value: 
     */
    private $contact;

    /**
     * @param String $contact
     * 联系人
     * Example Value: 
     */
    public function setContact($contact)
    {
        $this->contact             = $contact;
        $this->apiParas["contact"]  = $contact;
    }

    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param String $contactPhone
     * 电话
     * Required: false
     * Example Value: 
     */
    private $contactPhone;

    /**
     * @param String $contactPhone
     * 电话
     * Example Value: 
     */
    public function setContactPhone($contactPhone)
    {
        $this->contactPhone             = $contactPhone;
        $this->apiParas["contactPhone"]  = $contactPhone;
    }

    public function getContactPhone()
    {
        return $this->contactPhone;
    }

    /**
     * @param String $address
     * 地址
     * Required: false
     * Example Value: 
     */
    private $address;

    /**
     * @param String $address
     * 地址
     * Example Value: 
     */
    public function setAddress($address)
    {
        $this->address             = $address;
        $this->apiParas["address"]  = $address;
    }

    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param String $memo
     * 备注
     * Required: false
     * Example Value: 
     */
    private $memo;

    /**
     * @param String $memo
     * 备注
     * Example Value: 
     */
    public function setMemo($memo)
    {
        $this->memo             = $memo;
        $this->apiParas["memo"]  = $memo;
    }

    public function getMemo()
    {
        return $this->memo;
    }

    /**
     * @param String $operateUser
     * 操作人
     * Required: true
     * Example Value: 
     */
    private $operateUser;

    /**
     * @param String $operateUser
     * 操作人
     * Example Value: 
     */
    public function setOperateUser($operateUser)
    {
        $this->operateUser             = $operateUser;
        $this->apiParas["operateUser"]  = $operateUser;
    }

    public function getOperateUser()
    {
        return $this->operateUser;
    }

    /**
     * @param Date $operateTime
     * 操作时间
     * Required: true
     * Example Value: 
     */
    private $operateTime;

    /**
     * @param Date $operateTime
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

    /**
     * @param String $tenantId
     * 租户
     * Required: true
     * Example Value: 
     */
    private $tenantId;

    /**
     * @param String $tenantId
     * 租户
     * Example Value: 
     */
    public function setTenantId($tenantId)
    {
        $this->tenantId             = $tenantId;
        $this->apiParas["tenantId"]  = $tenantId;
    }

    public function getTenantId()
    {
        return $this->tenantId;
    }

    /**
     * @param String $pin
     * 商家授权码
     * Required: true
     * Example Value: 
     */
    private $pin;

    /**
     * @param String $pin
     * 商家授权码
     * Example Value: 
     */
    public function setPin($pin)
    {
        $this->pin             = $pin;
        $this->apiParas["paramStrin"]  = $pin;
    }

    public function getPin()
    {
        return $this->pin;
    }

}