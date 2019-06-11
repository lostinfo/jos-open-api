<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 小区信息下传接口
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=2032&apiName=jingdong.eclp.master.receiveCommunity
 * Class EclpMasterReceiveCommunity
 * @package Jd\request
 */
class EclpMasterReceiveCommunity
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.master.receiveCommunity";
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
     * @param string $communityNo
     * 小区编号
     * Required: true
     * Example Value: 
     */
    private $communityNo;

    /**
     * @param string $communityNo
     * 小区编号
     * Example Value: 
     */
    public function setCommunityNo($communityNo)
    {
        $this->communityNo             = $communityNo;
        $this->apiParas["communityNo"]  = $communityNo;
    }

    public function getCommunityNo()
    {
        return $this->communityNo;
    }

    /**
     * @param string $communityName
     * 小区名称
     * Required: true
     * Example Value: 
     */
    private $communityName;

    /**
     * @param string $communityName
     * 小区名称
     * Example Value: 
     */
    public function setCommunityName($communityName)
    {
        $this->communityName             = $communityName;
        $this->apiParas["communityName"]  = $communityName;
    }

    public function getCommunityName()
    {
        return $this->communityName;
    }

    /**
     * @param string $country
     * 国家
     * Required: false
     * Example Value: 
     */
    private $country;

    /**
     * @param string $country
     * 国家
     * Example Value: 
     */
    public function setCountry($country)
    {
        $this->country             = $country;
        $this->apiParas["country"]  = $country;
    }

    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $province
     * 省份
     * Required: false
     * Example Value: 
     */
    private $province;

    /**
     * @param string $province
     * 省份
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
     * @param string $county
     * 区/县
     * Required: false
     * Example Value: 
     */
    private $county;

    /**
     * @param string $county
     * 区/县
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
     * @param string $street
     * 街道
     * Required: false
     * Example Value: 
     */
    private $street;

    /**
     * @param string $street
     * 街道
     * Example Value: 
     */
    public function setStreet($street)
    {
        $this->street             = $street;
        $this->apiParas["street"]  = $street;
    }

    public function getStreet()
    {
        return $this->street;
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
     * @param string $routeNo
     * 线路
     * Required: false
     * Example Value: 
     */
    private $routeNo;

    /**
     * @param string $routeNo
     * 线路
     * Example Value: 
     */
    public function setRouteNo($routeNo)
    {
        $this->routeNo             = $routeNo;
        $this->apiParas["routeNo"]  = $routeNo;
    }

    public function getRouteNo()
    {
        return $this->routeNo;
    }

    /**
     * @param string $building
     * 楼栋
     * Required: false
     * Example Value: 
     */
    private $building;

    /**
     * @param string $building
     * 楼栋
     * Example Value: 
     */
    public function setBuilding($building)
    {
        $this->building             = $building;
        $this->apiParas["building"]  = $building;
    }

    public function getBuilding()
    {
        return $this->building;
    }

    /**
     * @param string $unit
     * 单元
     * Required: false
     * Example Value: 
     */
    private $unit;

    /**
     * @param string $unit
     * 单元
     * Example Value: 
     */
    public function setUnit($unit)
    {
        $this->unit             = $unit;
        $this->apiParas["unit"]  = $unit;
    }

    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * @param string $floor
     * 层
     * Required: false
     * Example Value: 
     */
    private $floor;

    /**
     * @param string $floor
     * 层
     * Example Value: 
     */
    public function setFloor($floor)
    {
        $this->floor             = $floor;
        $this->apiParas["floor"]  = $floor;
    }

    public function getFloor()
    {
        return $this->floor;
    }

    /**
     * @param string $room
     * 门牌
     * Required: false
     * Example Value: 
     */
    private $room;

    /**
     * @param string $room
     * 门牌
     * Example Value: 
     */
    public function setRoom($room)
    {
        $this->room             = $room;
        $this->apiParas["room"]  = $room;
    }

    public function getRoom()
    {
        return $this->room;
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
     * @param string $phone
     * 电话
     * Required: false
     * Example Value: 
     */
    private $phone;

    /**
     * @param string $phone
     * 电话
     * Example Value: 
     */
    public function setPhone($phone)
    {
        $this->phone             = $phone;
        $this->apiParas["phone"]  = $phone;
    }

    public function getPhone()
    {
        return $this->phone;
    }

}