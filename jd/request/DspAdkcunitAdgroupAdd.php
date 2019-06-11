<?php

namespace JD\request;

/**
 * 操作.快车.新增商品单元
 * 京准通-快车API-京准通快车相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=151&apiId=1295&apiName=jingdong.dsp.adkcunit.adgroup.add
 * Class DspAdkcunitAdgroupAdd
 * @package Jd\request
 */
class DspAdkcunitAdgroupAdd
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.adkcunit.adgroup.add";
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
     * @param String $name
     * 单元名称
     * Required: true
     * Example Value: 
     */
    private $name;

    /**
     * @param String $name
     * 单元名称
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
     * @param Number $campaignId
     * 计划id
     * Required: true
     * Example Value: 
     */
    private $campaignId;

    /**
     * @param Number $campaignId
     * 计划id
     * Example Value: 
     */
    public function setCampaignId($campaignId)
    {
        $this->campaignId             = $campaignId;
        $this->apiParas["campaignId"]  = $campaignId;
    }

    public function getCampaignId()
    {
        return $this->campaignId;
    }

    /**
     * @param String $newAreaId
     * 地域id多个以，分隔； 不限：0;
     * Required: true
     * Example Value: 
     */
    private $newAreaId;

    /**
     * @param String $newAreaId
     * 地域id多个以，分隔； 不限：0;
     * Example Value: 
     */
    public function setNewAreaId($newAreaId)
    {
        $this->newAreaId             = $newAreaId;
        $this->apiParas["newAreaId"]  = $newAreaId;
    }

    public function getNewAreaId()
    {
        return $this->newAreaId;
    }

    /**
     * @param String $feeStr
     * 推荐出价，0.1-9999，最多一位小数
     * Required: true
     * Example Value: 
     */
    private $feeStr;

    /**
     * @param String $feeStr
     * 推荐出价，0.1-9999，最多一位小数
     * Example Value: 
     */
    public function setFeeStr($feeStr)
    {
        $this->feeStr             = $feeStr;
        $this->apiParas["feeStr"]  = $feeStr;
    }

    public function getFeeStr()
    {
        return $this->feeStr;
    }

    /**
     * @param String $inSearchFeeStr
     * 搜索出价，0.1-9999，最多一位小数
     * Required: true
     * Example Value: 
     */
    private $inSearchFeeStr;

    /**
     * @param String $inSearchFeeStr
     * 搜索出价，0.1-9999，最多一位小数
     * Example Value: 
     */
    public function setInSearchFeeStr($inSearchFeeStr)
    {
        $this->inSearchFeeStr             = $inSearchFeeStr;
        $this->apiParas["inSearchFeeStr"]  = $inSearchFeeStr;
    }

    public function getInSearchFeeStr()
    {
        return $this->inSearchFeeStr;
    }

    /**
     * @param Number $mobilePriceCoef
     * 无线出价系数，0.1-99以内的正数，最多一位小数
     * Required: true
     * Example Value: 
     */
    private $mobilePriceCoef;

    /**
     * @param Number $mobilePriceCoef
     * 无线出价系数，0.1-99以内的正数，最多一位小数
     * Example Value: 
     */
    public function setMobilePriceCoef($mobilePriceCoef)
    {
        $this->mobilePriceCoef             = $mobilePriceCoef;
        $this->apiParas["mobilePriceCoef"]  = $mobilePriceCoef;
    }

    public function getMobilePriceCoef()
    {
        return $this->mobilePriceCoef;
    }

}