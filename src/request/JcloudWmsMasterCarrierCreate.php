<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 承运商信息下传（或更新）
 * 物流云-WMS-API-物流云仓储
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=192&apiId=1703&apiName=jingdong.jcloud.wms.master.carrier.create
 * Class JcloudWmsMasterCarrierCreate
 * @package Jd\request
 */
class JcloudWmsMasterCarrierCreate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.jcloud.wms.master.carrier.create";
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
     * 租户
     * Required: true
     * Example Value: 
     */
    private $tenantId;

    /**
     * @param string $tenantId
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
     * @param string $carrierNo
     * 承运商编码
     * Required: true
     * Example Value: 
     */
    private $carrierNo;

    /**
     * @param string $carrierNo
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
     * @param string $carrierName
     * 承运商名称
     * Required: true
     * Example Value: 
     */
    private $carrierName;

    /**
     * @param string $carrierName
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
     * @param int $useFlag
     * 是否可用(0：否；1：是)
     * Required: true
     * Example Value: 
     */
    private $useFlag;

    /**
     * @param int $useFlag
     * 是否可用(0：否；1：是)
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
     * @param string $tel
     * 电话
     * Required: false
     * Example Value: 
     */
    private $tel;

    /**
     * @param string $tel
     * 电话
     * Example Value: 
     */
    public function setTel($tel)
    {
        $this->tel             = $tel;
        $this->apiParas["contactPhone"]  = $tel;
    }

    public function getTel()
    {
        return $this->tel;
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