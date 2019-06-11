<?php

namespca Lostinfo\JosOpenApi;

/**
 * 运费查询接口
 * B2B开放API-B2B开放
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=391&apiId=3118&apiName=jingdong.b2b.freight.get
 * Class B2bFreightGet
 * @package Jd\request
 */
class B2bFreightGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.b2b.freight.get";
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
     * @param int[] $skuId
     * 商品ID
     * Required: true
     * Example Value: 569172
     */
    private $skuId;

    /**
     * @param int[] $skuId
     * 商品ID
     * Example Value: 569172
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
     * @param int[] $skuType
     * 商品类型:AIN_SKU(0,主品)    ZENG_PIN_SKU(1,赠品/附件), YAN_BAO_SKU(2,延保商品), BI_ZENG_PIN_SKU(3,必赠品)
     * Required: true
     * Example Value: 0
     */
    private $skuType;

    /**
     * @param int[] $skuType
     * 商品类型:AIN_SKU(0,主品)    ZENG_PIN_SKU(1,赠品/附件), YAN_BAO_SKU(2,延保商品), BI_ZENG_PIN_SKU(3,必赠品)
     * Example Value: 0
     */
    public function setSkuType($skuType)
    {
        $this->skuType             = $skuType;
        $this->apiParas["skuType"]  = $skuType;
    }

    public function getSkuType()
    {
        return $this->skuType;
    }

    /**
     * @param int[] $num
     * 商品数量
     * Required: true
     * Example Value: 12
     */
    private $num;

    /**
     * @param int[] $num
     * 商品数量
     * Example Value: 12
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
     * @param int[] $price
     * 商品价格
     * Required: true
     * Example Value: 11.0
     */
    private $price;

    /**
     * @param int[] $price
     * 商品价格
     * Example Value: 11.0
     */
    public function setPrice($price)
    {
        $this->price             = $price;
        $this->apiParas["price"]  = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param int $paymentType
     * 支付类型
     * Required: true
     * Example Value: 1
     */
    private $paymentType;

    /**
     * @param int $paymentType
     * 支付类型
     * Example Value: 1
     */
    public function setPaymentType($paymentType)
    {
        $this->paymentType             = $paymentType;
        $this->apiParas["paymentType"]  = $paymentType;
    }

    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * @param string $provinceId
     * 省编码
     * Required: true
     * Example Value: 1
     */
    private $provinceId;

    /**
     * @param string $provinceId
     * 省编码
     * Example Value: 1
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
     * @param string $cityId
     * 市编码
     * Required: true
     * Example Value: 72
     */
    private $cityId;

    /**
     * @param string $cityId
     * 市编码
     * Example Value: 72
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
     * @param string $countyId
     * 县编码
     * Required: false
     * Example Value: 2799
     */
    private $countyId;

    /**
     * @param string $countyId
     * 县编码
     * Example Value: 2799
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
     * @param string $townId
     * 镇编码
     * Required: false
     * Example Value: 0
     */
    private $townId;

    /**
     * @param string $townId
     * 镇编码
     * Example Value: 0
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