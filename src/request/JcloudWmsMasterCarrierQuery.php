<?php

namespace JD\request;

/**
 * 承运商信息查询
 * 物流云-WMS-API-物流云仓储
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=192&apiId=1702&apiName=jingdong.jcloud.wms.master.carrier.query
 * Class JcloudWmsMasterCarrierQuery
 * @package Jd\request
 */
class JcloudWmsMasterCarrierQuery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.jcloud.wms.master.carrier.query";
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
     * @param String $tenantId
     * 租户ID
     * Required: true
     * Example Value: 
     */
    private $tenantId;

    /**
     * @param String $tenantId
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
     * @param String $carrierNo
     * 承运商编码
     * Required: false
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
     * Required: false
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
     * @param Number $carrierType
     * 承运商类型
     * Required: false
     * Example Value: 
     */
    private $carrierType;

    /**
     * @param Number $carrierType
     * 承运商类型
     * Example Value: 
     */
    public function setCarrierType($carrierType)
    {
        $this->carrierType             = $carrierType;
        $this->apiParas["carrierType"]  = $carrierType;
    }

    public function getCarrierType()
    {
        return $this->carrierType;
    }

    /**
     * @param String $englishName
     * 英文名称
     * Required: false
     * Example Value: 
     */
    private $englishName;

    /**
     * @param String $englishName
     * 英文名称
     * Example Value: 
     */
    public function setEnglishName($englishName)
    {
        $this->englishName             = $englishName;
        $this->apiParas["englishName"]  = $englishName;
    }

    public function getEnglishName()
    {
        return $this->englishName;
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
     * @param String $tel
     * 电话
     * Required: false
     * Example Value: 
     */
    private $tel;

    /**
     * @param String $tel
     * 电话
     * Example Value: 
     */
    public function setTel($tel)
    {
        $this->tel             = $tel;
        $this->apiParas["tel"]  = $tel;
    }

    public function getTel()
    {
        return $this->tel;
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
     * @param String $postCode
     * 邮编
     * Required: false
     * Example Value: 
     */
    private $postCode;

    /**
     * @param String $postCode
     * 邮编
     * Example Value: 
     */
    public function setPostCode($postCode)
    {
        $this->postCode             = $postCode;
        $this->apiParas["postCode"]  = $postCode;
    }

    public function getPostCode()
    {
        return $this->postCode;
    }

    /**
     * @param Number $useFlag
     * 是否可用（0-否，1-是）
     * Required: false
     * Example Value: 
     */
    private $useFlag;

    /**
     * @param Number $useFlag
     * 是否可用（0-否，1-是）
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

}