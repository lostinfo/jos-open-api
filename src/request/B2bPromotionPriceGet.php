<?php

namespca Lostinfo\JosOpenApi;

/**
 * 计算价格接口
 * B2B开放API-B2B开放
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=391&apiId=3127&apiName=jingdong.b2b.promotion.price.get
 * Class B2bPromotionPriceGet
 * @package Jd\request
 */
class B2bPromotionPriceGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.b2b.promotion.price.get";
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
     * @param string $sku
     * sku编号
     * Required: true
     * Example Value: 1234567,0000000
     */
    private $sku;

    /**
     * @param string $sku
     * sku编号
     * Example Value: 1234567,0000000
     */
    public function setSku($sku)
    {
        $this->sku             = $sku;
        $this->apiParas["sku"]  = $sku;
    }

    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param int $platform
     * 平台ID：10.分销
     * Required: true
     * Example Value: 0
     */
    private $platform;

    /**
     * @param int $platform
     * 平台ID：10.分销
     * Example Value: 0
     */
    public function setPlatform($platform)
    {
        $this->platform             = $platform;
        $this->apiParas["platform"]  = $platform;
    }

    public function getPlatform()
    {
        return $this->platform;
    }

    /**
     * @param int $channel
     * 渠道ID：112,托盘渠道
     * Required: true
     * Example Value: 0
     */
    private $channel;

    /**
     * @param int $channel
     * 渠道ID：112,托盘渠道
     * Example Value: 0
     */
    public function setChannel($channel)
    {
        $this->channel             = $channel;
        $this->apiParas["channel"]  = $channel;
    }

    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * @param string $ip
     * 客户实际ip,非调用方应用ip
     * Required: true
     * Example Value: 0.0.0.0
     */
    private $ip;

    /**
     * @param string $ip
     * 客户实际ip,非调用方应用ip
     * Example Value: 0.0.0.0
     */
    public function setIp($ip)
    {
        $this->ip             = $ip;
        $this->apiParas["ip"]  = $ip;
    }

    public function getIp()
    {
        return $this->ip;
    }

    /**
     * @param string $num
     * 购买数量
     * Required: true
     * Example Value: 1,2
     */
    private $num;

    /**
     * @param string $num
     * 购买数量
     * Example Value: 1,2
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
     * 一级地址
     * Required: true
     * Example Value: 0
     */
    private $provinceId;

    /**
     * @param int $provinceId
     * 一级地址
     * Example Value: 0
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
     * 二级地址
     * Required: true
     * Example Value: 0
     */
    private $cityId;

    /**
     * @param int $cityId
     * 二级地址
     * Example Value: 0
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
     * 三级地址
     * Required: true
     * Example Value: 0
     */
    private $countyId;

    /**
     * @param int $countyId
     * 三级地址
     * Example Value: 0
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
     * 四级地址
     * Required: false
     * Example Value: 0
     */
    private $townId;

    /**
     * @param int $townId
     * 四级地址
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

    /**
     * @param string $pLine
     * 产品线Id（商品池Id）
     * Required: false
     * Example Value: 
     */
    private $pLine;

    /**
     * @param string $pLine
     * 产品线Id（商品池Id）
     * Example Value: 
     */
    public function setPLine($pLine)
    {
        $this->pLine             = $pLine;
        $this->apiParas["pLine"]  = $pLine;
    }

    public function getPLine()
    {
        return $this->pLine;
    }

    /**
     * @param string $venderId
     * 商家Id（如是托盘业务，通过商品池返回的信息“editor ”进行入参）
     * Required: false
     * Example Value: 
     */
    private $venderId;

    /**
     * @param string $venderId
     * 商家Id（如是托盘业务，通过商品池返回的信息“editor ”进行入参）
     * Example Value: 
     */
    public function setVenderId($venderId)
    {
        $this->venderId             = $venderId;
        $this->apiParas["venderId"]  = $venderId;
    }

    public function getVenderId()
    {
        return $this->venderId;
    }

    /**
     * @param string $PRICE_SKU_EXT_MAP
     * 价格拓展信息
     * Required: false
     * Example Value: 
     */
    private $PRICE_SKU_EXT_MAP;

    /**
     * @param string $PRICE_SKU_EXT_MAP
     * 价格拓展信息
     * Example Value: 
     */
    public function setPRICE_SKU_EXT_MAP($PRICE_SKU_EXT_MAP)
    {
        $this->PRICE_SKU_EXT_MAP             = $PRICE_SKU_EXT_MAP;
        $this->apiParas["PRICE_SKU_EXT_MAP"]  = $PRICE_SKU_EXT_MAP;
    }

    public function getPRICE_SKU_EXT_MAP()
    {
        return $this->PRICE_SKU_EXT_MAP;
    }

}