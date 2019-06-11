<?php

namespca Lostinfo\JosOpenApi;

/**
 * 查询促销SKU列表
 * 促销API-提供商品的促销信息更新及查询API 
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=54&apiId=2302&apiName=jingdong.seller.promotion.v2.sku.list
 * Class SellerPromotionV2SkuList
 * @package Jd\request
 */
class SellerPromotionV2SkuList
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.seller.promotion.v2.sku.list";
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
     * Example Value: 
     */
    private $ip;

    /**
     * @param string $ip
     * 调用方IP
     * Example Value: 
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
     * Example Value: 
     */
    private $port;

    /**
     * @param string $port
     * 调用方端口
     * Example Value: 
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
     * Required: true
     * Example Value: 
     */
    private $promoId;

    /**
     * @param int $promoId
     * 促销ID
     * Example Value: 
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
     * @param int $wareId
     * 商品ID
     * Required: false
     * Example Value: 
     */
    private $wareId;

    /**
     * @param int $wareId
     * 商品ID
     * Example Value: 
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
     * Example Value: 
     */
    private $skuId;

    /**
     * @param int $skuId
     * sku ID
     * Example Value: 
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
     * @param int $bindType
     * sku绑定类型（1、主商品，2、赠品，4、附件）
     * Required: false
     * Example Value: 
     */
    private $bindType;

    /**
     * @param int $bindType
     * sku绑定类型（1、主商品，2、赠品，4、附件）
     * Example Value: 
     */
    public function setBindType($bindType)
    {
        $this->bindType             = $bindType;
        $this->apiParas["bind_type"]  = $bindType;
    }

    public function getBindType()
    {
        return $this->bindType;
    }

    /**
     * @param int $promoType
     * 促销类型
     * Required: true
     * Example Value: 
     */
    private $promoType;

    /**
     * @param int $promoType
     * 促销类型
     * Example Value: 
     */
    public function setPromoType($promoType)
    {
        $this->promoType             = $promoType;
        $this->apiParas["promo_type"]  = $promoType;
    }

    public function getPromoType()
    {
        return $this->promoType;
    }

    /**
     * @param int $page
     * 页码（必须为正整数）
     * Required: true
     * Example Value: 
     */
    private $page;

    /**
     * @param int $page
     * 页码（必须为正整数）
     * Example Value: 
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
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 每页记录个数（每页最少1个，最多20个）
     * Example Value: 
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

}