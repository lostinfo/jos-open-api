<?php

namespace JD\request;

/**
 * 操作.快车.修改指定单元出价
 * 京准通-快车API-京准通快车相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=151&apiId=1294&apiName=jingdong.dsp.adkcunit.goodsprice.update
 * Class DspAdkcunitGoodspriceUpdate
 * @package Jd\request
 */
class DspAdkcunitGoodspriceUpdate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.adkcunit.goodsprice.update";
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
     * @param Number $id
     * 单元id
     * Required: true
     * Example Value: 
     */
    private $id;

    /**
     * @param Number $id
     * 单元id
     * Example Value: 
     */
    public function setId($id)
    {
        $this->id             = $id;
        $this->apiParas["id"]  = $id;
    }

    public function getId()
    {
        return $this->id;
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