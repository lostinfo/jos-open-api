<?php

namespace JD\request;

/**
 * 新增门店
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=3428&apiName=jingdong.eclp.master.insertStoreInfo
 * Class EclpMasterInsertStoreInfo
 * @package Jd\request
 */
class EclpMasterInsertStoreInfo
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.master.insertStoreInfo";
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
     * @param String $sellerNo
     * 商家编码
     * Required: true
     * Example Value: 
     */
    private $sellerNo;

    /**
     * @param String $sellerNo
     * 商家编码
     * Example Value: 
     */
    public function setSellerNo($sellerNo)
    {
        $this->sellerNo             = $sellerNo;
        $this->apiParas["sellerNo"]  = $sellerNo;
    }

    public function getSellerNo()
    {
        return $this->sellerNo;
    }

    /**
     * @param String $storeName
     * 门店名称
     * Required: true
     * Example Value: 
     */
    private $storeName;

    /**
     * @param String $storeName
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
     * @param Number $storeType
     * 门店类型
     * Required: true
     * Example Value: 
     */
    private $storeType;

    /**
     * @param Number $storeType
     * 门店类型
     * Example Value: 
     */
    public function setStoreType($storeType)
    {
        $this->storeType             = $storeType;
        $this->apiParas["storeType"]  = $storeType;
    }

    public function getStoreType()
    {
        return $this->storeType;
    }

    /**
     * @param Number $storeBusinessModel
     * 业务模式
     * Required: false
     * Example Value: 
     */
    private $storeBusinessModel;

    /**
     * @param Number $storeBusinessModel
     * 业务模式
     * Example Value: 
     */
    public function setStoreBusinessModel($storeBusinessModel)
    {
        $this->storeBusinessModel             = $storeBusinessModel;
        $this->apiParas["storeBusinessModel"]  = $storeBusinessModel;
    }

    public function getStoreBusinessModel()
    {
        return $this->storeBusinessModel;
    }

    /**
     * @param Number $area
     * 面积
     * Required: false
     * Example Value: 
     */
    private $area;

    /**
     * @param Number $area
     * 面积
     * Example Value: 
     */
    public function setArea($area)
    {
        $this->area             = $area;
        $this->apiParas["area"]  = $area;
    }

    public function getArea()
    {
        return $this->area;
    }

    /**
     * @param Number $openFlag
     * 是否开放
     * Required: false
     * Example Value: 
     */
    private $openFlag;

    /**
     * @param Number $openFlag
     * 是否开放
     * Example Value: 
     */
    public function setOpenFlag($openFlag)
    {
        $this->openFlag             = $openFlag;
        $this->apiParas["openFlag"]  = $openFlag;
    }

    public function getOpenFlag()
    {
        return $this->openFlag;
    }

    /**
     * @param Number $crowdsourcingFlag
     * 是否支持众包
     * Required: false
     * Example Value: 
     */
    private $crowdsourcingFlag;

    /**
     * @param Number $crowdsourcingFlag
     * 是否支持众包
     * Example Value: 
     */
    public function setCrowdsourcingFlag($crowdsourcingFlag)
    {
        $this->crowdsourcingFlag             = $crowdsourcingFlag;
        $this->apiParas["crowdsourcingFlag"]  = $crowdsourcingFlag;
    }

    public function getCrowdsourcingFlag()
    {
        return $this->crowdsourcingFlag;
    }

    /**
     * @param Number $selfPickFlag
     * 是否支持自提
     * Required: false
     * Example Value: 
     */
    private $selfPickFlag;

    /**
     * @param Number $selfPickFlag
     * 是否支持自提
     * Example Value: 
     */
    public function setSelfPickFlag($selfPickFlag)
    {
        $this->selfPickFlag             = $selfPickFlag;
        $this->apiParas["selfPickFlag"]  = $selfPickFlag;
    }

    public function getSelfPickFlag()
    {
        return $this->selfPickFlag;
    }

    /**
     * @param Number $deliverFlag
     * 是否有交付能力
     * Required: false
     * Example Value: 
     */
    private $deliverFlag;

    /**
     * @param Number $deliverFlag
     * 是否有交付能力
     * Example Value: 
     */
    public function setDeliverFlag($deliverFlag)
    {
        $this->deliverFlag             = $deliverFlag;
        $this->apiParas["deliverFlag"]  = $deliverFlag;
    }

    public function getDeliverFlag()
    {
        return $this->deliverFlag;
    }

    /**
     * @param Number $sellerControlStock
     * 是否商家管控库存
     * Required: false
     * Example Value: 
     */
    private $sellerControlStock;

    /**
     * @param Number $sellerControlStock
     * 是否商家管控库存
     * Example Value: 
     */
    public function setSellerControlStock($sellerControlStock)
    {
        $this->sellerControlStock             = $sellerControlStock;
        $this->apiParas["sellerControlStock"]  = $sellerControlStock;
    }

    public function getSellerControlStock()
    {
        return $this->sellerControlStock;
    }

    /**
     * @param String $storeSystem
     * 门店系统
     * Required: true
     * Example Value: 
     */
    private $storeSystem;

    /**
     * @param String $storeSystem
     * 门店系统
     * Example Value: 
     */
    public function setStoreSystem($storeSystem)
    {
        $this->storeSystem             = $storeSystem;
        $this->apiParas["storeSystem"]  = $storeSystem;
    }

    public function getStoreSystem()
    {
        return $this->storeSystem;
    }

    /**
     * @param String $contacts
     * 联系人
     * Required: true
     * Example Value: 
     */
    private $contacts;

    /**
     * @param String $contacts
     * 联系人
     * Example Value: 
     */
    public function setContacts($contacts)
    {
        $this->contacts             = $contacts;
        $this->apiParas["contacts"]  = $contacts;
    }

    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * @param String $phone
     * 联系电话
     * Required: true
     * Example Value: 
     */
    private $phone;

    /**
     * @param String $phone
     * 联系电话
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

    /**
     * @param String $province
     * 省
     * Required: true
     * Example Value: 
     */
    private $province;

    /**
     * @param String $province
     * 省
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
     * @param String $city
     * 市
     * Required: true
     * Example Value: 
     */
    private $city;

    /**
     * @param String $city
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
     * @param String $county
     * 县
     * Required: true
     * Example Value: 
     */
    private $county;

    /**
     * @param String $county
     * 县
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
     * @param String $town
     * 镇（区）
     * Required: false
     * Example Value: 
     */
    private $town;

    /**
     * @param String $town
     * 镇（区）
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
     * @param String $address
     * 详细地址
     * Required: true
     * Example Value: 
     */
    private $address;

    /**
     * @param String $address
     * 详细地址
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
     * @param String $distributionScope
     * 优先配送范围
     * Required: true
     * Example Value: 
     */
    private $distributionScope;

    /**
     * @param String $distributionScope
     * 优先配送范围
     * Example Value: 
     */
    public function setDistributionScope($distributionScope)
    {
        $this->distributionScope             = $distributionScope;
        $this->apiParas["distributionScope"]  = $distributionScope;
    }

    public function getDistributionScope()
    {
        return $this->distributionScope;
    }

    /**
     * @param String $geographicCoordinate
     * 坐标
     * Required: true
     * Example Value: 
     */
    private $geographicCoordinate;

    /**
     * @param String $geographicCoordinate
     * 坐标
     * Example Value: 
     */
    public function setGeographicCoordinate($geographicCoordinate)
    {
        $this->geographicCoordinate             = $geographicCoordinate;
        $this->apiParas["geographicCoordinate"]  = $geographicCoordinate;
    }

    public function getGeographicCoordinate()
    {
        return $this->geographicCoordinate;
    }

    /**
     * @param String $remark
     * 备注
     * Required: false
     * Example Value: 
     */
    private $remark;

    /**
     * @param String $remark
     * 备注
     * Example Value: 
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

}