<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 供应商信息下传（或更新）
 * 物流云-WMS-API-物流云仓储
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=192&apiId=1705&apiName=jingdong.jcloud.wms.master.supplier.create
 * Class JcloudWmsMasterSupplierCreate
 * @package Jd\request
 */
class JcloudWmsMasterSupplierCreate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.jcloud.wms.master.supplier.create";
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
     * @param string $tenantId
     * 租户ID
     * Required: true
     * Example Value: 
     */
    private $tenantId;

    /**
     * @param string $tenantId
     * 租户ID
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
     * @param string $supplierNo
     * 供应商编码
     * Required: true
     * Example Value: 
     */
    private $supplierNo;

    /**
     * @param string $supplierNo
     * 供应商编码
     * Example Value: 
     */
    public function setSupplierNo($supplierNo)
    {
        $this->supplierNo             = $supplierNo;
        $this->apiParas["supplierNo"]  = $supplierNo;
    }

    public function getSupplierNo()
    {
        return $this->supplierNo;
    }

    /**
     * @param string $supplierName
     * 供应商名称
     * Required: true
     * Example Value: 
     */
    private $supplierName;

    /**
     * @param string $supplierName
     * 供应商名称
     * Example Value: 
     */
    public function setSupplierName($supplierName)
    {
        $this->supplierName             = $supplierName;
        $this->apiParas["supplierName"]  = $supplierName;
    }

    public function getSupplierName()
    {
        return $this->supplierName;
    }

    /**
     * @param string $contact
     * 联系人
     * Required: false
     * Example Value: 
     */
    private $contact;

    /**
     * @param string $contact
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
     * @param string $contactMobile
     * 联系人手机
     * Required: false
     * Example Value: 
     */
    private $contactMobile;

    /**
     * @param string $contactMobile
     * 联系人手机
     * Example Value: 
     */
    public function setContactMobile($contactMobile)
    {
        $this->contactMobile             = $contactMobile;
        $this->apiParas["contactMobile"]  = $contactMobile;
    }

    public function getContactMobile()
    {
        return $this->contactMobile;
    }

    /**
     * @param string $contactPhone
     * 联系人电话
     * Required: false
     * Example Value: 
     */
    private $contactPhone;

    /**
     * @param string $contactPhone
     * 联系人电话
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
     * @param string $province
     * 省
     * Required: false
     * Example Value: 
     */
    private $province;

    /**
     * @param string $province
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
     * @param string $city
     * 市
     * Required: false
     * Example Value: 
     */
    private $city;

    /**
     * @param string $city
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
     * @param string $district
     * 区
     * Required: false
     * Example Value: 
     */
    private $district;

    /**
     * @param string $district
     * 区
     * Example Value: 
     */
    public function setDistrict($district)
    {
        $this->district             = $district;
        $this->apiParas["district"]  = $district;
    }

    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * @param string $address
     * 地址
     * Required: false
     * Example Value: 
     */
    private $address;

    /**
     * @param string $address
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
     * @param string $contactEmail
     * 邮箱
     * Required: false
     * Example Value: 
     */
    private $contactEmail;

    /**
     * @param string $contactEmail
     * 邮箱
     * Example Value: 
     */
    public function setContactEmail($contactEmail)
    {
        $this->contactEmail             = $contactEmail;
        $this->apiParas["contactEmail"]  = $contactEmail;
    }

    public function getContactEmail()
    {
        return $this->contactEmail;
    }

    /**
     * @param string $rtnAddr
     * 退货地址
     * Required: false
     * Example Value: 
     */
    private $rtnAddr;

    /**
     * @param string $rtnAddr
     * 退货地址
     * Example Value: 
     */
    public function setRtnAddr($rtnAddr)
    {
        $this->rtnAddr             = $rtnAddr;
        $this->apiParas["returnAddress"]  = $rtnAddr;
    }

    public function getRtnAddr()
    {
        return $this->rtnAddr;
    }

    /**
     * @param string $memo
     * 备注
     * Required: false
     * Example Value: 
     */
    private $memo;

    /**
     * @param string $memo
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
     * @param string $updateUser
     * 操作人
     * Required: true
     * Example Value: 
     */
    private $updateUser;

    /**
     * @param string $updateUser
     * 操作人
     * Example Value: 
     */
    public function setUpdateUser($updateUser)
    {
        $this->updateUser             = $updateUser;
        $this->apiParas["operateUser"]  = $updateUser;
    }

    public function getUpdateUser()
    {
        return $this->updateUser;
    }

    /**
     * @param string $updateTime
     * 操作时间
     * Required: true
     * Example Value: 
     */
    private $updateTime;

    /**
     * @param string $updateTime
     * 操作时间
     * Example Value: 
     */
    public function setUpdateTime($updateTime)
    {
        $this->updateTime             = $updateTime;
        $this->apiParas["operateTime"]  = $updateTime;
    }

    public function getUpdateTime()
    {
        return $this->updateTime;
    }

}