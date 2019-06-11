<?php

namespace JD\request;

/**
 * 查询促销列表
 * 促销API-提供商品的促销信息更新及查询API 
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=54&apiId=1843&apiName=jingdong.seller.promotion.v2.list
 * Class SellerPromotionV2List
 * @package Jd\request
 */
class SellerPromotionV2List
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.seller.promotion.v2.list";
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
     * Example Value: null
     */
    private $name;

    /**
     * @param String $name
     * 促销名称
     * Example Value: null
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
     * 促销类型
     * Required: true
     * Example Value: null
     */
    private $type;

    /**
     * @param Number $type
     * 促销类型
     * Example Value: null
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
     * 促销子类型
     * Required: false
     * Example Value: null
     */
    private $favorMode;

    /**
     * @param Number $favorMode
     * 促销子类型
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
     * 开始时间
     * Required: false
     * Example Value: null
     */
    private $beginTime;

    /**
     * @param String $beginTime
     * 开始时间
     * Example Value: null
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
     * 结束时间
     * Required: false
     * Example Value: null
     */
    private $endTime;

    /**
     * @param String $endTime
     * 结束时间
     * Example Value: null
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
     * 促销状态
     * Required: false
     * Example Value: null
     */
    private $promoStatus;

    /**
     * @param Number $promoStatus
     * 促销状态
     * Example Value: null
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
     * Example Value: null
     */
    private $wareId;

    /**
     * @param Number $wareId
     * 商品ID
     * Example Value: null
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
     * Example Value: null
     */
    private $skuId;

    /**
     * @param Number $skuId
     * sku ID
     * Example Value: null
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
     * @param Number $page
     * 页码（必须为正整数）
     * Required: true
     * Example Value: 0
     */
    private $page;

    /**
     * @param Number $page
     * 页码（必须为正整数）
     * Example Value: 0
     */
    public function setPage($page)
    {
        $this->page             = $page;
        $this->apiParas["page"]  = $page;
    }

    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param Number $pageSize
     * 每页记录个数（每页最少1个，最多20个）
     * Required: true
     * Example Value: 10
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 每页记录个数（每页最少1个，最多20个）
     * Example Value: 10
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize             = $pageSize;
        $this->apiParas["pageS_size"]  = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * @param Number $srcType
     * 来源ID
     * Required: false
     * Example Value: null
     */
    private $srcType;

    /**
     * @param Number $srcType
     * 来源ID
     * Example Value: null
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