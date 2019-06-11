<?php

namespca Lostinfo\JosOpenApi;

/**
 * 修改或新增免费经纪人数据
 * 京东房产-京东房产
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=253&apiId=2749&apiName=jingdong.ers.fang.addOrUpdateFreeBroker
 * Class ErsFangAddOrUpdateFreeBroker
 * @package Jd\request
 */
class ErsFangAddOrUpdateFreeBroker
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ers.fang.addOrUpdateFreeBroker";
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
     * @param int $channelId
     * 来源渠道id
     * Required: true
     * Example Value: 
     */
    private $channelId;

    /**
     * @param int $channelId
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
     * @param string $name
     * 经纪人名称
     * Required: true
     * Example Value: 
     */
    private $name;

    /**
     * @param string $name
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
     * @param int $quotedPrice
     * 经纪人报价（万元/套）
     * Required: true
     * Example Value: 
     */
    private $quotedPrice;

    /**
     * @param int $quotedPrice
     * 经纪人报价（万元/套）
     * Example Value: 
     */
    public function setQuotedPrice($quotedPrice)
    {
        $this->quotedPrice             = $quotedPrice;
        $this->apiParas["quotedPrice"]  = $quotedPrice;
    }

    public function getQuotedPrice()
    {
        return $this->quotedPrice;
    }

    /**
     * @param  $recommend
     * 推荐经纪人（0 否， 1 是）
     * Required: true
     * Example Value: 
     */
    private $recommend;

    /**
     * @param  $recommend
     * 推荐经纪人（0 否， 1 是）
     * Example Value: 
     */
    public function setRecommend($recommend)
    {
        $this->recommend             = $recommend;
        $this->apiParas["recommend"]  = $recommend;
    }

    public function getRecommend()
    {
        return $this->recommend;
    }

    /**
     * @param string $extensionNum
     * 分机号
     * Required: false
     * Example Value: 
     */
    private $extensionNum;

    /**
     * @param string $extensionNum
     * 分机号
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
     * @param string $extensionPhone
     * 分机电话号码
     * Required: false
     * Example Value: 
     */
    private $extensionPhone;

    /**
     * @param string $extensionPhone
     * 分机电话号码
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
     * @param int $phoneNum
     * 电话
     * Required: false
     * Example Value: 
     */
    private $phoneNum;

    /**
     * @param int $phoneNum
     * 电话
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
     * @param string $headImg
     * 头像url（转成京东图片url）
     * Required: false
     * Example Value: 
     */
    private $headImg;

    /**
     * @param string $headImg
     * 头像url（转成京东图片url）
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
     * @param string $cityName
     * 城市名称
     * Required: true
     * Example Value: 
     */
    private $cityName;

    /**
     * @param string $cityName
     * 城市名称
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
     * @param string $areaName
     * 地区名称
     * Required: false
     * Example Value: 
     */
    private $areaName;

    /**
     * @param string $areaName
     * 地区名称
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
     * @param string $company
     * 公司
     * Required: true
     * Example Value: 
     */
    private $company;

    /**
     * @param string $company
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
     * @param int $tradingAreaId
     * 来源商圈id
     * Required: false
     * Example Value: 
     */
    private $tradingAreaId;

    /**
     * @param int $tradingAreaId
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
     * @param string $shop
     * 门店
     * Required: false
     * Example Value: 
     */
    private $shop;

    /**
     * @param string $shop
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
     * @param string $declaration
     * 卖方宣言
     * Required: false
     * Example Value: 
     */
    private $declaration;

    /**
     * @param string $declaration
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
     * @param string $speciality
     * 职业特长
     * Required: false
     * Example Value: 
     */
    private $speciality;

    /**
     * @param string $speciality
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
     * @param string $seniority
     * 服务年限
     * Required: false
     * Example Value: 
     */
    private $seniority;

    /**
     * @param string $seniority
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
     * @param int $workHours
     * 工作时间
     * Required: false
     * Example Value: 
     */
    private $workHours;

    /**
     * @param int $workHours
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
     * @param string $workingExperience
     * 从业经历
     * Required: false
     * Example Value: 
     */
    private $workingExperience;

    /**
     * @param string $workingExperience
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
     * @param int $cityCode
     * 城市code
     * Required: true
     * Example Value: 
     */
    private $cityCode;

    /**
     * @param int $cityCode
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
     * @param int $sourceId
     * 来源主键
     * Required: true
     * Example Value: 
     */
    private $sourceId;

    /**
     * @param int $sourceId
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

    /**
     * @param int $pSourceId
     * 来源房源id
     * Required: true
     * Example Value: 
     */
    private $pSourceId;

    /**
     * @param int $pSourceId
     * 来源房源id
     * Example Value: 
     */
    public function setPSourceId($pSourceId)
    {
        $this->pSourceId             = $pSourceId;
        $this->apiParas["pSourceId"]  = $pSourceId;
    }

    public function getPSourceId()
    {
        return $this->pSourceId;
    }

}