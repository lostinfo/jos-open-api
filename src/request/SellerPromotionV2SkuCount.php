<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 查询促销SKU个数
 * 促销API-提供商品的促销信息更新及查询API 
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=54&apiId=1842&apiName=jingdong.seller.promotion.v2.sku.count
 * Class SellerPromotionV2SkuCount
 * @package Jd\request
 */
class SellerPromotionV2SkuCount
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.seller.promotion.v2.sku.count";
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
     * Required: true
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
     * @param int $bindType
     * sku绑定类型。1：主商品 2：赠品 4：附件
     * Required: false
     * Example Value: 1
     */
    private $bindType;

    /**
     * @param int $bindType
     * sku绑定类型。1：主商品 2：赠品 4：附件
     * Example Value: 1
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
     * 促销类型。1：单品促销 4：赠品促销 6 套装促销 10：总价促销
     * Required: true
     * Example Value: 4
     */
    private $promoType;

    /**
     * @param int $promoType
     * 促销类型。1：单品促销 4：赠品促销 6 套装促销 10：总价促销
     * Example Value: 4
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

}