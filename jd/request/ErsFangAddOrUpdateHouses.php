<?php

namespace JD\request;

/**
 * 修改或新增楼盘数据
 * 京东房产-京东房产
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=253&apiId=2640&apiName=jingdong.ers.fang.addOrUpdateHouses
 * Class ErsFangAddOrUpdateHouses
 * @package Jd\request
 */
class ErsFangAddOrUpdateHouses
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ers.fang.addOrUpdateHouses";
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
     * @param Number $areaCode
     * 城区code
     * Required: true
     * Example Value: 
     */
    private $areaCode;

    /**
     * @param Number $areaCode
     * 城区code
     * Example Value: 
     */
    public function setAreaCode($areaCode)
    {
        $this->areaCode             = $areaCode;
        $this->apiParas["areaCode"]  = $areaCode;
    }

    public function getAreaCode()
    {
        return $this->areaCode;
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

    /**
     * @param String $housesName
     * 楼盘名称
     * Required: false
     * Example Value: 
     */
    private $housesName;

    /**
     * @param String $housesName
     * 楼盘名称
     * Example Value: 
     */
    public function setHousesName($housesName)
    {
        $this->housesName             = $housesName;
        $this->apiParas["housesName"]  = $housesName;
    }

    public function getHousesName()
    {
        return $this->housesName;
    }

    /**
     * @param String $housesNickname
     * 楼盘别名
     * Required: true
     * Example Value: 
     */
    private $housesNickname;

    /**
     * @param String $housesNickname
     * 楼盘别名
     * Example Value: 
     */
    public function setHousesNickname($housesNickname)
    {
        $this->housesNickname             = $housesNickname;
        $this->apiParas["housesNickname"]  = $housesNickname;
    }

    public function getHousesNickname()
    {
        return $this->housesNickname;
    }

    /**
     * @param String $estateType
     * 物业类型（住宅：1，别墅：2，商业：3，商铺：4，写字楼：5，其他：10）
     * Required: true
     * Example Value: 
     */
    private $estateType;

    /**
     * @param String $estateType
     * 物业类型（住宅：1，别墅：2，商业：3，商铺：4，写字楼：5，其他：10）
     * Example Value: 
     */
    public function setEstateType($estateType)
    {
        $this->estateType             = $estateType;
        $this->apiParas["estateType"]  = $estateType;
    }

    public function getEstateType()
    {
        return $this->estateType;
    }

    /**
     * @param String $complexLabels
     * 特色标签（多个以“,”分隔）
     * Required: true
     * Example Value: 
     */
    private $complexLabels;

    /**
     * @param String $complexLabels
     * 特色标签（多个以“,”分隔）
     * Example Value: 
     */
    public function setComplexLabels($complexLabels)
    {
        $this->complexLabels             = $complexLabels;
        $this->apiParas["complexLabels"]  = $complexLabels;
    }

    public function getComplexLabels()
    {
        return $this->complexLabels;
    }

    /**
     * @param Number $tradingAreaId
     * 商圈ID
     * Required: true
     * Example Value: 
     */
    private $tradingAreaId;

    /**
     * @param Number $tradingAreaId
     * 商圈ID
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
     * @param String $addressDes
     * 地址详细信息
     * Required: false
     * Example Value: 
     */
    private $addressDes;

    /**
     * @param String $addressDes
     * 地址详细信息
     * Example Value: 
     */
    public function setAddressDes($addressDes)
    {
        $this->addressDes             = $addressDes;
        $this->apiParas["addressDes"]  = $addressDes;
    }

    public function getAddressDes()
    {
        return $this->addressDes;
    }

    /**
     * @param String $addressLat
     * 地址纬度
     * Required: true
     * Example Value: 
     */
    private $addressLat;

    /**
     * @param String $addressLat
     * 地址纬度
     * Example Value: 
     */
    public function setAddressLat($addressLat)
    {
        $this->addressLat             = $addressLat;
        $this->apiParas["addressLat"]  = $addressLat;
    }

    public function getAddressLat()
    {
        return $this->addressLat;
    }

    /**
     * @param String $addressLon
     * 地址经度
     * Required: true
     * Example Value: 
     */
    private $addressLon;

    /**
     * @param String $addressLon
     * 地址经度
     * Example Value: 
     */
    public function setAddressLon($addressLon)
    {
        $this->addressLon             = $addressLon;
        $this->apiParas["addressLon"]  = $addressLon;
    }

    public function getAddressLon()
    {
        return $this->addressLon;
    }

    /**
     * @param Number $parkingCount
     * 车位数
     * Required: false
     * Example Value: 
     */
    private $parkingCount;

    /**
     * @param Number $parkingCount
     * 车位数
     * Example Value: 
     */
    public function setParkingCount($parkingCount)
    {
        $this->parkingCount             = $parkingCount;
        $this->apiParas["parkingCount"]  = $parkingCount;
    }

    public function getParkingCount()
    {
        return $this->parkingCount;
    }

    /**
     * @param Number $parkingRate
     * 车位比例（保留四位小数）
     * Required: false
     * Example Value: 
     */
    private $parkingRate;

    /**
     * @param Number $parkingRate
     * 车位比例（保留四位小数）
     * Example Value: 
     */
    public function setParkingRate($parkingRate)
    {
        $this->parkingRate             = $parkingRate;
        $this->apiParas["parkingRate"]  = $parkingRate;
    }

    public function getParkingRate()
    {
        return $this->parkingRate;
    }

    /**
     * @param Number $propertyYear
     * 产权年限
     * Required: false
     * Example Value: 
     */
    private $propertyYear;

    /**
     * @param Number $propertyYear
     * 产权年限
     * Example Value: 
     */
    public function setPropertyYear($propertyYear)
    {
        $this->propertyYear             = $propertyYear;
        $this->apiParas["propertyYear"]  = $propertyYear;
    }

    public function getPropertyYear()
    {
        return $this->propertyYear;
    }

    /**
     * @param String $hotLine
     * 电话
     * Required: false
     * Example Value: 
     */
    private $hotLine;

    /**
     * @param String $hotLine
     * 电话
     * Example Value: 
     */
    public function setHotLine($hotLine)
    {
        $this->hotLine             = $hotLine;
        $this->apiParas["hotLine"]  = $hotLine;
    }

    public function getHotLine()
    {
        return $this->hotLine;
    }

    /**
     * @param  $saleStatus
     * 销售状态(待售:1, 在售:2，售完: 3)
     * Required: false
     * Example Value: 
     */
    private $saleStatus;

    /**
     * @param  $saleStatus
     * 销售状态(待售:1, 在售:2，售完: 3)
     * Example Value: 
     */
    public function setSaleStatus($saleStatus)
    {
        $this->saleStatus             = $saleStatus;
        $this->apiParas["saleStatus"]  = $saleStatus;
    }

    public function getSaleStatus()
    {
        return $this->saleStatus;
    }

    /**
     * @param String $estateAmt
     * 物业费用
     * Required: false
     * Example Value: 
     */
    private $estateAmt;

    /**
     * @param String $estateAmt
     * 物业费用
     * Example Value: 
     */
    public function setEstateAmt($estateAmt)
    {
        $this->estateAmt             = $estateAmt;
        $this->apiParas["estateAmt"]  = $estateAmt;
    }

    public function getEstateAmt()
    {
        return $this->estateAmt;
    }

    /**
     * @param String $estateCompany
     * 物业公司
     * Required: false
     * Example Value: 
     */
    private $estateCompany;

    /**
     * @param String $estateCompany
     * 物业公司
     * Example Value: 
     */
    public function setEstateCompany($estateCompany)
    {
        $this->estateCompany             = $estateCompany;
        $this->apiParas["estateCompany"]  = $estateCompany;
    }

    public function getEstateCompany()
    {
        return $this->estateCompany;
    }

    /**
     * @param String $buildCompany
     * 开发商
     * Required: false
     * Example Value: 
     */
    private $buildCompany;

    /**
     * @param String $buildCompany
     * 开发商
     * Example Value: 
     */
    public function setBuildCompany($buildCompany)
    {
        $this->buildCompany             = $buildCompany;
        $this->apiParas["buildCompany"]  = $buildCompany;
    }

    public function getBuildCompany()
    {
        return $this->buildCompany;
    }

    /**
     * @param String $volumeRate
     * 容积率（保留四位小数）
     * Required: false
     * Example Value: 
     */
    private $volumeRate;

    /**
     * @param String $volumeRate
     * 容积率（保留四位小数）
     * Example Value: 
     */
    public function setVolumeRate($volumeRate)
    {
        $this->volumeRate             = $volumeRate;
        $this->apiParas["volumeRate"]  = $volumeRate;
    }

    public function getVolumeRate()
    {
        return $this->volumeRate;
    }

    /**
     * @param String $greenRate
     * 绿化率（保留四位小数）
     * Required: false
     * Example Value: 
     */
    private $greenRate;

    /**
     * @param String $greenRate
     * 绿化率（保留四位小数）
     * Example Value: 
     */
    public function setGreenRate($greenRate)
    {
        $this->greenRate             = $greenRate;
        $this->apiParas["greenRate"]  = $greenRate;
    }

    public function getGreenRate()
    {
        return $this->greenRate;
    }

    /**
     * @param Date $firstSaletime
     * 最早开盘时间
     * Required: false
     * Example Value: 
     */
    private $firstSaletime;

    /**
     * @param Date $firstSaletime
     * 最早开盘时间
     * Example Value: 
     */
    public function setFirstSaletime($firstSaletime)
    {
        $this->firstSaletime             = $firstSaletime;
        $this->apiParas["firstSaletime"]  = $firstSaletime;
    }

    public function getFirstSaletime()
    {
        return $this->firstSaletime;
    }

    /**
     * @param Date $firstnewSaletime
     * 最新开盘时间
     * Required: false
     * Example Value: 
     */
    private $firstnewSaletime;

    /**
     * @param Date $firstnewSaletime
     * 最新开盘时间
     * Example Value: 
     */
    public function setFirstnewSaletime($firstnewSaletime)
    {
        $this->firstnewSaletime             = $firstnewSaletime;
        $this->apiParas["firstnewSaletime"]  = $firstnewSaletime;
    }

    public function getFirstnewSaletime()
    {
        return $this->firstnewSaletime;
    }

    /**
     * @param Date $firstDelivertime
     * 最早交房时间
     * Required: false
     * Example Value: 
     */
    private $firstDelivertime;

    /**
     * @param Date $firstDelivertime
     * 最早交房时间
     * Example Value: 
     */
    public function setFirstDelivertime($firstDelivertime)
    {
        $this->firstDelivertime             = $firstDelivertime;
        $this->apiParas["firstDelivertime"]  = $firstDelivertime;
    }

    public function getFirstDelivertime()
    {
        return $this->firstDelivertime;
    }

    /**
     * @param String $complexDesc
     * 项目简介
     * Required: false
     * Example Value: 
     */
    private $complexDesc;

    /**
     * @param String $complexDesc
     * 项目简介
     * Example Value: 
     */
    public function setComplexDesc($complexDesc)
    {
        $this->complexDesc             = $complexDesc;
        $this->apiParas["complexDesc"]  = $complexDesc;
    }

    public function getComplexDesc()
    {
        return $this->complexDesc;
    }

    /**
     * @param String $buildType
     * 建筑类型 (小高层 1,高层 2,板楼 3,叠拼 4,花园洋房5 ,独栋 6,双拼 7,联排 8,塔楼 9,板塔结合 10,其他 20)
     * Required: false
     * Example Value: 
     */
    private $buildType;

    /**
     * @param String $buildType
     * 建筑类型 (小高层 1,高层 2,板楼 3,叠拼 4,花园洋房5 ,独栋 6,双拼 7,联排 8,塔楼 9,板塔结合 10,其他 20)
     * Example Value: 
     */
    public function setBuildType($buildType)
    {
        $this->buildType             = $buildType;
        $this->apiParas["buildType"]  = $buildType;
    }

    public function getBuildType()
    {
        return $this->buildType;
    }

    /**
     * @param  $decoration
     * 装修状态(毛坯:1，精装:2，简装:3)
     * Required: false
     * Example Value: 
     */
    private $decoration;

    /**
     * @param  $decoration
     * 装修状态(毛坯:1，精装:2，简装:3)
     * Example Value: 
     */
    public function setDecoration($decoration)
    {
        $this->decoration             = $decoration;
        $this->apiParas["decoration"]  = $decoration;
    }

    public function getDecoration()
    {
        return $this->decoration;
    }

    /**
     * @param String $license
     * 预售许可证号（多个按''#''分割）
     * Required: false
     * Example Value: 
     */
    private $license;

    /**
     * @param String $license
     * 预售许可证号（多个按''#''分割）
     * Example Value: 
     */
    public function setLicense($license)
    {
        $this->license             = $license;
        $this->apiParas["license"]  = $license;
    }

    public function getLicense()
    {
        return $this->license;
    }

    /**
     * @param  $estateWater
     * 供水类型（商水：1，民水：2，市政：3，无：）
     * Required: false
     * Example Value: 
     */
    private $estateWater;

    /**
     * @param  $estateWater
     * 供水类型（商水：1，民水：2，市政：3，无：）
     * Example Value: 
     */
    public function setEstateWater($estateWater)
    {
        $this->estateWater             = $estateWater;
        $this->apiParas["estateWater"]  = $estateWater;
    }

    public function getEstateWater()
    {
        return $this->estateWater;
    }

    /**
     * @param  $estateElectric
     * 供电类型（商电：1，民电：2，市政：3，无：0）
     * Required: false
     * Example Value: 
     */
    private $estateElectric;

    /**
     * @param  $estateElectric
     * 供电类型（商电：1，民电：2，市政：3，无：0）
     * Example Value: 
     */
    public function setEstateElectric($estateElectric)
    {
        $this->estateElectric             = $estateElectric;
        $this->apiParas["estateElectric"]  = $estateElectric;
    }

    public function getEstateElectric()
    {
        return $this->estateElectric;
    }

    /**
     * @param  $estateHeating
     * 物业供暖（集中供暖：1，自供暖：2，中央空调：3，无：0）
     * Required: false
     * Example Value: 
     */
    private $estateHeating;

    /**
     * @param  $estateHeating
     * 物业供暖（集中供暖：1，自供暖：2，中央空调：3，无：0）
     * Example Value: 
     */
    public function setEstateHeating($estateHeating)
    {
        $this->estateHeating             = $estateHeating;
        $this->apiParas["estateHeating"]  = $estateHeating;
    }

    public function getEstateHeating()
    {
        return $this->estateHeating;
    }

    /**
     * @param Number $latLonType
     * 经纬度类型：1 百度经纬度， 2 高德经纬度， 3 腾讯经纬度
     * Required: true
     * Example Value: 
     */
    private $latLonType;

    /**
     * @param Number $latLonType
     * 经纬度类型：1 百度经纬度， 2 高德经纬度， 3 腾讯经纬度
     * Example Value: 
     */
    public function setLatLonType($latLonType)
    {
        $this->latLonType             = $latLonType;
        $this->apiParas["latLonType"]  = $latLonType;
    }

    public function getLatLonType()
    {
        return $this->latLonType;
    }

    /**
     * @param String $extensionField
     * 扩展字段
     * Required: false
     * Example Value: 
     */
    private $extensionField;

    /**
     * @param String $extensionField
     * 扩展字段
     * Example Value: 
     */
    public function setExtensionField($extensionField)
    {
        $this->extensionField             = $extensionField;
        $this->apiParas["extensionField"]  = $extensionField;
    }

    public function getExtensionField()
    {
        return $this->extensionField;
    }

    /**
     * @param  $ifUse
     * 是否有效（0无效 1有效）
     * Required: true
     * Example Value: 
     */
    private $ifUse;

    /**
     * @param  $ifUse
     * 是否有效（0无效 1有效）
     * Example Value: 
     */
    public function setIfUse($ifUse)
    {
        $this->ifUse             = $ifUse;
        $this->apiParas["ifUse"]  = $ifUse;
    }

    public function getIfUse()
    {
        return $this->ifUse;
    }

}