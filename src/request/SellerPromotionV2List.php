<?php

namespca Lostinfo\JosOpenApi;

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
     * @param string $ip
     * 调用方IP
     * Required: true
     * Example Value: 127.0.0.1
     */
    private $ip;

    /**
     * @param string $ip
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
     * @param string $port
     * 调用方端口
     * Required: true
     * Example Value: 80
     */
    private $port;

    /**
     * @param string $port
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
     * @param int $promoId
     * 促销ID
     * Required: false
     * Example Value: 654321
     */
    private $promoId;

    /**
     * @param int $promoId
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
     * @param string $name
     * 促销名称
     * Required: false
     * Example Value: null
     */
    private $name;

    /**
     * @param string $name
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
     * @param int $type
     * 促销类型
     * Required: true
     * Example Value: null
     */
    private $type;

    /**
     * @param int $type
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
     * @param int $favorMode
     * 促销子类型
     * Required: false
     * Example Value: null
     */
    private $favorMode;

    /**
     * @param int $favorMode
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
     * @param string $beginTime
     * 开始时间
     * Required: false
     * Example Value: null
     */
    private $beginTime;

    /**
     * @param string $beginTime
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
     * @param string $endTime
     * 结束时间
     * Required: false
     * Example Value: null
     */
    private $endTime;

    /**
     * @param string $endTime
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
     * @param int $promoStatus
     * 促销状态
     * Required: false
     * Example Value: null
     */
    private $promoStatus;

    /**
     * @param int $promoStatus
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
     * @param int $wareId
     * 商品ID
     * Required: false
     * Example Value: null
     */
    private $wareId;

    /**
     * @param int $wareId
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
     * @param int $skuId
     * sku ID
     * Required: false
     * Example Value: null
     */
    private $skuId;

    /**
     * @param int $skuId
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
     * @param int $page
     * 页码（必须为正整数）
     * Required: true
     * Example Value: 0
     */
    private $page;

    /**
     * @param int $page
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
     * @param int $pageSize
     * 每页记录个数（每页最少1个，最多20个）
     * Required: true
     * Example Value: 10
     */
    private $pageSize;

    /**
     * @param int $pageSize
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
     * @param int $srcType
     * 来源ID
     * Required: false
     * Example Value: null
     */
    private $srcType;

    /**
     * @param int $srcType
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