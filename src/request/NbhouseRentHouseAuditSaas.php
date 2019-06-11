<?php

namespace JD\request;

/**
 * 监管-房源核验接口
 * 京东房产-京东房产
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=253&apiId=3238&apiName=jingdong.nbhouse.rent.houseAuditSaas
 * Class NbhouseRentHouseAuditSaas
 * @package Jd\request
 */
class NbhouseRentHouseAuditSaas
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.nbhouse.rent.houseAuditSaas";
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
     * @param Number $queryId
     * 房源查询编号，房源查询接口返回
     * Required: true
     * Example Value: 
     */
    private $queryId;

    /**
     * @param Number $queryId
     * 房源查询编号，房源查询接口返回
     * Example Value: 
     */
    public function setQueryId($queryId)
    {
        $this->queryId             = $queryId;
        $this->apiParas["queryId"]  = $queryId;
    }

    public function getQueryId()
    {
        return $this->queryId;
    }

    /**
     * @param Number $certType
     * 权属证明类别(枚举)
     * Required: true
     * Example Value: 
     */
    private $certType;

    /**
     * @param Number $certType
     * 权属证明类别(枚举)
     * Example Value: 
     */
    public function setCertType($certType)
    {
        $this->certType             = $certType;
        $this->apiParas["certType"]  = $certType;
    }

    public function getCertType()
    {
        return $this->certType;
    }

    /**
     * @param String $certNo
     * 权属证明编号
     * Required: true
     * Example Value: 
     */
    private $certNo;

    /**
     * @param String $certNo
     * 权属证明编号
     * Example Value: 
     */
    public function setCertNo($certNo)
    {
        $this->certNo             = $certNo;
        $this->apiParas["certNo"]  = $certNo;
    }

    public function getCertNo()
    {
        return $this->certNo;
    }

    /**
     * @param Number $certOwnerType
     * 持证人类别（枚举）
     * Required: true
     * Example Value: 
     */
    private $certOwnerType;

    /**
     * @param Number $certOwnerType
     * 持证人类别（枚举）
     * Example Value: 
     */
    public function setCertOwnerType($certOwnerType)
    {
        $this->certOwnerType             = $certOwnerType;
        $this->apiParas["certOwnerType"]  = $certOwnerType;
    }

    public function getCertOwnerType()
    {
        return $this->certOwnerType;
    }

    /**
     * @param String $certOwnerTitle
     * 持证人名称
     * Required: true
     * Example Value: 
     */
    private $certOwnerTitle;

    /**
     * @param String $certOwnerTitle
     * 持证人名称
     * Example Value: 
     */
    public function setCertOwnerTitle($certOwnerTitle)
    {
        $this->certOwnerTitle             = $certOwnerTitle;
        $this->apiParas["certOwnerTitle"]  = $certOwnerTitle;
    }

    public function getCertOwnerTitle()
    {
        return $this->certOwnerTitle;
    }

    /**
     * @param Number $certOwnerIdType
     * 持证人证件类别(枚举)
     * Required: true
     * Example Value: 
     */
    private $certOwnerIdType;

    /**
     * @param Number $certOwnerIdType
     * 持证人证件类别(枚举)
     * Example Value: 
     */
    public function setCertOwnerIdType($certOwnerIdType)
    {
        $this->certOwnerIdType             = $certOwnerIdType;
        $this->apiParas["certOwnerIdType"]  = $certOwnerIdType;
    }

    public function getCertOwnerIdType()
    {
        return $this->certOwnerIdType;
    }

    /**
     * @param String $certOwnerIdNo
     * 持证人证件号码
     * Required: true
     * Example Value: 
     */
    private $certOwnerIdNo;

    /**
     * @param String $certOwnerIdNo
     * 持证人证件号码
     * Example Value: 
     */
    public function setCertOwnerIdNo($certOwnerIdNo)
    {
        $this->certOwnerIdNo             = $certOwnerIdNo;
        $this->apiParas["certOwnerIdNo"]  = $certOwnerIdNo;
    }

    public function getCertOwnerIdNo()
    {
        return $this->certOwnerIdNo;
    }

    /**
     * @param String $houseIcode
     * 房屋编号（建委
     * Required: true
     * Example Value: 
     */
    private $houseIcode;

    /**
     * @param String $houseIcode
     * 房屋编号（建委
     * Example Value: 
     */
    public function setHouseIcode($houseIcode)
    {
        $this->houseIcode             = $houseIcode;
        $this->apiParas["houseIcode"]  = $houseIcode;
    }

    public function getHouseIcode()
    {
        return $this->houseIcode;
    }

    /**
     * @param Number $houseDistrictId
     * 房屋所在区县（枚举）
     * Required: true
     * Example Value: 
     */
    private $houseDistrictId;

    /**
     * @param Number $houseDistrictId
     * 房屋所在区县（枚举）
     * Example Value: 
     */
    public function setHouseDistrictId($houseDistrictId)
    {
        $this->houseDistrictId             = $houseDistrictId;
        $this->apiParas["houseDistrictId"]  = $houseDistrictId;
    }

    public function getHouseDistrictId()
    {
        return $this->houseDistrictId;
    }

    /**
     * @param String $houseAddress
     * 房屋地址
     * Required: true
     * Example Value: 
     */
    private $houseAddress;

    /**
     * @param String $houseAddress
     * 房屋地址
     * Example Value: 
     */
    public function setHouseAddress($houseAddress)
    {
        $this->houseAddress             = $houseAddress;
        $this->apiParas["houseAddress"]  = $houseAddress;
    }

    public function getHouseAddress()
    {
        return $this->houseAddress;
    }

}