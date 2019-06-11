<?php

namespace JD\request;

/**
 * 供应商信息录入
 * 生鲜加工中心API-生鲜接口
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=257&apiId=3172&apiName=jingdong.factory.purchase.saveOrUpdataeVendor
 * Class FactoryPurchaseSaveOrUpdataeVendor
 * @package Jd\request
 */
class FactoryPurchaseSaveOrUpdataeVendor
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.factory.purchase.saveOrUpdataeVendor";
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
     * @param Number $factoryId
     * 工厂Id
     * Required: true
     * Example Value: 0
     */
    private $factoryId;

    /**
     * @param Number $factoryId
     * 工厂Id
     * Example Value: 0
     */
    public function setFactoryId($factoryId)
    {
        $this->factoryId             = $factoryId;
        $this->apiParas["factoryId"]  = $factoryId;
    }

    public function getFactoryId()
    {
        return $this->factoryId;
    }

    /**
     * @param String $personalKey
     * 个人Key
     * Required: true
     * Example Value: 0
     */
    private $personalKey;

    /**
     * @param String $personalKey
     * 个人Key
     * Example Value: 0
     */
    public function setPersonalKey($personalKey)
    {
        $this->personalKey             = $personalKey;
        $this->apiParas["personalKey"]  = $personalKey;
    }

    public function getPersonalKey()
    {
        return $this->personalKey;
    }

    /**
     * @param Number $ptId
     * 租户关联Id
     * Required: true
     * Example Value: 0
     */
    private $ptId;

    /**
     * @param Number $ptId
     * 租户关联Id
     * Example Value: 0
     */
    public function setPtId($ptId)
    {
        $this->ptId             = $ptId;
        $this->apiParas["ptId"]  = $ptId;
    }

    public function getPtId()
    {
        return $this->ptId;
    }

    /**
     * @param String $name
     * 供应商名称
     * Required: false
     * Example Value: 0
     */
    private $name;

    /**
     * @param String $name
     * 供应商名称
     * Example Value: 0
     */
    public function setName($name)
    {
        $this->name             = $name;
        $this->apiParas["name"]  = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * @param String $nameAbbr
     * 供应商简称
     * Required: false
     * Example Value: 0
     */
    private $nameAbbr;

    /**
     * @param String $nameAbbr
     * 供应商简称
     * Example Value: 0
     */
    public function setNameAbbr($nameAbbr)
    {
        $this->nameAbbr             = $nameAbbr;
        $this->apiParas["nameAbbr"]  = $nameAbbr;
    }

    public function getNameAbbr()
    {
        return $this->nameAbbr;
    }

    /**
     * @param Number $vendorGroup
     * 供应商分组
     * Required: false
     * Example Value: 0
     */
    private $vendorGroup;

    /**
     * @param Number $vendorGroup
     * 供应商分组
     * Example Value: 0
     */
    public function setVendorGroup($vendorGroup)
    {
        $this->vendorGroup             = $vendorGroup;
        $this->apiParas["vendorGroup"]  = $vendorGroup;
    }

    public function getVendorGroup()
    {
        return $this->vendorGroup;
    }

    /**
     * @param String $linkman
     * 联系人
     * Required: false
     * Example Value: 0
     */
    private $linkman;

    /**
     * @param String $linkman
     * 联系人
     * Example Value: 0
     */
    public function setLinkman($linkman)
    {
        $this->linkman             = $linkman;
        $this->apiParas["linkman"]  = $linkman;
    }

    public function getLinkman()
    {
        return $this->linkman;
    }

    /**
     * @param String $chargeMan
     * 负责人
     * Required: false
     * Example Value: 0
     */
    private $chargeMan;

    /**
     * @param String $chargeMan
     * 负责人
     * Example Value: 0
     */
    public function setChargeMan($chargeMan)
    {
        $this->chargeMan             = $chargeMan;
        $this->apiParas["chargeMan"]  = $chargeMan;
    }

    public function getChargeMan()
    {
        return $this->chargeMan;
    }

    /**
     * @param String $holdOrg
     * 使用组织
     * Required: false
     * Example Value: 0
     */
    private $holdOrg;

    /**
     * @param String $holdOrg
     * 使用组织
     * Example Value: 0
     */
    public function setHoldOrg($holdOrg)
    {
        $this->holdOrg             = $holdOrg;
        $this->apiParas["holdOrg"]  = $holdOrg;
    }

    public function getHoldOrg()
    {
        return $this->holdOrg;
    }

    /**
     * @param String $remark
     * 备注
     * Required: false
     * Example Value: 0
     */
    private $remark;

    /**
     * @param String $remark
     * 备注
     * Example Value: 0
     */
    public function setRemark($remark)
    {
        $this->remark             = $remark;
        $this->apiParas["remark"]  = $remark;
    }

    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * @param String $code
     * 供应商编码
     * Required: false
     * Example Value: 0
     */
    private $code;

    /**
     * @param String $code
     * 供应商编码
     * Example Value: 0
     */
    public function setCode($code)
    {
        $this->code             = $code;
        $this->apiParas["code"]  = $code;
    }

    public function getCode()
    {
        return $this->code;
    }

}