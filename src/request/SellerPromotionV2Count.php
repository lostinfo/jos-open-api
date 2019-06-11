<?php

namespace JD\request;

/**
 * 查询促销个数
 * 促销API-提供商品的促销信息更新及查询API 
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=54&apiId=1845&apiName=jingdong.seller.promotion.v2.count
 * Class SellerPromotionV2Count
 * @package Jd\request
 */
class SellerPromotionV2Count
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.seller.promotion.v2.count";
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
     * @param String $ip
     * 调用方IP
     * Required: true
     * Example Value: 127.0.0.1
     */
    private $ip;

    /**
     * @param String $ip
     * 调用方IP
     * Example Value: 127.0.0.1
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
     * @param String $port
     * 调用方端口
     * Required: true
     * Example Value: 80
     */
    private $port;

    /**
     * @param String $port
     * 调用方端口
     * Example Value: 80
     */
    public function setPort($port)
    {
        $this->port             = $port;
        $this->apiParas["port"]  = $port;
    }

    public function getPort()
    {
        return $this->port;
    }

    /**
     * @param Number $promoId
     * 促销ID
     * Required: false
     * Example Value: 654321
     */
    private $promoId;

    /**
     * @param Number $promoId
     * 促销ID
     * Example Value: 654321
     */
    public function setPromoId($promoId)
    {
        $this->promoId             = $promoId;
        $this->apiParas["promo_id"]  = $promoId;
    }

    public function getPromoId()
    {
        return $this->promoId;
    }

    /**
     * @param String $name
     * 促销名称
     * Required: false
     * Example Value: 单品促销
     */
    private $name;

    /**
     * @param String $name
     * 促销名称
     * Example Value: 单品促销
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
     * @param Number $type
     * 促销类型。1:单品促销,4:赠品促销,6:套装促销,10:总价促销
     * Required: true
     * Example Value: 1
     */
    private $type;

    /**
     * @param Number $type
     * 促销类型。1:单品促销,4:赠品促销,6:套装促销,10:总价促销
     * Example Value: 1
     */
    public function setType($type)
    {
        $this->type             = $type;
        $this->apiParas["type"]  = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    /**
     * @param Number $favorMode
     * 促销子类型。0:满赠,1:满减,2:每满减, 3:百分比满减, 4: 阶梯满减,5:满赠加价购,6:满M件减N件,7:阶梯买M件减N件,13:M元任选N件,15:M件N折,16:满减送（元）
     * Required: false
     * Example Value: null
     */
    private $favorMode;

    /**
     * @param Number $favorMode
     * 促销子类型。0:满赠,1:满减,2:每满减, 3:百分比满减, 4: 阶梯满减,5:满赠加价购,6:满M件减N件,7:阶梯买M件减N件,13:M元任选N件,15:M件N折,16:满减送（元）
     * Example Value: null
     */
    public function setFavorMode($favorMode)
    {
        $this->favorMode             = $favorMode;
        $this->apiParas["favor_mode"]  = $favorMode;
    }

    public function getFavorMode()
    {
        return $this->favorMode;
    }

    /**
     * @param String $beginTime
     * 开始时间。格式：yyyy-MM-dd HH:mm:ss
     * Required: false
     * Example Value: 2018-10-12 00:00:00
     */
    private $beginTime;

    /**
     * @param String $beginTime
     * 开始时间。格式：yyyy-MM-dd HH:mm:ss
     * Example Value: 2018-10-12 00:00:00
     */
    public function setBeginTime($beginTime)
    {
        $this->beginTime             = $beginTime;
        $this->apiParas["begin_time"]  = $beginTime;
    }

    public function getBeginTime()
    {
        return $this->beginTime;
    }

    /**
     * @param String $endTime
     * 结束时间。格式：yyyy-MM-dd HH:mm:ss
     * Required: false
     * Example Value: 2018-10-13 00:00:00
     */
    private $endTime;

    /**
     * @param String $endTime
     * 结束时间。格式：yyyy-MM-dd HH:mm:ss
     * Example Value: 2018-10-13 00:00:00
     */
    public function setEndTime($endTime)
    {
        $this->endTime             = $endTime;
        $this->apiParas["end_time"]  = $endTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param Number $promoStatus
     * 促销状态。1:驳回,2:未审核,3:人工审,4:已审核,5:已生效,6:已暂停,7:强制暂停
     * Required: false
     * Example Value: 5
     */
    private $promoStatus;

    /**
     * @param Number $promoStatus
     * 促销状态。1:驳回,2:未审核,3:人工审,4:已审核,5:已生效,6:已暂停,7:强制暂停
     * Example Value: 5
     */
    public function setPromoStatus($promoStatus)
    {
        $this->promoStatus             = $promoStatus;
        $this->apiParas["promo_status"]  = $promoStatus;
    }

    public function getPromoStatus()
    {
        return $this->promoStatus;
    }

    /**
     * @param Number $wareId
     * 商品ID
     * Required: false
     * Example Value: 12
     */
    private $wareId;

    /**
     * @param Number $wareId
     * 商品ID
     * Example Value: 12
     */
    public function setWareId($wareId)
    {
        $this->wareId             = $wareId;
        $this->apiParas["ware_id"]  = $wareId;
    }

    public function getWareId()
    {
        return $this->wareId;
    }

    /**
     * @param Number $skuId
     * sku ID
     * Required: false
     * Example Value: 123123
     */
    private $skuId;

    /**
     * @param Number $skuId
     * sku ID
     * Example Value: 123123
     */
    public function setSkuId($skuId)
    {
        $this->skuId             = $skuId;
        $this->apiParas["sku_id"]  = $skuId;
    }

    public function getSkuId()
    {
        return $this->skuId;
    }

    /**
     * @param Number $srcType
     * 来源ID
     * Required: false
     * Example Value: 3
     */
    private $srcType;

    /**
     * @param Number $srcType
     * 来源ID
     * Example Value: 3
     */
    public function setSrcType($srcType)
    {
        $this->srcType             = $srcType;
        $this->apiParas["src_type"]  = $srcType;
    }

    public function getSrcType()
    {
        return $this->srcType;
    }

}