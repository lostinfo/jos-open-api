<?php

namespace JD\request;

/**
 * 修改或新增经纪人数据
 * 京东房产-京东房产
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=253&apiId=2624&apiName=jingdong.ers.fang.addOrUpdateBroker
 * Class ErsFangAddOrUpdateBroker
 * @package Jd\request
 */
class ErsFangAddOrUpdateBroker
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ers.fang.addOrUpdateBroker";
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
     * @param Number $channelId
     * 来源渠道id
     * Required: true
     * Example Value: 
     */
    private $channelId;

    /**
     * @param Number $channelId
     * 来源渠道id
     * Example Value: 
     */
    public function setChannelId($channelId)
    {
        $this->channelId             = $channelId;
        $this->apiParas["channelId"]  = $channelId;
    }

    public function getChannelId()
    {
        return $this->channelId;
    }

    /**
     * @param String $name
     * 经纪人名称
     * Required: true
     * Example Value: 
     */
    private $name;

    /**
     * @param String $name
     * 经纪人名称
     * Example Value: 
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
     * @param String $extensionNum
     * 400分机号
     * Required: false
     * Example Value: 
     */
    private $extensionNum;

    /**
     * @param String $extensionNum
     * 400分机号
     * Example Value: 
     */
    public function setExtensionNum($extensionNum)
    {
        $this->extensionNum             = $extensionNum;
        $this->apiParas["extensionNum"]  = $extensionNum;
    }

    public function getExtensionNum()
    {
        return $this->extensionNum;
    }

    /**
     * @param String $extensionPhone
     * 400主机号
     * Required: false
     * Example Value: 
     */
    private $extensionPhone;

    /**
     * @param String $extensionPhone
     * 400主机号
     * Example Value: 
     */
    public function setExtensionPhone($extensionPhone)
    {
        $this->extensionPhone             = $extensionPhone;
        $this->apiParas["extensionPhone"]  = $extensionPhone;
    }

    public function getExtensionPhone()
    {
        return $this->extensionPhone;
    }

    /**
     * @param Number $phoneNum
     * 手机号码
     * Required: false
     * Example Value: 
     */
    private $phoneNum;

    /**
     * @param Number $phoneNum
     * 手机号码
     * Example Value: 
     */
    public function setPhoneNum($phoneNum)
    {
        $this->phoneNum             = $phoneNum;
        $this->apiParas["phoneNum"]  = $phoneNum;
    }

    public function getPhoneNum()
    {
        return $this->phoneNum;
    }

    /**
     * @param String $headImg
     * 头像（转换成京东头衔url）
     * Required: false
     * Example Value: 
     */
    private $headImg;

    /**
     * @param String $headImg
     * 头像（转换成京东头衔url）
     * Example Value: 
     */
    public function setHeadImg($headImg)
    {
        $this->headImg             = $headImg;
        $this->apiParas["headImg"]  = $headImg;
    }

    public function getHeadImg()
    {
        return $this->headImg;
    }

    /**
     * @param String $infoCard
     * 信息卡
     * Required: false
     * Example Value: 
     */
    private $infoCard;

    /**
     * @param String $infoCard
     * 信息卡
     * Example Value: 
     */
    public function setInfoCard($infoCard)
    {
        $this->infoCard             = $infoCard;
        $this->apiParas["infoCard"]  = $infoCard;
    }

    public function getInfoCard()
    {
        return $this->infoCard;
    }

    /**
     * @param String $businessLicense
     * 营业执照
     * Required: false
     * Example Value: 
     */
    private $businessLicense;

    /**
     * @param String $businessLicense
     * 营业执照
     * Example Value: 
     */
    public function setBusinessLicense($businessLicense)
    {
        $this->businessLicense             = $businessLicense;
        $this->apiParas["businessLicense"]  = $businessLicense;
    }

    public function getBusinessLicense()
    {
        return $this->businessLicense;
    }

    /**
     * @param String $cityName
     * 城市
     * Required: true
     * Example Value: 
     */
    private $cityName;

    /**
     * @param String $cityName
     * 城市
     * Example Value: 
     */
    public function setCityName($cityName)
    {
        $this->cityName             = $cityName;
        $this->apiParas["cityName"]  = $cityName;
    }

    public function getCityName()
    {
        return $this->cityName;
    }

    /**
     * @param String $areaName
     * 区域
     * Required: false
     * Example Value: 
     */
    private $areaName;

    /**
     * @param String $areaName
     * 区域
     * Example Value: 
     */
    public function setAreaName($areaName)
    {
        $this->areaName             = $areaName;
        $this->apiParas["areaName"]  = $areaName;
    }

    public function getAreaName()
    {
        return $this->areaName;
    }

    /**
     * @param String $company
     * 公司
     * Required: false
     * Example Value: 
     */
    private $company;

    /**
     * @param String $company
     * 公司
     * Example Value: 
     */
    public function setCompany($company)
    {
        $this->company             = $company;
        $this->apiParas["company"]  = $company;
    }

    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param Number $tradingAreaId
     * 来源商圈id
     * Required: false
     * Example Value: 
     */
    private $tradingAreaId;

    /**
     * @param Number $tradingAreaId
     * 来源商圈id
     * Example Value: 
     */
    public function setTradingAreaId($tradingAreaId)
    {
        $this->tradingAreaId             = $tradingAreaId;
        $this->apiParas["tradingAreaId"]  = $tradingAreaId;
    }

    public function getTradingAreaId()
    {
        return $this->tradingAreaId;
    }

    /**
     * @param String $shop
     * 门店
     * Required: false
     * Example Value: 
     */
    private $shop;

    /**
     * @param String $shop
     * 门店
     * Example Value: 
     */
    public function setShop($shop)
    {
        $this->shop             = $shop;
        $this->apiParas["shop"]  = $shop;
    }

    public function getShop()
    {
        return $this->shop;
    }

    /**
     * @param String $declaration
     * 卖方宣言
     * Required: false
     * Example Value: 
     */
    private $declaration;

    /**
     * @param String $declaration
     * 卖方宣言
     * Example Value: 
     */
    public function setDeclaration($declaration)
    {
        $this->declaration             = $declaration;
        $this->apiParas["declaration"]  = $declaration;
    }

    public function getDeclaration()
    {
        return $this->declaration;
    }

    /**
     * @param String $speciality
     * 职业特长
     * Required: false
     * Example Value: 
     */
    private $speciality;

    /**
     * @param String $speciality
     * 职业特长
     * Example Value: 
     */
    public function setSpeciality($speciality)
    {
        $this->speciality             = $speciality;
        $this->apiParas["speciality"]  = $speciality;
    }

    public function getSpeciality()
    {
        return $this->speciality;
    }

    /**
     * @param String $seniority
     * 服务年限
     * Required: false
     * Example Value: 
     */
    private $seniority;

    /**
     * @param String $seniority
     * 服务年限
     * Example Value: 
     */
    public function setSeniority($seniority)
    {
        $this->seniority             = $seniority;
        $this->apiParas["seniority"]  = $seniority;
    }

    public function getSeniority()
    {
        return $this->seniority;
    }

    /**
     * @param Number $workHours
     * 工作时间
     * Required: false
     * Example Value: 
     */
    private $workHours;

    /**
     * @param Number $workHours
     * 工作时间
     * Example Value: 
     */
    public function setWorkHours($workHours)
    {
        $this->workHours             = $workHours;
        $this->apiParas["workHours"]  = $workHours;
    }

    public function getWorkHours()
    {
        return $this->workHours;
    }

    /**
     * @param String $workingExperience
     * 从业经历
     * Required: false
     * Example Value: 
     */
    private $workingExperience;

    /**
     * @param String $workingExperience
     * 从业经历
     * Example Value: 
     */
    public function setWorkingExperience($workingExperience)
    {
        $this->workingExperience             = $workingExperience;
        $this->apiParas["workingExperience"]  = $workingExperience;
    }

    public function getWorkingExperience()
    {
        return $this->workingExperience;
    }

    /**
     * @param  $brokerStatus
     * 经纪人状态（0 无效， 1 有效  用于判定经纪人是否展示）
     * Required: true
     * Example Value: 
     */
    private $brokerStatus;

    /**
     * @param  $brokerStatus
     * 经纪人状态（0 无效， 1 有效  用于判定经纪人是否展示）
     * Example Value: 
     */
    public function setBrokerStatus($brokerStatus)
    {
        $this->brokerStatus             = $brokerStatus;
        $this->apiParas["brokerStatus"]  = $brokerStatus;
    }

    public function getBrokerStatus()
    {
        return $this->brokerStatus;
    }

    /**
     * @param Number $cityCode
     * 城市code
     * Required: true
     * Example Value: 
     */
    private $cityCode;

    /**
     * @param Number $cityCode
     * 城市code
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
     * @param Number $sourceId
     * 来源主键
     * Required: true
     * Example Value: 
     */
    private $sourceId;

    /**
     * @param Number $sourceId
     * 来源主键
     * Example Value: 
     */
    public function setSourceId($sourceId)
    {
        $this->sourceId             = $sourceId;
        $this->apiParas["sourceId"]  = $sourceId;
    }

    public function getSourceId()
    {
        return $this->sourceId;
    }

}