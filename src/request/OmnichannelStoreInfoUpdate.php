<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 同步店铺信息
 * 全渠道开放平台API-全渠道开放平台API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=244&apiId=2308&apiName=jingdong.omnichannel.store.info.update
 * Class OmnichannelStoreInfoUpdate
 * @package Jd\request
 */
class OmnichannelStoreInfoUpdate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.omnichannel.store.info.update";
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
     * @param string $storeId
     * 商家原始门店ID
     * Required: true
     * Example Value: 
     */
    private $storeId;

    /**
     * @param string $storeId
     * 商家原始门店ID
     * Example Value: 
     */
    public function setStoreId($storeId)
    {
        $this->storeId             = $storeId;
        $this->apiParas["storeId"]  = $storeId;
    }

    public function getStoreId()
    {
        return $this->storeId;
    }

    /**
     * @param string $storeName
     * 门店名称
     * Required: false
     * Example Value: 
     */
    private $storeName;

    /**
     * @param string $storeName
     * 门店名称
     * Example Value: 
     */
    public function setStoreName($storeName)
    {
        $this->storeName             = $storeName;
        $this->apiParas["storeName"]  = $storeName;
    }

    public function getStoreName()
    {
        return $this->storeName;
    }

    /**
     * @param string $storeFullAddress
     * 门店完整地址
     * Required: false
     * Example Value: 
     */
    private $storeFullAddress;

    /**
     * @param string $storeFullAddress
     * 门店完整地址
     * Example Value: 
     */
    public function setStoreFullAddress($storeFullAddress)
    {
        $this->storeFullAddress             = $storeFullAddress;
        $this->apiParas["storeFullAddress"]  = $storeFullAddress;
    }

    public function getStoreFullAddress()
    {
        return $this->storeFullAddress;
    }

    /**
     * @param string $province
     * 省，门店一级地址
     * Required: true
     * Example Value: 
     */
    private $province;

    /**
     * @param string $province
     * 省，门店一级地址
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
     * @param int $provinceCode
     * 省，门店一级地址编码（京东编码）
     * Required: false
     * Example Value: 
     */
    private $provinceCode;

    /**
     * @param int $provinceCode
     * 省，门店一级地址编码（京东编码）
     * Example Value: 
     */
    public function setProvinceCode($provinceCode)
    {
        $this->provinceCode             = $provinceCode;
        $this->apiParas["provinceCode"]  = $provinceCode;
    }

    public function getProvinceCode()
    {
        return $this->provinceCode;
    }

    /**
     * @param string $city
     * 市，门店一级地址
     * Required: true
     * Example Value: 
     */
    private $city;

    /**
     * @param string $city
     * 市，门店一级地址
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
     * @param int $cityCode
     * 市，门店一级地址编码（京东编码）
     * Required: false
     * Example Value: 
     */
    private $cityCode;

    /**
     * @param int $cityCode
     * 市，门店一级地址编码（京东编码）
     * Example Value: 
     */
    public function setCityCode($cityCode)
    {
        $this->cityCode             = $cityCode;
        $this->apiParas["cityCode"]  = $cityCode;
    }

    public function getCityCode()
    {
        return $this->cityCode;
    }

    /**
     * @param string $county
     * 县，门店三级地址
     * Required: false
     * Example Value: 
     */
    private $county;

    /**
     * @param string $county
     * 县，门店三级地址
     * Example Value: 
     */
    public function setCounty($county)
    {
        $this->county             = $county;
        $this->apiParas["county"]  = $county;
    }

    public function getCounty()
    {
        return $this->county;
    }

    /**
     * @param int $countyCode
     * 县，门店三级地址编码（京东编码）
     * Required: false
     * Example Value: 
     */
    private $countyCode;

    /**
     * @param int $countyCode
     * 县，门店三级地址编码（京东编码）
     * Example Value: 
     */
    public function setCountyCode($countyCode)
    {
        $this->countyCode             = $countyCode;
        $this->apiParas["countyCode"]  = $countyCode;
    }

    public function getCountyCode()
    {
        return $this->countyCode;
    }

    /**
     * @param string $town
     * 乡镇，门店四级地址
     * Required: false
     * Example Value: 
     */
    private $town;

    /**
     * @param string $town
     * 乡镇，门店四级地址
     * Example Value: 
     */
    public function setTown($town)
    {
        $this->town             = $town;
        $this->apiParas["town"]  = $town;
    }

    public function getTown()
    {
        return $this->town;
    }

    /**
     * @param int $townCode
     * 乡镇，门店四级地址编码（京东编码）
     * Required: false
     * Example Value: 
     */
    private $townCode;

    /**
     * @param int $townCode
     * 乡镇，门店四级地址编码（京东编码）
     * Example Value: 
     */
    public function setTownCode($townCode)
    {
        $this->townCode             = $townCode;
        $this->apiParas["townCode"]  = $townCode;
    }

    public function getTownCode()
    {
        return $this->townCode;
    }

    /**
     * @param string $storeContactName
     * 门店联系人姓名
     * Required: false
     * Example Value: 
     */
    private $storeContactName;

    /**
     * @param string $storeContactName
     * 门店联系人姓名
     * Example Value: 
     */
    public function setStoreContactName($storeContactName)
    {
        $this->storeContactName             = $storeContactName;
        $this->apiParas["storeContactName"]  = $storeContactName;
    }

    public function getStoreContactName()
    {
        return $this->storeContactName;
    }

    /**
     * @param string $storeContactPhone
     * 门店联系人电话
     * Required: false
     * Example Value: 
     */
    private $storeContactPhone;

    /**
     * @param string $storeContactPhone
     * 门店联系人电话
     * Example Value: 
     */
    public function setStoreContactPhone($storeContactPhone)
    {
        $this->storeContactPhone             = $storeContactPhone;
        $this->apiParas["storeContactPhone"]  = $storeContactPhone;
    }

    public function getStoreContactPhone()
    {
        return $this->storeContactPhone;
    }

    /**
     * @param string $storeContactMail
     * 门店联系人邮箱
     * Required: false
     * Example Value: 
     */
    private $storeContactMail;

    /**
     * @param string $storeContactMail
     * 门店联系人邮箱
     * Example Value: 
     */
    public function setStoreContactMail($storeContactMail)
    {
        $this->storeContactMail             = $storeContactMail;
        $this->apiParas["storeContactMail"]  = $storeContactMail;
    }

    public function getStoreContactMail()
    {
        return $this->storeContactMail;
    }

    /**
     * @param int $coverage
     * 门店配送范围
     * Required: false
     * Example Value: 
     */
    private $coverage;

    /**
     * @param int $coverage
     * 门店配送范围
     * Example Value: 
     */
    public function setCoverage($coverage)
    {
        $this->coverage             = $coverage;
        $this->apiParas["coverage"]  = $coverage;
    }

    public function getCoverage()
    {
        return $this->coverage;
    }

    /**
     * @param string $companyUnitCreditCode
     * 统一社会信用代码
     * Required: false
     * Example Value: 
     */
    private $companyUnitCreditCode;

    /**
     * @param string $companyUnitCreditCode
     * 统一社会信用代码
     * Example Value: 
     */
    public function setCompanyUnitCreditCode($companyUnitCreditCode)
    {
        $this->companyUnitCreditCode             = $companyUnitCreditCode;
        $this->apiParas["companyUnitCreditCode"]  = $companyUnitCreditCode;
    }

    public function getCompanyUnitCreditCode()
    {
        return $this->companyUnitCreditCode;
    }

    /**
     * @param int $longitude
     * 经度
     * Required: true
     * Example Value: 
     */
    private $longitude;

    /**
     * @param int $longitude
     * 经度
     * Example Value: 
     */
    public function setLongitude($longitude)
    {
        $this->longitude             = $longitude;
        $this->apiParas["longitude"]  = $longitude;
    }

    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param int $latitude
     * 纬度
     * Required: true
     * Example Value: 
     */
    private $latitude;

    /**
     * @param int $latitude
     * 纬度
     * Example Value: 
     */
    public function setLatitude($latitude)
    {
        $this->latitude             = $latitude;
        $this->apiParas["latitude"]  = $latitude;
    }

    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param int $isValid
     * 店铺有效标识
     * Required: true
     * Example Value: 
     */
    private $isValid;

    /**
     * @param int $isValid
     * 店铺有效标识
     * Example Value: 
     */
    public function setIsValid($isValid)
    {
        $this->isValid             = $isValid;
        $this->apiParas["isValid"]  = $isValid;
    }

    public function getIsValid()
    {
        return $this->isValid;
    }

    /**
     * @param int $deliveryFlag
     * 支持门店发货标识
     * Required: true
     * Example Value: 
     */
    private $deliveryFlag;

    /**
     * @param int $deliveryFlag
     * 支持门店发货标识
     * Example Value: 
     */
    public function setDeliveryFlag($deliveryFlag)
    {
        $this->deliveryFlag             = $deliveryFlag;
        $this->apiParas["deliveryFlag"]  = $deliveryFlag;
    }

    public function getDeliveryFlag()
    {
        return $this->deliveryFlag;
    }

    /**
     * @param int $pickupFlag
     * 支持上门自提标识
     * Required: true
     * Example Value: 
     */
    private $pickupFlag;

    /**
     * @param int $pickupFlag
     * 支持上门自提标识
     * Example Value: 
     */
    public function setPickupFlag($pickupFlag)
    {
        $this->pickupFlag             = $pickupFlag;
        $this->apiParas["pickupFlag"]  = $pickupFlag;
    }

    public function getPickupFlag()
    {
        return $this->pickupFlag;
    }

}