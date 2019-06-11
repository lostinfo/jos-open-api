<?php

namespace JD\request;

/**
 * 回传干线提货地址
 * 大家电服务API-供应商系统，大家电售后维修工单服务处理
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=136&apiId=1959&apiName=jingdong.las.im.hfs.arrival.push
 * Class LasImHfsArrivalPush
 * @package Jd\request
 */
class LasImHfsArrivalPush
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.las.im.hfs.arrival.push";
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
     * @param String $orderNo
     * 订单号
     * Required: true
     * Example Value: 
     */
    private $orderNo;

    /**
     * @param String $orderNo
     * 订单号
     * Example Value: 
     */
    public function setOrderNo($orderNo)
    {
        $this->orderNo             = $orderNo;
        $this->apiParas["ord_no"]  = $orderNo;
    }

    public function getOrderNo()
    {
        return $this->orderNo;
    }

    /**
     * @param String $operatorName
     * 操作人
     * Required: true
     * Example Value: 
     */
    private $operatorName;

    /**
     * @param String $operatorName
     * 操作人
     * Example Value: 
     */
    public function setOperatorName($operatorName)
    {
        $this->operatorName             = $operatorName;
        $this->apiParas["ope_n"]  = $operatorName;
    }

    public function getOperatorName()
    {
        return $this->operatorName;
    }

    /**
     * @param String $providerId
     * 服务商编码
     * Required: true
     * Example Value: 
     */
    private $providerId;

    /**
     * @param String $providerId
     * 服务商编码
     * Example Value: 
     */
    public function setProviderId($providerId)
    {
        $this->providerId             = $providerId;
        $this->apiParas["ser_pro_no"]  = $providerId;
    }

    public function getProviderId()
    {
        return $this->providerId;
    }

    /**
     * @param Date $operatorTime
     * 操作时间
     * Required: true
     * Example Value: 
     */
    private $operatorTime;

    /**
     * @param Date $operatorTime
     * 操作时间
     * Example Value: 
     */
    public function setOperatorTime($operatorTime)
    {
        $this->operatorTime             = $operatorTime;
        $this->apiParas["ope_t"]  = $operatorTime;
    }

    public function getOperatorTime()
    {
        return $this->operatorTime;
    }

    /**
     * @param String $provinceId
     * 省编码（京标）
     * Required: true
     * Example Value: 
     */
    private $provinceId;

    /**
     * @param String $provinceId
     * 省编码（京标）
     * Example Value: 
     */
    public function setProvinceId($provinceId)
    {
        $this->provinceId             = $provinceId;
        $this->apiParas["pro_no"]  = $provinceId;
    }

    public function getProvinceId()
    {
        return $this->provinceId;
    }

    /**
     * @param String $province
     * 省名称
     * Required: true
     * Example Value: 
     */
    private $province;

    /**
     * @param String $province
     * 省名称
     * Example Value: 
     */
    public function setProvince($province)
    {
        $this->province             = $province;
        $this->apiParas["pro_n"]  = $province;
    }

    public function getProvince()
    {
        return $this->province;
    }

    /**
     * @param String $cityId
     * 市编码（京标）
     * Required: true
     * Example Value: 
     */
    private $cityId;

    /**
     * @param String $cityId
     * 市编码（京标）
     * Example Value: 
     */
    public function setCityId($cityId)
    {
        $this->cityId             = $cityId;
        $this->apiParas["cit_no"]  = $cityId;
    }

    public function getCityId()
    {
        return $this->cityId;
    }

    /**
     * @param String $city
     * 市名称
     * Required: true
     * Example Value: 
     */
    private $city;

    /**
     * @param String $city
     * 市名称
     * Example Value: 
     */
    public function setCity($city)
    {
        $this->city             = $city;
        $this->apiParas["cit_n"]  = $city;
    }

    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param String $countyId
     * 区/县编码（京标）
     * Required: true
     * Example Value: 
     */
    private $countyId;

    /**
     * @param String $countyId
     * 区/县编码（京标）
     * Example Value: 
     */
    public function setCountyId($countyId)
    {
        $this->countyId             = $countyId;
        $this->apiParas["cou_no"]  = $countyId;
    }

    public function getCountyId()
    {
        return $this->countyId;
    }

    /**
     * @param String $county
     * 区/县名称
     * Required: true
     * Example Value: 
     */
    private $county;

    /**
     * @param String $county
     * 区/县名称
     * Example Value: 
     */
    public function setCounty($county)
    {
        $this->county             = $county;
        $this->apiParas["cou_n"]  = $county;
    }

    public function getCounty()
    {
        return $this->county;
    }

    /**
     * @param String $address
     * 提货点详细地址
     * Required: true
     * Example Value: 
     */
    private $address;

    /**
     * @param String $address
     * 提货点详细地址
     * Example Value: 
     */
    public function setAddress($address)
    {
        $this->address             = $address;
        $this->apiParas["add"]  = $address;
    }

    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param String $pointName
     * 提货物流点名称
     * Required: true
     * Example Value: 
     */
    private $pointName;

    /**
     * @param String $pointName
     * 提货物流点名称
     * Example Value: 
     */
    public function setPointName($pointName)
    {
        $this->pointName             = $pointName;
        $this->apiParas["poi_n"]  = $pointName;
    }

    public function getPointName()
    {
        return $this->pointName;
    }

    /**
     * @param String $contactPhone
     * 提货联系人电话
     * Required: true
     * Example Value: 
     */
    private $contactPhone;

    /**
     * @param String $contactPhone
     * 提货联系人电话
     * Example Value: 
     */
    public function setContactPhone($contactPhone)
    {
        $this->contactPhone             = $contactPhone;
        $this->apiParas["con_tel"]  = $contactPhone;
    }

    public function getContactPhone()
    {
        return $this->contactPhone;
    }

    /**
     * @param String $contactName
     * 提货联系人
     * Required: true
     * Example Value: 
     */
    private $contactName;

    /**
     * @param String $contactName
     * 提货联系人
     * Example Value: 
     */
    public function setContactName($contactName)
    {
        $this->contactName             = $contactName;
        $this->apiParas["con_n"]  = $contactName;
    }

    public function getContactName()
    {
        return $this->contactName;
    }

    /**
     * @param String $collectCode
     * 提货码（没有提货码相关业务可不填）
     * Required: false
     * Example Value: 
     */
    private $collectCode;

    /**
     * @param String $collectCode
     * 提货码（没有提货码相关业务可不填）
     * Example Value: 
     */
    public function setCollectCode($collectCode)
    {
        $this->collectCode             = $collectCode;
        $this->apiParas["col_cod"]  = $collectCode;
    }

    public function getCollectCode()
    {
        return $this->collectCode;
    }

    /**
     * @param String $serviceNos
     * 订单明细中服务单（serviceNo）集合（字符串用,分隔）
     * Required: false
     * Example Value: 2018年2月1日后生产的单据不需要回传该字段
     */
    private $serviceNos;

    /**
     * @param String $serviceNos
     * 订单明细中服务单（serviceNo）集合（字符串用,分隔）
     * Example Value: 2018年2月1日后生产的单据不需要回传该字段
     */
    public function setServiceNos($serviceNos)
    {
        $this->serviceNos             = $serviceNos;
        $this->apiParas["ser_nos"]  = $serviceNos;
    }

    public function getServiceNos()
    {
        return $this->serviceNos;
    }

}