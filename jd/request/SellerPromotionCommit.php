<?php

namespace JD\request;

/**
 * null
 * 促销API-提供商品的促销信息更新及查询API 
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=54&apiId=211&apiName=jingdong.seller.promotion.commit
 * Class SellerPromotionCommit
 * @package Jd\request
 */
class SellerPromotionCommit
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.seller.promotion.commit";
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

}