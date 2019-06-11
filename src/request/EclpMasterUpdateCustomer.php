<?php

namespace JD\request;

/**
 * 新增/修改收货客户
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=2035&apiName=jingdong.eclp.master.updateCustomer
 * Class EclpMasterUpdateCustomer
 * @package Jd\request
 */
class EclpMasterUpdateCustomer
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.master.updateCustomer";
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
     * @param String $customerId
     * 客户编码
     * Required: true
     * Example Value: 
     */
    private $customerId;

    /**
     * @param String $customerId
     * 客户编码
     * Example Value: 
     */
    public function setCustomerId($customerId)
    {
        $this->customerId             = $customerId;
        $this->apiParas["customerId"]  = $customerId;
    }

    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * @param String $customerName
     * 客户名称
     * Required: true
     * Example Value: 
     */
    private $customerName;

    /**
     * @param String $customerName
     * 客户名称
     * Example Value: 
     */
    public function setCustomerName($customerName)
    {
        $this->customerName             = $customerName;
        $this->apiParas["customerName"]  = $customerName;
    }

    public function getCustomerName()
    {
        return $this->customerName;
    }

    /**
     * @param Number $type
     * 类型
     * Required: true
     * Example Value: 
     */
    private $type;

    /**
     * @param Number $type
     * 类型
     * Example Value: 
     */
    public function setType($type)
    {
        $this->type             = $type;
        $this->apiParas["type"]  = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    /**
     * @param Number $level
     * 等级
     * Required: true
     * Example Value: 
     */
    private $level;

    /**
     * @param Number $level
     * 等级
     * Example Value: 
     */
    public function setLevel($level)
    {
        $this->level             = $level;
        $this->apiParas["level"]  = $level;
    }

    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param Number $status
     * 是
     * Required: true
     * Example Value: 
     */
    private $status;

    /**
     * @param Number $status
     * 是
     * Example Value: 
     */
    public function setStatus($status)
    {
        $this->status             = $status;
        $this->apiParas["status"]  = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param String $email
     * Email
     * Required: false
     * Example Value: 
     */
    private $email;

    /**
     * @param String $email
     * Email
     * Example Value: 
     */
    public function setEmail($email)
    {
        $this->email             = $email;
        $this->apiParas["email"]  = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param String $country
     * 国家
     * Required: true
     * Example Value: 
     */
    private $country;

    /**
     * @param String $country
     * 国家
     * Example Value: 
     */
    public function setCountry($country)
    {
        $this->country             = $country;
        $this->apiParas["country"]  = $country;
    }

    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param String $province
     * 省
     * Required: true
     * Example Value: 
     */
    private $province;

    /**
     * @param String $province
     * 省
     * Example Value: 
     */
    public function setProvince($province)
    {
        $this->province             = $province;
        $this->apiParas["province"]  = $province;
    }

    public function getProvince()
    {
        return $this->province;
    }

    /**
     * @param String $city
     * 市
     * Required: true
     * Example Value: 
     */
    private $city;

    /**
     * @param String $city
     * 市
     * Example Value: 
     */
    public function setCity($city)
    {
        $this->city             = $city;
        $this->apiParas["city"]  = $city;
    }

    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param String $area
     * 区
     * Required: false
     * Example Value: 
     */
    private $area;

    /**
     * @param String $area
     * 区
     * Example Value: 
     */
    public function setArea($area)
    {
        $this->area             = $area;
        $this->apiParas["area"]  = $area;
    }

    public function getArea()
    {
        return $this->area;
    }

    /**
     * @param String $address
     * 收货地址
     * Required: true
     * Example Value: 
     */
    private $address;

    /**
     * @param String $address
     * 收货地址
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
     * @param String $zipCode
     * 邮编
     * Required: false
     * Example Value: 
     */
    private $zipCode;

    /**
     * @param String $zipCode
     * 邮编
     * Example Value: 
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode             = $zipCode;
        $this->apiParas["zipCode"]  = $zipCode;
    }

    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * @param String $consignee
     * 收货人
     * Required: true
     * Example Value: 
     */
    private $consignee;

    /**
     * @param String $consignee
     * 收货人
     * Example Value: 
     */
    public function setConsignee($consignee)
    {
        $this->consignee             = $consignee;
        $this->apiParas["consignee"]  = $consignee;
    }

    public function getConsignee()
    {
        return $this->consignee;
    }

    /**
     * @param String $phone
     * 手机号
     * Required: false
     * Example Value: 
     */
    private $phone;

    /**
     * @param String $phone
     * 手机号
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
     * @param String $mobile
     * 座机号
     * Required: false
     * Example Value: 
     */
    private $mobile;

    /**
     * @param String $mobile
     * 座机号
     * Example Value: 
     */
    public function setMobile($mobile)
    {
        $this->mobile             = $mobile;
        $this->apiParas["mobile"]  = $mobile;
    }

    public function getMobile()
    {
        return $this->mobile;
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
     * @param String $customerAlias
     * 客户别名
     * Required: false
     * Example Value: 
     */
    private $customerAlias;

    /**
     * @param String $customerAlias
     * 客户别名
     * Example Value: 
     */
    public function setCustomerAlias($customerAlias)
    {
        $this->customerAlias             = $customerAlias;
        $this->apiParas["customerAlias"]  = $customerAlias;
    }

    public function getCustomerAlias()
    {
        return $this->customerAlias;
    }

    /**
     * @param String $ownerNo
     * 货主编号
     * Required: false
     * Example Value: 
     */
    private $ownerNo;

    /**
     * @param String $ownerNo
     * 货主编号
     * Example Value: 
     */
    public function setOwnerNo($ownerNo)
    {
        $this->ownerNo             = $ownerNo;
        $this->apiParas["ownerNo"]  = $ownerNo;
    }

    public function getOwnerNo()
    {
        return $this->ownerNo;
    }

}