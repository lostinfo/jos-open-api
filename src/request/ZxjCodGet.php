<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 中小件COD
 * 京东地址库API-提供获取省|市|区县|乡镇级列表、返回IP地址对应的物理地址信息等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=68&apiId=1015&apiName=jingdong.zxj.cod.get
 * Class ZxjCodGet
 * @package Jd\request
 */
class ZxjCodGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.zxj.cod.get";
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
     * @param int $provinceId
     * 省id
     * Required: true
     * Example Value: 1
     */
    private $provinceId;

    /**
     * @param int $provinceId
     * 省id
     * Example Value: 1
     */
    public function setProvinceId($provinceId)
    {
        $this->provinceId             = $provinceId;
        $this->apiParas["province_id"]  = $provinceId;
    }

    public function getProvinceId()
    {
        return $this->provinceId;
    }

    /**
     * @param int $cityId
     * 市id
     * Required: true
     * Example Value: 72
     */
    private $cityId;

    /**
     * @param int $cityId
     * 市id
     * Example Value: 72
     */
    public function setCityId($cityId)
    {
        $this->cityId             = $cityId;
        $this->apiParas["city_id"]  = $cityId;
    }

    public function getCityId()
    {
        return $this->cityId;
    }

    /**
     * @param int $countyId
     * 区县id
     * Required: true
     * Example Value: 2799
     */
    private $countyId;

    /**
     * @param int $countyId
     * 区县id
     * Example Value: 2799
     */
    public function setCountyId($countyId)
    {
        $this->countyId             = $countyId;
        $this->apiParas["county_id"]  = $countyId;
    }

    public function getCountyId()
    {
        return $this->countyId;
    }

    /**
     * @param int $townId
     * 乡镇id
     * Required: true
     * Example Value: 0
     */
    private $townId;

    /**
     * @param int $townId
     * 乡镇id
     * Example Value: 0
     */
    public function setTownId($townId)
    {
        $this->townId             = $townId;
        $this->apiParas["town_id"]  = $townId;
    }

    public function getTownId()
    {
        return $this->townId;
    }

}