<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 修改或新增小区数据
 * 京东房产-京东房产
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=253&apiId=2651&apiName=jingdong.ers.fang.addOrUpdatePlot
 * Class ErsFangAddOrUpdatePlot
 * @package Jd\request
 */
class ErsFangAddOrUpdatePlot
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ers.fang.addOrUpdatePlot";
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
     * @param int $areaCode
     * 城区code
     * Required: true
     * Example Value: 
     */
    private $areaCode;

    /**
     * @param int $areaCode
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
     * @param string $brokerIds
     * 传多个经纪人id 用逗号分隔
     * Required: false
     * Example Value: 
     */
    private $brokerIds;

    /**
     * @param string $brokerIds
     * 传多个经纪人id 用逗号分隔
     * Example Value: 
     */
    public function setBrokerIds($brokerIds)
    {
        $this->brokerIds             = $brokerIds;
        $this->apiParas["brokerIds"]  = $brokerIds;
    }

    public function getBrokerIds()
    {
        return $this->brokerIds;
    }

    /**
     * @param string $plotName
     * 小区名称
     * Required: true
     * Example Value: 
     */
    private $plotName;

    /**
     * @param string $plotName
     * 小区名称
     * Example Value: 
     */
    public function setPlotName($plotName)
    {
        $this->plotName             = $plotName;
        $this->apiParas["plotName"]  = $plotName;
    }

    public function getPlotName()
    {
        return $this->plotName;
    }

    /**
     * @param string $plotNickname
     * 小区别名
     * Required: false
     * Example Value: 
     */
    private $plotNickname;

    /**
     * @param string $plotNickname
     * 小区别名
     * Example Value: 
     */
    public function setPlotNickname($plotNickname)
    {
        $this->plotNickname             = $plotNickname;
        $this->apiParas["plotNickname"]  = $plotNickname;
    }

    public function getPlotNickname()
    {
        return $this->plotNickname;
    }

    /**
     * @param string $estateType
     * 物业类型（住宅：1，别墅：2，商业：3，商铺：4，写字楼：5，其他：10）
     * Required: true
     * Example Value: 
     */
    private $estateType;

    /**
     * @param string $estateType
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
     * @param string $buildYear
     * 建成年代
     * Required: false
     * Example Value: 
     */
    private $buildYear;

    /**
     * @param string $buildYear
     * 建成年代
     * Example Value: 
     */
    public function setBuildYear($buildYear)
    {
        $this->buildYear             = $buildYear;
        $this->apiParas["buildYear"]  = $buildYear;
    }

    public function getBuildYear()
    {
        return $this->buildYear;
    }

    /**
     * @param int $volumeRate
     * 容积率（保留四位小数）
     * Required: false
     * Example Value: 
     */
    private $volumeRate;

    /**
     * @param int $volumeRate
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
     * @param int $greenRate
     * 绿化率（保留四位小数）
     * Required: false
     * Example Value: 
     */
    private $greenRate;

    /**
     * @param int $greenRate
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
     * @param string $estateAmt
     * 物业费用
     * Required: false
     * Example Value: 
     */
    private $estateAmt;

    /**
     * @param string $estateAmt
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
     * @param string $estateCompany
     * 物业公司
     * Required: false
     * Example Value: 
     */
    private $estateCompany;

    /**
     * @param string $estateCompany
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
     * @param string $buildCompany
     * 开发商
     * Required: false
     * Example Value: 
     */
    private $buildCompany;

    /**
     * @param string $buildCompany
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
     * @param int $tradingAreaId
     * 商圈ID
     * Required: true
     * Example Value: 
     */
    private $tradingAreaId;

    /**
     * @param int $tradingAreaId
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
     * @param string $addressDes
     * 地址详细信息
     * Required: false
     * Example Value: 
     */
    private $addressDes;

    /**
     * @param string $addressDes
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
     * @param int $loopLineId
     * 环线
     * Required: false
     * Example Value: 
     */
    private $loopLineId;

    /**
     * @param int $loopLineId
     * 环线
     * Example Value: 
     */
    public function setLoopLineId($loopLineId)
    {
        $this->loopLineId             = $loopLineId;
        $this->apiParas["loopLineId"]  = $loopLineId;
    }

    public function getLoopLineId()
    {
        return $this->loopLineId;
    }

    /**
     * @param string $addressLat
     * 地址纬度
     * Required: true
     * Example Value: 
     */
    private $addressLat;

    /**
     * @param string $addressLat
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
     * @param string $addressLon
     * 地址经度
     * Required: true
     * Example Value: 
     */
    private $addressLon;

    /**
     * @param string $addressLon
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
     * @param string $buildType
     * 建筑类型 (小高层 1,高层 2,板楼 3,叠拼 4,花园洋房5 ,独栋 6,双拼 7,联排 8,塔楼 9,板塔结合 10,其他 20)
     * Required: false
     * Example Value: 
     */
    private $buildType;

    /**
     * @param string $buildType
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
     * @param int $estateHeating
     * 物业供暖(集中供暖 1,独立供暖 2,中央空调 3,无 0)
     * Required: false
     * Example Value: 
     */
    private $estateHeating;

    /**
     * @param int $estateHeating
     * 物业供暖(集中供暖 1,独立供暖 2,中央空调 3,无 0)
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
     * @param int $buildingNum
     * 楼栋总数
     * Required: false
     * Example Value: 
     */
    private $buildingNum;

    /**
     * @param int $buildingNum
     * 楼栋总数
     * Example Value: 
     */
    public function setBuildingNum($buildingNum)
    {
        $this->buildingNum             = $buildingNum;
        $this->apiParas["buildingNum"]  = $buildingNum;
    }

    public function getBuildingNum()
    {
        return $this->buildingNum;
    }

    /**
     * @param int $houseNum
     * 房屋数量
     * Required: false
     * Example Value: 
     */
    private $houseNum;

    /**
     * @param int $houseNum
     * 房屋数量
     * Example Value: 
     */
    public function setHouseNum($houseNum)
    {
        $this->houseNum             = $houseNum;
        $this->apiParas["houseNum"]  = $houseNum;
    }

    public function getHouseNum()
    {
        return $this->houseNum;
    }

    /**
     * @param int $totalArea
     * 总面积（单位㎡）
     * Required: false
     * Example Value: 
     */
    private $totalArea;

    /**
     * @param int $totalArea
     * 总面积（单位㎡）
     * Example Value: 
     */
    public function setTotalArea($totalArea)
    {
        $this->totalArea             = $totalArea;
        $this->apiParas["totalArea"]  = $totalArea;
    }

    public function getTotalArea()
    {
        return $this->totalArea;
    }

    /**
     * @param string $plotDes
     * 小区简介
     * Required: false
     * Example Value: 
     */
    private $plotDes;

    /**
     * @param string $plotDes
     * 小区简介
     * Example Value: 
     */
    public function setPlotDes($plotDes)
    {
        $this->plotDes             = $plotDes;
        $this->apiParas["plotDes"]  = $plotDes;
    }

    public function getPlotDes()
    {
        return $this->plotDes;
    }

    /**
     * @param int $parkingCount
     * 车位数
     * Required: false
     * Example Value: 
     */
    private $parkingCount;

    /**
     * @param int $parkingCount
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
     * @param int $parkingRate
     * 车位比例（保留四位小数）
     * Required: false
     * Example Value: 
     */
    private $parkingRate;

    /**
     * @param int $parkingRate
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
     * @param int $latLonType
     * 经纬度类型：1 百度经纬度， 2 高德经纬度， 3 腾讯经纬度
     * Required: true
     * Example Value: 
     */
    private $latLonType;

    /**
     * @param int $latLonType
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
     * @param string $extensionField
     * 扩展字段
     * Required: false
     * Example Value: 
     */
    private $extensionField;

    /**
     * @param string $extensionField
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