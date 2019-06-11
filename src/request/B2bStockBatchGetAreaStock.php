<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 库存状态查询
 * B2B开放API-B2B开放
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=391&apiId=3204&apiName=jingdong.b2b.stock.batchGetAreaStock
 * Class B2bStockBatchGetAreaStock
 * @package Jd\request
 */
class B2bStockBatchGetAreaStock
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.b2b.stock.batchGetAreaStock";
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
     * @param string $appName
     * 应用名称
     * Required: true
     * Example Value: cetus_tuopan
     */
    private $appName;

    /**
     * @param string $appName
     * 应用名称
     * Example Value: cetus_tuopan
     */
    public function setAppName($appName)
    {
        $this->appName             = $appName;
        $this->apiParas["appName"]  = $appName;
    }

    public function getAppName()
    {
        return $this->appName;
    }

    /**
     * @param int[] $skuId
     * skuId
     * Required: true
     * Example Value: 100002562414,100002562414
     */
    private $skuId;

    /**
     * @param int[] $skuId
     * skuId
     * Example Value: 100002562414,100002562414
     */
    public function setSkuId($skuId)
    {
        $this->skuId             = $skuId;
        $this->apiParas["skuId"]  = $skuId;
    }

    public function getSkuId()
    {
        return $this->skuId;
    }

    /**
     * @param int[] $num
     * 数量
     * Required: true
     * Example Value: 11,11
     */
    private $num;

    /**
     * @param int[] $num
     * 数量
     * Example Value: 11,11
     */
    public function setNum($num)
    {
        $this->num             = $num;
        $this->apiParas["num"]  = $num;
    }

    public function getNum()
    {
        return $this->num;
    }

    /**
     * @param int $provinceId
     * 需要传入京东四级地址的1级地址ID
     * Required: true
     * Example Value: 19
     */
    private $provinceId;

    /**
     * @param int $provinceId
     * 需要传入京东四级地址的1级地址ID
     * Example Value: 19
     */
    public function setProvinceId($provinceId)
    {
        $this->provinceId             = $provinceId;
        $this->apiParas["provinceId"]  = $provinceId;
    }

    public function getProvinceId()
    {
        return $this->provinceId;
    }

    /**
     * @param int $cityId
     * 需要传入京东四级地址的2级地址ID
     * Required: true
     * Example Value: 1601
     */
    private $cityId;

    /**
     * @param int $cityId
     * 需要传入京东四级地址的2级地址ID
     * Example Value: 1601
     */
    public function setCityId($cityId)
    {
        $this->cityId             = $cityId;
        $this->apiParas["cityId"]  = $cityId;
    }

    public function getCityId()
    {
        return $this->cityId;
    }

    /**
     * @param int $countyId
     * 需要传入京东四级地址的3级地址ID
     * Required: true
     * Example Value: 50284
     */
    private $countyId;

    /**
     * @param int $countyId
     * 需要传入京东四级地址的3级地址ID
     * Example Value: 50284
     */
    public function setCountyId($countyId)
    {
        $this->countyId             = $countyId;
        $this->apiParas["countyId"]  = $countyId;
    }

    public function getCountyId()
    {
        return $this->countyId;
    }

    /**
     * @param int $townId
     * 需要传入京东四级地址的4级地址ID
     * Required: true
     * Example Value: 50286
     */
    private $townId;

    /**
     * @param int $townId
     * 需要传入京东四级地址的4级地址ID
     * Example Value: 50286
     */
    public function setTownId($townId)
    {
        $this->townId             = $townId;
        $this->apiParas["townId"]  = $townId;
    }

    public function getTownId()
    {
        return $this->townId;
    }

}