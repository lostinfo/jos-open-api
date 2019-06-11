<?php

namespace JD\request;

/**
 * 删除促销
 * 促销API-提供商品的促销信息更新及查询API 
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=54&apiId=1840&apiName=jingdong.seller.promotion.v2.remove
 * Class SellerPromotionV2Remove
 * @package Jd\request
 */
class SellerPromotionV2Remove
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.seller.promotion.v2.remove";
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
     * @param String $requestId
     * 防重码
     * Required: false
     * Example Value: xxxxxx
     */
    private $requestId;

    /**
     * @param String $requestId
     * 防重码
     * Example Value: xxxxxx
     */
    public function setRequestId($requestId)
    {
        $this->requestId             = $requestId;
        $this->apiParas["request_id"]  = $requestId;
    }

    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * @param Number $promoId
     * 促销编号
     * Required: true
     * Example Value: 654321
     */
    private $promoId;

    /**
     * @param Number $promoId
     * 促销编号
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
     * @param Number $promoType
     * 促销类型。1:单品促销,4:赠品促销,6:套装促销,10:总价促销
     * Required: true
     * Example Value: 1
     */
    private $promoType;

    /**
     * @param Number $promoType
     * 促销类型。1:单品促销,4:赠品促销,6:套装促销,10:总价促销
     * Example Value: 1
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